
                        <?php

                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $fb = mysqli_real_escape_string($conn, $_POST['fb']);
                            $tw = mysqli_real_escape_string($conn, $_POST['tw']);
                            $gp = mysqli_real_escape_string($conn, $_POST['gp']);
                            $yt = mysqli_real_escape_string($conn, $_POST['yt']);
                            $li = mysqli_real_escape_string($conn, $_POST['li']);
                            $ins = mysqli_real_escape_string($conn, $_POST['ins']);
                            $rss = mysqli_real_escape_string($conn, $_POST['rss']);
                                
                            if(isset($_POST['fbb'])){
                                $q = "UPDATE social SET fb ='$fb' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                            if(isset($_POST['twb'])){
                                $q = "UPDATE social SET tw ='$tw' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                            if(isset($_POST['gpb'])){
                                $q = "UPDATE social SET gp ='$gp' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                            if(isset($_POST['ytb'])){
                                $q = "UPDATE social SET yt ='$yt' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                            if(isset($_POST['twb'])){
                                $q = "UPDATE social SET tw ='$tw' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                            if(isset($_POST['lib'])){
                                $q = "UPDATE social SET li ='$li' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                            if(isset($_POST['insb'])){
                                $q = "UPDATE social SET ins ='$ins' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                            if(isset($_POST['rssb'])){
                                $q = "UPDATE social SET rss ='$rss' WHERE id = 1";
                                $r= mysqli_query($conn, $q);
                            }
                          
//                            echo "<script>window.open('?p=social.view', '_self')</script>";
                           
                    }   

                        ?>

<?php 
   $social = getDataById('social', 1);
?>

<div class="box-body">
          <div class="col-md-6 col-md-offset-3 margin-v">
                                <form method="post" action="#">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <label style="width: 50px" for="d11" class="btn btn-success"><i class="fa fa-lg fa-facebook"></i></label>
                                    </div>
                                    <input type="text" id="d11" name="fb" value="<?= $social['fb'] ?>" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" name="fbb" value="facebook " class="btn  btn-bitbucket ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                         <div class="col-md-6 col-md-offset-3 margin-v">
                                <form method="post" action="#">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <label style="width: 50px" for="d12" class="btn btn-success"><i class="fa fa-lg fa-twitter"></i></label>
                                    </div>
                                    <input type="text" id="d12" name="tw" value="<?= $social['tw'] ?>" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" name="twb" value="twitter " class="btn  btn-bitbucket ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="col-md-6 col-md-offset-3 margin-v">
                                <form method="post" action="#">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <label style="width: 50px" for="d13" class="btn btn-success"><i class="fa fa-lg fa-google-plus"></i></label>
                                    </div>
                                    <input type="text" id="d13" name="gp" value="<?= $social['gp'] ?>" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" name="gpb" value="google-plus " class="btn  btn-bitbucket ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                                                    <div class="col-md-6 col-md-offset-3 margin-v">
                                <form method="post" action="#">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <label style="width: 50px" for="d14" class="btn btn-success"><i class="fa fa-lg fa-youtube"></i></label>
                                    </div>
                                    <input type="text" id="d14" name="yt" value="<?= $social['yt'] ?>" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" name="ytb" value="youtube " class="btn  btn-bitbucket ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="col-md-6 col-md-offset-3 margin-v">
                                <form method="post" action="#">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <label style="width: 50px" for="d15" class="btn btn-success"><i class="fa fa-lg fa-linkedin"></i></label>
                                    </div>
                                    <input type="text" id="d15" name="li" value="<?= $social['li'] ?>" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" name="lib" value="linkedin " class="btn  btn-bitbucket ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="col-md-6 col-md-offset-3 margin-v">
                                <form method="post" action="#">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <label style="width: 50px" for="d16" class="btn btn-success"><i class="fa fa-lg fa-instagram"></i></label>
                                    </div>
                                    <input type="text" id="d16" name="ins" value="<?= $social['ins'] ?>" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" name="insb" value="instagram " class="btn  btn-bitbucket ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                              <div class="col-md-6 col-md-offset-3 margin-v">
                                <form method="post" action="#">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <label style="width: 50px" for="d16" class="btn btn-success"><i class="fa fa-lg fa-rss"></i></label>
                                    </div>
                                    <input type="text" id="d16" name="rss" value="<?= $social['rss'] ?>" class="form-control">
                                    <div class="input-group-btn">
                                        <button type="submit" name="rssb" value="rss " class="btn  btn-bitbucket ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                        

                        <div class="col-md-4 col-md-offset-4 " style="margin-top: 30px">

                        </div>
                        <div class="clearfix"></div>

                </div>