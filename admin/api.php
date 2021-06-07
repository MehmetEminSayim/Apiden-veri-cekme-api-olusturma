
<?php include_once "parcalar/head.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
    if (isset($_GET['insert'])){
        if ($_GET['insert'] == "true"){ ?>
            <script>
                swal("Yönetici başarılı bir şekilde eklendi").then( ()=>{
                    window.location = "yonetici.php"
                } );
            </script>
            <?php
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
                                            <h4 class="card-title mb-0">Coinler Listesi</h4>
                                            <a href="yonetici-ekle.php"><button class="btn btn-primary">Api ile Verileri Güncelle</button></a>
                                        </div>
                                        <p>Api ile gelen tüm coinler burada listelenmiştir</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Sıra</th>
                                                    <th>Adı Soyadı</th>
                                                    <th>Kullanıcı Adı</th>
                                                    <th>İşlemler</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($resultArray as $item): ?>
                                                    <tr>
                                                        <td><?php echo $item['id'] ?></td>
                                                        <td><?php echo $item['ad_soyad'] ?></td>
                                                        <td><?php echo $item['kul_adi'] ?></td>

                                                        <td>
                                                            <a href="<?php echo SITEURL; ?>admin/sifre-guncelle.php?id=<?php echo $item['id']; ?>" class="btn btn-success"><i class="fa fa-key"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
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
