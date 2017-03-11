<?php
 $op = getDataById('website_option', 1);
    if(isset($_GET['id']) && !empty($_GET['id'])){
    $order_id = mysqli_real_escape_string($conn, $_GET['id']);
    $q_order  = getDataById('orders', $order_id);
    if(!$q_order){
        echo "<script>window.open('index.php', '_self');</script>";
    }
        }else{
        echo "<script>window.open('index.php', '_self');</script>";
    }
?>
<div class="col-md-12 ">
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="modal fade " id="delete_page" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Delete Client</h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete the checked elements?
                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <a href="?p=order.delete&id=<?= $q_order['id'] ?>" name="action" value="delete_page" class="btn btn-danger">Yes</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div><table class="table  table-striped">
                <form method="post" action=""></form>
                    <tbody>
                    <tr>
                        <td></td>
                        <td class="pull-right">
                            <button type="button" data-target="#delete_page" data-toggle="modal" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i></button>
                        </td>

                    </tr>

                    <input name="checked[]" type="hidden" value="9">
                    

                    </tbody>
                    <tbody>
                    <tr>
                        <td style="width: 180px">Order ID</td>
                        <td class="text-left"><?= $order_id ?></td>
                    </tr>  <tr>
                        <td style="width: 180px">Full Name</td>
                        <td class="text-left"><?= $q_order['name'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 180px">Mobile</td>
                        <td class="text-left"><?= $q_order['mob'] ?></td>
                    </tr>
                    <tr>
                        <td style="width: 180px">Email</td>
                        <td class="text-left"><?= $q_order['email'] ?></td>
                    </tr>
                   
                    <tr>
                        <td style="width: 180px">Address</td>
                        <td class="text-left"><?= $q_order['address'] ?></td>
                    </tr>

                    <tr>

                        <td style="width: 180px">Products</td>
                        <td class="text-left">
                            <?php
                                $q_pro = "SELECT * FROM product_orders WHERE id_order = $order_id";
                                $r_pro = mysqli_query($conn, $q_pro);
                                if($r_pro){
                                    //$num = mysqli_num_rows($r_pro);
                                    while($f_pro = mysqli_fetch_array($r_pro)){
                                        $id = $f_pro['id_product'];
                                        $q_pro_sin = "SELECT * FROM subpro WHERE id = $id";
                                        $r_pro_sin = mysqli_query($conn, $q_pro_sin);
                                        if($r_pro_sin){
                                            $f_pro_sin = mysqli_fetch_array($r_pro_sin);
                                            $pro = $f_pro_sin['id'];
                                            $num = "SELECT * FROM product_orders WHERE id_product = $pro AND id_order = $order_id";
                                            $numr = mysqli_query($conn, $num);
                                            $number = mysqli_num_rows($numr);
                                            
                                       
                            ?>
                                <div class="cart-photo-details " style="display: inline-block">
                                
                                    <div class="cart-photo-brief ">
                                        <p><a><?= $f_pro_sin['name'] ?></a>  (<?= $f_pro['count'] ?>)</p>
                                    </div>
                                </div>
                                   
                                  <?php
                                            }
                                             }
                                    }
                         
                            ?>
                                
                        </td>
                    </tr>
           
                    <tr>
                        <td style="width: 180px">Ordered At</td>
                        <td class="text-left"><?= $q_order['order_time'] ?></td>
                    </tr>
                    </tbody>

                
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    </div>
<div class="clearfix"></div>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['action'])){
           
        }
    }
?>