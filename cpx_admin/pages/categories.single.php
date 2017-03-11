<div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Add category</h3>
        </div>
        <?php 
            if(isset($_GET['id'])){
                $CatID = mysqli_real_escape_string($conn, $_GET['id']);  
                $Cat = getDataById('category', $CatID);
            }
            if(!empty($Cat['img'])){
        ?>

       
        <!-- /.box-header -->
        <?php } ?>
        
        <div class="box-body">


                       <form method="post" action="" enctype="multipart/form-data" class="container"  style="width: 80%;">
                        <div class="input-group  margin-v " style="margin-top:20px">
                            <div class="input-group-btn" >
                                <label for="d" class="btn btn-success">Name</label>
                            </div>
                            <input type="text"  name="title" value="<?= $Cat['name'] ?>" id="d"  class="form-control input">
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
                            $url = seo_url($title);
                            
                
                            
                                $q = "UPDATE category SET name ='$title' , url = '$url' WHERE id = $CatID";
                            
                                $r= mysqli_query($conn, $q);
                                if(mysqli_affected_rows($conn) ==1){
                                    //echo "<script>alert('One Category Updated.')</script>";
                                    
                                        
                                        echo "<script>window.open('?p=categories.view', '_self')</script>";
                                    }
        
                               }

                ?>
            </form>

        </div>
        <!-- /.box-body -->
    </div>
