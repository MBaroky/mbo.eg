<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!--end of favicon -->

    <!-- fontawesome-->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel="stylesheet" media="screen" href="css/font-awesome.min.css">-->


    <title>My Business Online</title>
    <style>
    /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed, 
    figure, figcaption, footer, header, hgroup, 
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
        display: block;
    }
    body {
        line-height: 1;
    }
    ol, ul {
        list-style: none;
    }
    blockquote, q {
        quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
/* ==========================================================================
Author's custom styles
========================================================================== */
/* =Preloader */
#preloader {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 101;
  background-color: #212121;
  color: #ffffff;
}

#preloader .txt {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

#preloader .txt-perc {
  font-size: 35px;
  font-family: 'Roboto Condensed', Helvetica, Helvetica Neue, Arial, sans-serif;
  opacity: 1;
  margin: 0 0 6px 0;
  max-width: 400px;
  text-align: center;
}

#preloader .progress {
  width: 100px;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.2);
  margin: 0 auto 15px auto;
}

#preloader .progress span {
  display: block;
  width: 0;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.8);
}

#preloader.is-hidden {
  visibility: hidden;
  opacity: 0;
}

.is-loading {
  overflow: hidden;
}
    </style>
<!--    <link rel="stylesheet" media="screen" href="css/reset.css">-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<!--    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">-->
    
    <!--    isotope-->

    <link rel="stylesheet" media="screen" href="css/isotope.pkgd.css">
    
    <link rel="stylesheet" media="screen" href="css/style.css">
<!--    <link rel="stylesheet" href="https://developers.google.com/maps/documentation/javascript/demos/demos.css">-->
<!--    <link rel="stylesheet" href="css/maps-demos.css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
<script type="text/javascript"> 
//below javascript is used for Disabling right-click on HTML page
document.oncontextmenu=new Function("return false");//Disabling right-click
 
 
//below javascript is used for Disabling text selection in web page
document.onselectstart=new Function ("return false"); 
    //Disabling text selection in web page
//if (window.sidebar){
//document.onmousedown=new Function("return false"); 
//document.onclick=new Function("return true") ; 
// 
// 
////Disable Cut into HTML form using Javascript 
//document.oncut=new Function("return false"); 
// 
// 
////Disable Copy into HTML form using Javascript 
//document.oncopy=new Function("return false"); 
// 
// 
////Disable Paste into HTML form using Javascript  
//document.onpaste=new Function("return false"); 
//}
</script>

<!-- Place this data between the <head> tags of your website -->
<meta name="description" content="My Business Online - your online partner" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="My Business Online">
<meta name="twitter:description" content="My Business Online - your online partner">
<meta name="twitter:creator" content="@mbaroky">
<!-- Twitter Summary card images must be at least 120x120px -->
<meta name="twitter:image" content="http://preview.eypcdn.com/test/mbo/mg/mbo.eg/img/home-banner.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="My Business Online" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://preview.eypcdn.com/test/mbo/mg/mbo.eg/" />
<meta property="og:image" content="http://preview.eypcdn.com/test/mbo/mg/mbo.eg/img/home-banner.jpg" />
<meta property="og:description" content="My Business Online - your online partner" /> 
<meta property="og:site_name" content="mbo.eg" />
<meta property="fb:admins" content="540240564" />


</head>

<body>
    <div id="preloader" class="container" style="display:none;position:fixed;width:100vw; height:100vh; background-color:#fff; z-index:10000">
         <div class="logo">
             <img src="img/myBusinessOnlineLogo.jpg" alt="logo">
         </div>
          <div class="progress">
            <div id="progress-bar" class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
             <span class="text" style="transform:translateX(100%);">
                0% 
             </span>
              
            </div>
          </div>
    </div>
    <!--   preloader -->
    <!--   HEADER   -->
    <header>
        <div class="container-fluid">
            <div id="top-header" class="row  top-header">
                <div class="col-md-5 text-right">
                    <a href="tel:19345" class="btn phone-widget">
                        <span class="icon pull-left">
                               <i class="fa fa-phone" aria-hidden="true"></i>  
                         </span>

                        <span class="phone-number pull-right">
                                  <span>19</span><span>345</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-7">
                    <p>
                        Web sites &amp; marketing landing pages solutions
                    </p>

                </div>
            </div>
        </div>
        <nav id="main-navbar-container" class="navbar is-flex" role="navigation">
           <div class="container-fluid ">
               <div class="row is-flex ">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand has-bg is-flex content-center" href="index.php">
                        <img src="img/myBusinessOnlineLogo.jpg" alt="logo">
                    </a>
                </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul id="main-navbar" class="nav navbar-nav navbar-right collapse navbar-collapse navbar-ex1-collapse">
                    <li class="menu-item"><a href="index.php">Home </a></li>
                    <li class="menu-item"><a href="landing.php">Templates</a></li>
                    <li class="dropdown dropdown-submenu0">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio 
                                <b class="caret"></b>
                            </a>
                        <ul class="dropdown-menu">
                            <li class="menu-item sub-item"><a href="showcase.php">Web Design</a>
                            </li>
                            <li class="menu-item sub-item"><a href="fb.php">Social Media Design</a>
                            </li>
                            <li class="menu-item sub-item"><a href="vid-dep.php">Photo/Video </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="contact.php">Contact Us</a></li>
                </ul>
               </div> <!--/.row-->
            
           </div>
        </nav>

    </header>

    <!--   end of HEADER   -->