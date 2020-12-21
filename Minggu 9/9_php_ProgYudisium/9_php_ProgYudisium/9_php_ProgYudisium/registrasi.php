<?php
include "conn.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
           <!--[if lt IE 11]> 
            <link href="css/ie9.css" rel="stylesheet" type="text/css" />
           <![endif]-->
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  			<link href="js/select/select2.min.css" rel="stylesheet" type="text/css">           
            <link href="css/helper.css" rel="stylesheet" type="text/css" />
            <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
            <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
            <link href="css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" />
            <link href="css/style.css" rel="stylesheet" type="text/css" />
        
        <link rel="shortcut icon" href="bkgk.png"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
      <title>Driver</title>
      <style type="text/css">
<!--
.style1 {font-size: 36px}
.style4 {font-size: 125%}
.style5 {font-size: 120%}
-->
      </style>
</head>
<body>
	<div class="load">
        <img src="img/loading.GIF" alt="loading">
    </div>
    
    <!-- ============HEADER============= -->  
    
    <header>
        <div class="full-width header">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="navigation">
					  
                          <div class="menu-mobile-icon menu-hide">
                             <img src="img/mobile.png" alt="mobile">
                          </div>
                           <div class="logo-wrapper">
                               <a href="index.html">   
                                   <!--<img src="img/bkgk.png" alt="logo"> -->
                               </a>    
                        </div>
                           <nav>
                                <span class="fa fa-times close-menu"></span>
                                <div class="link">
                                   <a href="index.html" class="active">home</a>
                                    <div class="line"></div>
                             </div>
							 <div class="link">
                                   <a href="team.html">our team</a>
                                    <div class="line"></div>
                             </div>
							 <div class="link">
                                   <a href="about.html">about us</a>
                                    <div class="line"></div>
                             </div>
							 
                                <!--<div class="link drop-menu">
                                   <a href="#">pages</a>
                                    <div class="line"></div> 
                                       <span class="drop-down">
                                           <a href="page.html">Pages</a>
                                           <a href="practice_test2.html">Choose a Test</a>
                                       </span>
                             </div>
                                <div class="link drop-menu">
                                   <a href="#">about us</a>
                                    <div class="line"></div> 
                                       <span class="drop-down">
                                           <a href="about.html">About us</a>
                                           <a href="team.html">Our team</a>
                                       </span>
                             </div>
                                <!--<div class="link">
                                   <a href="pricing.html">pricing plans</a>
                                    <div class="line"></div>
                             </div>
                                <div class="link">
                                   <a href="joinus.html">join us</a>
                                    <div class="line"></div>
                             </div>
                                <div class="link drop-menu">
                                   <a href="">Blog</a>
                                    <div class="line"></div>
                                       <span class="drop-down">
                                           <a href="blog-grid.html">Blog Grid</a>
                                           <a href="blog-list.html">Blog List</a>
                                       </span>
                             </div>
                                <div class="link drop-menu">
                                   <a href="">gallery</a>
                                    <div class="line"></div>
                                       <span class="drop-down">
                                           <a href="gallery_two_columns.html">Gallery Two Columns</a>
                                           <a href="gallery_three_columns.html">Gallery Three Columns</a>
                                       </span>
                             </div> -->
                                <div class="link">
                                   <a href="contact.html">contact us</a>
                                    <div class="line"></div>
                             </div>
                        </nav>               
                      </div>
                </div>
              </div>
          </div>    
        </div>
    </header>
    
    <!-- ============MAIN BANER============= -->
    
    <div class="full-width main-baner"> 
          <div class="layer-main-baner"></div>
          <div class="container">
              <div class="row">
                  <div class="col-md-7 col-md-offset-5 col-sm-12">
                    <div class="home-contact-form">
                    <div class="home-contact-form-wrap">
                     <h1><span class="style1">BKGK (Badan Kegiatan Guru Karyawan) </span><br>SMP YP 17 <span class="blue-color">Surabaya</span><span class="style1"></span></h1>
                      <div class="contact-form">
                        <div class="form-header">
                            <h3>Register Now</h3>
                        </div>
                         <form action="register.php" method="post" enctype="multipart/form-data">
                           <div class="form">
                             <input type="text" placeholder="NIK" name="user" required>
                             <input type="text" placeholder="Name" name="nama" required>
									  <input type="text" placeholder="Address" name="alamat" required>
                                      <input type="text" placeholder="Phone Number" name="telp" required>
									  <select class="form-control select2" name="kota" id="jenis_kelamin">
                                                <option value="" selected="selected">Kota Lahir</option>
												<?php 
												
												$kota=mysql_query("SELECT * FROM kota");
												while($k=mysql_fetch_array($kota)){?>
                                               <option value="<?php echo $k[0];?>"><?php echo $k[1];?></option>
											   <?php }?>
							 </select>
									   
                                      <div class="date-wrap">
                                          <input type="text" placeholder="Your Birth Date" class="datepicker" name="tgl_lahir">
                                          <img src="img/calendar.png" alt="calendar">
                                      </div>
												<select name="jenis_kelamin" id="jenis_kelamin">
                                                <option value="" selected="selected">Pilih Jenis Kelamin</option>
                                                <option value="P">Perempuan</option>
                                                <option value="L">Laki-Laki</option>
												</select>
												
												<select name="pekerjaan" id="jenis_kelamin">
												<option value="" selected="selected">Pilih Jabatan</option>
												<option value="guru">Guru</option>
												<option value="staff">Staff</option>
												</select>
												<table width="420" border="0">
  <tr>
  <td><input type='file' class="form-control" placeholder="Photos" name="gambar" required/></td>
  <td><span class="style4">*Foto max 500MB</span></td>
  </tr>
