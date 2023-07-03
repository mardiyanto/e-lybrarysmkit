
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tema/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="tema/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="tema/assets/libs/css/style.css">
    <link rel="stylesheet" href="tema/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="tema/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="tema/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="tema/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="tema/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
	
    <title>ELYB <?php echo"$k_k[nama]";?></title>
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
                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link"><i class="fas fa-outdent"></i>HOME</a></li>
                        <li class="breadcrumb-item"><a href="xxx.php?module=bukulih" class="breadcrumb-link"><i class="fas fa-book"></i>BUKU</a></li>
						
						<? if( $_SESSION[anggota]==''){?>
<li class="breadcrumb-item"><a href="xxx.php?module=daftarango" class="breadcrumb-link"><i class="fa fa-fw fa-rocket"></i>DAFTAR</a></li>
<li class="breadcrumb-item"><a href="xxx.php?module=loginango" class="breadcrumb-link"><i class="fa fa-fw fa-rocket"></i>LOGIN</a></li>
						   <? }else{?>
						   <li class="breadcrumb-item dropdown">
                            <a  class="breadcrumb-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i><?=$_SESSION[nama]?></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?=$_SESSION[nama]?></h5>
                                </div>
                                <a class="dropdown-item" href="xxx.php?module=histori"><i class="fas fa-fw fa-table"></i>Histori Bukut</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
							<? }?>

                                    </ol>
                                </nav>
                            </div>
                        </div>
<?php include "int.php"; ?>
 <div class="footer">
                <div class="container-fluid">
   
                </div>
            </div>
   <script src="tema/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="tema/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="tema/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="tema/assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="tema/assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="tema/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="tema/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="tema/assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
</body>
 
</html>
