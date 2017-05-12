<!DOCTYPE html>
<html>
  <head>
    <title>Ampera Answer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo site_url('asset/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo site_url('asset/css/styles.css')?>" rel="stylesheet">

	<link href="<?php echo site_url('asset/formvalidation/dist/css/formValidation.min.css');?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/jquery/jquery.autocomplete.css') ?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/jquery/jquery-ui.min.css') ?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/font/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?php echo site_url()?>asset/DataTables/media/css/jquery.dataTables.css" rel="stylesheet">
	<link href="<?php echo site_url()?>asset/DataTables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	<script src="<?php echo site_url('asset/jquery/jquery.min.js')?>"></script>
	<script src="<?php echo site_url('asset/formvalidation/dist/js/formValidation.min.js');?>"></script>
	<script src="<?php echo site_url()?>asset/DataTables/media/js/jquery.js" type="text/javascript" ></script>
	<script src="<?php echo site_url()?>asset/DataTables/media/js/jquery.dataTables.js" type="text/javascript" ></script>
	<script src="<?php echo site_url('asset/formvalidation/dist/js/formValidation.min.js');?>"></script>
	<script src="<?php echo site_url('asset/formvalidation/dist/js/framework/bootstrap.min.js');?>"></script>
	<script src="<?php echo site_url('asset/jquery/jquery.autocomplete.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('asset/jquery/jquery-ui.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('asset/ckeditor/ckeditor.js');?>"></script>
	<script src="<?php echo site_url('asset/ckeditor/styles.js');?>"></script>
	<script src="<?php echo site_url('asset/ckeditor/adapters/jquery.js');?>"></script>
	
    <!-- styles -->
   
	
	
	
	
	
	
	
	<script src="<?php echo site_url('asset/jquery/jquery.autocomplete.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('asset/jquery/jquery-ui.min.js') ?>" type="text/javascript"></script>
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo site_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo site_url('asset/js/custom.js')?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Admin</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="<?php if($this->session->userdata('content')=="home"){echo "current";}?>"><a href="<?php echo site_url('');?>"><i class="glyphicon glyphicon-home"></i> Data Budaya</a></li>
                    <li <?php if($this->session->userdata('content')=="readpdf"){echo 'class="current"';}?>><a href="<?php echo site_url('readpdf');	?>"><i class="glyphicon glyphicon-calendar"></i> Profil Admin</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <?php if($this->session->userdata('content')=="readpdf"){
					$this->load->view('readpdf.php');
				}
				else if($this->session->userdata('content')=='home'){
					$this->load->view('home');
				}
				else if($this->session->userdata('content')=='stemming'){
					$this->load->view('stemming');
				}
				else if($this->session->userdata('content')=='topik'){
					$this->load->view('topik');
				}
				else if($this->session->userdata('content')=='pengumuman'){
					$this->load->view('pengumumanadmin');
				}
			?>

		  
		  
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 UKMC
            </div>
            
         </div>
      </footer>

    
  </body>
</html>