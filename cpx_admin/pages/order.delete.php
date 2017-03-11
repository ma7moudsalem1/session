<?php
 if(isset($_GET['id']) && !empty($_GET['id'])){
    $order_id = mysqli_real_escape_string($conn, $_GET['id']);
     $q = "DELETE FROM orders WHERE id = $order_id";
            $q2 = "DELETE FROM product_orders WHERE id_order = $order_id";
            $r = mysqli_query($conn, $q);
            $r2 = mysqli_query($conn, $q2);
            if($r && $r2){
                echo "<script>window.open('?p=orders.view', '_self');</script>";
            }
        }else{
        echo "<script>window.open('index.php', '_self');</script>";
    }