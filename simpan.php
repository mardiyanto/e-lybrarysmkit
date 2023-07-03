<? 	
  include "config/koneksi.php";
$pan  =strlen($_POST[password]); 
// Cek email kustomer di database
$cek_email=mysql_num_rows(mysql_query("SELECT nim FROM tbl_anggota WHERE nim='$_POST[nim]'"));
// Kalau email sudah ada yang pakai
if ($cek_email > 0){
echo "<script>window.alert('NPM $_POST[nim] Sudah Terdaftar');
        window.location=('javascript:history.go(-1)')</script>";
}
elseif (empty($_POST[nama]) || empty($_POST[password]) || empty($_POST[nim])){
echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";

}

elseif($pan <=5){
echo "<script>window.alert('Password Lemah Minimal 6 Karakter');
        window.location=('javascript:history.go(-1)')</script>";
}


elseif($_POST[password]!=$_POST[password1]){
echo "<script>window.alert('Password Yang Anda Masukan Tidak Sama');
        window.location=('javascript:history.go(-1)')</script>";
}else{


$nama   = $_POST['nama'];
$nim = $_POST['nim'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$password=md5($_POST['password']);
$date=date ('d/m/Y');


mysql_query("INSERT INTO tbl_anggota(password,nama,nim,tempat_lahir,tgl_lahir,jk,prodi,kelas,tgl) 
             VALUES('$password','$nama','$_POST[nim]','$tempat_lahir','$tgl_lahir','$jk','$prodi','$kelas','$date')"); 


$sql = "SELECT * FROM	tbl_anggota WHERE BINARY nim='$nim' AND password='$password'";
$hasil = mysql_query($sql);
$r = mysql_fetch_array($hasil);

    $_SESSION[nim]  = $r[nim];
    
    $_SESSION[nama]  = $r[nama];
    $_SESSION[kelas]  = $r[kelas];
    $_SESSION[password]     = $r[password];


if($_GET[cek]=='cek') {
echo "<script>window.alert('Pendaftaran Berhasil Silahkan lihat buku');
        window.location=('index.php')</script>";
  }else{
echo "<script>window.alert('Pendaftaran Berhasil silahkan login untuk meminjam buku');
        window.location=('index.php')</script>";
  }


}
  
  ?>