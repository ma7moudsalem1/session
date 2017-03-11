<div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Add product</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                        <form method="post" action="" enctype="multipart/form-data" class="container"  style="width: 80%;">
                <div class="input-group  margin-v">
                    <div class="input-group-btn" >
                        <label for="d" class="btn btn-success">Name</label>
                    </div>
                    <input type="text"  name="title"  id="d"  class="form-control input">
                </div><br> 
                <div class="row">
             

                          
                <div class="col-md-12">
                    <div class="box box-info"><div class="box-body">
                            <label for="categ">
                              Sub Category
                            </label>
                    <select required="required" id="categ" class="form-control" name="sub">
                         <option value="" disabled selected>Select Sub-Category</option>
                    <?php 
                        $q = "SELECT * FROM subpro";
                        $r = mysqli_query($conn, $q);
                        while ($f = mysqli_fetch_array($r)) {
                            $pid2[] = $f['subcat'];
                            }
                            
                            
                            $subq = "SELECT * FROM sub_cat ORDER BY id ASC";
                            $subr = mysqli_query($conn, $subq);
                            $counts = mysqli_num_rows($subr);
                            if($counts > 0){
                                while ($subf = mysqli_fetch_array($subr)) {
                                if(in_array($subf['id'], $pid2)){
                                    
                                        continue;
                                    }else{

                    ?>
                        <option value="<?= $subf['id'] ?>"><?= $subf['name'] ?></option>
                      <?php 

                                }
                            }
                        }
                       ?>   
                       </select>
                            </div>
                        </div>
                     </div>

               </div>
              <div class="col-md-4 col-md-offset-8 text-right">
                    <button type="submit" name="submit" class="btn btn-bitbucket btn-lg">Submit</button>
                </div>
                </div>


                <div class="clearfix"></div>
                                <div class="clearfix"></div>

                
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $title = mysqli_real_escape_string($conn, $_POST['title']);
                            $excrept = mysqli_real_escape_string($conn, $_POST['sub']);
                            //$category = mysqli_real_escape_string($conn, $_POST['category']);
                            $url = seo_url($title);
                            //$description = mysqli_real_escape_string($conn, $_POST['description']);
                            //$keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
                            //$content = mysqli_real_escape_string($conn, $_POST['content']);
                            //$pro_time = mysqli_real_escape_string($conn, $_POST['pro_time']);
                            //$to = mysqli_real_escape_string($conn, $_POST['to_time']);
                            //$hotel = mysqli_real_escape_string($conn, $_POST['hotel']);
                            
                            
                            
                                $q = "INSERT INTO products (";
                                    $q .= " title, cat, url";
                                    $q .= ") VALUES (";
                                    $q .= " '$title', $excrept, '$url'";
                                    $q .= ")";
                                    $r= mysqli_query($conn, $q);
                                    $pro = mysqli_insert_id($conn);
                                        

                               
                                   echo "<script>window.open('?p=product.view', '_self')</script>";
                          
                    }

                ?>
            </form>

        </div>
        <!-- /.box-body -->
    </div>
