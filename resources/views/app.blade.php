@extends('layout.master')

@section('main')
                <div id="home" class="section-block hero-2-4 window-height clear-height-on-tablet">
                    <div class="media-overlay bkg-black opacity-08"></div>
                    <div class="row flex v-align-middle">
                        <div class="column width-12">
                            <div class="row flex one-column-on-tablet">
                                <div class="column width-12 v-align-middle center">
                                    <div>
                                        <{{-- div class="thumbnail">
                                    <img src="images/anapycloud2x.png" width="500" alt="" style="transition-duration: 400ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);">
                                </div> --}}
                                        <h1 class="color-white h1-bold center mb-20">به مشتریان خود نزدیکتر شودید</h1>
                                        <h2 class="color-white h1-bold center mb-20">شروع آسان  برای استارت آپ‌ها</h2>
                                        <p class="lead color-white center mb-40 rtl">اسنپی یک پلتفرم ابری آماده است با امکانات بی نظیر و کارآمد، <br>  با زدن یک دکمه سرویس دلخواه خود را ایجاد کنید.</p>
                                        <div class="mb-mobile-30 center">
                                            <a href="#plans" class="button rounded large border-white color-white bkg-hover-green color-hover-white">
                                                ایجاد سرویس کلیک کنید
                                            </a>
                                            {{-- <a href="#plans" class="button rounded large border-white color-white bkg-hover-gray color-hover-white rtl"> --}}
                                                {{-- <span class="label rounded bkg-green color-white"></span> رایگان  --}}
                                            {{-- </a> --}}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Intro Section End -->

                <!-- About Section -->
                <div class="section-block bkg-white" id="product">
                    <div class="row flex two-columns-on-tablet">
                        <div class="column width-7 v-align-middle right rtl ">
                            <div>
                                <h3>سرویس اشتراکی ابری و اختصاصی</h3>
                                <p class="lead mb-50 justify" style="font">کسب و کار خود را با کمترین هزینه راه اندازی کنید. نرم افزار مدیریت ارتباط با مشتری را رایگان استفاده کنید. سرویس های پانل api برای نرم افزاری های موبایلی و وب اپلیکیشن ها به راحتی با کمترین هزینه و بیشترین امکانات راه اندازی و استفاده کنید.</p>
                                <div class="feature-column medium left">
                                    <span class="feature-icon icon-flow-tree color-theme mb-30"></span>
                                    <div class="feature-text right">
                                        <h4 class="color-theme">سرویس ها متنوع</h4>
                                        <p>با توجه به نیاز و هزینه، سرویس مورد نظر خود را انتخاب کنید، حتی با کمترین هزینه می توانید بهترین کیفیت و سرویس رسانی را تهیه کنید.</p>
                                        {{-- <a href="#">Read More →</a> --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="feature-column medium left">
                                    <span class="feature-icon icon-flow-parallel color-theme mb-30"></span>
                                    <div class="feature-text right">
                                        <h4 class="color-theme">سفارشی سازی</h4>
                                        <p>به راحتی از طریق پانل سیستم خود را توسعه دهید بدون نیاز به برنامه نویسی. در صورتیکه درخواست نیازمندی جدید دارید کافیست به ما اطلاع دهید تا بعد بررسی و امکان سنجی برایتان توسعه دهیم.</p>
                                        {{-- <a href="#">Read More →</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4 offset-1 center">
                            <div>
                                <div class="box rounded xlarge bkg-white border-grey-light">
                                    <div class="row mb-20">
                                        <div class="column width-12">
                                            <span class="icon-circled icon-gauge pulsate medium border-theme color-theme"></span>
                                        </div>
                                    </div>
                                    <h4>سرعت و قابلیت بالا</h4>
                                    <p class="lead">کشف، درک و انتخاب روش های  مناسب برای رسیدن به مخاطبان  گسترده تر و ارائه سرویس های پرسرعت با توجه به نیاز شرکت‌ها</p>
                                    <div class="box xlarge ignore-parent-padding last bkg-grey-light rtl">
                                        <h4>توسعه و پایداری</h4>
                                        <p class="opacity-07">ما در تلاش برای اضافه کردن اطلاعات  کاربردی از سرویس های خود هستیم. همیشه در حال توسعه و بروزرسانی سرویس های خود هستیم، درخواست هایی که لازم داریدبرای ما ارسال کنید



</p>
                                        <a href="#documentation" class="button rounded small bkg-theme bkg-hover-theme color-white color-hover-white">کلیک کنید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Section End -->
                <div class="section-block pt-60 pb-60 bkg-grey-ultralight">
                    <div class="row flex two-columns-on-tablet">
                        <div class="column width-3 center v-align-middle horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:300;" data-threshold="1">
                            <div>
                                <a href="#plans" class="scroll-link button rounded medium full-width  bkg-green color-white bkg-hover-green color-hover-white no-marginsk">برای ثبت نام کلیک کنید</a>
                            </div>
                        </div>
                        <div class="column width-7 offset-1 v-align-middle horizon right" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:0;" data-threshold="1">
                            <p class="lead right rtl">اسنپی برای شما طراحی شده تا هرچه سریع تر به جلو بروید</p>
                        </div>
                        
                    </div>
                </div>

<div class="section-block bkg-white">
                    <div class="row">
                        <div class="column width-8 offset-2">
                            <div class="thumbnail mb-40">
                                <img src="images/generic/blockchain.jpg" width="1200" alt="" style="transition-duration: 400ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);">
                            </div>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="column width-6 mb-mobile-40 v-align-middle center">
                            <div>
                                <span class="icon-circled icon-line-graph pulsate large border-theme color-theme mb-40"></span>
                                <h3 class="weight-semi-bold ">تست فشار</h3>
                                <p class="opacity-07 rtl">تمام سرویس ها آماده تست فشار هستند، به شما تظمین حداقل پاسخ در سرویس های ارائه شده را می دهیم. می توانید کارائی سرویس خود را با ابزار های پیشنهادی بررسی کنید و از مناسب بودن عملکرد سرویس خود اطمینات حاصل کنید.</p>
                                {{-- <a href="#">Read More →</a> --}}
                            </div>
                        </div>
                        <div class="column width-6 mb-mobile-40 v-align-middle center">
                            <div>
                                <span class="icon-circled icon-network pulsate large border-theme color-theme mb-40"></span>
                                <h3 class="weight-semi-bold ">بدون باتل نک</h3>
                                <p class="opacity-07 rtl">استفاده از منابع حداکثری و بهینه شده با سرویس ها و درخواست ها، اقدامات لازم نظیر تیون کردن و اسکیل شدن برای بانک اطلاعت، منابع نرم‌افزاری و سخت افزاری جهت ارائه بهترین کارایی در سرویس های ابری  اشتراکی و اختصاصی انجام شده است.

</p>
                                {{-- <a href="#">Read More →</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero 5 Section -->
                <div class="section-block pb-30 bkg-grey-ultralight">
                    <div class="row">
                        <div class="column width-8 offset-2 center">
                            <h3 class="mb-30">امکانات موجود در همه برنامه ها</h3>
                            <p class="lead mb-60">هر سرویس به صورت پیش فرض شامل پشتیبانی ماهانه برای حمایت از مصرف کننده می باشد.</p>
                        </div>
                    </div>
                    <div class="row flex boxes two-columns-on-tablet">
                        <div class="column width-4 mb-10">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-credit mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text rtl">
                                        <h4>اتوماسیون فروش</h4>
                                        <p>ماژول سرنخ. تبدیل سرنخ به فرصت، حساب، سازمان، اشخاص.
ماژول فرصت ها. فروش بالقوه در CRM.
ماژول حساب و سازمان. هر حساب یا سازمان یک رکورد مرکزی در مدل B2B است.
ماژول مخاطب یا اشخاص. ثبت اطلاعات اشخاص و ارتباط آن‌ها با سازمان و حساب.
</p>
                                        {{-- <a href="#">Read More →</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4 mb-10">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-flow-parallel mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text">
                                        <h4>سرویس های چند منظوره</h4>
                                        <p>از سرویس های ما برای پنل سمت سرور اپلیکیشن های موبایلی, نرم افزار مدیریت ارتباط با مشتری استفاده کنید. هر سناریویی که طراحی کردید بوجود بیاورید و پیاده سازی کنید. بدون یک خط کد نویس و دانش برنامه نویسی

</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4 mb-10">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-tools mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text rtl">
                                        <h4>سفارشی سازی</h4>
                                        <p>مدیریت طراحی، تغییر و طرح بندی برای جزئیات و نمایش لیست.
مدیریت اجرایی ایجاد ماژول‌های سفارشی، زمینه ها و روابط.
مدیریت برچسب ها و توانایی سفارشی کردن برچسب های برنامه.
</p>
                                        {{-- <a href="#">Read More →</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero 5 Section End -->

<div class="section-block logos-1 pt-50 bkg-grey-ultralight color-grey">
                    <div class="row">
                        <div class="column width-10 offset-1 center">
                            <h4 class="mb-50 rtl">از سرویس های اسنپی استفاده می کنند ...</h4>
                            <div class="row content-grid-4 opacity-06">
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/telemusic.png" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/appdat.png" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/avva.png" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/vada.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div id="plans" class="section-block pb-0 bkg-grey-ultralight in-view">
                    <div class="row flex">
                        <div class="column width-12">
                            <h3 class="weight-semi-bold mb-60 right rtl">نرم افزار مدیریت ارتباط با مشتری</h3>
                        </div>
                    </div>
                    <div class="row flex boxes two-columns-on-tablet">
                        <div class="column width-4">
                            <div>
                                <div class="pricing-table rounded large style-1 columns-1 mb-0 border-grey-light">
                                    <div class="pricing-table-column">
                                        <div class="pricing-table-header bkg-blue-light color-white">
                                            <h4 class="weight-semi-bold pull-right">رایگان</h4>
                                            <span class="icon-flow-branch large pull-left"></span>
                                            <div class="clear"></div>
                                            <div class="pricing-table-price color-grey right">
                                                <h4>
                                                    <span class="interval mt-10">ماه / </span>
                                                    <span class="currency">تومان</span>۰                                                    
                                                </h4>
                                            </div>
                                        </div>
                                        <hr class="thick no-margins">
                                        <div class="pricing-table-text bkg-white">
                                            <p>زیرساخت سرویس ابری اشتراکی</p>
                                            <ul class="list-unstyled mb-0 rtl">
                                                <li><strong>۱۰۰ مکابایت</strong> فضای ذخیره یابی</li>
                                                <li><strong>۲ کاربر</strong> هم زمان</li>
                                                <li><strong>لایه امنیتی وب</strong> فعال است</li>
                                                <li><strong>سیستم پشتیبانی </strong> تیکیت</li>
                                                <li><strong>انتخاب دامین </strong> دلخواه ندارد</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-footer bkg-white">
                                            <a href="{{ route('plan', '5c96a2537006abc5f') }}" class="button rounded bkg-blue bkg-hover-blue color-white color-hover-white mb-mobile-40">انتخاب طرح</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div>
                                <div class="pricing-table rounded large style-1 columns-1 mb-0 border-grey-light">
                                    <div class="pricing-table-column">
                                        <div class="pricing-table-header bkg-blue-light color-white">
                                            <h4 class="weight-semi-bold pull-right">پیشرفته</h4>
                                            <span class="icon-flow-cascade large pull-left"></span>
                                            <div class="clear"></div>
                                            <div class="pricing-table-price color-grey">
                                                <h4>
                                                    <span class="interval mt-10">ماه / </span>
                                                    <span class="currency">تومان</span>۱۹۹،۰۰۰
                                                    
                                                </h4>
                                            </div>
                                        </div>
                                        <hr class="thick no-margins">
                                        <div class="pricing-table-text bkg-white rtl">
                                            <p>زیرساخت سرویس ابری اختصاصی</p>
                                            <ul class="list-unstyled mb-0">
                                              <li><strong>۵۰۰ مکابایت</strong> فضای ذخیره یابی</li>
                                                <li><strong>۱۰ کاربر</strong> هم زمان</li>
                                                <li><strong>لایه امنیتی وب</strong> فعال است</li>
                                                <li><strong>سیستم پشتیبانی </strong> تیکیت و تماس</li>
                                                <li><strong>انتخاب دامین </strong> دلخواه دارد</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-footer bkg-white">
                                            <a href="{{ route('plan', '5c96a2b628614ceb0') }}" class="button rounded bkg-blue bkg-hover-blue color-white color-hover-white mb-mobile-40">انتخاب طرح</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div>
                                <div class="pricing-table rounded large style-1 columns-1 mb-0 border-grey-light">
                                    <div class="pricing-table-column">
                                        <div class="pricing-table-header bkg-blue-light color-white">
                                            <h4 class="weight-semi-bold pull-right">سازمانی</h4>
                                            <span class="icon-flow-tree large pull-left"></span>
                                            <div class="clear"></div>
                                            <div class="pricing-table-price color-grey">
                                                <h4>
                                                    <span class="interval mt-10">ماه / </span>
                                                    <span class="currency">تومان</span>۳۹۹،۰۰۰
                                                </h4>
                                            </div>
                                        </div>
                                        <hr class="thick no-margins">
                                        <div class="pricing-table-text bkg-white rtl">
                                            <p>زیرساخت سرویس ابری اختصاصی</p>
                                            <ul class="list-unstyled mb-0">
                                                <li><strong>۱ گیگابایت</strong> فضای ذخیره یابی</li>
                                                <li><strong>۲۰ کاربر</strong> هم زمان</li>
                                                <li><strong>لایه امنیتی وب</strong> فعال است</li>
                                                <li><strong>سیستم پشتیبانی </strong> تیکیت و تماس</li>
                                                <li><strong>انتخاب دامین </strong> دلخواه دارد</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-footer bkg-white">
                                            <a href="{{ route('plan', '5c96a2f43d1ab720f') }}" class="button rounded bkg-blue bkg-hover-blue color-white color-hover-white mb-mobile-40">انتخاب طرح</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="plans" class="section-block pb-0 bkg-grey-ultralight in-view">
                    <div class="row flex">
                        <div class="column width-12">
                            <h3 class="weight-semi-bold mb-60 rtl right">سرویس های آماده API بدون برنامه نویسی</h3>
                        </div>
                    </div>
                    <div class="row flex boxes two-columns-on-tablet">
                        <div class="column width-4">
                            <div>
                                <div class="pricing-table rounded large style-1 columns-1 mb-0 border-grey-light">
                                    <div class="pricing-table-column">
                                        <div class="pricing-table-header bkg-blue-light color-white">
                                            <h4 class="weight-semi-bold pull-right">استارت آپ</h4>
                                            <span class="icon-flow-branch large pull-left"></span>
                                            <div class="clear"></div>
                                            <div class="pricing-table-price color-grey right">
                                                <h4>
                                                    <span class="interval mt-10">ماه / </span>
                                                    <span class="currency">تومان</span>۹۹،۰۰۰                                                    
                                                </h4>
                                            </div>
                                        </div>
                                        <hr class="thick no-margins">
                                        <div class="pricing-table-text bkg-white">
                                            <p>زیرساخت سرویس ابری اشتراکی</p>
                                            <ul class="list-unstyled mb-0 rtl">
                                                <li><strong>۱۰۰ مکابایت</strong> فضای ذخیره یابی</li>
                                                <li><strong>۲ عدد ورکر</strong> برای اجرای درخواست ها</li>
                                                <li><strong>۳۰ درخواست</strong>حداقل پاسخ سرور</li>
                                                <li><strong>۲ عدد توکن همزمان</strong> با اعتبار سنجی پایه</li>
                                                <li><strong>توکن های </strong>خواندن، نوشتن، حذف و ویرایش</li>
                                                <li><strong>لایه امنیتی وب</strong> فعال است</li>
                                                <li><strong>سیستم پشتیبانی </strong> تیکیت</li>
                                                <li><strong>انتخاب دامین </strong> دلخواه ندارد</li>
                                                <li><strong>تضمین تست فشار </strong></li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-footer bkg-white">
                                            <a href="{{ route('plan', '5ca009e88ae52c935') }}" class="button rounded bkg-blue bkg-hover-blue color-white color-hover-white mb-mobile-40">انتخاب طرح</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div>
                                <div class="pricing-table rounded large style-1 columns-1 mb-0 border-grey-light">
                                    <div class="pricing-table-column">
                                        <div class="pricing-table-header bkg-blue-light color-white">
                                            <h4 class="weight-semi-bold pull-right">پیشرفته</h4>
                                            <span class="icon-flow-cascade large pull-left"></span>
                                            <div class="clear"></div>
                                            <div class="pricing-table-price color-grey">
                                                <h4>
                                                    <span class="interval mt-10">ماه / </span>
                                                    <span class="currency">تومان</span>۲۹۹،۰۰۰
                                                    
                                                </h4>
                                            </div>
                                        </div>
                                        <hr class="thick no-margins">
                                        <div class="pricing-table-text bkg-white rtl">
                                            <p>زیرساخت سرویس ابری اختصاصی</p>
                                            <ul class="list-unstyled mb-0">
                                                <li><strong>۵۰۰ مکابایت</strong> فضای ذخیره یابی</li>
                                                <li><strong>۴ عدد ورکر</strong> برای اجرای درخواست ها</li>
                                                <li><strong>۱۲۰ درخواست</strong> حداقل پاسخ سرور</li>
                                                <li><strong>۴ عدد توکن</strong> ApiKey،HMAC,BasicAuth</li>
                                                <li><strong>توکن های </strong>خواندن، نوشتن، حذف و ویرایش</li>
                                                <li><strong>لایه امنیتی وب</strong> فعال است</li>
                                                <li><strong>سیستم پشتیبانی </strong>  تیکیت</li>
                                                <li><strong>انتخاب دامین </strong> دلخواه دارد</li>
                                                <li><strong>تضمین تست فشار </strong></li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-footer bkg-white">
                                            <a href="{{ route('plan', '5ca009fb63ecb2746') }}" class="button rounded bkg-blue bkg-hover-blue color-white color-hover-white mb-mobile-40">انتخاب طرح</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div>
                                <div class="pricing-table rounded large style-1 columns-1 mb-0 border-grey-light">
                                    <div class="pricing-table-column">
                                        <div class="pricing-table-header bkg-blue-light color-white">
                                            <h4 class="weight-semi-bold pull-right">سازمانی</h4>
                                            <span class="icon-flow-tree large pull-left"></span>
                                            <div class="clear"></div>
                                            <div class="pricing-table-price color-grey">
                                                <h4>
                                                    <span class="interval mt-10">ماه / </span>
                                                    <span class="currency">تومان</span>۴۹۹،۰۰۰
                                                </h4>
                                            </div>
                                        </div>
                                        <hr class="thick no-margins">
                                        <div class="pricing-table-text bkg-white rtl">
                                            <p>زیرساخت سرویس ابری اختصاصی</p>
                                            <ul class="list-unstyled mb-0">
                                                <li><strong>۱ گیگابایت</strong> فضای ذخیره یابی</li>
                                                <li><strong>۸ عدد ورکر</strong> برای اجرای درخواست ها</li>
                                                <li><strong>۲۱۰ درخواست</strong> حداقل پاسخ سرور</li>
                                                <li><strong>۶ عدد توکن</strong> ApiKey،HMAC,BasicAuth</li>
                                                <li><strong>توکن های</strong> خواندن، نوشتن، حذف و ویرایش</li>
                                                <li><strong>لایه امنیتی وب</strong> فعال است</li>
                                                <li><strong>سیستم پشتیبانی </strong> تیکیت</li>
                                                <li><strong>انتخاب دامین </strong> دلخواه دارد</li>
                                                <li><strong>تضمین تست فشار </strong></li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-footer bkg-white">
                                            <a href="{{ route('plan', '5ca00a17487c7199a') }}" class="button rounded bkg-blue bkg-hover-blue color-white color-hover-white mb-mobile-40">انتخاب طرح</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<div id="documentation" class="section-block replicable-content bkg-grey-ultralight in-view">
                    <div class="row flex">
                        <div class="column width-12 v-align-middle right rtl">
                            <div>
                                <h2 class="mb-30">مستندات گسترده</h2>
                                <p class="lead mb-60">مطمئن هسیتم یکی از فاکتورهای مهم سرویس های پنل API و نرم افزار مدیریت ارتباط با مشتری مستندات کاملا کاربردی آن می باشد. در زیر چندین موضوع برای کمک به شروع کار شما وجود دارد.</p>
                            </div>
                        </div>
                        <div class="column width-12 right left-on-mobile v-align-bottom">
                            <div>
                                <a href="{{ route('larecipe.index') }}" class="button rounded small bkg-pink bkg-hover-white color-white color-hover-pink mb-60">قسمت مستندات کلیک کنید</a>
                            </div>
                        </div>
                    </div>
                    <div class="row flex boxes two-columns-on-tablet">
                        <div class="column width-3 tmh-perspective">
                            <div class="box large rounded bkg-white horizon" data-animate-in="preset:scaleIn;duration:300ms;delay:450ms;" style="backface-visibility: hidden; transition: -webkit-transform 300ms cubic-bezier(0.11, 0.69, 0.66, 1.01) 0ms, opacity; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                <h4 class="mb-80 mb-mobile-40">Api Key</h4>
                                <p><a href="{{ route('home') . '/doc/1.0/api/Authentication' }}">View article →</a></p>
                            </div>
                        </div>
                        <div class="column width-3 tmh-perspective">
                            <div class="box large rounded bkg-white horizon" data-animate-in="preset:scaleIn;duration:300ms;delay:300ms;" style="backface-visibility: hidden; transition: -webkit-transform 300ms cubic-bezier(0.11, 0.69, 0.66, 1.01) 150ms, opacity; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                <h4 class="mb-80 mb-mobile-40">CRUD Operations</h4>
                                <p><a href="{{ route('home') . '/doc/1.0/api/CRUDOperations' }}">View article →</a></p>
                            </div>
                        </div>
                        <div class="column width-3 tmh-perspective">
                            <div class="box large rounded bkg-white horizon" data-animate-in="preset:scaleIn;duration:300ms;delay:150ms;" style="backface-visibility: hidden; transition: -webkit-transform 300ms cubic-bezier(0.11, 0.69, 0.66, 1.01) 300ms, opacity; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                <h4 class="mb-80 mb-mobile-40">Read Entity</h4>
                                <p><a href="{{ route('home') . '/doc/1.0/api/CRUDOperations' }}">View article →</a></p>
                            </div>
                        </div>
                        <div class="column width-3 tmh-perspective">
                            <div class="box large rounded bkg-white horizon" data-animate-in="preset:scaleIn;duration:300ms;delay:0ms" style="backface-visibility: hidden; transition: -webkit-transform 300ms cubic-bezier(0.11, 0.69, 0.66, 1.01) 450ms, opacity; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                <h4 class="mb-80 mb-mobile-40">Intro CRM</h4>
                                <p><a href="{{ route('home') . '/doc/1.0/crm/overview' }}">View article →</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="section-block pt-100 team-2 bkg-white" id="about">
                    <div class="row">
                        <div class="column width-8 offset-2 center">
                            <h3>اسنپی کلود یک تیم پویا</h3>
                            <p class="lead mb-50 rtl">ما یک تیم خلاق و پویا، همیشه در حال رشد و توسعه هستیم.

</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-12">
                            <div class="row flex boxes content-grid-3 rtl">
                                <div class="grid-item center tmh-perspective">
                                    <div class="box rounded medium mb-0 border-grey-light horizon" data-animate-in="preset:slideInUpShort;duration:300ms;" data-threshold="0.3" style="backface-visibility: hidden; transition: -webkit-transform 300ms cubic-bezier(0.11, 0.69, 0.66, 1.01) 0s, opacity; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                        <div class="thumbnail circle border-grey-light thick" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                            <img src="images/team/team-member-1-square.jpg" width="150" height="150" alt="" style="transition-duration: 500ms;">
                                        </div>
                                        <div class="team-content-info">
                                            <h4 class="mb-10">ابراهیم قائمی</h4>
                                            <h6 class="occupation">مدیر مجموعه و تیم فنی</h6>
                                            <p>در دنیای امروز، بیش از پیش صنعت کامپیوتر زندگی روزمره مان را دگرگون ساخته باعث تغییرات کلی در نوع وظایف و عملکردمان شده. ما سعی بر این داریم با نگاه نوبرانه ای در این عرصه قدم برداشته و لبخند رضایت بر لبانتان جاری کنیم
</p>
                                            {{-- <p><a href="#">View Jason's Profile →</a></p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item center tmh-perspective">
                                    <div class="box rounded medium mb-0 border-grey-light horizon" data-animate-in="preset:slideInUpShort;duration:300ms;delay:100ms;" data-threshold="0.3" style="backface-visibility: hidden; transition: -webkit-transform 300ms cubic-bezier(0.11, 0.69, 0.66, 1.01) 100ms, opacity; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                        <div class="thumbnail circle border-grey-light thick" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                            <img src="images/team/team-member-2-square.jpg" width="150" height="150" alt="" style="transition-duration: 500ms;">
                                        </div>
                                        <div class="team-content-info">
                                            <h4 class="mb-10">اصغر رضایی</h4>
                                            <h6 class="occupation">توسعه دهنده</h6>
                                            <p>بیش از ۳ ساله کار برنامه نویسی می کنم، خیلی خوشحالم با تیم اسنپی کلود کار میکنم. تجربیات جدید و چالش های جذاب رو پیش رو داشتیم. خوشحالم یکی از محرهای تیم فنی هستم.</p>
                                        </p></div>
                                    </div>
                                </div>

                                <div class="grid-item v-align-middle center tmh-perspective">
                                    <div class="box rounded medium mb-0 bkg-grey-ultralight horizon" data-animate-in="preset:slideInUpShort;duration:300ms;delay:200ms;" data-threshold="0.3" style="backface-visibility: hidden; transition: -webkit-transform 300ms cubic-bezier(0.11, 0.69, 0.66, 1.01) 200ms, opacity; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                        <div>
                                            <h3 class="mb-10">عضو تیم اسنپی کلود شوید.</h3>
                                            <p class="lead">ما در حال حاضر به دنبال توسعه دهنده و همکار هستیم.</p>
                                            <p>رزمه خود را به ایمیل snapycloud@gmail.com ارسال کنید
                                        </p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-block replicable-content bkg-grey-ultralight" id="contact">
                    <div class="row">
                        <div class="column width-8 offset-2 center">
                             <class="column width-8 offset-2 center">
                            <h3>با ما در ارتباط باشید</h3>
                            <p class="lead mb-50 rtl">هر دغدغه یا مسئله ای در مورد سرویس هایمان دارید کافیست با ما تماس بگیرید.</p>
                        </div>
                    </div>
                </div>

                <div class="section-block hero-5 hero-5-2 bkg-grey-ultralight">
                    <div class="media-column width-6"></div>
                    <div class="row">
                        <div class="column width-5 push-7">
                            <div class="hero-content split-hero-content no-margin-top">
                                <div class="hero-content-inner left-on-mobile">
                                    <div class="tabs button-nav rounded bordered horizontal left">
                                        <ul class="tab-nav">
                                            <li class="active">
                                                <a href="#tabs-2-pane-2">دفتر مرکزی</a>
                                            </li>
                                        </ul>
                                        <div class="tab-panes">
                                            <div id="tabs-2-pane-2" class="active animate-in">
                                                <div class="tab-content">
                                                    <p class="mb-20">تماس جهت مشاوره: ۰۹۰۳۲۳۲۴۱۸۴<br>
                                                    ایران، تهران ستارخان، باقرخان غربی پلاک ۱۳۴</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@stop