@extends('layout.master')

@section('main')

                <!-- Intro Section -->
                <div id="home" class="section-block hero-2-4 window-height clear-height-on-tablet">
                    <div class="media-overlay bkg-black opacity-07"></div>
                    <div class="row flex v-align-middle">
                        <div class="column width-12">
                            <div class="row flex one-column-on-tablet">
                                <div class="column width-5">
                                    <div class="signup-box box rounded xlarge mb-0 bkg-white shadow">
                                        <h3>Register an Account</h3>
                                        <p class="mb-20">Already have an account? <a href="index-login-4.html" class="fade-location">Click Here</a></p>
                                        <div class="register-form-container">
                                            <form class="register-form" action="#" method="post" novalidate="">
                                                <div class="row merged-form-elements">
                                                    <div class="column width-6">
                                                        <div class="field-wrapper">
                                                            <label class="color-charcoal">First Name:</label>
                                                            <input type="text" name="register[firstname]" class="form-firstname form-element rounded medium" placeholder="John" required="">
                                                        </div>
                                                    </div>
                                                    <div class="column width-6">
                                                        <div class="field-wrapper">
                                                            <label class="color-charcoal">Last Name:</label>
                                                            <input type="text" name="register[lastname]" class="form-lastname form-element rounded medium" placeholder="Doe" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="column width-12">
                                                        <div class="field-wrapper">
                                                            <label class="color-charcoal">Email:</label>
                                                            <input type="email" name="register[email]" class="form-email form-element rounded medium" placeholder="johndoe@gmail.com" required="">
                                                        </div>
                                                    </div>
                                                    <div class="column width-12">
                                                        <div class="field-wrapper">
                                                            <label class="color-charcoal">Password:</label>
                                                            <input type="password" name="register[password]" class="form-password form-element rounded medium" placeholder="•••••••• (8 or more characters)" required="">
                                                        </div>
                                                    </div>
                                                    <div class="column width-12 mt-10 center">
                                                        <input type="submit" value="Create Account" class="form-submit button rounded medium bkg-green bkg-hover-theme bkg-focus-green color-white color-hover-white no-margins">
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="text-small mt-20 center">By creating an account you agree to our terms - <a href="#">Read More</a></p>
                                            <div class="form-response show"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column width-7 v-align-middle">
                                    <div>
                                        <h1 class="color-white h1-bold right">به مشتریان خود نزدیکتر شودید</h1>
                                        <p class="lead color-white right">اسنپی یک پلتفرم ابری آماده است با امکانات کامل .  با زدن یک دکمه به سرویس دلخواه خود را ایجاد کنید </p>
                                        <a href="#about" class="scroll-link button rounded medium border-white bkg-hover-green pull-right color-white color-hover-white right mb-80">
                                            تمام سرویس‌ها
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Intro Section End -->

                <!-- About Section -->
                <div class="section-block bkg-white">
                    <div class="row flex two-columns-on-tablet">
                        <div class="column width-7 v-align-middle left">
                            <div>
                                <h3>Building A System That Just Works</h3>
                                <p class="lead mb-50">Grow your business, go global, and boost conversions in other countries by localizing your payment experience.</p>
                                <div class="feature-column medium left">
                                    <span class="feature-icon icon-flow-tree color-theme mb-30"></span>
                                    <div class="feature-text">
                                        <h4 class="color-theme">Split Payments</h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur.</p>
                                        <a href="#">Read More →</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="feature-column medium left">
                                    <span class="feature-icon icon-flow-parallel color-theme mb-30"></span>
                                    <div class="feature-text">
                                        <h4 class="color-theme">Parallel Payments</h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur.</p>
                                        <a href="#">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4 offset-1 center">
                            <div>
                                <div class="box rounded xlarge bkg-white border-grey-light">
                                    <div class="row mb-20">
                                        <div class="column width-12">
                                            <span class="icon-circled icon-credit-card pulsate medium border-theme color-theme"></span>
                                        </div>
                                    </div>
                                    <h4>Accept Any Cards</h4>
                                    <p class="lead">Discover, understand, and select the right payment methods to reach a broader audience.</p>
                                    <div class="box xlarge ignore-parent-padding last bkg-grey-light">
                                        <h4>Read the Docs</h4>
                                        <p class="opacity-07">We’re working to add many more payment types. Request the ones you need and we’ll reach out when they’re ready:</p>
                                        <a href="#" class="button rounded small bkg-theme bkg-hover-theme color-white color-hover-white">View Docs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Section End -->

                <!-- Hero 5 Section -->
                <div class="section-block pb-30 bkg-grey-ultralight">
                    <div class="row">
                        <div class="column width-8 offset-2 center">
                            <h3 class="mb-30">Features Included In All Plans</h3>
                            <p class="lead mb-60">Every plan includes size months premium support to ensure you get up and running with your new payment system.</p>
                        </div>
                    </div>
                    <div class="row flex boxes two-columns-on-tablet">
                        <div class="column width-4">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-credit mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text">
                                        <h4>Totally Commissionless</h4>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur.</p>
                                        <a href="#">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-cloud mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text">
                                        <h4>Encrypted Transactions</h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                        <a href="#">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-flow-tree mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text">
                                        <h4>Parallel Payments</h4>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                        <a href="#">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-stopwatch mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text">
                                        <h4>24 Hour Turn-around</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                        <a href="#">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-flow-parallel mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text">
                                        <h4>Dual Transactions</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                        <a href="#">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column width-4">
                            <div class="box rounded large bkg-white border-grey-light shadow-hover">
                                <div class="feature-column large center">
                                    <span class="feature-icon icon-tools mt-20 mb-30 color-theme"></span>
                                    <div class="feature-text">
                                        <h4>Free Initial Setup</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                        <a href="#">Read More →</a>
                                    </div>
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
                            <h4 class="mb-50">Entrusted by industry leaders using Faulkner:</h4>
                            <div class="row content-grid-5 opacity-06">
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/froogle-logo-grid-grey.svg" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/squidbit-logo-grid-grey.svg" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/achillian-logo-grid-grey.svg" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/dropfile-logo-grid-grey.svg" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a href="#">
                                        <img src="images/logos/berry-logo-grid-grey.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Call to Action Section -->
                <div class="section-block pt-60 pb-60 bkg-grey-ultralight">
                    <div class="row flex two-columns-on-tablet">
                        <div class="column width-5 offset-1 v-align-middle horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:0;" data-threshold="1">
                            <p class="lead">Ready to unleash the power of Faulkner design toolkit, sign up today!</p>
                        </div>
                        <div class="column width-5 center v-align-middle horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:300;" data-threshold="1">
                            <div>
                                <a href="#home" class="scroll-link button rounded medium full-width bkg-green color-white bkg-hover-green color-hover-white no-marginsk">Create an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
@stop