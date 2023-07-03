<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tema/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="tema/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="tema/assets/libs/css/style.css">
    <link rel="stylesheet" href="tema/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.php"><img class="logo-img" src="tema/assets/images/logo.png" alt="logo"></a>
										  <? if($_GET[salah]=='salah'){
		  echo"
		 <span class='splash-description'>
                    Maaf Login Salah !!
                </span>";
		}else{
		  echo"<span class='splash-description'>
                    Masukan Username dan password
                </span>
		  ";
		}
		?> 	
</div>
            <div class="card-body">
	
                <form action="log-member.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="user" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="pass" type="password" placeholder="Password">
                    </div>
               
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="xxx.php?module=home" class="footer-link">HOME</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="xxx.php?module=bukulih" class="footer-link">BUKU</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="tema/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="tema/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>