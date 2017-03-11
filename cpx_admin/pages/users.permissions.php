 <?php
$getId = $_GET['id'];
if($getId == 1){
            echo "<script>window.open('?p=users.view', '_self')</script>";
        }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         
        
                            foreach($_POST['permissions'] as $pramt){
                                    $q_d = "DELETE FROM admin_prm WHERE id_admin = $getId";
                              //  echo $q_d;
                                    $r_q= mysqli_query($conn, $q_d);
                                }
                                    foreach($_POST['permissions'] as $pramt){
                                    $q_d2 = "INSERT INTO admin_prm (id_prm, id_admin) VALUES ($pramt, $getId)";
                                    $r_q2= mysqli_query($conn, $q_d2);
                                       // echo $q_d2;
                                }
                                echo "<script>window.open('?p=users.view', '_self')</script>";
                            }
                        
                        
 ?>

<div class="col-md-6 col-md-offset-3">
    <div class="box box-success ">
        <div class="register-box-body">
            <p class="login-box-msg">
                                <i class="fa fa-user"></i> Update Prermissions
                            </p>
<!---->
                            <!-- 
            <label class="col-xs-4" for="per<?= $fqscr['id'] ?>" style="cursor: pointer;">
                                <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" name="permissions[]" id="per<?= $fqscr['id'] ?>" class="checkbox" value="<?= $prms['id'] ?>"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                
                                </div> <?= $fqscr['name'] ?>
                                </label>
                            -->
            <form action="" method="post">
                
                <div class="row">
                    <div class="col-xs-12">
                        <h4><i class="fa fa-cog"></i>&nbsp; Permissions</h4>

                        <?php 
                        $idp = $_SESSION['id'];
                        $getId = $_GET['id'];
                            $q1 = "SELECT * FROM admin_prm WHERE id_admin = $getId";
                            $r1 = mysqli_query($conn, $q1);
                            while ($fetch_menu = mysqli_fetch_array($r1)) {
                                $menu_id = $fetch_menu['id_prm'];
                            
                                $q2 = "SELECT * FROM admin_control WHERE id = $menu_id";
                                $r2 = mysqli_query($conn, $q2);
                                while ($fetch_data = mysqli_fetch_array($r2)) {
                                    $f_id[] = $fetch_data['id'];

                                 ?>
                                <label class="col-xs-4" for="per<?= $fetch_data['id'] ?>" style="cursor: pointer;">
                                <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" name="permissions[]" id="per<?= $fetch_data['id'] ?>" class="checkbox" value="<?= $fetch_data['id'] ?>" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                
                                </div> <?= $fetch_data['name'] ?>
                            </label>
                                 <?php   
                                }
                                
                             } 
                       ?>
                        
                        <?php
                            
                                $q3 = "SELECT * FROM admin_control";
                                $r3 = mysqli_query($conn, $q3);
                                while ($fetch_data2 = mysqli_fetch_array($r3)) {
                                    if(!in_array($fetch_data2['id'], $f_id)){
                        ?>
                        <label class="col-xs-4" for="per<?= $fetch_data2['id'] ?>" style="cursor: pointer;">
                                <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;">
                                    <input type="checkbox" name="permissions[]" id="per<?= $fetch_data2['id'] ?>" class="checkbox" value="<?= $fetch_data2['id'] ?>"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                
                                </div> <?= $fetch_data2['name'] ?>
                            </label>
                        
                        <?php
                                    }
                                }
                        ?>
                       
                     </div>
                    <!-- /.col -->
                    <div class="col-xs-offset-8 col-xs-4" style="padding-top:10px">
                        <button type="submit" name="submit" class="btn btn-primary btn-block ">Add user</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
    </div>
 </div>
