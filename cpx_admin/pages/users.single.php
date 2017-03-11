
<?php
if(isset($_GET['id'])){
    $adminid = $_GET['id'];
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
              $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
              $email = mysqli_real_escape_string($conn, $_POST['email']);
              $password = mysqli_real_escape_string($conn, $_POST['password']);
              $qu = "UPDATE admins SET name = '$fullname' , email = '$email' , pass = '$password' WHERE id = $adminid";
              $run = mysqli_query($conn, $qu);
                if($run){
                    echo "<script>window.open('?p=users.view', '_self')</script>";
                }
          }

$admin = getDataById('admins', $adminid);
?>
<div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">

                    </h3>

                    <div class="box-tools pull-right">
<!--                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>-->
<!--                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>-->
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form method="post" action="" enctype="multipart/form-data" class="container" style="width: 80%;">
                        <div class="input-group  margin-v">
                            <div class="input-group-btn">
                                <label for="d" class="btn btn-success">Name</label>
                            </div>
                            <input type="text" name="fullname" value="<?= $admin['name'] ?>" id="d" required="" class="form-control input">
                        </div>
                        <div class="input-group margin-v">
                            <div class="input-group-btn">
                                <label for="d2" class="btn btn-success">Email</label>
                            </div>
                            <input type="email" name="email" value="<?= $admin['email'] ?>" placeholder="( Optional )" required="" id="d2" class="form-control input">
                        </div>
                        <div class="input-group  margin-v">
                            <div class="input-group-btn">
                                <label for="d1" class="btn btn-success">Password</label>
                            </div>
                            <input type="text" value="<?= $admin['pass'] ?>" id="d1" name="password" class="form-control" required="">
                        </div>

<!--                        <div class="box box-success">-->
<!--                            <div class="box-header">-->
<!--                                <h3 class="box-title">Page Content-->
<!--                                    <small>-->
<!--                                        <span id="count" class="hidden"></span>-->
<!--                                        <script>-->
<!--                                            document.write('<select disabled="disabled" id="languages" onchange="createEditor( this.value );">');-->
<!--                                            for ( var i = 0 ; i < window.CKEDITOR_LANGS.length ; i++ ) {-->
<!--                                                document.write('<option value="' + window.CKEDITOR_LANGS[i].code + '">' +window.CKEDITOR_LANGS[i].name +'</option>' );-->
<!--                                                document.write('</select>');-->
<!--                                        </script>-->
<!--                                    </small>-->
<!--                                </h3>-->
<!--                                <!-- tools box -->
<!--                                <div class="pull-right box-tools">-->
<!--                                </div>-->
<!--                                <!-- /. tools -->
<!--                            </div>-->
<!--                            <!-- /.box-header -->
<!--                            <div class="box-body pad">-->
<!---->
<!--                                <textarea style="height:400px;" cols="80" name="content" id="editor1" name="editor1" rows="10">--><!--</textarea>-->
<!--                                <script>-->
<!--                                    document.getElementById( 'count' ).innerHTML = window.CKEDITOR_LANGS.length;var editor;function createEditor( languageCode ) {-->
<!--                                        if ( editor ) editor.destroy();-->
<!--                                        editor = CKEDITOR.replace( 'editor1', {language: languageCode, on: { instanceReady: function() { var languages = document.getElementById( 'languages' );-->
<!--                                            languages.value = this.langCode; languages.disabled = false; } } }); } createEditor( '' );-->
<!--                                </script>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="clearfix"></div>

                        <div class="col-md-4 col-md-offset-8 text-right">
                            <button type="submit" name="submit" class="btn btn-bitbucket btn-lg">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <!-- /.box-footer -->

                <!-- /.box-footer -->
            </div>
            <!-- /. box -->
        </div>
<div class="clearfix"></div>