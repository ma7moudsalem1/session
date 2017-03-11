<div class="col-md-6 col-md-offset-3">
        <div class="box box-success ">
        <div class="register-box-body ">
            <p class="login-box-msg">
                                <i class="fa fa-user"></i> Register a new user
                            </p>

            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input required="" type="text" name="fullname" class="form-control" placeholder="Full name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required="" type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required="" type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required="" type="password" name="conf_password" class="form-control" placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h4><i class="fa fa-cog"></i>&nbsp; Permissions</h4>
                        <?php 
                        $qs = "SELECT * FROM admin_control";
                        $rs = mysqli_query($conn, $qs);
                        while ($prms = mysqli_fetch_array($rs)) {
                           ?>
                                                <label class="col-xs-4" for="per<?=  $prms['id'] ?>" style="cursor: pointer;">
                            <div class="icheckbox_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;"><input type="checkbox" name="permissions[]" id="per7" class="checkbox" value="<?= $prms['id'] ?>" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>  <?= $prms['name'] ?>                        </label>
                                            <?php
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
    </div></div>