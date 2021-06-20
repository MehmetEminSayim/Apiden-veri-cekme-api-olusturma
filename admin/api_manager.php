
<?php include_once "parcalar/head.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
    if (isset($_GET['update'])){
        if ($_GET['update'] == "true"){ ?>
            <script>
                swal("Veriler başarılı bir şekilde güncellendi").then( ()=>{
                    window.location = "api_manager.php"
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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0">Coinler Listesi</h4>
                                            <a href="api.php"><button class="btn btn-primary">Api ile Verileri Güncelle</button></a>
                                        </div>
                                        <p>Api ile gelen tüm coinler burada listelenmiştir</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Coin Adı</th>
                                                    <th>Codu</th>
                                                    <th>Para Birimi</th>
                                                    <th>Fiyat</th>
                                                    <th>Hacim</th>
                                                    <th>Market Fiyatı</th>
                                                    <th>Haftalık Değişim</th>
                                                    <th>Günlük Değişim</th>
                                                    <th>Saatlik Değişim</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $coin_list = $db->get('coin_list');

                                                ?>
                                                <?php foreach ($coin_list as $item): ?>
                                                    <tr>
                                                        <td><?php echo $item['coin_name'] ?></td>
                                                        <td><?php echo $item['code'] ?></td>
                                                        <td><?php echo $item['currency'] ?></td>
                                                        <td><?php echo $item['price'] ?></td>
                                                        <td><?php echo $item['volume'] ?></td>
                                                        <td><?php echo $item['marketCap'] ?></td>
                                                        <td><?php echo $item['changeWeek'] ?></td>
                                                        <td><?php echo $item['changeDay'] ?></td>
                                                        <td><?php echo $item['changeHour'] ?></td>
                                                    </tr>
                                                <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mb-0">Altın Listesi</h4>
                                            <a href="api.php"><button class="btn btn-primary">Api ile Verileri Güncelle</button></a>
                                        </div>
                                        <p>Api ile gelen tüm altın tipleri burada listelenmiştir</p>
                                        <div class="table-responsive mt-4">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Altın Tipi</th>
                                                    <th>Alış Fiyatı</th>
                                                    <th>Satış Fiyatı</th>
                                                    <th>Tarih</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $gold_list = $db->get('gold_list');
                                                ?>
                                                <?php foreach ($gold_list as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row['name'] ?></td>
                                                        <td><?php echo $row['buy'] ?></td>
                                                        <td><?php echo $row['sell'] ?></td>
                                                        <td><?php echo $row['datetime'] ?></td>
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
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Api Yönetim Paneli </span>
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



