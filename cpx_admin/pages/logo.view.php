<?php
    $logo = getDataById('logo', 1);
?>
<div class="box box-success">
<div class="box-body">
                <form method="post" action="" enctype="multipart/form-data" class="container" style="width: 80%;">

                        <div class="col-md-6 col-md-offset-3 margin-v">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <label for="d1" class="btn btn-success">Website Logo</label>
                            </div>
                            <input type="file" id="d1" name="image" class="form-control">
                            <input type="hidden" id="d1" name="image_hidden" class="form-control">
                        </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <img class="center-block" style="border: 1px solid #ccc" src="../uploads/<?= $logo['img'] ?>" alt="">
                        </div>
                        <div class="col-md-4 col-md-offset-4 " style="margin-top: 50px">
                            <button type="submit" name="submit" class="btn btn-block btn-bitbucket btn-lg">Submit</button>
                        </div>
                        <div class="clearfix"></div>




                    </form>

                </div>
                </div>
        <?php
               if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $old = mysqli_real_escape_string($conn, $_POST['image_hidden']);
                            $img = mysqli_real_escape_string($conn, $_POST['image_hidden']);
                            if(!empty($_FILES['image']['name'])){
                                $img = $_FILES['image']['name'];
                                
                                $img_tmp = $_FILES['image']['tmp_name'];
                            }
                            
                            
                                $q = "UPDATE logo SET img = '$img' WHERE id = 1";
                            
                                $r= mysqli_query($conn, $q);
                                if(mysqli_affected_rows($conn) ==1){
                                    //echo "<script>alert('Logo Updated.')</script>";
                                    if($img != $old){
                                        //unlink('../uploads/sub_cat/'.$old);
                                    }
                                        move_uploaded_file($img_tmp,"../uploads/$img");
                                        echo "<script>window.open('?p=logo.view', '_self')</script>";
                                    }
        
                               }

        ?>