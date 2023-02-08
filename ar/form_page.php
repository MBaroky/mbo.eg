<?php
include 'form.php';
?>
    <div id="request-form" class="row">
        <div class="col-md-12 contact-form well">
            <style>
            
            </style>
            <?php echo @$_REQUEST['endFormMessage'];?>
            <?php if(!isset($_REQUEST['endFormMessage']) && $_REQUEST['endFormMessage'] == 0){?>
            <form id='form1' method='POST' name="form1" class="row">
                <input type="hidden" name="lang" value="arabic">
                <p id='thanks' style='display: none;'>
                    Thanks for contacting us, we'll be in touch soon!
                </p>
                <div class="form-title col-sm-12">
                    <div class="page-header">
                        <h1 style="color: #000;direction:rtl;">لاستشارة  <span>مجانية</span> عن إمكانية البدء برجاء ملء الاستمارة التالية او
                            تواصل
                            معنا مباشرة من خلال
                            <!-- whatsapp icon -->
                            <a href="https://api.whatsapp.com/send?phone=33333"
                            style="width:30px;height:30px;margin-top:-10px;margin-left:5px;"><svg version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
                                S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z" />
                                <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
                                c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
                                c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z" />
                                <path style="fill:#FEFEFE;"
                                d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
                                c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
                                c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
                                c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
                                c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
                                l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945" />
                            </svg></a>
                            <!-- EndOf whatsapp icon -->
                        </h1>
                    </div>
                </div>
                
                <div class="form-group col-sm-12">
                    <h5 style="text-transform:none;direction:rtl;">معلومات اساسية </h5>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group col-sm-12 text-right">
                            <label class="control-label requiredField" for="name">
                                    Name
                                    <span class="asteriskField">
                                    *
                                   </span>
                            </label>
                            <input type="hidden" name="formRequesterFormName" value="<?php echo $pageval; ?>">
                            
                            <input type="hidden" name="utm_source" value="<?php echo $_REQUEST[" utm_source "]; ?>">
                            <input type="hidden" name="utm_language" value="<?php echo $_REQUEST[" utm_language "]; ?>">
                            <input type="hidden" name="utm_adname" value="<?php echo $_REQUEST["utm_adname"]; ?>">
                            <input required class="form-control" id="formRequesterFirstName" name="formRequesterFirstName" placeholder="" type="text" />
                            
                            <div class="palceholder">
                                <label for="formRequesterFirstName">الاسم</label>
                                <span class="star">*</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group col-sm-12 text-right">
                            <label class="control-label requiredField" for="formRequesterEmail">
                                    البريد الإلكتروني
                                    <span class="asteriskField">
                                    *
                                   </span>
                                </label>
                            <input required class="form-control" id="formRequesterEmail" name="formRequesterEmail" placeholder="" type="email" />
                            <div class="palceholder">
                                <label for="formRequesterEmail">البريد الإلكتروني</label>
                                <span class="star">*</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group col-sm-12 text-right">
                            <label class="control-label requiredField" for="Company">
                                    اسم الشركة
                                </label>

                            <input required type="text" placeholder="" name="formRequesterCompanyName" class="form-control" id="formRequesterCompanyName">
                            <div class="palceholder">
                                <label for="formRequesterCompanyName">اسم الشركة</label>
                                <span class="star">*</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group col-sm-12 text-right">
                            <label class="control-label " for="formRequesterMobile">
                                    رقم الموبايل #
                                </label>
                            <input required name='formRequesterMobile' id='formRequesterMobile' placeholder='' pattern="[0-9]*" maxlength="30" min="3" id="formRequesterMobile" size="25" onChange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter only digits' : ''); if(this.checkValidity()) form.pattern = this.value;" class="form-control" type="tel" />
                            <div class="palceholder">
                                <label for="formRequesterMobile">رقم الموبايل</label>
                                <span class="star">*</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <p style="color:red;"><span class="manda">*</span> خانات الزامية</p>
                </div>                
                <div class="form-group col-sm-12">
                    <h5 style="text-transform:none;"> معلومات اضافية (اختيارى)</h5>
                </div>                
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="control-label requiredField" for="businessactivity">
                                    النشاط التجاري
                            </label>

                           <input type="text" placeholder="النشاط التجاري" name="formRequesterBusinessActivity" class="form-control" id="formRequesterBusinessActivity">
                        </div>
                        <div class="form-group is-flex col-sm-12">
                            <!--                            <div class="form-group">-->
                            <!--
                                <label class="control-label " for="title">
                                        Job Title
                                    </label>
                                            -->
                            <select name="formRequesterTitle" id="formRequesterTitle" size="1" placeholder=" All" class="form-control">
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
                            <input type="text" placeholder="برجاء تحديد المسمى الوظيفي" name="formRequesterOther" class="form-control custTitle" id="formRequesterOther">
                            <!--                            </div>-->
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="control-label " for="city">
                                     المدينة
                                </label>

                            <select name="formRequesterCity" size="1" placeholder=" All" class="form-control" id="city">
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

                            <input type="text" placeholder="الموقع الالكتروني او صفحة الفيس بوك " name="formRequesterWebsite" class="form-control" id="formRequesterWebsite">
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
                            <select class="form-control" name="formRequesterTimefrom" id="formRequesterTimefrom">
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
                            <select class="form-control" name="formRequesterTimeto" id="formRequesterTimeto">
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
                            <textarea name="formRequesterMessage" placeholder="الرسالة" class="form-control" cols="40" id="formRequesterMessage" rows="6"></textarea>
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

		<!-- Speakol Pixel Code -->  
		<script>!function (e, s, t, a, n, p, i, o, c) {e[n] || ((i = e[n] = function () {i.process ? i.process.apply(i, arguments) : i.queue.push(arguments)}).queue = [], i.t = 1 * new Date, (o = s.createElement(t)).async = 1,o.src = "https://crawler.speakol.com/sdk/sppixel.min.js?t=" + 864e5 * Math.ceil(new Date / 864e5),(c = s.getElementsByTagName(t)[0]).parentNode.insertBefore(o, c))}(window, document, "script", 0, "spix"),spix("init", "ID-799"),spix("event", "pageload");</script>   
		<!-- End Speakol Pixel Code -->    
        <!-- Speakol -->
        <?php echo isset($speakolCode) ? $speakolCode : '<!-- no Speakol code -->' ?>
        <!-- end of Speakol -->        
        <script>
         _gaq.push(['_trackEvent', 'submit', 'clicked_ar', '', 0]);
        </script>
            <?php } ?>
        </div>
        <!--            end of .contact-form-->
    </div>
    <!--        end of .row-->