<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['id'];
   $_nama = $_POST['tipe'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 2

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO tipe_pakaian (id,tipe) VALUES (?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE tipe_pakaian SET id=?,tipe=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: index.php?hal=table_tipe_pakaian/tipe_pakaian');
?>