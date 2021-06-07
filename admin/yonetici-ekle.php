<?php include_once "parcalar/head.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php

if (isset($_GET['insert'])){
    if ($_GET['insert'] == "false"){ ?>
        <script>
            swal("Lütfen Bilgileri Eksiksiz Doldurunuz");
        </script>
    <?php   }
}

if(isset($_POST['submit'])) //butona basıldığında
{
    $ad_soyad = $_POST['ad_soyad'];
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = md5($_POST['sifre']);
    if (empty($_POST['ad_soyad']) ||  empty($_POST['kullanici_adi'])||  empty($_POST['sifre']) ){
        header("location:yonetici-ekle.php?insert=false");
    }else{
        $sql = "INSERT into kullanicilar SET
                        ad_soyad='$ad_soyad',
                        kul_adi='$kullanici_adi',
                        kul_yetki=1,
                        kul_sifre='$sifre'
                    ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res==TRUE)
        {
            header("location:yonetici.php?insert=true");
        }
        else
        {
            header("location:yonetici-ekle.php?insert=false");
        }
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


            <div class="content-wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0">Yönetici Ekle</h4>
                                        </div>
                                        <p>Yönetici Ekleme Formu</p>
                                        <form class="forms-sample" action="" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Ad Soyad</label>
                                                <input type="text" name="ad_soyad" class="form-control" id="exampleInputName1" placeholder="Ad Soyad">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Kullanici Adi</label>
                                                <input type="text" name="kullanici_adi" class="form-control" id="exampleInputName1" placeholder="Kullanıcı Adı">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputName1">Şifre</label>
                                                <input type="password" name="sifre" class="form-control" id="exampleInputName1" placeholder="Şifre">
                                            </div>


                                           <!-- <div class="form-group">
                                                <label>File upload</label>
                                                <input type="file" name="img[]" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                    <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputCity1">City</label>
                                                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Textarea</label>
                                                <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                                            </div>-->
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



