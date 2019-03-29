@extends('layout.master_form')

@section('main')

                            <!-- Login Section -->
                <div class="section-block replicable-content">
                    <div class="row flex">
                        <div class="column width-5 offset-1 push-6 v-align-middle rtl">
                            <div>
                                <h2>دسترسی به تمام ابزارهای ما با یک حساب</h2>
                                <ul class="list-unstyled">
                                    <li><span class="icon-check color-green"></span> سازگار با تمام دستگاه ها</li>
                                    <li><span class="icon-check color-green"></span> بهینه سازی شده</li>
                                    <li><span class="icon-check color-green"></span> طراحی اربردی</li>
                                    <li><span class="icon-check color-green"></span> سفارشی نامحدود</li>
                                </ul>
                            </div>

                        </div>
                        <div class="column width-6 pull-6">
                            <div>
                                <div class="signup-box box rounded xlarge shadow bkg-white rtl">
                                    <h3 class="h1-bold">ثبت نام سرویس اشتراکی اسنپی</h3>
                                    <hr>
                                    {{-- <p class="mb-20">اگر اشتراک دارید? <a href="{{ route('login') }}" class="fade-location">کلیکی کنید</a></p> --}}
                                    <div class="register-form-container ">
                                        @if($errors->any())
                                            {{-- <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul> --}}
                                            <div class="box small rounded bkg-red color-white  rtl">
                                            <span class="order-number  opacity-07">اطلاعات وارد شده اشتباه است</span>
                                        </div>
                                        @endif
                                        <form class="register-form" action="{{ route('register') }}" method="post" novalidate >
                                            {{ csrf_field() }}
                                            <div class="row">
                                            <div class="column width-12">
                                                <h4 class="mb-30">نام سرویس انتخابی: </h4>
                                               
                                            </div>
                                        </div>
                                            <div class="row merged-form-elements">
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">نام خانوادگی :</label>
                                                        <input placeholder="" value="{{ old('register.lastname') }}" required type="text" name="register[lastname]" class="form-lastname form-element rounded medium
                                                        @if($errors->has('register.lastname') )
                                                            {{'required-field'}}
                                                        @endif" >
                                                    </div>
                                                </div>
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">نام :</label>
                                                        <input type="text" value="{{ old('register.firstname') }}" name="register[firstname]" class="form-firstname form-element rounded medium @if($errors->has('register.firstname') )
                                                            {{'required-field'}}
                                                        @endif" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">ایمیل:</label>
                                                        <input type="email" value="{{ old('register.email') }}" name="register[email]" class="form-email form-element rounded medium @if($errors->has('register.email') )
                                                            {{'required-field'}}
                                                        @endif" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">شماره همراه:</label>
                                                        <input type="phone" value="{{ old('register.phone') }}" name="register[phone]" class="form-phone form-element rounded medium @if($errors->has('register.phone') )
                                                            {{'required-field'}}
                                                        @endif" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">پسورد:</label>
                                                        <input type="password" name="register[password]" class="form-password form-element rounded medium @if($errors->has('register.password') )
                                                            {{'required-field'}}
                                                        @endif" placeholder="(۸ کاراکتر یا بیشتر باشد)" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12 mt-10">
                                                    <input type="submit" value="ثبت نام" class="form-submit button rounded medium bkg-green bkg-hover-theme bkg-focus-green color-white color-hover-white no-margins">
                                                </div>
                                            </div>
                                        </form>
                                        <p class="text-small mt-20">با ایجاد حساب کاربری شما با شرایط ما موافقید - <a href="{{ route('terms') }}">مطالعه کنید</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login Section End -->

@stop