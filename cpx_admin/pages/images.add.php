<div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Add image</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                        <form method="post" action="#" enctype="multipart/form-data" class="container"  style="width: 80%;">
                <div class="col-md-6">
                    <div class="input-group  margin-v">
                    <div class="input-group-btn" >
                        <label for="d" class="btn btn-success">Title</label>
                    </div>
                    <input type="text"  name="title"  id="d"  class="form-control input">
                </div>
                </div>
              
                <div class="col-md-6">
                    <div class="input-group  margin-v">
                    <div class="input-group-btn">
                        <label for="d1" class="btn btn-success">Image</label>
                    </div>
                    <input type="file" id="d1" name="image" class="form-control">
                </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-body">
                            <label for="desc">
                                Image description
                            </label>
                            <textarea class="form-control" rows="5" id="desc" name="alt"></textarea>
                        </div>
                    </div>
                </div>

<!--                <div class="box box-success">-->
<!--                    <div class="box-header">-->
<!--                        <h3 class="box-title">Page Content-->
<!--                            <small>-->
<!--                                <span id="count" class="hidden"></span>-->
<!--                                <script>-->
<!--                                        document.write('<select disabled="disabled" id="languages" onchange="createEditor( this.value );">');-->
<!--                                        for ( var i = 0 ; i < window.CKEDITOR_LANGS.length ; i++ ) {-->
<!--                                            document.write('<option value="' + window.CKEDITOR_LANGS[i].code + '">' +window.CKEDITOR_LANGS[i].name +'</option>' );-->
<!--                                        document.write('</select>');-->
<!--                                    </script>-->
<!--                            </small>-->
<!--                        </h3>-->
<!--                        <!-- tools box -->
<!--                        <div class="pull-right box-tools">-->
<!--                        </div>-->
<!--                        <!-- /. tools -->
<!--                    </div>-->
<!--                    <!-- /.box-header -->
<!--                    <div class="box-body pad">-->
<!---->
<!--                            <textarea style="height:400px;" cols="80" name="content" id="editor1" name="editor1" rows="10"></textarea>-->
<!--                            <script>-->
<!--                            document.getElementById( 'count' ).innerHTML = window.CKEDITOR_LANGS.length;var editor;function createEditor( languageCode ) {-->
<!--                            if ( editor ) editor.destroy();-->
<!--                            editor = CKEDITOR.replace( 'editor1', {language: languageCode, on: { instanceReady: function() { var languages = document.getElementById( 'languages' );-->
<!--                            languages.value = this.langCode; languages.disabled = false; } } }); } createEditor( '' );-->
<!--                            </script>-->
<!---->
<!--                    </div>-->
<!--                </div>-->

                <div class="clearfix"></div>

                <div class="col-md-4 col-md-offset-8 text-right">
                    <button type="submit" name="submit" class="btn btn-bitbucket btn-lg">Submit</button>
                </div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $title = mysqli_real_escape_string($conn, $_POST['title']);
                            //$link = mysqli_real_escape_string($conn, $_POST['link']);
                            $descp = mysqli_real_escape_string($conn, $_POST['alt']);
                            
                            $img = $_FILES['image']['name'];
                            $img_tmp = $_FILES['image']['tmp_name'];
                            $img_type= $_FILES['image']['type'];
                            if($img_type== "image/gif" || $img_type== "image/png" || $img_type== "image/jpeg" || $img_type== "image/JPEG" || $img_type== "image/PNG" || $img_type== "image/GIF" ){

                                $q = "INSERT INTO slider (";
                                    $q .= " title, img, descrp";
                                    $q .= ") VALUES (";
                                    $q .= " '$title', '$img', '$descp'";
                                    $q .= ")";
                                    $r= mysqli_query($conn, $q);
                                   // echo "<script>alert('One Slider Added.')</script>";
                                        move_uploaded_file($img_tmp,"../uploads/slider/$img");
                                        echo "<script>window.open('?p=images.view', '_self')</script>";
                          }
                    }

                ?>
            </form>

        </div>
        <!-- /.box-body -->
    </div>
