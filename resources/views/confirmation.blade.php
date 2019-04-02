@extends('layout.master_form')

@section('main')
                <div class="section-block intro-title-1 small">
                    <div class="row">
                        <div class="column width-10 offset-1">
                            <div class="title-container">
                                <div class="title-container-inner">
                                    <div class="row flex">
                                        <div class="column width-12 v-align-middle rtl">
                                            <div>
                                                <h1 class="mb-0">پرداخت انجام شد</h1>
                                                <p class="lead mb-0 mb-mobile-20">سفارش شما تأیید شده است</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Intro Title Section 1 End -->

                <!-- Confirmation -->
                <div class="section-block pt-0">
                    <div class="row">
                        <div class="column width-10 offset-1">
                            
                            <div class="with-background">

                                <!-- Confirmation Message -->
                                <div class="row">
                                    <div class="column width-12 rtl">
                                        <p class="lead">با تشکر از خرید شما</p>
                                        <p>اطلاعات کاربری به ایمیلتان ارسال خواهد شد</p>
                                    </div>
                                    <div class="column width-12">
                                        <hr>
                                    </div>
                                </div>
                                <!-- Confirmation Message End -->
                    
                                <!-- Tracking Code -->
                                <div class="row">
                                    <div class="column width-12 rtl">
                                        <h4 class="mb-30">کد پیگیری خرید شما</h4>
                                        <div class="box small rounded bkg-green color-white shadow">
                                            <span class="order-number title-medium opacity-07">98092347-DHS</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tracking Code End -->
<hr>
                                <!-- Return Home -->
                                <div class="row">
                                    <div class="column width-12 right">
                                        <a href="{{ route('login') }}" class="button rounded large text-small bkg-theme bkg-hover-theme color-white color-hover-white">ورود به سیستم</a>
                                    </div>
                                </div>
                                <!-- Return Home End -->

                            </div>

                        </div>
                    </div>
                    <!-- Checkout End -->

                </div>
@stop