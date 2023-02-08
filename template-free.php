<?php include('header.php'); ?>
   <script>
       //document.removeEventListener("contextmenu", noRightClick, false);
 document.removeEventListener("copy", noCopy, false);
</script>
<div id="showcase-banner" class="jumbotron showcase-banner inner-banner">

    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-12 ">
                <div class="arrow_bottom_right">
                    <h2> Let your new state-of-the-art website <br> be your salesperson. <small> </small></h2>
                </div>
                <div class="request-button-wrapper text-left">
                    <a href="#request-form" class="btn btn-request text-center">
                        <!--                        <span class="icon text-center"><img src="img/request-icon.png" alt="webdesign"></span>-->
                        <span class="text">GET A FREE CONSULTATION</span>
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
    <div class="container">
        <div class="row">
           
            <div class="text-center brief">
                We lend an expert hand in designing your website to attract more customers to your business.
            </div>
        </div>
    </div>
    <div class="container" id="free-gallery">


        <div class="">

            <div class="row text-center">

                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://ypeg.editor.multiscreensite.com/preview/c76bb9f2" target="_blank" class="thumbnail"><img data-cat="free" src="img/landing-gallery/Free/c76bb9f2.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>FLP-c76bb9f2</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://ypeg.editor.multiscreensite.com/preview/5cb49fa2" target="_blank" class="thumbnail"><img data-cat="free" src="img/landing-gallery/Free/5cb49fa2.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>FLP-5cb49fa2</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://ypeg.editor.multiscreensite.com/preview/c2fe4956" target="_blank" class="thumbnail"><img data-cat="free" src="img/landing-gallery/Free/c2fe4956.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>FLP-c2fe4956</h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="https://ypeg.editor.multiscreensite.com/preview/996f07dd" target="_blank" class="thumbnail"><img data-cat="free" src="img/landing-gallery/Free/996f07dd.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3>FLP-996f07dd</h3>
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
        <?php global $pageval; $pageval = "tempfree"; include('form_page.php'); ?>
    </div>
</div>
<!-- end of #fb-gallery-->
<?php include('footer.php'); ?>


</body>

</html>