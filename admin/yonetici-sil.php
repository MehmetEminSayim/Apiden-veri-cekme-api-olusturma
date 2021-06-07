<?php

include('../config/const.php');

$id = $_GET['id'];

$sql = "DELETE FROM kullanicilar WHERE id=$id";

$res = mysqli_query($conn, $sql);

if($res==true)
{
    //  echo "Yönetici silindi";
    $_SESSION['sil'] = "<div class='basarili'>Yönetici Silindi</div>";

    sleep(2);
    echo "Kullanıcı Silindi.";
    header('location:'.SITEURL.'admin/yonetici.php');
    exit;
}
else
{
    //  echo "Yönetici Silinemedi(Hata)";
    $_SESSION['sil'] = "<div class='basarisiz'>Yönetici Silinemedi(Hata)</div>";

    sleep(5);
    echo "Kullanıcı Silinemedi.";
    header('location:'.SITEURL.'admin/yonetici.php');
    exit;


}

?>