<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container"> 

      <form class="form-signin" method="POST" action="proseslogin.php" autocomplete="off">
        
		<h3 class="form-signin-heading" align="center">Universitas Airlangga</h3>
		<legend></legend>
		<h4 class="form-signin-heading">Silahkan Login</h4>
        <input type="text" class="input-block-level" placeholder="NIP / NIM" name="user" >
        <input type="password" class="input-block-level" placeholder="Password" name="pass">
                  
        <center><button class="btn btn-large btn-primary" type="submit" name="Login" value="Login">Log in</button></center>
		
		</form>
		
      
	</div>
    </div> <!-- /container -->
	
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>