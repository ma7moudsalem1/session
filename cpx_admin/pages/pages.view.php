<div class="box box-info">
        
        <div class="box-body pad">
            <table class="table table-striped">
                <form method="post" action="">
                    <tbody>
                    <tr>
                        
                        
                    </tr>
                    <tr>
                      
                        <th style="width: 35px">#</th>
                        <th>Page Title</th>
                        <th>Page Content</th>
                        <th>Edit</th>
                        <th>image</th>
                    </tr>
                    <?php
                        $q = "SELECT * FROM pages ORDER BY id ASC";
                        $r = mysqli_query($conn, $q);
                        if($r){
                            while($catData = mysqli_fetch_array($r)){
                    ?>

                         <tr>
                           
                            <td><a href="index.php?p=pages.single&id=<?= $catData['id'] ?>"><?= $catData['id'] ?></a></td>
                            <td><a href="index.php?p=pages.single&id=<?= $catData['id'] ?>"><?= $catData['title'] ?></a></td>
                            <td><a href="index.php?p=pages.single&id=<?= $catData['id'] ?>"><?= substr($catData['content'],0,190).'...' ?></a></td>
                            <td>
                                <a href="index.php?p=pages.single&id=<?= $catData['id'] ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                            </td>

                            <?php if($catData['img'] != null){ ?>
                            <td><a href="index.php?p=pages.single&id=<?= $catData['id'] ?>" ><img src="../uploads/pages/<?= $catData['img'] ?>" width="100" style="border:1px solid #c4c4c4" height="70"/></a></td>
                            <?php } ?>
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
                           /* if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                if(isset($_POST['checked'])){
                                    foreach($_POST['checked'] as $remove_id){
                                    //unlink($catData['img']);
                                    $q_d = "DELETE FROM pages WHERE id= $remove_id";
                                        $r_q= mysqli_query($conn, $q_d);
                                        if($r_q){
                                                                                        //echo "<script>window.open('?p=categories.view', '_self');</script>";
                                        }else{
                                            echo "<script>alert('Ops something happend try again');</script>";
                                        }
                                        }
                            }
                        }*/
                        ?>
                </form>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

