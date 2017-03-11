<?php
$count = getCount('messages');
?>
<div class="col-md-4 col-md-offset-4">
    <a href="index.php?p=mail.send" class="btn btn-primary btn-block margin-bottom">Compose</a>
    <a href="mail.export.php" class="btn btn-success btn-block margin-bottom">Export E-mails</a>

</div>
<div class="col-md-12">
<div class="box box-primary">
<div class="box-header with-border">
    <h3 class="box-title">Inbox</h3>

    <div class="box-tools pull-right">
        <div class="has-feedback">

        </div>
    </div>
    <!-- /.box-tools -->
</div>
    <form method="post" action="">

    <!-- /.box-header -->
<div class="box-body no-padding">
    <div class="mailbox-controls">
        <!-- Check all button -->
        <button type="button" class="btn btn-default btn-sm checkbox-all"><i class="fa fa-square-o"></i>
        </button>
        <div class="btn-group">
            <button type="button" data-toggle="modal" data-target="#delete_mail" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
        </div>
        <div class="modal fade " id="delete_mail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" name="action" value="delete_mail" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.btn-group -->
        <a href="index.php?p=mail.view" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a>
        <div class="pull-right">
            <?php  echo getCount('messages') ?> Massages

            <!-- /.btn-group -->
        </div>
        <!-- /.pull-right -->
    </div>
    <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
            <thead>
            <th></th>
            <th></th>
            <th>Name</th>
            <th>Subject</th>
            <th>phone</th>
            <th>Message</th>
            </thead>
            <tbody>
            <?php 
            	$q = "SELECT * FROM messages ORDER BY id DESC";
            	$r = mysqli_query($conn, $q);

            	while($maildata = mysqli_fetch_array($r)) {
            	$read = $maildata['stutes'];
            	
            	
            ?>
                     <tr>
                        <td><div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input name="checked[]" type="checkbox" value="<?= $maildata['id'] ?>" style="position: absolute; opacity: 0;">
                        </div></td>
                        <td class="mailbox-star"><a href="index.php?p=mail.single&id=<?= $maildata['id'] ?>"><i class="fa fa-circle-o<?php if($read == 0) { echo ' text-danger'; } else{ echo ' text-success'; } ?> text-success"></i></a></td>
                        <td class="mailbox-name"><a href="index.php?p=mail.single&id=<?= $maildata['id'] ?>"><?= $maildata['name'] ?></a></td>
                        <td class="mailbox-subject"><a style="color: #000" href="index.php?p=mail.single&id=<?= $maildata['id'] ?>"><?= $maildata['subjuct'] ?></a>
                        <td class="mailbox-subject"><a style="color: #000" href="index.php?p=mail.single&id=<?= $maildata['id'] ?>"><?= $maildata['phone'] ?></a>
                        <td class="mailbox-subject"><a style="color: #000" href="index.php?p=mail.single&id=<?= $maildata['id'] ?>"><?= $maildata['message'] ?></a>
                        </td>

                        <td class="mailbox-date"><a style="color: #000" href="index.php?p=mail.single&id=<?= $maildata['id'] ?>"></a></td>
                    </tr>
                         
                        <?php } ?>      
                       
                               
            
            </tbody>
        </table>
        <!-- /.table -->
    </div>
    <!-- /.mail-box-messages -->
</div>
    </form>

    <!-- /.box-body -->
<div class="box-footer no-padding">
    <div class="mailbox-controls">
        <!-- Check all button -->
        <button type="button" class="btn btn-default btn-sm checkbox-all"><i class="fa fa-square-o"></i>
        </button>
        <!-- /.btn-group -->
        <a href="index.php?page=mail.view" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a>
        <div class="pull-right">
            <!-- /.btn-group -->
        </div>
        <!-- /.pull-right -->
    </div>
</div>
</div>
<!-- /. box -->
</div>
<div class="clearfix"></div>
<?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                if(isset($_POST['checked'])){
                                    foreach($_POST['checked'] as $remove_id){
                                    $q_d = "DELETE FROM messages WHERE id= $remove_id";
                                        $r_q= mysqli_query($conn, $q_d);
                                        if($r_q){
                                            echo "<script>window.open('?p=mail.view', '_self');</script>";
                                        }else{
                                            echo "<script>alert('Ops something happend try again');</script>";
                                        }
                                        }
                            }
                        }
                        ?>
