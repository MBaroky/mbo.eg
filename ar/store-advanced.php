<?php include('header.php'); ?>
   <script>
       //document.removeEventListener("contextmenu", noRightClick, false);
 document.removeEventListener("copy", noCopy, false);
</script>
<style>
.inner-banner#store-adv-banner::before{
    background: linear-gradient(45deg, rgb(255, 255, 255) 0, rgba(255, 255, 255, 0) 62%, rgba(245, 245, 245, 0) 100%);
}
.inner-banner#store-adv-banner{
    background-image:url('img/store-adv-banner-mob.jpg');
    background-position: bottom;
    background-blend-mode: normal;

}
@media (min-width: 480px){
    .inner-banner#store-adv-banner{
        background-image:url('img/store-adv-banner.jpg?100820');
        background-position: center;
    }
}
</style>
<div id="store-adv-banner" class="jumbotron showcase-banner inner-banner" style="">

    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 ">
                <div class="arrow_bottom_right">
                <h2> الآن سيصبح موقع شركتك الجديد
                        <br>
واحد من فريق مبيعاتك
   <small> </small></h2>
                </div>
                <div class="request-button-wrapper text-left">
                    <a href="#request-form" class="btn btn-request text-center">
                        <!--                        <span class="icon text-center"><img src="img/request-icon.png" alt="webdesign"></span>-->
                        <span class="text">احصل على استشارة مجانية</span>
                        <span class="arrow"></span>
                    </a>
                </div>
            </div>
<!--
            <div class="col-lg-9 col-md-9">

            </div>
-->
        </div>
    </div>
</div>

<div class="showcase-content gallery gallery-load inner landing-gallery" id="showcase-gallery">

    <div class="container" id="free-gallery">


        <div class="">

            <div class="row text-center">

                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://mybusinessonline.co/templates/01/" target="_blank" class="thumbnail"><img data-cat="free" src="../img/store/advanced/temp-1.jpg" alt="webdesign" class="../img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>Temp_01_ADV</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://mybusinessonline.co/templates/02/" target="_blank" class="thumbnail"><img data-cat="free" src="../img/store/advanced/temp-2.jpg?01" alt="webdesign" class="../img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>Temp_02_ADV</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://mybusinessonline.co/templates/03/" target="_blank" class="thumbnail"><img data-cat="free" src="../img/store/advanced/temp-3.jpg" alt="webdesign" class="../img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>Temp_03_ADV</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://mybusinessonline.co/templates/04/" target="_blank" class="thumbnail"><img data-cat="free" src="../img/store/advanced/temp-4.jpg" alt="webdesign" class="../img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>Temp_04_ADV</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://mybusinessonline.co/templates/05/" target="_blank" class="thumbnail"><img data-cat="free" src="../img/store/advanced/temp-5.jpg" alt="webdesign" class="../img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>Temp_05_ADV</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://mybusinessonline.co/templates/06/" target="_blank" class="thumbnail"><img data-cat="free" src="../img/store/advanced/temp-6.jpg" alt="webdesign" class="../img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>Temp_06_ADV</h3>
                            </span></a>
                </div>


                <!--                end of Others-->

            </div>
            <!--                end of .row -->
        </div>
        <!-- end of .filtered-->
        <div class="row text-center">
            <button id="Show-More" class="btn btn-more btn-inverse">
                    <span>view more </span>
                    <span id='countShow'></span>
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </button>

        </div>
        <?php global $pageval; $pageval = "store-advanced_ar"; include('form_page.php'); ?>
    </div>
</div>
<!-- end of #fb-gallery-->
<?php include('footer.php'); ?>


</body>

</html>