<?php 
$tanggal=date("dmY");
session_cache_limiter(FALSE); 
session_start();
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
include "config/library.php";
include "config/class_paging.php";
include 'config/transaksi_fungsi.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo"$k_k[nama]";?></title>
    <!-- Bootstrap CSS -->
	
    <link rel="stylesheet" href="tema/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="tema/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="tema/assets/libs/css/style.css">
    <link rel="stylesheet" href="tema/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
	      <div class="footer">
                <div class="container-fluid">
   
                </div>
            </div>

	    <div class="footer">
                            <h2 class="pageheader-title"><?php echo"$k_k[nama]";?></h2>
                             <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">UI Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Carousel</li>
						<li class="breadcrumb-item dropdown">
                            <a  class="breadcrumb-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i>  aka</a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
						
			<div class='row'>	
		          <div class='col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12'>
                        <div class='card'>

                            <div class='card-body'>
                                <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                                    <div class='carousel-inner'>
                                        <div class='carousel-item active'>
                                            <img class='d-block w-100' src='foto/banner.png' alt='First slide'>
                                        </div>
                                        <div class='carousel-item'>
                                            <img class='d-block w-100' src='foto/banner2.png' alt='Second slide'>
                                        </div>
                                        <div class='carousel-item'>
                                            <img class='d-block w-100' src='foto/banner3.png' alt='Third slide'>
                                        </div>
                                    </div>
                                    <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                                   <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                         <span class='sr-only'>Previous</span>   </a>
                                    <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                                       <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                   <span class='sr-only'>Next</span>  </a>
                                </div>
                            </div>
                        </div>
                    </div>
					
					 <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class='simple-card'>
                                <ul class='nav nav-tabs' id='myTab5' role='tablist'>
                                    <li class='nav-item'>
                                        <a class='nav-link active border-left-0' id='home-tab-simple' data-toggle='tab' href='#home-simple' role='tab' aria-controls='home' aria-selected='true'>LOGIN</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' id='profile-tab-simple' data-toggle='tab' href='#profile-simple' role='tab' aria-controls='profile' aria-selected='false'>SYARAT</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' id='contact-tab-simple' data-toggle='tab' href='#contact-simple' role='tab' aria-controls='contact' aria-selected='false'>BUKU</a>
                                    </li>
                                </ul>
                                <div class='tab-content' id='myTabContent5'>
                                    <div class='tab-pane fade show active' id='home-simple' role='tabpanel' aria-labelledby='home-tab-simple'>
                                                     <h5 class="card-header">Form login Anggota</h5>
                            <div class="card-body">
                <div class='col-md-12'>
          <div class='nav-tabs-custom'>
  <form name='form1' id='form_combo' role='form'  method='post' action='cek_login.php'>
 
      	<div class='col-md-12'>
		
		<label>NIK/NISN</label>
			<div class='form-group input-group'>
        <input type='text' class='form-control'  name='nim'  required>
		<span class='input-group-addon'></span></div>
		
		<label>Password</label>
			<div class='form-group input-group'>
        <input type='password' class='form-control'   name='pass'  required>
		<span class='input-group-addon'></span></div>
				
	</div>
	<br />
		<div class='col-md-12'>
            <button class='btn btn-primary btn-sm' type='submit'>Login</button>
          
			<a href='index.aspx' class='btn btn-primary btn-sm'>Kembali</a></div>
	</form>
              
                            </div>
                        </div>
                    </div>   
                                        <a href='#' class='btn btn-secondary'>Go somewhere</a>
                                    </div>
                                    <div class='tab-pane fade' id='profile-simple' role='tabpanel' aria-labelledby='profile-tab-simple'>
                                       <div class='alert alert-danger alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Persayaratan Peminjaman Buku Secara Online di $k_k[nama] Tahun Ajaran $k_k[tahun_ajar] !</h4>
                    <p align='justify'>$k_k[isi] </p>
                </div>
                                    </div>
                                    <div class='tab-pane fade' id='contact-simple' role='tabpanel' aria-labelledby='contact-tab-simple'>
                                       ISU
                                    </div>
                                </div>
                            </div>

	</div>
</div>
    <!-- Optional JavaScript -->
    <script src="tema/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="tema/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="tema/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="tema/assets/libs/js/main-js.js"></script>
</body>

</html>