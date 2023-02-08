<?php
include 'form.php';
?>
<div id="request-form" class="row">
    <div class="col-md-12 contact-form well">
        <?php echo @$_REQUEST['endFormMessage'];?>
        <?php if(!isset($_REQUEST['endFormMessage']) && $_REQUEST['endFormMessage'] == 0){?>
        <form id='form1' method='POST' name="form1" class="row">
        <input type="hidden" name="lang" value="arabic">
            <p id='thanks' style='display: none;'>
                      Thanks for contacting us, we'll be in touch soon!
            </p>
                <div class="form-title col-sm-12">
                    <div class="page-header">
                        <h1>أنت الان مؤهل لخصومات وعروض رائعة
                            <small>لإستشارة
             <span>مجانية</span>
                 برجاء ملء الاستمارة وسنتواصل معك قريبا</small>
                        </h1>
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
                    <input type="hidden" name="formRequesterFormName" value="Logo_Ar">
                    <input type="hidden" name="utm_source" value="<?php echo $_REQUEST["utm_source"]; ?>">
                    <input type="hidden" name="utm_language" value="<?php echo $_REQUEST["utm_language"]; ?>">
                    <input type="hidden" name="utm_adname" value="<?php echo $_REQUEST["utm_adname"]; ?>">
    
                     
                            <input required class="form-control" id="formRequesterFirstName" name="formRequesterFirstName" placeholder="الاسم" type="text" />
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="Company">
                                    اسم الشركة
                                </label>

                            <input required type="text" placeholder="اسم الشركة" name="formRequesterCompanyName" class="form-control" id="formRequesterCompanyName">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="businessactivity">
                                    النشاط التجاري
                            </label>

                            <input required type="text" placeholder="النشاط التجاري" name="formRequesterBusinessActivity" class="form-control" id="formRequesterBusinessActivity">
                        </div>
                        <div class="form-group is-flex col-sm-12">
                            <!--                            <div class="form-group">-->
                            <!--
                                <label class="control-label " for="title">
                                        Job Title
                                    </label>
-->
                            <select required name="formRequesterTitle" id="formRequesterTitle" size="1" placeholder=" All" class="form-control">
                                    <option value=""> المسمى الوظيفي</option>

                                    <option value="Owner"> صاحب عمل</option>
                                    <option value="General Manager"> مدير عام</option>
                                    <option value="Marketing Manager"> مدير تسويق</option>
                                    <option value="Branch Manager"> مدير فرع</option>
                                    <option value="Other"> اخرى</option>

                                </select>
                            <span class="gap"></span>

                            <!--                            </div>-->
                            <!--                            <div class="form-group custTitle">-->
                            <!--
                                <label class=" control-label requiredField" for="pleaseState">
                                    please state….. 
                                </label>
-->
                            <input required type="text" placeholder="برجاء تحديد المسمى الوظيفي" name="formRequesterOther" class="form-control custTitle" id="formRequesterOther">
                            <!--                            </div>-->
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="formRequesterEmail">
                                    البريد الإلكتروني
                                    <span class="asteriskField">
                                    *
                                   </span>
                                </label>
                            <input required class="form-control" id="formRequesterEmail" name="formRequesterEmail" placeholder="البريد الإلكتروني" type="email" />
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="control-label " for="formRequesterMobile">
                                    رقم الموبايل #
                                </label>
                            <input required name='formRequesterMobile' id='formRequesterMobile' placeholder='رقم الموبايل' pattern="[0-9]*" maxlength="30" min="3" id="formRequesterMobile" size="25" onChange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter only digits' : ''); if(this.checkValidity()) form.pattern = this.value;" class="form-control" type="tel" />
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="control-label " for="city">
                                     المدينة
                                </label>

                            <select required name="formRequesterCity" size="1" placeholder=" All" class="form-control" id="city">
                                <option value=""> المدينة</option>

                                <option value="Aswan">اسوان</option>

                                <option value="Assyout">الأسكندريه</option>

                                <option value="Assyout">اسيوط</option>

                                <option value="Ismaileya"> الاسماعيلية</option>

                                <option value="Luxor"> الاقصر</option>

                                <option value="Red Sea"> البحر الاحمر</option>

                                <option value="El Beheira"> البحيرة</option>

                                <option value="El Gouna"> الجونة </option>

                                <option value="Giza"> الجيزة</option>

                                <option value="El Dakahleya">الدقهلية</option>

                                <option value="Suez">السويس</option>

                                <option value="El Sharkeya">الشرقية</option>

                                <option value="El Ain El Sokhna">العين السخنة</option>

                                <option value="El Gharbeya"> الغربية</option>

                                <option value="Hurghada"> الغردقة</option>

                                <option value="Cairo"> القاهرة</option>

                                <option value="Quseir"> القصير</option>

                                <option value="Kaliobeya"> القليوبية</option>

                                <option value="El Menia"> المنيا</option>

                                <option value="Baharia Oasis"> الواحات البحرية</option>

                                <option value=" El Wadi El Gadid"> الوادى الجديد</option>

                                <option value="Benisuef"> بنى سويف</option>

                                <option value="Port Said"> بور سعيد</option>

                                <option value="South Sinai"> جنوب سيناء</option>

                                <option value="Damietta"> دمياط</option>

                                <option value="Dahab"> دهب</option>

                                <option value="Safaga"> سفاجا</option>

                                <option value="Sohag"> سوهاج</option>

                                <option value="Sharm El Sheikh"> شرم الشيخ</option>

                                <option value="North Sinai"> شمال سيناء</option>

                                <option value="Taba"> طابا</option>

                                <option value="Qena"> قنا</option>

                                <option value="Kafr El Sheikh"> كفر الشيخ</option>

                                <option value="Marsa Alam"> مرسى علم</option>

                                <option value="Marsa Matrouh"> مرسى مطروح</option>

                                <option value="Misurata"> ميسوراتا</option>

                                <option value="Nuweibaa"> نويبع</option>

                                <option value="Siwa Oasis"> واحة سيوة</option>

                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="Website">
                                    الموقع الالكتروني او صفحة الفيس بوك 
                            </label>

                            <input type="text" placeholder="الموقع الالكتروني او صفحة الفيس بوك" name="formRequesterWebsite" class="form-control" id="formRequesterWebsite">
                        </div>
                    </div>
                    <!--                    end of .row-->

                </div>
                <!--            end of .col-sm-6-->




                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group form-inline is-flex col-sm-12">
                            <label class=" requiredField" for="Company">
                                    الوقت المفضل للتواصل :
                                </label>
                            <label class="requiredField" for="from">
                                    من:
                                </label>
                            <select required class="form-control" name="formRequesterTimefrom" id="formRequesterTimefrom">
                                <option selected>10 ص</option>
                                <option>11 ص</option>
                                <option>12 م</option>
                                <option>1 م</option>
                                <option>2 م</option>
                                <option>3 م</option>
                                <option>4 م</option>
                                <option>5 م</option>
                              </select>
                            <label class="requiredField" for="to">
                                    إلي:
                                </label>
                            <select required class="form-control" name="formRequesterTimeto" id="formRequesterTimeto">
                                <option selected>10 ص</option>
                                <option>11 ص</option>
                                <option>12 م</option>
                                <option>1 م</option>
                                <option>2 م</option>
                                <option>3 م</option>
                                <option>4 م</option>
                                <option>5 م</option>
                              </select>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="control-label " for="message">
                                    الرسالة
                                </label>
                            <textarea required name="formRequesterMessage" placeholder="الرسالة" class="form-control" cols="40" id="formRequesterMessage" rows="6"></textarea>
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
                        <button required class="btn btn-warning btn-lg" name="submit" type="submit" value="ابدأ الآن">
                                ابدأ الآن
                        </button>
                    </div>
                </div>
            </form>
            <script>
                _gaq.push(['_trackEvent', 'submit', 'showed_ar', '', 0]);
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
         <!-- Speakol -->
        <script>spix('event','lead');</script>
        <!-- end of Speakol -->         
            <script>
                _gaq.push(['_trackEvent', 'submit', 'clicked_ar', '', 0]);
            </script>
            <? } ?>
        </div>
        <!--            end of .contact-form-->
    </div>
    <!--        end of .row-->