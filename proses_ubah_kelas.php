<?php
if($_POST){
$id_siswa=$_POST['id_siswa'];
$nama_kelas=$_POST['nama_kelas$nama_kelas'];
$kelompok=$_POST['kelompok'];
if(empty($nama_kelas)){
echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($username)){
echo "<script>alert('username tidak boleh kosong');location.href='tambah_kelas.php';</script>";
} else {
    include "koneksi.php";
    if(empty($password)){
    $update=mysqli_query($conn,"update kelas  set nama_kelas='".$nama_kelas="',kelompok='".$kelompok."',  where id_siswa = '".$id_siswa."' ") or die(mysqli_error($conn));
    if($update){
echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
    } else {
echo "<script>alert('Gagal update kelas');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
}
    } else {
$update=mysqli_query($conn,"update kelas set nama_kelas="'$nama_kelas='".,kelompok='".$kelompok."', id_kelas='".$id_kelas."' where id_siswa = '".$id_siswa."'") or die(mysqli_error($conn));
    if($update){
echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
    } else {
echo "<script>alert('Gagal update kelas');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
}
}
}
}
?>