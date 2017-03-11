<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $s1q = getDataById('messages', $id);
    if($s1q['stutes'] == 0){
    $q = "UPDATE messages SET stutes = 1 WHERE id = $id";
    $r = mysqli_query($conn, $q);
    if($r){
    echo "<script>window.open('?p=mail.single&id=$id', '_self')</script>";     
        }
        }
    $qs = "SELECT * FROM messages WHERE id = $id";
    $rs = mysqli_query($conn, $qs);
    $fdata = mysqli_fetch_array($rs);
}
?>
<div class="col-md-3">
            <a href="index.php?p=mail.send" class="btn btn-primary btn-block margin-bottom">Compose</a>

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Folders</h3>

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="index.php?p=mail.view"><i class="fa fa-inbox"></i> Inbox
                                                                <span class="label label-primary pull-right"><?php echo getCount('messages'); ?></span>
                                                    </a></li>
<!--                        <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>-->

                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->

            <!-- /.box -->
        </div>

        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Read Mail</h3>

                    <div class="box-tools pull-right">
<!--                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>-->
<!--                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>-->
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                        <h3>Subject: <?= $fdata['subjuct'] ?></h3>
                        <h5>From: <?= $fdata['name'] ?> [<?= $fdata['email'] ?>]</h5>
                        <h6>Phone: <?= $fdata['phone'] ?></h6>
                    </div>
                    <!-- /.mailbox-read-info -->
                    <div class="mailbox-controls with-border text-center">
                        <div class="btn-group">
                            <div class="modal fade" id="delete_mail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Delete mail</h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure ?
                                        </div>
                                        <div class="modal-footer">
                                            <form method="post" action="">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                <input type="hidden" name="data[]" value="1">
                                                <button type="submit" name="action" value="delete_mail" class="btn btn-danger">Yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>


                        
                    </div>
                    <!-- /.mailbox-controls -->
                    <div class="mailbox-read-message">
                    <?= $fdata['name'] ?>
                  </div>
                    <!-- /.mailbox-read-message -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    
                    <form method="post">
                    <button type="button" class="btn btn-default" data-target="#delete_mail" data-toggle="modal"><i class="fa fa-trash-o"></i> Delete</button>
                        </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /. box -->
        </div>
<div class="clearfix"></div>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $delete_q = "DELETE FROM messages WHERE id = $id";
        //echo $delete_q;
        $delete_r = mysqli_query($conn, $delete_q);
        echo "<script>window.open('?p=mail.view', '_self')</script>";
    }
    ?>