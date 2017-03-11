<div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Add Sub Category</h3>
        </div>
        <?php 
            if(isset($_GET['id'])){
                $subCatID = mysqli_real_escape_string($conn, $_GET['id']);  
                $subCat = getDataById('sub_cat', $subCatID);
            }
            if(!empty($subCat['img'])){
        ?>

     
        <?php 
        $id = $subCat['category'];
       } ?>
        
        <div class="box-body">


                       <form method="post" action="" enctype="multipart/form-data" class="container"  style="width: 80%;">
                        <div class="input-group  margin-v " style="margin-top:20px">
                            <div class="input-group-btn" >
                                <label for="d" class="btn btn-success">Name</label>
                            </div>
                            <input type="text"  name="title" value="<?= $subCat['name'] ?>" id="d"  class="form-control input">
                        </div>
                    
                          <div class="box box-info"><div class="box-body">
                            <label for="categ">
                                Category
                            </label>
                    <select required="required" id="categ" class="form-control" name="category">
                         <option value="" disabled selected>Select Category</option>
                    <?php 
                        $q1 = "SELECT * FROM subpro";
                        $r1 = mysqli_query($conn, $q1);
                        while ($f = mysqli_fetch_array($r1)) {
                            $pid[] = $f['cat'];
                            }
                        $q = "SELECT * FROM category ORDER BY id DESC";
                        $r = mysqli_query($conn, $q);
                        while($cat = mysqli_fetch_array($r)){
                             if(in_array($cat['id'], $pid)){
                                    
                                        continue;
                                    }else{
                                        if($subCat['category'] == $cat['id']){
                                            ?>
                                 <option value="<?= $cat['id'] ?>" selected><?= $cat['name'] ?></option>

                                            <?php
                                        }else{
                    ?>
                        <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                      <?php }}} ?>   
                       </select>
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
                            $category = mysqli_real_escape_string($conn, $_POST['category']);

                            //$old = mysqli_real_escape_string($conn, $_POST['image_hidden']);
                            //$img = mysqli_real_escape_string($conn, $_POST['image_hidden']);
                            $url = seo_url($title);
                            
                            
                            
                
                            
                                $q = "UPDATE sub_cat SET name ='$title' , url = '$url' , category = $category WHERE id = $subCatID";
                            
                                $r= mysqli_query($conn, $q);
                                if(mysqli_affected_rows($conn) ==1){
                                  //  echo "<script>alert('One Sub Category Updated.')</script>";
                                   
                                        echo "<script>window.open('?p=subcat.view', '_self')</script>";
                                    }
        
                               }

                ?>
            </form>

        </div>
        <!-- /.box-body -->
    </div>
