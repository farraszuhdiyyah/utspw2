<?php 
require_once '../dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM tipe_pakaian WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location: ../index.php?hal=table_tipe_pakaian/tipe_pakaian');
?>