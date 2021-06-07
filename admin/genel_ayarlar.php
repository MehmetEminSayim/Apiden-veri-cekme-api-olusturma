
<?php include_once "parcalar/head.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php

if (isset($_GET['config'])){
    if ($_GET['config'] == "true"){ ?>
        <script>
            swal("Ayarlar Güncellendi").then((res)=>{
                window.location = "genel_ayarlar.php"
            });
        </script>
    <?php   }
}

if(isset($_POST['submit']))
{
    $site_adi = $_POST["site_adi"];
    $site_url = $_POST["site_url"];
    $meta_desc= $_POST["meta_desc"];
    $meta_key= $_POST["meta_key"];

    $sql = "UPDATE genel_ayarlar SET
                site_adi='$site_adi',
                site_url='$site_url',
                meta_desc='$meta_desc',
                meta_key='$meta_key'
                ";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        header('location:genel_ayarlar.php?config=true');
    }
    else
    {
        header('location:genel_ayarlar.php?config=false');
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
        <?php

            $sqlConf = "SELECT * FROM genel_ayarlar WHERE id='1'";
            $resConf = mysqli_query($conn, $sqlConf);
            $rowConf = mysqli_fetch_assoc($resConf);
        ?>
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
                                            <h4 class="card-title mb-5">Genel Ayarlar</h4>
                                        </div>
                                        <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Site Adı</label>
                                                        <input type="text" name="site_adi" class="form-control" value="<?php echo $rowConf['site_adi'] ?>" >
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Site Url <small style="color: red">sonuna / işareti zorunlu
                                                                paramatredir</small></label>
                                                        <input type="text" name="site_url" class="form-control" value="<?php echo
                                                        $rowConf['site_url'] ?>" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Meta Açıklama</label>
                                                        <input type="text" name="meta_desc" class="form-control" value="<?php echo $rowConf['meta_desc'] ?>" >
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">Meta Anahtar Kelimeler</label>
                                                        <input type="text" name="meta_key" class="form-control" value="<?php echo $rowConf['meta_key'] ?>" >
                                                    </div>
                                                </div>
                                            </div>

                                            <button name="submit" type="submit" class="btn btn-success mr-2">Ayarları Güncelle</button>
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
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Betül Odabaş Api Yönetim Paneli </span>
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




