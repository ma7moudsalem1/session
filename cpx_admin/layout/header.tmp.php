<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cpx_admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
     <!--<script src="resources/plugins/jQuery/jQuery-2.2.3.min.js"></script>-->    
  

<script src="resources/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="resources/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="resources/plugins/iCheck/all.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="resources/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="resources/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="resources/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="resources/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="resources/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="resources/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="resources/plugins/colorpicker/bootstrap-colorpicker.min.css">

    <link rel="stylesheet" type="text/css" href="resources/plugins/ckeditor/skins/moono/editor.css">
    <link rel="stylesheet" type="text/css" href="resources/plugins/ckeditor/skins/moono/dialog.css">

    
     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
     <script>tinymce.init({ selector:'#textarea' });</script>
    <script src="resources/plugins/ckeditor/samples/assets/uilanguages/languages.js"></script>
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- <script
  src="https://code.jquery.com/jquery-2.0.2.js"
  integrity="sha256-0u0HIBCKddsNUySLqONjMmWAZMQYlxTRbA8RfvtCAW0="
  crossorigin="anonymous"></script>-->
  <script src="resources/plugins/ckeditor/ckeditor.js"></script>
<script src='http://cdn.ckeditor.com/4.5.11/full/ckeditor.js'></script>
      <script src="http://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

  
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <style type="text/css">
   .col-md-6,
   .col-md-12,
    .margin-v{margin-bottom: 25px}
   
    .skin-blue .sidebar-menu > li > a{padding: 12px}
   </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--></head>
<body class="hold-transition skin-blue ">
<div class="wrapper">

  <header class="main-header">
<!-- Logo -->
<a href="index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>i</b>Panel</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>iPanel </b>Admin</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
</a>

<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->
    <li class="">
        <a href="../index.php" target="_blank">
          <i class="fa fa-eye"></i>  &nbsp; View My Website
        </a>
    </li>
    <?php
        $qu    = "SELECT * FROM messages WHERE stutes = 0";
        $ru    = mysqli_query($conn, $qu);
        $urread = mysqli_num_rows($ru);
    ?>
    <li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope-o"></i>
                <span class="label label-success"><?php 
                $c = getCount('messages'); 
                if($urread != 0){
                    echo $urread;
                }
                ?></span>
            </a>
    <ul class="dropdown-menu">
    

        <li class="header">you have <?php echo getCount('messages'); ?> messages and <? echo  $urread ?> unread <?php  echo $f_r['email'] ?></li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <?php
                    $u_messages_q = "SELECT * FROM messages WHERE stutes = 0";
                    $u_messages_r = mysqli_query($conn, $u_messages_q);
                
                    if($urread != 0){
                    while($u_messages_f = mysqli_fetch_array($u_messages_r)){
                ?>
                 <li><!-- start message -->
                    <a href="index.php?p=mail.single&id=<?= $u_messages_f['id'] ?>">
                        <div class="pull-left">
                            <img src="../uploads/avatar5.png" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            <?= $u_messages_f['name'] ?>                            
                        </h4>
                        <p><?= substr($u_messages_f['message'],0,80).'...' ?></p>
                    </a>
                </li>
                <?php
                    }
                        
                    }else{
                        ?>
                <li><a><p>You have no unreading message</p></a></li>
                <?php
                    }
                ?>
                
                            
                            
                           
                             
                
            </ul>
        </li>
        <li class="footer"><a href="index.php?p=mail.view">See All Messages</a></li>
    </ul>
</li>
    <!-- Notifications: style can be found in dropdown.less -->

<!-- Tasks: style can be found in dropdown.less -->

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="../uploads/avatar5.png" class="user-image" alt="User Image">
        <span class="hidden-xs"><?php $admin_data = getDataById('admins', $_SESSION['id']); echo $admin_data['name']; ?></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="../uploads/avatar5.png" class="img-circle" alt="User Image">

            <p>
                <?= $admin_data['name'] ?>
            </p>
        </li>
        <li class="user-body">
            <div class=" row text-center">
                <a href="?p=users.single&id=<?= $_SESSION['id'] ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i> Change Password</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
                        <div class="pull-left">
                <a href="?p=users.view" class="btn btn-default btn-flat">All Users</a>
            </div>
            
            <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>

        </li>
    </ul>
</li>
<!-- Control Sidebar Toggle Button -->
<!--         <removed>-->
</ul>
</div>
</nav>
</header>
    <!-- Left side column. contains <thead></thead> logo and sidebar -->