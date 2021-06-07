<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="" /></div>
</div>
<!-- end loader -->
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a class="active" href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="searvices.html">Searvices</a>
    <a href="testimonial.html">Testimonial</a>
    <a href="works.html">Works</a>
    <a href="contact.html">Contact</a>
</div>
<!-- header -->
<header>
    <!-- header inner -->
    <div class="head-top">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-sm-5">
                    <div class="logo">
                        <a href="index.html">Bitcoin Platformu</a>
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