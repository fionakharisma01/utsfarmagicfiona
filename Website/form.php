<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "berbagi";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$name           = "";
$email          = "";
$subjectt        = "";
$message        = "";
$sukses         = "";
$error          = "";

if(isset($_GET['op'])){
	$op = $_GET['op'];
}else{
	$op = "";
}

if($op == 'delete'){
	$id			= $_GET['id'];
	$sql1		= "delete from cerita where id = '$id'";
	$q1			= mysqli_query($koneksi,$sql1);
	if($q1){
		$sukses = "Berhasil hapus data";
	}else{
		$error = "Gagal hapus data";
	}
}


if ($op == 'edit') { //untuk update
    $id         = $_GET['id'];
    $sql1       = "select * from cerita where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $name       = isset($r1['name']) ? $r1['name'] : '';
    $email      = isset($r1['email']) ? $r1['email'] : '';
    $subjectt    = isset($r1['subjectt']) ? $r1['subjectt'] : '';
    $message  	= isset($r1['message']) ? $r1['message'] : '';

    if ($name == '') {
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])){ //untuk create
    $name      = $_POST['name'];
    $email     = $_POST['email'];
    $subjectt   = $_POST['subjectt'];
    $message   = $_POST['message'];

    if ($name && $email && $subjectt && $message) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update cerita set name = '$name',email='$email',subjectt = '$subjectt',message='$message' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into cerita(name,email,subjectt,message) values ('$name','$email','$subjectt','$message')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farmagic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	    <!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   
	
		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
	
		<!-- Libraries Stylesheet -->
		<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	
		<!-- Customized Bootstrap Stylesheet -->
		<link href="csss/style.css" rel="stylesheet">
		   <!-- site metas -->
		   <title>Farmagic</title>
		   <meta name="keywords" content="">
		   <meta name="description" content="">
		   <meta name="author" content="">
		   <!-- bootstrap css -->
		   <link rel="stylesheet" href="css/bootstrap.min.css">
		   <!-- style css -->
		   <link rel="stylesheet" href="css/style.css">
		   <!-- Responsive-->
		   <link rel="stylesheet" href="css/responsive.css">
		   <!-- fevicon -->
		   <link rel="icon" href="images/fevicon.png" type="image/gif" />
		   <!-- Scrollbar Custom CSS -->
		   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
		   <!-- Tweaks for older IEs-->
		   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
		   <!--[if lt IE 9]>
		   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->   
		       <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="csssss/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- site metas -->
       <title>Farmagic</title>
       <meta name="keywords" content="">
       <meta name="description" content="">
       <meta name="author" content="">
       <!-- bootstrap css -->
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <!-- style css -->
       <link rel="stylesheet" href="css/style.css">
       <!-- Responsive-->
       <link rel="stylesheet" href="css/responsive.css">
       <!-- fevicon -->
       <link rel="icon" href="images/fevicon.png" type="image/gif" />
       <!-- Scrollbar Custom CSS -->
       <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
       <!-- Tweaks for older IEs-->
       <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
       <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->   
       <style>
        .mx-auto {
            width: 1155px
        }

        .card {
            margin-top: 5px;
        }
        </style>
</head>
<body class="main-layout inner_header about_page">
	
	<!-- header -->
	<header>
	  <!-- header inner -->
	  <div class="header">
		 <div class="container">
			<div class="row">
			   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
				  <div class="full">
					 <div class="center-desk">
						<div class="logo">
						 <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Farmagic </a>
						</div>
					 </div>
				  </div>
			   </div>
			   <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
				  <nav class="navigation navbar navbar-expand-md navbar-dark ">
					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
					 <span class="navbar-toggler-icon"></span>
					 </button>
					 <div class="collapse navbar-collapse" id="navbarsExample04">
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item">
							  <a class="nav-link" href="index.html">Beranda</a>
						   </li>
						   <li class="nav-item ">
							  <a class="nav-link" href="berita.html">Berita</a>
						   </li>					
						   <li class="nav-item">
							  <a class="nav-link" href="fakta.html">Fakta Menarik</a>
						   </li>            
						   <li class="nav-item active">
							  <a class="nav-link" href="berbagi.html">Berbagi</a>
						   </li>                                                		  
						   <li class="nav-item">
							  <a class="nav-link" href="about.html">Tentang</a>
						   </li>
						   <li class="nav-item d_none">
							  <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
						   </li>
						   <li class="nav-item d_none">
							<a class="nav-link" href="../index.php"><i class="fa fa-sign-out"></i></a>
						 </li>
						</ul>
					 </div>
				  </nav>
			   </div>
			</div>
		 </div>
	  </div>
   </header>
<body>
            <?php
            if($error){
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error?>
                </div>
            <?php
            }
            ?>
            <?php
            if($sukses){
                ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sukses?>
                </div>
            <?php
            }
            ?>  
	<div class="contact1">
		<div class="container-contact1">  
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>        
			<form class="contact1-form validate-form" action="" method="post">
				<span class="contact1-form-title">
					Berbagi Disini
				</span>
				<div class="wrap-input1 validate-input" data-validate = "Nama is required">
					<input class="input1" type="text" name="name" id="name" placeholder="Nama" value="<?php echo $name?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" id="email" placeholder="Email" value="<?php echo $email?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subjectt" id="subjectt" placeholder="Subject" value="<?php echo $subjectt?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Berbagi is required">
					<input class="input1" type="text" name="message" id="message" placeholder="Berbagi Pengalamanmu" value="<?php echo $message?>">
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
                            <input type="submit" name="simpan" value="Kirim" />
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="contact1">	
<a href="../fc/chartssss.php" id="generate">Klik disini untuk Fusion Chart Berbagi</a>
		</div>

<!--Import Data-->
<div class="contact1">
<div class="mx-auto">
				<h4>Form Data</h4>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="data">
					<input type="submit" name="input" value="INSERT" class="btn btn-primary mt-3">
				</form>
			</div>
		</div>
		</div>
<script type="text/javascript" src="css/bootstrap.min.js"></script>

<?php
	if(isset($_POST['input'])){
		$urut   = 1;
		$datanama  =  $_FILES['data']['name'];
		$datatmp   =  $_FILES['data']['tmp_name'];	
		$exe       =  pathinfo($datanama, PATHINFO_EXTENSION);
		$folder    = 'file/';
         
		if($exe=='xlsx'){
			$upload = move_uploaded_file($datatmp, $folder.$datanama);
			if($upload){
				$open = fopen($folder.$datanama, 'r');
				while (($row = fgetxlsx($open, 1000, ','))!==FALSE ) {
					    $sql = mysqli_query($koneksi,"INSERT INTO cerita
					    VALUES('','".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."') ")or die('Error: ' . mysqli_error($koneksi));;

				}

			}else{
				echo "Gagal diupload";
			}
		}else{
			echo "Bukan File CSV";
		}

	}
?>
<!---->

<!-- untuk read data-->
<div class="contact1">
<div class="mx-auto">
    <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Berbagi
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Cerita</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        <tbody>
                            <?php
                            $sql2   = "select * from cerita order by id desc";
                            $q2     = mysqli_query($koneksi,$sql2);
                            $urut   = 1;
                            while($r2 = mysqli_fetch_array($q2)){
                                $id         = $r2['id'];
                                $name       = $r2['name'];
                                $email      = $r2['email'];
                                $subjectt    = $r2['subjectt'];
                                $message    = $r2['message'];
                           ?>
                            <tr>
                                <th scope="row"> <?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $name?></td>
                                <td scope="row"><?php echo $email?></td>
                                <td scope="row"><?php echo $subjectt?></td>
                                <td scope="row"><?php echo $message?></td>
                                <td scope="row">
                                    <a href="form.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="form.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau hapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>

                           <?php

                           
                            }
                            ?>
                        </tbody>
                    </thead>
                </table>
            </div>
     </div>
</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
     <!--  footer -->
	 <footer>
		<div class="footer">
		   <div class="container">
			  <div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
					<h3> <i class="fas fa-lightbulb"></i> Farmagic </h3>
					<ul class="about_us">
					   <li>Petani Milenial  Kunci Ketahanan Pangan Indonesia</li>
					</ul>
				 </div>

				 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
					<h3>Sitemap</h3>
					<ul class="link_menu">
					   <li><a href="index.html">Beranda</a></li>
					   <li><a href="berita.html">Berita</a></li>
					   <li><a href="fakta.html">Fakta Menarik</a></li>
					   <li><a href="berbagi.html">Berbagi</a></li>
					   <li><a href="about.html">Tentang</a></li>
					</ul>
				 </div>
				 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
					<h3>Media Sosial</h3>
					<ul class="social_icon">
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					 </ul>
				 </div>				 
			  </div>
		   </div>
		   <div class="copyright">
			  <div class="container">
				 <div class="row">
					<div class="col-md-10 offset-md-1">
					   <p>© 2022 All Rights Reserved. Design by <a href=about.html>Farmagic</a></p>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
	 </footer>
	 <!-- end footer -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->
	<script src="js/mainn.js"></script>

</body>
</html>

