<div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Add category</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="post" action="#" enctype="multipart/form-data" class="container"  style="width: 80%;">
                <div class="col-md-12">
                    <div class="input-group  margin-v">
                    <div class="input-group-btn" >
                        <label for="d" class="btn btn-success">Title</label>
                    </div>
                    <input type="text"  name="title"  id="d"  class="form-control input">
                </div>
                </div>
               
              


                <div class="clearfix"></div>

                <div class="col-md-4 col-md-offset-8 text-right">
                    <button type="submit" name="submit" class="btn btn-bitbucket btn-lg">Submit</button>
                </div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $title = mysqli_real_escape_string($conn, $_POST['title']);            
                            $url = seo_url($title);

                                $q = "INSERT INTO category (";
                                    $q .= " name, url";
                                    $q .= ") VALUES (";
                                    $q .= " '$title', '$url'";
                                    $q .= ")";
                                    $r= mysqli_query($conn, $q);
                                    if($r){
                                        //echo "<script>alert('One category Added.')</script>";
                                     
                                        echo "<script>window.open('?p=categories.view', '_self')</script>";
                                    }else{
                                        echo "<div class='alert alert-danger'> category Not Added</div>";
                                    }
                                    
                          
                    }

                ?>
            </form>

        </div>
        <!-- /.box-body -->
    </div>

