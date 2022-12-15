<?php

include 'C:\xampp\htdocs\zenius\project\connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM admins WHERE id='$id'";
$data = $conn->query($sql);

if (mysqli_affected_rows($conn) > 0) {
    header("Location:show.php");
} else {
    $_SESSION['error'] = "Menghapus data gagal !";
}
?>