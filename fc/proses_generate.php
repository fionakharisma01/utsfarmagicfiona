<?php
include("koneksi.php");

//Subject Hama
$query = 'SELECT subjectt from cerita WHERE subjectt="Hama"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Hama"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Hama'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Hama','$total')";
  mysqli_query($koneksi,$insert);
}

//Subject Kompos
$query = 'SELECT subjectt from cerita WHERE subjectt="Kompos"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Kompos"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Kompos'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Kompos','$total')";
  mysqli_query($koneksi,$insert);
}


//Subject Tanaman
$query = 'SELECT subjectt from cerita WHERE subjectt="Tanaman"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Tanaman"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Tanaman'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Tanaman','$total')";
  mysqli_query($koneksi,$insert);
}

//Subject Listrik
$query = 'SELECT subjectt from cerita WHERE subjectt="Listrik"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Listrik"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Listrik'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Listrik','$total')";
  mysqli_query($koneksi,$insert);
}

//Subject Kelapa
$query = 'SELECT subjectt from cerita WHERE subjectt="Kelapa"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Kelapa"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Kelapa'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Kelapa','$total')";
  mysqli_query($koneksi,$insert);
}

//Subject Pupuk
$query = 'SELECT subjectt from cerita WHERE subjectt="Pupuk"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Pupuk"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Pupuk'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Pupuk','$total')";
  mysqli_query($koneksi,$insert);
}

//Subject Tanah
$query = 'SELECT subjectt from cerita WHERE subjectt="Tanah"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Tanah"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Tanah'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Tanah','$total')";
  mysqli_query($koneksi,$insert);
}

//Subject Pertanian
$query = 'SELECT subjectt from cerita WHERE subjectt="Pertanian"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);
$cek = 'SELECT * FROM data_subject WHERE subjectt="Pertanian"';

if (mysqli_num_rows(mysqli_query($koneksi,$cek)) !=0 ) {
  $update ="UPDATE data_subject SET jumlah='$total' WHERE subjectt='Pertanian'";
  mysqli_query($koneksi,$update);
}
else {
  $insert="INSERT INTO data_subject VALUES('Pertanian','$total')";
  mysqli_query($koneksi,$insert);
}
 ?>
