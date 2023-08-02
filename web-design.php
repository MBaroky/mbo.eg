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
    <div class="container" id="filtered-gallery">
        <div class="filterCont">
            <div id="filterScreen" class="text-center filterScreen">
                <div id="filterWrapper" data-root="landing-gallery" class="btn-group filter-btn-group filterWrapper onStart" style="transform:translateX(0%);">
                    <button class="btn is-checked" data-filter="*" data-trans="all">
                        <span class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="55.316px" height="42.352px" viewBox="0 0 55.316 42.352" style="enable-background:new 0 0 55.316 42.352;"
                                 xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_1_" d="M4.236,0.313c-3.767,0-3.141,2.717-3.141,2.717l0.041,2.486H25.92l4.996-5.203H4.236z"/>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <rect x="0.47" y="0.313" style="clip-path:url(#SVGID_2_);fill:#CCCCCC;" width="30.445" height="5.203"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_3_" d="M4.201,11.906h26.346c0.601,0,1.177-0.262,1.578-0.715l6.178-6.989H51.11v33.944H4.201V11.906z M37.355,0
                                                c-0.604,0-1.173,0.258-1.574,0.707l-6.18,6.996H2.1C0.941,7.703,0,8.643,0,9.805v30.447c0,1.162,0.941,2.1,2.101,2.1h51.112
                                                c1.156,0,2.104-0.938,2.104-2.1V2.102C55.316,0.945,54.369,0,53.213,0H37.355z"/>
                                        </defs>
                                        <clipPath id="SVGID_4_">
                                            <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <rect x="0" y="0" style="clip-path:url(#SVGID_4_);fill:#FFFFFF;" width="55.316" height="42.352"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path id="SVGID_5_" style="fill:#FFFFFE;" d="M26.712,16.525v6.201h-6.199c-0.855,0-1.552,0.695-1.552,1.551
                                            c0,0.854,0.695,1.552,1.552,1.552h6.199v6.198c0,0.855,0.695,1.552,1.553,1.552c0.853,0,1.549-0.695,1.549-1.552v-6.198h6.203
                                            c0.854,0,1.551-0.697,1.551-1.552s-0.697-1.551-1.551-1.551h-6.203v-6.201c0-0.854-0.696-1.551-1.549-1.551
                                            C27.407,14.975,26.712,15.67,26.712,16.525"/>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_6_" d="M26.712,16.525v6.201h-6.199c-0.855,0-1.552,0.695-1.552,1.551c0,0.854,0.695,1.552,1.552,1.552h6.199
                                                v6.198c0,0.855,0.695,1.552,1.553,1.552c0.853,0,1.549-0.695,1.549-1.552v-6.198h6.203c0.854,0,1.551-0.697,1.551-1.552
                                                s-0.697-1.551-1.551-1.551h-6.203v-6.201c0-0.854-0.696-1.551-1.549-1.551C27.407,14.975,26.712,15.67,26.712,16.525"/>
                                        </defs>
                                        <clipPath id="SVGID_7_">
                                            <use xlink:href="#SVGID_6_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <rect x="18.961" y="14.975" style="clip-path:url(#SVGID_7_);fill:#FFFFFF;" width="18.605" height="18.604"/>
                                    </g>
                                </g>
                            </g>
                            </svg>

                        </span>
                           <h3 class="text-center"> all</h3>
                        </button>
                    <!--
                        <button class="btn" data-filter=".edu">
                            education
                        </button>
                        <button class="btn" data-filter=".bus">
                            business
                        </button>
                        <button class="btn" data-filter=".beauty">
                            beauty
                        </button>
                        <button class="btn" data-filter=".med">
                            medical
                        </button>
                        <button class="btn" data-filter=".real">
                            realestate
                        </button>
                        <button class="btn" data-filter=".edu">
                            tourism
                        </button>
                        <button class="btn" data-filter=".bus">
                            decoration
                        </button>
                        <button class="btn" data-filter=".beauty">
                            dental
                        </button>
                        <button class="btn" data-filter=".med">
                            packing
                        </button>
                        <button class="btn" data-filter=".real">
                            food &amp; drink
                        </button>
                        <button class="btn" data-filter=".other">
                            other
                        </button>
-->
                </div>
                <button class="filter-nav btn fa fa-chevron-left prev"></button>
                <button class="filter-nav btn fa fa-chevron-right next"></button>

            </div>



        </div>

        <div class="filtered">

            <div class="row text-center">

                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb exclude">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Automotive/6a55e803.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Automotive/1438ecd5.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Automotive/46d73b9c.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Automotive/f94c6345.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Automotive/0825e546.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <!--                end of Automotive-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Ceramic/7c3336aa.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Ceramic/ac777e35.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Ceramic-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Clothes/19716154.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Clothes/3af8ac41.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Clothes/4e7c07b2.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Clothes/8ad582f6.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Clothes-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Furniture/21483209.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Furniture/21bedefd.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Furniture/3dee699b.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Furniture/94daaaeb.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Furniture/9e5af190.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Furniture/e7b54508.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Furniture-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/5f8402f7.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/8b64c332.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/44b5c08b.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
<!--
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/64a8c16e.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/70e5e442.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/300c8855.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/682c7c00.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/886f8ce6.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/4721ff8c.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/463884bd.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/a4bdbdb8.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/a3332e47.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/b6f84c82.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/ba611aad.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/c15dcbe0.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/f8eed22e.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Medical/fb1f672a.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Medical-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Beauty & Cosmetics/4785abc4.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Beauty & Cosmetics/f7d83890.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Beauty & Cosmetics-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/123c8132.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/17979b57.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/236ef845.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/51692566.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/65e5bbd6.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/7737b6a2.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/a9871989.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/aec062a7.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Realestate/d24979ef.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Realestate-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Resturants/1e987ab1.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Resturants/1eb4a7ec.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Resturants/5c70f4a8.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Resturants/f13af926.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Resturants-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/School & nursery/27ee8a22.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/School & nursery/41affc49.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of School & nursery-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Security/563234e1.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Security/99b1f1d5.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Security/ae3cd434.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Security-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Travel/aab8183c.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>

                <!--                end of Travel-->
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/1ad7f251.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/2dbdcf92.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/5fb11382.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/6be1c38d.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/8a06e534.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/9ace9299.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/9d01b844.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/19ef6b23.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/043b9148.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/99f0a669.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/838d5be6.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/8630b6a9.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/35584cc7.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/44991e3e.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/81878e9f.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/b30c2443.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/c807cb64.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/cdde1183.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/e1b085bb.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/ecd137fd.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/ef9665a7.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
                            </span></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-tn-12 filter-item gallery-thumb">
                    <a href="" target="_blank" class="thumbnail"><img src="img/landing-gallery/Others/f0847a57.jpg" alt="webdesign" class="img-responsive img-thumbnail"><span class="caption text-center">
                                <h3></h3>
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
        <!-- <?php global $pageval; $pageval = "WebDesign"; include('form_page.php'); ?> -->
    </div>
</div>
<!-- end of #fb-gallery-->
<?php include('footer.php'); ?>


</body>

</html>