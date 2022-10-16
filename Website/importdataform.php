<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load("databerbagi.xlsx");
$data=$spreadsheet->getSheet(0)->toArray();

//print_r($data); //mencetak $data yang dibaca dari index 0

$kon = mysqli_connect("localhost","root","","berbagi"); //menghubungkan ke localhost database evieta

if ($kon->connect_error) {
    die("Connection failed: " . $kon->connect_error);
  }
  echo "Connected successfully and database connected";
  
$N = count($data); 
for($i=1; $i<$N; $i++){
    //echo $data[$i][0]; //mencetak isi dari index 0 dan baris ke 1 yaitu data dari bulan
    
    $s = "INSERT INTO `cerita` (`id`, `name`, `email`, `subject`, `message`) 
               VALUES 
               (NULL, '".$data[$i][0]."', '".$data[$i][1]."', '".$data[$i][2]."')"; //mencetak query dari $data yang isinya data dari id yang NUL, bulan, tahun dan revenue
    echo "<br>";
    mysqli_query($kon,$s); //membaca data $s yaitu data spreadsheet dan memasukan data spreadsheet tersebut kedalam $kon yaitu ke database
}
$result = mysqli_query($kon, $s);

if ($result) {
       echo 'Inserted Success';
    } else {
        echo 'Inserted Failed.';
    }
?>