<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['id'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['ukuran'];
   $_harga = $_POST['warna'];
   $_harga = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_harga = $_POST['tipe_pakaian_id'];
   

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 2
   $ar_data[]=$_tanggal;// 3
   $ar_data[]=$_pakaian_id;
   $ar_data[]=$_quantity;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (id,nama,ukuran,warna,stok,harga,tipe_pakaian_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET id=?,nama=?,ukuran=?,warna=?,stok=?,harga=?,tipe_pakaian_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php?hal=table_pakaian/pakaian');
?>