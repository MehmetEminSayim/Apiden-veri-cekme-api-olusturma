
<?php include_once "parcalar/head.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col text-left">Api İstek Örneği</div>
                                            <div class="col text-right">
                                                <a href="api_test.php"><button class="btn btn-primary">Api'ye istek at</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <p>
                                           <p> $ch = curl_init();</p>

                                            <p>curl_setopt($ch, CURLOPT_URL, <?php echo PATH."admin/publish_coin_api.php" ?>);</p>
                                            <p>curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);</p>
                                            <p>curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');</p>
                                            <p>curl_setopt($ch, CURLOPT_USERPWD, 'betul' . ':' . 'odabas');</p>
                                            <p>$result = curl_exec($ch);</p>
                                            <p>if (curl_errno($ch)) {</p>
                                            <p>echo 'Error:' . curl_error($ch);</p>
                                            <p>}</p>
                                            <p>curl_close($ch);</p>
                                        </p>

                                        <div class="card">
                                            <div class="card-body">
                                                <h6>Açıklama</h6>
                                                <br>
                                                <p>Ayarlar tablosunda bulunan api_key = username ve api_token = password olacak şekilde
                                                <p>Coin Listesi: <?php echo PATH."admin/publish_coin_api.php" ?> </p>
                                                <p>Altın Listesi: <?php echo PATH."admin/publish_gold_api.php" ?></p>
                                                </p>
                                                <p>Adreslerine istek atılabilir gereken bilgilerin doğruluğu sağlandıktan sonra json çıktısı sizlerin
                                                    olacaktır.</p>
                                            </div>
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




