
<div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">
                <a href="index.php?p=subcat.add" class="btn text-green btn-success btn-app">
                    <i class="fa fa-plus"></i> Add new sub Category
                </a>
            </h3>
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
                        <th style="width: 35px">#</th>
                        <th>Name</th>
                        <th>Edit Category</th>
                        <th>Sub sub categories</th>
                        <th>Products</th>
                        
                        
                    </tr>
                    <?php
                        $q = "SELECT * FROM sub_cat ORDER BY id DESC";
                        $r = mysqli_query($conn, $q);
                        if($r){
                            while($subCatData = mysqli_fetch_array($r)){
                             if($subCatData['id'] != 0){
                    ?>

                         <tr>
                            <td><input name="checked[]" class="dontcheck" id="select_all" type="checkbox" value="<?= $subCatData['id'] ?>" ></td>
                            <td><a href="index.php?p=subcat.edit&id=<?= $subCatData['id'] ?>"><?= $subCatData['id'] ?></a></td>
                            <td><a href="index.php?p=subcat.edit&id=<?= $subCatData['id'] ?>"><?= $subCatData['name'] ?></a></td>
                            <td><a href="index.php?p=subcat.edit&id=<?= $subCatData['id'] ?>" class="btn btn-success btn-sm">Edit Category</a></td>
                            <td>
                                <a href="index.php?p=product.cat&id=<?= $subCatData['id'] ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"> View sub sub categories</i></a>
                            </td>

                            <td>
                                <a href="index.php?p=subpro.subcat&id=<?= $subCatData['id'] ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"> View Products</i></a>
                            </td>

                            
                        </tr>
                        <?php 
                                }
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
                                    $q_d = "DELETE FROM sub_cat WHERE id= $remove_id";
                                        $r_q= mysqli_query($conn, $q_d);
                                        if($r_q){
                                        echo "<script>window.open('?p=subcat.view', '_self');</script>";
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


<script>
  $('.checkbox').on('click',function(){


    if($('.checkbox:checked').length == $('.checkbox').length){


      $('#select_all').prop('checked',true);


    }else{


      $('#select_all').prop('checked',false);


    }


  });
  </script>