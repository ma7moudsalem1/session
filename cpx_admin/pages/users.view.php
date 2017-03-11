<?php
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
                $delKey = $_GET['id'];  
                if($delKey != 1){
                $qry = "DELETE FROM admins WHERE id = $delKey";
                $run = mysqli_query($conn, $qry);
                }
            }
?>
<div class="col-md-12">

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><a href="index.php?p=users.add" class="btn text-green btn-success btn-app">
                    <i class="fa fa-plus"></i> Add new user
                </a></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: block;">
            <div class="table-responsive">
                <table class="table table-striped no-margin">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>actions</th>
                        <th>E-mail</th>
                        <th>Priviliages</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $currentid = $_SESSION['id'];
                        $q = "SELECT * FROM admins";
                        $r = mysqli_query($conn, $q);
                        while($admin = mysqli_fetch_array($r)){
                    ?>
                        <tr>
                            <td><a href="index.php?page=users.permissions&id=<?= $admin['id'] ?>"><?= $admin['id'] ?></a></td>
                        <td><?= $admin['name'] ?></td>
                           
                            <?php
                                if($admin['id'] == 1){
                            ?>
                                <td>
                                <button type="button" disabled="" onclick="return false; window.location = '#'" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal8">
                                    <i class=" fa fa-trash"></i>
                                </button>
                                <a href="index.php?p=users.permissions&id=<?= $admin['id'] ?>" disabled="" onclick="return false; window.location = '#'" class="btn btn-primary">
                                    <i class="fa fa-pencil-square fa-lg"></i>&nbsp; permissions
                                </a>
                                <a href="index.php?p=users.single&id=<?= $admin['id'] ?>" class="btn btn-success">
                                    <i class="fa fa-pencil-square fa-lg"></i>&nbsp; Edit
                                </a>
                                </td>
                                <?php
                                    } else {
                                ?>
                                <td>
                                <button type="button"  class="btn btn-danger btn-md" name="delete[<?= $admin['id'] ?>]" data-toggle="modal" data-target="#myModal8">
                                    <i class=" fa fa-trash"></i>
                                </button>
                                <a href="index.php?p=users.permissions&id=<?= $admin['id'] ?>"  class="btn btn-primary">
                                    <i class="fa fa-pencil-square fa-lg"></i>&nbsp; permissions
                                </a>
                                <?php 
                                if($admin['id'] != 1){
                                ?>
                                <a href="index.php?p=users.single&id=<?= $admin['id'] ?>" class="btn btn-success">
                                    <i class="fa fa-pencil-square fa-lg"></i>&nbsp; Edit
                                </a>
                                </td>
                                <div class="modal fade " id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Delete </h4>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete user admin ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                <a href="index.php?p=users.view&action=delete&id=<?= $admin['id'] ?>" class="btn btn-danger">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php 
                                    }
                                 }
                                ?>

                            
                            <td><?= $admin['email'] ?></td>
                        <td><span class="label label-success">admin</span></td>
                     </tr>
                     <?php
                 }
                     ?>
                                
                    </tbody>
                </table>
                <!-- Button trigger modal -->


                <!-- Modal -->

            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix" style="display: block;">
<!--            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Edit</a>-->
                            <a href="index.php?p=users.add" class="btn btn-sm btn-success btn-flat text-success pull-right"><i class="fa fa-plus"></i> &nbsp; Add user</a>
           </div>
        <!-- /.box-footer -->
    </div>
</div>
<div class="clearfix"></div>