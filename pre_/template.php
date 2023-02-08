<?php include('header.php'); ?>
   <script>
        //document.removeEventListener("contextmenu", noRightClick, false);
 document.removeEventListener("copy", noCopy, false);
</script>
    <div id="landing-banner" class="jumbotron landing-banner inner-banner">
        <div class="container">
            <div class="row is-flex">
                <div class="col-lg-12 ">
                    <div class="arrow_bottom_right">
                        <h2> Your business is our priority. <br> Choose a template and let us begin.   <small> </small></h2>
                    </div>
                    <div class="request-button-wrapper text-left">
                        <a href="#request-form" class="btn btn-request text-center">
    <!--                        <span class="icon text-center"><img src="img/request-icon.png" alt=""></span>-->
                            <span class="text">GET A FREE CONSULTATION</span>
                            <span class="arrow"></span>
                        </a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="duda-templates inner" id="duda-templates">
        <div class="container gallery landing-gallery">
            <?php 
            //Set API user and password
            $API_USER = '3d4f615c61';
            $API_PASS = 'nhxwGiqNIuEO';
            //Set parameters to make cURL call to Duda
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_URL, 'https://api.dudamobile.com/api/sites/multiscreen/templates');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $API_USER.':'.$API_PASS);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            //execute cURL call and get template data
            $output = curl_exec($ch);
            //check for errors in cURL
            if(curl_errno($ch)) {
                die('Curl error: ' . curl_error($ch));
            }
            $output = json_decode($output);
            //var_dump($output);
            //Loop through all templates and display all the available templates in a table
            $i = 4;
            echo '<div class="row">';
            foreach($output as $template) {
                if ($i % 4 == 0 ) {
                   echo '<div class="row">';
                }
                echo '<div class="col-md-3 col-sm-6 col-xs-6 col-tn-12">

                        <a href='.$template->preview_url.' target="_blank" class="thumbnail">
                            <img class="img-responsive contain" src=' . $template->thumbnail_url. '>
                            <span class="caption text-center">
                                <h3 class="text-center">'.$template->template_id.'</h3>'.
                            '</span>
                        </a>


                      </div>';
                $i++;
//                if ($i % 4 == 0 ) {
//                    echo '</div>';
//                }
            }
            echo '</div>';
            ?>
            <?php global $pageval; $pageval = "template"; include('form_page.php'); ?>
        </div>
        
    </div>
    <?php include('footer.php'); ?>


        </body>

        </html>