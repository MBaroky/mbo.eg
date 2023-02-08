<?php include('header.php'); ?>
   <script>
        //document.removeEventListener("contextmenu", noRightClick, false);
 document.removeEventListener("copy", noCopy, false);
</script>
<style>

.inner-banner#store-stand-banner::before{
    background: linear-gradient(45deg, rgb(255, 255, 255) 0, rgba(255, 255, 255, 0) 62%, rgba(245, 245, 245, 0) 100%);
}
.inner-banner#store-stand-banner{
    background-image:url('img/store-stand-banner-mob.jpg');
    
    background-blend-mode: normal;
    background-position: bottom;

}
@media (min-width: 480px){
    .inner-banner#store-stand-banner{
        background-image:url('img/store-stand-banner.jpg?100820');
        background-position: center;
    }
}
</style>
    <div id="store-stand-banner" class="jumbotron showcase-banner inner-banner ">
        <div class="container">
            <div class="row is-flex">
                <div class="col-lg-12 ">
                    <div class="arrow_bottom_right">
                        <h2> إبراز أعمالك هي مهمتنا الأولي.

                        <br>
                        اختر نموذج ولنبدأ الان
   <small> </small></h2>
                    </div>
                    <div class="request-button-wrapper text-left">
                        <a href="#request-form" class="btn btn-request text-center">
    <!--                        <span class="icon text-center"><img src="img/request-icon.png" alt=""></span>-->
                            <span class="text">احصل على استشارة مجانية</span>
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

            //array of only wanted templates' ids'
            $array = array('1103007', '1062978', '1031170', '1004111', '1004110', '1015026');

            //new array will store wanted templates to
            $toPrint = null;

            //choosing only desired templates
            foreach($array as $id) {
                foreach($output as $template){
                   if ($id == $template->template_id) {
                    $toPrint[] = $template;                    
                    } 
                }
            }

            // foreach($output as $template) {
            //     foreach($array as $id){
            //        if ($id == $template->template_id) {
            //         $toPrint[] = $template;                    
            //         } 
            //     }
            // }

            //looping through desired templates to make thumbs
            foreach($toPrint as $item){
                if ($i % 4 == 0 ) {
                    echo '<div class="row">';
                }
                echo '<div class="col-md-3 col-sm-6 col-xs-6 col-tn-12">
    
                        <a href='.$item->preview_url.' target="_blank" class="thumbnail">
                            <img class="img-responsive contain" src=' .$item->thumbnail_url. '>
                            <span class="caption text-center">
                                <h3 class="text-center">'.$item->template_id.'</h3>'.
                            '</span>
                        </a>
    
    
                      </div>';
                $i++;
            }
            echo '</div>';
            ?>

            <?php 
            // //Set API user and password
            // $API_USER = '3d4f615c61';
            // $API_PASS = 'nhxwGiqNIuEO';
            // //Set parameters to make cURL call to Duda
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            // curl_setopt($ch, CURLOPT_URL, 'https://api.dudamobile.com/api/sites/multiscreen/templates');
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_USERPWD, $API_USER.':'.$API_PASS);
            // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            // curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            // //execute cURL call and get template data
            // $output = curl_exec($ch);
            // //check for errors in cURL
            // if(curl_errno($ch)) {
            //     die('Curl error: ' . curl_error($ch));
            // }
            // $output = json_decode($output);
            // //var_dump($output);
            // //Loop through all templates and display all the available templates in a table
            // $i = 4;
            // echo '<div class="row">';
            // foreach($output as $template) {
            //     if ($i % 4 == 0 ) {
            //        echo '<div class="row">';
            //     }
            //     echo '<div class="col-md-3 col-sm-6 col-xs-6 col-tn-12">

            //             <a href='.$template->preview_url.' target="_blank" class="thumbnail">
            //                 <img class="img-responsive contain" src=' . $template->thumbnail_url. '>
            //                 <span class="caption text-center">
            //                     <h3 class="text-center">'.$template->template_id.'</h3>'.
            //                 '</span>
            //             </a>


            //           </div>';
            //     $i++;
            // }
            // echo '</div>';
            ?>
            <?php global $pageval; $pageval = "store-standard_ar"; include('form_page.php'); ?>
        </div>
        
    </div>
    <?php include('footer.php'); ?>


        </body>

        </html>