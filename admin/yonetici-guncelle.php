
<?php include_once "parcalar/head.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php

if(isset($_POST['submit'])) //butona basıldığında
{
    $id = $_POST['id'];
    $ad_soyad = $_POST['ad_soyad'];
    $kullanici_adi = $_POST['kullanici_adi'];

    $sql = "UPDATE kullanicilar SET 
    ad_soyad='$ad_soyad',
    kul_adi='$kullanici_adi'
    WHERE id='$id'
    ";
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if($res==TRUE)
    {
        header("location:yonetici.php?update=true");
    }
}
?>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once "parcalar/navbar.php"?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once "parcalar/menu.php"?>

        <!-- partial -->
        <div class="main-panel">
            <?php
            $id=$_GET['id'];

            $sql="SELECT * FROM kullanicilar WHERE id=$id";

            $res=mysqli_query($conn, $sql);

            if($res==true){
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);

                    $ad_soyad = $row['ad_soyad'];
                    $kullanici_adi = $row['kul_adi'];
                }
                else
                {
                    header('location:'.SITEURL.'admin/yonetici.php');
                }
            }

            ?>

            <div class="content-wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0">Yönetici Güncelle</h4>
                                        </div>
                                        <p>Yönetici Güncelleme Formu</p>
                                        <form class="forms-sample" action="" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Ad Soyad</label>
                                                <input type="text" name="ad_soyad" class="form-control" value="<?php echo $ad_soyad ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Kullanici Adi</label>
                                                <input type="text" name="kullanici_adi" class="form-control" value="<?php echo $kullanici_adi ?>">
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                                            <button name="submit" type="submit" class="btn btn-success mr-2">Submit</button>
                                            <a href="yonetici.php" class="btn btn-light">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Gülname Emanet - Betül Odabaş Restoran Yönetim Paneli </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->


<?php include_once "parcalar/footer.php"?>