</table>
                                                <table width="475" border="0">
  <tr>
  <td><input class="form-password" type="password" placeholder="Masukkan kata sandi anda" name="pass" required></td>
    <td width="20"><input type="checkbox" class="form-checkbox"></td>
    <td><span class="style4">Show password</span></td>
  </tr>
  </table>
  
										
						   <a href="index.html" class="btn-link style5">Sudah memiliki akun?</a>
						   <br><a href="lupapass.php" class="btn-link style5">Lupa Password?</a></br>
						                                </div>   
                                    <div class="send-button">
                                        <input type="submit" value="Register" name="submit">
                                    </div>  
                        </form>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          
          <div class="swiper-container home-baner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="home-img">
                        <div class="bg-bg" style="background-image:url(img/smpyp.png)">
                        </div>
                   </div>              
                </div>
                <div class="swiper-slide">           
                    <div class="home-img">
                        <div class="bg-bg" style="background-image:url(img/guru.jpg)">
                        </div>
                   </div>
                </div>
                <div class="swiper-slide">           
                    <div class="home-img">
                        <div class="bg-bg" style="background-image:url(img/smpkoperasi.jpg)">
                        </div>
                   </div>
                </div>
            </div>
        </div>
        
    </div>
        
    </div>

   <div class="our-offers">
       <div class="container">
           <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="our-offers-block">
                  <img src="img/rumah.png" alt="icon" class="offers-icon"> 
                    <h2>SMP YP 17 Surabaya</h2>
                    <p>Merupakan sekolah swasta yg berada di Jl.Randu no 17 Surabaya.</p>
                </div> 
                <span class="separator separ">
                    <img src="img/separator.png" alt="separator">
                </span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="our-offers-block">
                   <img src="img/offers_icon_2.png" alt="icon" class="offers-icon"> 
                    <h2>Anggota BKGK</h2>
                    <p>Jadilah anggotanya sekarang</p>
                </div>
                <span class="separator">
                    <img src="img/separator.png" alt="separator">
                </span> 
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="our-offers-block leftstep">
                   <img src="img/offers_icon_3.png" alt="icon" class="offers-icon"> 
                    <h2>Proses mudah</h2>
                    <p>Segera jadilah yang pertama menikamati keuntungannya</p>
                </div> 
            </div>
          </div>
       </div>  
   </div>
   

       <div class="footer-link">       
          <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                   <div class="about-footer-link">
                       <h6>Tentang kami</h6>
                           <ul>
                               <li><a href="team.html">Jajaran Pengurus</a></li>
                               <li><a href="about.html">Profil Sekolah</a></li>
                               <li><a href="contact.html">contact</a></li>
                           </ul>
                   </div>  
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-12">
                   <div class="adress-footer-link">
                    <h6>Contact</h6>
                       <ul class="adress-data">
                           <li><img src="img/footer_icon_1.png" alt="icon"><a href="tel:">031-3763721</a></li>
                           <li><img src="img/footer_icon_2.png" alt="icon"><a href="mailto:" class="footer-mail">smpyp17surabaya@gmail.com</a></li>
                           <li><img src="img/footer_icon_3.png" alt="icon">Jl.Randu no 17 Kenjeran Surabaya, Jawa Timur</li>
                       </ul>
                  </div>   
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                   <div class="footer-logo">
                       <a href="index.html"><img src="img/bkgk.png" alt="logotype"></a>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                       <span></span>
                        <div class="footer-follow">
                            <a href="" class="fa fa-facebook"></a>
                            <a href="" class="fa fa-twitter"></a>
                            <a href="" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>          
    </footer>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/select/select2.full.js" type="text/javascript"></script>
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/all.js"></script>
</body>
<script>
    $(document).ready(function() {
      $(".select2_single").select2({
        //placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        //placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  </script>
  <!-- /select2 -->
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>
</html>