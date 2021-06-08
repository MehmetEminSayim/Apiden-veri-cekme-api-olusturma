<?php
    $db->where("id", 1);
    $set = $db->getOne("settings");
?>


<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="" /></div>
</div>
<!-- end loader -->
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a class="active" href="index.php">Anasayfa</a>
    <a href="about.php">Hakkımızda</a>
    <a href="contact.php">İletişim</a>
</div>
<!-- header -->
<header>
    <!-- header inner -->
    <div class="head-top">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-sm-5">
                    <div class="logo">
                        <a href="index.php"><?php echo $set['site_name'] ?></a>
                    </div>
                </div>
                <?php $item = $db->get('gold_list');   ?>
                <div class="col-sm-6">
                    <ul class="social_icon text_align_right d_none text-white">

                        <li> <?php echo "Gram" ?>  A: <?php echo $item[0]['buy'] ?>  S: <?php echo $item[0]['sell'] ?> </li>
                        <li> <?php echo "Çeyrek" ?>  A: <?php echo $item[1]['buy'] ?>  S: <?php echo $item[1]['sell'] ?> </li>
                        <li> <?php echo "Çeyrek" ?>  A: <?php echo $item[3]['buy'] ?>  S: <?php echo $item[3]['sell'] ?> </li>

                    </ul>
                </div>
                <div class="col-sm-1">
                    <ul class="email text_align_right">
                        <li>
                            <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->