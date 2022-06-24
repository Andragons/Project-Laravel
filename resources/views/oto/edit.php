<?php
include("koneksi.php");
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "select * from user where id=$id");
// $result = mysqli_query($sql);
// $data = mysqli_fetch_array($sql);

while($user_data = mysqli_fetch_array($sql)) {
	$nama = $user_data['nama'];
	$password = $user_data['password'];
	$username = $user_data['username'];
}
?>

<h1>Form Ubah Data</h1>

<form method="post">
    Nama : 
<?php
echo '<input type="text" name="nama" readonly value="' . $nama . '"><br>';
?>
    Username : 
<?php
echo '<input type="text" name="username" value="' . $username . '"><br>';
?>
    Password : 
<?php
echo '<input type="text" name="password" value="' . $password . '"><br>';
?>
    <input type="submit" value="Simpan">
</form>

<?php
if(isset($_POST['id']) and !empty($_POST['id'])) {
    $sql = "update mahasiswa set nama='" . $_POST['nama'] . "', " ."username='" . $_POST['username'] . "' where id='" . $_POST['id'] . "'";
    // $result = mysqli_affected_rows(mysqli_query($sql));
    if($sql === TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Perubahan data telah tersimpan");';
        echo 'window.location.href="index.php";';
        echo "</script>";
    }
}
?>