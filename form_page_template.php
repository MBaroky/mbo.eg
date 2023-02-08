<?php
include 'form.php';
?>
<div id="request-form" class="row">
    <div class="col-md-12 contact-form well">
        <?php echo @$_REQUEST['endFormMessage'];?>
        <?php if(!isset($_REQUEST['endFormMessage']) && $_REQUEST['endFormMessage'] == 0){?>
        <form id='form1' method='POST' name="form1" class="row">
        <input type="hidden" name="lang" value="english">
            <p id='thanks' style='display: none;'>
                      Thanks for contacting us, we'll be in touch soon!
            </p>
            <div class="form-title col-sm-12">
           <div class="page-header">
                        <h1>Please fill out this form for a <span>FREE </span>consultation at your premises
                            <small>You are prequalified for<span> DISCOUNTS AND INCENTIVES!</span></small></h1>
                    </div>

            </div>
            <div class="col-sm-6">
               <div class="row">
                 <div class="form-group col-sm-12">
                    <label class="control-label requiredField" for="name">
                                    Name
                                    <span class="asteriskField">
                                    *
                                   </span>
                                </label>
                    <input type="hidden" name="formRequesterFormName" value="Template">
                    <input type="hidden" name="utm_source" value="<?php echo $_REQUEST["utm_source"]; ?>">
                    <input type="hidden" name="utm_language" value="<?php echo $_REQUEST["utm_language"]; ?>">
                    <input type="hidden" name="utm_adname" value="<?php echo $_REQUEST["utm_adname"]; ?>">

                            <input required class="form-control" id="formRequesterFirstName" name="formRequesterFirstName" placeholder="Name" type="text" />
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="CompanyName">
                                    Company Name
                            </label>

                            <input required type="text" placeholder="Company Name" name="formRequesterCompanyName" class="form-control" id="formRequesterCompanyName">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="businessactivity">
                                    Business Activity
                            </label>

                            <input required type="text" placeholder="Business Activity" name="formRequesterBusinessActivity" class="form-control" id="formRequesterBusinessActivity">
                        </div>
                        <div class="form-group is-flex col-sm-12">
<!--                            <div class="form-group">-->
<!--
                                <label class="control-label " for="title">
                                        Job Title
                                    </label>
-->

                                <select required name="formRequesterTitle" id="formRequesterTitle" size="1" placeholder=" All" class="form-control">
                                    <option value=""> Job Title</option>

                                    <option value="Owner"> Owner</option>
                                    <option value="General Manager"> General Manager</option>
                                    <option value="Marketing Manager"> Marketing Manager</option>
                                    <option value="Branch Manager"> Branch Manager</option>
                                    <option value="Other"> Other</option>

                                </select>   
                                <span class="gap"></span>
                                
<!--                            </div>-->
<!--                            <div class="form-group custTitle">-->
<!--
                                <label class=" control-label requiredField" for="pleaseState">
                                    please state….. 
                                </label>
-->

                                <input required type="text" placeholder="Please State….." name="formRequesterOther" class="form-control custTitle" id="formRequesterOther">
<!--                            </div>-->
                            
                            
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="formRequesterEmail">
                                    Email
                                    <span class="asteriskField">
                                    *
                                   </span>
                                </label>
                            <input required class="form-control" id="formRequesterEmail" name="formRequesterEmail" placeholder="Email" type="email" />
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label " for="formRequesterMobile">
                                    Mobile
                                </label>
                            <input required name='formRequesterMobile' id='formRequesterMobile' placeholder='Mobile No.' pattern="[0-9]*" maxlength="30" min="3" id="formRequesterMobile" size="25" onChange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter only digits' : ''); if(this.checkValidity()) form.pattern = this.value;" class="form-control" type="tel" />
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label " for="city">
                                    City
                                </label>

                                <select required name="formRequesterCity" size="1" placeholder=" All" class="form-control" id="city">
                                <option value=""> Select City</option>

                                <option value="Alexendria"> Alexendria</option>

                                <option value="Assyout"> Assyout</option>

                                <option value="Aswan"> Aswan</option>

                                <option value="Baharia Oasis"> Baharia Oasis</option>

                                <option value="Benisuef"> Benisuef</option>

                                <option value="Cairo"> Cairo</option>

                                <option value="Dahab"> Dahab </option>

                                <option value="Damietta"> Damietta</option>

                                <option value="El Ain El Sokhna"> El Ain El Sokhna</option>

                                <option value="El Beheira"> El Beheira</option>

                                <option value="El Dakahleya"> El Dakahleya</option>

                                <option value="El Fayoum"> El Fayoum</option>

                                <option value="El Gharbeya"> El Gharbeya</option>

                                <option value="El Gouna"> El Gouna</option>

                                <option value="El Menia"> El Menia</option>

                                <option value="Kafr El Sheikh"> El Monofeya</option>

                                <option value="El Sharkeya"> El Sharkeya</option>

                                <option value="El Wadi El Gadid"> El Wadi El Gadid</option>

                                <option value="Giza"> Giza</option>

                                <option value="Hurghada"> Hurghada</option>

                                <option value="Ismaileya"> Ismaileya</option>

                                <option value="Kafr El Sheikh"> Kafr El Sheikh</option>

                                <option value="Kaliobeya"> Kaliobeya</option>

                                <option value="Luxor"> Luxor</option>

                                <option value="Marsa Alam"> Marsa Alam</option>

                                <option value="Marsa Matrouh"> Marsa Matrouh</option>

                                <option value="Misurata"> Misurata</option>

                                <option value="Nuweibaa"> Nuweibaa</option>

                                <option value="North Sinai"> North Sinai</option>

                                <option value="Port Said"> Port Said</option>

                                <option value="Qena"> Qena</option>

                                <option value="Quseir"> Quseir</option>

                                <option value="Red Sea"> Red Sea</option>

                                <option value="Safaga"> Safaga</option>

                                <option value="Sharm El Sheikh"> Sharm El Sheikh</option>

                                <option value="Siwa Oasis"> Siwa Oasis</option>

                                <option value="Sohag"> Sohag</option>

                                <option value="South Sinai"> South Sinai</option>

                                <option value="Suez"> Suez</option>

                                <option value="Taba"> Taba</option>

                                </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="Website">
                                    Website Or Facebook Page
                            </label>

                            <input type="text" placeholder="Website Or Facebook Page" name="formRequesterWebsite" class="form-control" id="formRequesterWebsite">
                        </div>
                        
                    </div>
<!--                    end of .row-->

                </div>
                <!--            end of .col-sm-6-->
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group form-inline is-flex col-sm-12">
                            <label class=" requiredField" for="Company">
                                    Preferred Call Time: 
                                </label>
                                <label class="requiredField" for="from">
                                    From:
                                </label>
                            <select required class="form-control" name="formRequesterTimefrom" id="formRequesterTimefrom" >
                                <option selected>10 am</option>
                                <option>11 am</option>
                                <option>12 pm</option>
                                <option>1 pm</option>
                                <option>2 pm</option>
                                <option>3 pm</option>
                                <option>4 pm</option>
                                <option>5 pm</option>
                              </select>
                              <label class="requiredField" for="to">
                                    To:
                                </label>
                            <select required class="form-control" name="formRequesterTimeto" id="formRequesterTimeto">
                                <option>10 am</option>
                                <option>11 am</option>
                                <option>12 pm</option>
                                <option>1 pm</option>
                                <option>2 pm</option>
                                <option>3 pm</option>
                                <option>4 pm</option>
                                <option selected>5 pm</option>
                              </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label " for="message">
                                    Message
                                </label>
                            <textarea required name="formRequesterMessage" placeholder="Message" class="form-control" cols="40" id="formRequesterMessage" rows="6"></textarea>
                        </div>
                    </div>

                </div>
                <!--            end of .col-sm-6-->

                <!--
                    <div class="form-group ">
                        <label class="control-label " for="subject">
                                Subject
                            </label>
                        <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" />
                    </div>
-->

                <div class="form-group  text-right col-sm-12">
                    <div>
                        <button required class="btn btn-warning btn-lg" name="submit" type="submit" value="GET STARTED">
                                    GET STARTED
                                </button>
                    </div>
                </div>
            </form>
            <script>
                _gaq.push(['_trackEvent', 'submit', 'showed', '', 0]);
            </script>
            <?php } else {?>
<!-- Google Code for Sales Lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 837398246;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "LEUACMSDmHQQ5t2mjwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/837398246/?label=LEUACMSDmHQQ5t2mjwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- End Google Code for Sales Lead Conversion Page -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '330121880697402'); 
fbq('track', 'Lead');
</script>
<noscript>
<img height="1" width="1" 
src="https://www.facebook.com/tr?id=330121880697402&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
            <script>
                _gaq.push(['_trackEvent', 'submit', 'clicked', '', 0]);
            </script>
            <? } ?>
        </div>
        <!--            end of .contact-form-->
    </div>
    <!--        end of .row-->