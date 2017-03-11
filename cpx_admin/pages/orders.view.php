<?php
    $op = getDataById('website_option', 1);
?>

<div class="box box-info">
        <div class="box-header">
            
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
            <table class="table table-striped">
                <form method="post" action="">
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <button class="checkbox-all btn btn-default btn-sm" type="button">Select all</i></button>
                        </td>
                        <td colspan="5">
                            <button type="button" data-target="#delete_page" data-toggle="modal" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i></button> 
                        </td>
                    </tr>
                    <tr>
                        <th style="width: 35px"></th>
                        <th style="width: 35px">Orders ID</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Ordered At</th>
                        
                    </tr>
                    <?php
                        $q = "SELECT * FROM orders ORDER BY id DESC";
                        $r = mysqli_query($conn, $q);
                        if($r){
                            while($subCatData = mysqli_fetch_array($r)){
                             $order_id =$subCatData['id'];
                    ?>
                        <?php
                        $total_q = "SELECT * FROM product_orders WHERE id_order=$order_id";
                        $total_r = mysqli_query($conn, $total_q);
                        $total = 0;
                        while($total_f = mysqli_fetch_array($total_r)){
                                                        
                        }
                        ?>

                         <tr>
                            <td><input name="checked[]" class="dontcheck" id="select_all" type="checkbox" value="<?= $subCatData['id'] ?>" ></td>
                            <td><a href="index.php?p=orders.single&id=<?= $subCatData['id'] ?>"><?= $subCatData['id'] ?></a></td>
                            <td><a href="index.php?p=orders.single&id=<?= $subCatData['id'] ?>"><?= $subCatData['name'] ?></a></td>
                            <td><a href="index.php?p=orders.single&id=<?= $subCatData['id'] ?>"><?= $subCatData['email'] ?></a></td>
                            <td><a href="index.php?p=orders.single&id=<?= $subCatData['id'] ?>"><?= $subCatData['order_time'] ?></a></td>
                           

                            
                        </tr>
                        <?php 
                            }
                        }
                        ?>

                                    

                                           

                                        <div class="modal fade " id="delete_page" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Delete Alert</h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the checked elements?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <button type="submit" name="action" value="delete_page" class="btn btn-danger">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </tbody>
                        <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                if(isset($_POST['checked'])){
                                    foreach($_POST['checked'] as $remove_id){
                                    $q_d = "DELETE FROM orders WHERE id= $remove_id";
                                        $r_q= mysqli_query($conn, $q_d);
                                        if($r_q){
                                        echo "<script>window.open('?p=orders.view', '_self');</script>";
                                        }else{
                                            echo "<script>alert('Ops something happend try again');</script>";
                                        }
                                        }
                            }
                        }
                        ?>
                </form>
            </table>
        </div>
        <!-- /.box-body -->
    </div>


