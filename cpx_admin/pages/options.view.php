<?php
    $option = getDataById('website_option', 1);
?>
<div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><?=  $option['title'] ?></h3>

                    <div class="box-tools pull-right">
                        <!--                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>-->
                        <!--                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>-->
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                                        <form method="post" action="" enctype="multipart/form-data" class="container" style="width: 80%;">
                        <div class="col-md-6 margin-v">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <label for="d" class="btn btn-success">website title</label>
                            </div>
                            <input type="text" name="title" id="d" value="<?= $option['title'] ?>" class="form-control input">
                        </div>
                        </div>

                        <div class="col-md-6 margin-v">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <label for="d1" class="btn btn-success">favicon 32x32</label>
                            </div>
                            <input type="file" id="d1" name="icon" class="form-control">
                            <div class="input-group-btn" style="width:32px">
                                <img width="32" height="32" src="../uploads/<?= $option['icon'] ?>" alt="">
                                <input type="hidden" id="d1" name="icon_hidden" value="<?= $option['icon']?>" class="form-control">
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6 margin-v">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <label for="map" class="btn btn-success">Map iframe</label>
                                </div>
                                <input type="text" name="map" id="map" value="<?= $option['map_ifram'] ?>" class="form-control input">
                            </div>
                        </div>

                       <div class="col-md-6 margin-v">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <label for="mobile" class="btn btn-success">Mobile</label>
                                </div>
                                <input type="text" name="mob" id="mobile" value="<?= $option['mob'] ?>" class="form-control input">

                            </div>
                        </div>

                        <div class="col-md-6 margin-v">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <label for="phone" class="btn btn-success">Phone</label>
                                </div>
                                <input type="text" name="phone" id="phone" value="<?= $option['phone'] ?>" class="form-control input">
                            </div>
                        </div>
                      
                        <div class="col-md-6 margin-v">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <label for="email" class="btn btn-success">E-mail</label>
                                </div>
                                <input type="text" name="email" id="email" value="<?= $option['email'] ?>" class="form-control input">
                            </div>
                        </div>

                        <div class="col-md-6 margin-v">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <label for="email" class="btn btn-success">App</label>
                                </div>
                                <input type="text" name="app" id="email" value="<?= $option['app_link'] ?>" class="form-control input">
                            </div>
                        </div>

                        <div class="col-md-6 margin-v">
                            <div class="input-group my-colorpicker2 colorpicker-element">
                                <div class="input-group-btn">
                                    <label for="select_color" class="btn btn-success">Background Color</label>
                                </div>
                                <input type="color" id="select_color" name="color" value="<?= $option['main_color'] ?>" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-6 margin-v">
                            <div class="input-group my-colorpicker2 colorpicker-element">
                                <div class="input-group-btn">
                                    <label for="bg_color" class="btn btn-success">Selection Color</label>
                                </div>
                                <input type="color" id="bg_color" name="bg_color" value="<?= $option['background'] ?>" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-6 margin-v">
                            <div class="input-group my-colorpicker2 colorpicker-element">
                                <div class="input-group-btn">
                                    <label for="scroll" class="btn btn-success">scroll color</label>
                                </div>
                                <input type="color" id="scroll" name="scroll_color" value="<?= $option['scrol'] ?>" class="form-control">

                            </div>
                        </div>
                        <div class="clearfix"></div>
                           <div class="col-md-6 margin-v">
                            <div class="box box-success ">
                                <div class="box-header">
                                    <label for="address" class="">Address</label>
                                </div>
                                <div class="box-body">

                                    <textarea id="address" rows="5" name="address" class="form-control"><?=  $option['address']  ?></textarea>
                                </div>
                            </div>
                        </div>
                     
                        <div class="col-md-6 margin-v">
                            <div class="box box-success ">
                                <div class="box-header">
                                    <label for="description" class="">Website description</label>
                                </div>
                                <div class="box-body">

                                    <textarea id="description" rows="5" name="descr" class="form-control"><?= $option['descrp'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 margin-v">
                            <div class="box box-success ">
                                <div class="box-header">
                                    <label for="kwrds" class="">Website keywords</label>
                                </div>
                                <div class="box-body">

                                    <textarea id="kwrds" rows="5" name="keyw" class="form-control"><?= $option['keyw'] ?></textarea>
                                </div>
                            </div>
                        </div>
                     
                        <div class="col-md-6 col-md-offset-0" style="margin-top: 120px">
                            <button type="submit" name="submit" class="btn btn-block btn-bitbucket btn-lg">Submit</button>
                        </div>
                        <div class="clearfix"></div>

                    </form>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <!-- /.box-footer -->

                <!-- /.box-footer -->
            </div>
            <?php

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $title = mysqli_real_escape_string($conn, $_POST['title']);
                            $map = mysqli_real_escape_string($conn, $_POST['map']);
                            $mob = mysqli_real_escape_string($conn, $_POST['mob']);
                            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                            $email = mysqli_real_escape_string($conn, $_POST['email']);
                            $app = mysqli_real_escape_string($conn, $_POST['app']);
                            $color = mysqli_real_escape_string($conn, $_POST['color']);
                            $bg_color = mysqli_real_escape_string($conn, $_POST['bg_color']);
                            $scroll_color = mysqli_real_escape_string($conn, $_POST['scroll_color']);
                            $address = mysqli_real_escape_string($conn, $_POST['address']);
                            $descr = mysqli_real_escape_string($conn, $_POST['descr']);
                            $keyw = mysqli_real_escape_string($conn, $_POST['keyw']);
                            //$curr = mysqli_real_escape_string($conn, $_POST['curr']);
                            $img = mysqli_real_escape_string($conn, $_POST['icon_hidden']);
                            $old = mysqli_real_escape_string($conn, $_POST['icon_hidden']);
                            if(!empty($_FILES['icon']['name'])){
                                $img = $_FILES['icon']['name'];
                                $img_tmp = $_FILES['icon']['tmp_name'];
                            }
                            
                
                            
                                $q = "UPDATE website_option SET title ='$title' , map_ifram = '$map' , ";
                                $q .= "mob = '$mob' , phone = '$phone' , email = '$email' , main_color = '$color' , ";
                                $q .= "background = '$bg_color' , scrol = '$scroll_color' , address = '$address' , ";
                                $q .=  "descrp = '$descr' , keyw = '$keyw' , ";
                                $q .=  "icon = '$img' , app_link = '$app' WHERE id = 1";
                            
                                $r= mysqli_query($conn, $q);
                                if(mysqli_affected_rows($conn) ==1){
                                   
                                    if($img != $old){
                                   //     unlink('../uploads/'.$old);
                                    }
                                        move_uploaded_file($img_tmp,"../uploads/$img");
                                        echo "<script>window.open('?p=options.view', '_self')</script>";
                                    }
        
                               }

                ?>

            