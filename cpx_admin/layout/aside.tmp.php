<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../uploads/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $admin_data['name'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
         
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="index.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
<!--                <ul class="treeview-menu">-->
<!--                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>-->
<!--                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>-->
<!--                </ul>-->
            </li>
            <?php
              //$navData = getData('admin_control');
            $admin_pr = $_SESSION['id'];
            if($admin_pr == 1){
            $q    = "SELECT * FROM admin_control";
            $r    = mysqli_query($conn, $q);
              while ($nav = mysqli_fetch_array($r)) {
                 //$subIcon = getDataById('admin_control')
               
            ?>
                      <li class="treeview">
                   <a href="index.php?p=<?= $nav['url'] ?>">
                       <i class="<?= $nav['icon'] ?>"></i>
                       <span><?= $nav['name'] ?></span>
                       <i class="fa fa-angle-left pull-right"></i>
                   </a>
                   <ul class="treeview-menu">
                      <li><a href="index.php?p=<?= $nav['url'] ?>"><i class="<?= $nav['icon2'] ?>"></i> <?= $nav['name2'] ?></a></li>
                      <?php 
                      if($nav['icon3'] != null){
                      ?>
                    <li><a href="index.php?p=<?= $nav['url2'] ?>"><i class="<?= $nav['icon3'] ?>"></i> <?= $nav['name3'] ?></a></li>
                      <?php } ?> 
                   </ul>
                   </li>
                       <?php }
                     } else {
                      $adq = "SELECT * FROM admin_prm WHERE id_admin = $admin_pr AND stutes = 1 ORDER BY id_prm ASC";
                      $radq = mysqli_query($conn, $adq);
                      while($showadm = mysqli_fetch_array($radq)){
                        $menu_id = $showadm['id_prm'];
                        $q    = "SELECT * FROM admin_control WHERE id = $menu_id";
                        $r    = mysqli_query($conn, $q);
                    while ($nav = mysqli_fetch_array($r)){
                       ?> 
                       <li class="treeview">
                   <a href="index.php?p=<?= $nav['url'] ?>">
                       <i class="<?= $nav['icon'] ?>"></i>
                       <span><?= $nav['name'] ?></span>
                       <i class="fa fa-angle-left pull-right"></i>
                   </a>
                   <ul class="treeview-menu">
                      <li><a href="index.php?p=<?= $nav['url'] ?>"><i class="<?= $nav['icon2'] ?>"></i> <?= $nav['name2'] ?></a></li>
                      <?php 
                      if($nav['icon3'] != null){
                      ?>
                    <li><a href="index.php?p=<?= $nav['url2'] ?>"><i class="<?= $nav['icon3'] ?>"></i> <?= $nav['name3'] ?></a></li>
                      <?php } ?> 
                   </ul>
                   </li>
                       <?php
                       }
                     }
                   }
                       ?>  
                     
                
           

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
         <script>
            var browser = '';
            var browserVersion = 0;

            if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Opera';
} else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
    browser = 'MSIE';
} else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Netscape';
} else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Chrome';
} else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Safari';
    /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
                browserVersion = new Number(RegExp.$1);
            } else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Firefox';
}else
            {
                browser = 'Other';
            }
            if(browserVersion === 0){
                browserVersion = parseFloat(new Number(RegExp.$1));
            }
            browser;

        </script>
        <?php
     $current_admin_id = $_SESSION['id'];
    if($current_admin_id != 1){
    if(isset($_GET['p'])){
    $page_var  = explode('.', mysqli_real_escape_string($conn, $_GET['p']));
    $page_var2 = $page_var[0];
    $page_var  = $page_var2 .'.view';
            $q_page = "SELECT * FROM admin_control WHERE url = '$page_var' LIMIT 1";
            $r_page = mysqli_query($conn, $q_page);
            if($r_page){
                $f_page = mysqli_fetch_array($r_page);
                $page_id =$f_page['id'];
                
                $q_prm = "SELECT * FROM admin_prm WHERE id_admin = $current_admin_id AND id_prm = $page_id";
                $r_prm = mysqli_query($conn, $q_prm);
                if($r_prm){
                    $prm_count = mysqli_num_rows($r_prm);
                    if($prm_count == 0){
                        echo "<script>window.open('index.php', '_self')</script>";
                    }
                }
            }
        }
    }
    ?>

     <div class="">
<!-- Content Header (Page header) -->

<section class="content-header">
     <?php
        if(isset($_GET['p']))
        {
            
            $var_ex = explode('.', $_GET['p']);
                if($var_ex[0] == 'subcat'){
                    $var_ex[0] = 'Sub Categories';
                    
                }elseif($var_ex[0] == 'images'){
                    $var_ex[0] = 'Slider';
                    
                }elseif($var_ex[0] == 'social'){
                    $var_ex[0] = 'Social Links';
                    
                }elseif($var_ex[0] == 'options'){
                    $var_ex[0] = 'Site Options';
                    
                }elseif($var_ex[0] == 'subpro'){
                    $var_ex[0] = 'Products';
                    
                }elseif($var_ex[0] == 'product'){
                    $var_ex[0] = 'Sub sub Categories';
                    
                }
            ?>
      <h1>
        <?= $var_ex[0] ?>
        <small>Control panel / Manage <?= $var_ex[0] ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $var_ex[0] ?></li>
    </ol>
    
    <?php
     }else{
    ?>
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <?php
        }
    ?>
</section>

<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
   
