<?php
$ID = mysqli_real_escape_string($conn, $_GET['id']);  
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $title = mysqli_real_escape_string($conn, $_POST['title']);
                            //$link = mysqli_real_escape_string($conn, $_POST['link']);
                            //$descr = mysqli_real_escape_string($conn, $_POST['descr']);
                            //$keyw = mysqli_real_escape_string($conn, $_POST['keyw']);
                            $alt = mysqli_real_escape_string($conn, $_POST['alt']);
                            $icon = mysqli_real_escape_string($conn, $_POST['fa']);
                            $old = mysqli_real_escape_string($conn, $_POST['image_hidden']);
                            $img = mysqli_real_escape_string($conn, $_POST['image_hidden']);
                            if(!empty($_FILES['image']['name'])){
                                $img = $_FILES['image']['name'];
                                $img_tmp = $_FILES['image']['tmp_name'];
                            }
                            //echo $title;
                            
                                $q = "UPDATE pages SET title ='$title' , img = '$img' , content = '$alt' , fa = $icon WHERE id = $ID";
                                //echo $q;
                            
                                $r= mysqli_query($conn, $q);
                                if(mysqli_affected_rows($conn) ==1){
                                    //echo "<script>alert('One page Updated.')</script>";
                                    if($img != $old){
                                        unlink('../uploads/pages/'.$old);
                                    }
                                        move_uploaded_file($img_tmp,"../uploads/pages/$img");
                                        echo "<script>window.open('?p=pages.view', '_self')</script>";
                                    }
        
                               }

                ?>
<div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Update</h3>
        </div>
        <?php 
            if(isset($_GET['id'])){
                
                $page = getDataById('pages', $ID);
            }
            if(!empty($slider['img'])){
        ?>

        
        <!-- /.box-header -->
        <?php } ?>
        
        <div class="box-body">


                <form method="post" action="?p=pages.single&id=<?= $ID ?>"  enctype="multipart/form-data" class="container"  style="width: 80%;">
                <div class="col-md-12">
                    <div class="input-group  margin-v">
                    <div class="input-group-btn" >
                        <label for="d" class="btn btn-success">Title</label>
                    </div>
                    <input type="text"  name="title"  id="d"  class="form-control input" value="<?= $page['title'] ?>">
                </div>
                </div>
                    <?php 
                        if($page['img'] != null){
                    ?>
                <div class="box box-success col-md-12">
                    <div class="box-body text-center">
                        <img style="max-width: 80%; border:1px solid #cecece" src="../uploads/pages/<?= $page['img'] ?>">
                    </div>
                </div>

                  <div class="col-md-12">
                    <div class="input-group  margin-v">
                    <div class="input-group-btn">
                        <label for="d1" class="btn btn-success">Image</label>
                    </div>
                    <input type="file" id="d1" name="image" class="form-control">
                    <input type="hidden" id="d1" name="image_hidden" value="<?= $page['img'] ?>" class="form-control">
                </div>
                </div>
                    <?php
                        
                        }
                      ?>
                      <?php
                        if($page['fa'] != 0){
                      ?>
                       <div class="col-md-12">
                    <div class="box box-info"><div class="box-body">
                            <label for="categ">
                                Icon
                            </label>
                    <select required="required" id="categ" class="form-control" name="fa">
                         <option value="" disabled>Icon</option>
                    <?php 
                        $q = "SELECT * FROM fa";
                        $r = mysqli_query($conn, $q);
                        while($cat = mysqli_fetch_array($r)){
                            $fa = $page['fa'];
                            if($fa == $cat['id']){

                    ?>
                    <option value="<?= $cat['id'] ?>" selected><?= $cat['class'] ?></option>
                    <?php
                }else{
                    ?>

                        <option value="<?= $cat['id'] ?>"><?= $cat['class'] ?></option>
                      <?php } }?>   
                       </select>
                            </div>
                        </div>
                     </div>
                     <?php
                 }
                 ?>
               
                <?php
                    if($page['content'] != null){
                ?>
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-body">
                            <label for="desc">
                                Page Content
                            </label>
                        <textarea id="editor1" name="alt" class="form-control" rows="80" cols="80" style="height:400px"> 
                              <?= $page['content'] ?>                                      
                            </textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace( 'editor1' );
                            </script>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="clearfix"></div>

                <div class="col-md-4 col-md-offset-8 text-right">
                    <button type="submit" name="submit" class="btn btn-bitbucket btn-lg">Submit</button>
                </div>
                
            </form>

        </div>
        <!-- /.box-body -->
    </div>
