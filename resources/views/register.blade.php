@extends('layout.master_form')

@section('main')

                            <!-- Login Section -->
                <div class="section-block replicable-content">
                    <div class="row flex">
                        <div class="column width-5 offset-1 push-6 v-align-middle">
                            <div>
                                <h2>Access all our tools with a single Faulkner account</h2>
                                <ul class="list-unstyled">
                                    <li><span class="icon-check color-green"></span> All-device friendly.</li>
                                    <li><span class="icon-check color-green"></span> Google search optimized.</li>
                                    <li><span class="icon-check color-green"></span> Beautiful designer templates.</li>
                                    <li><span class="icon-check color-green"></span> Unlimited custom announcements.</li>
                                </ul>
                                <hr>
                                <div class="thumbnail circle pull-left" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.01">
                                    <img src="{{ asset('images/team/team-member-1-square.jpg') }}" width="60" height="60" alt=""/>
                                </div>
                                <div>
                                    <h4 class="mb-10">Kay Casey <span class="opacity-05">Faulkner Support</span></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p><a href="#">View New Features &rarr;</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="column width-6 pull-6">
                            <div>
                                <div class="signup-box box rounded xlarge shadow bkg-white">
                                    <h3>Register an Account</h3>
                                    <p class="mb-20">Already have an account? <a href="index-login-2.html" class="fade-location">Click Here</a></p>
                                    <div class="register-form-container">
                                        <form class="register-form" action="#" method="post" novalidate>
                                            <div class="row merged-form-elements">
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">First Name:</label>
                                                        <input type="text" name="register[firstname]" class="form-firstname form-element rounded medium" placeholder="John" required>
                                                    </div>
                                                </div>
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Last Name:</label>
                                                        <input type="text" name="register[lastname]" class="form-lastname form-element rounded medium" placeholder="Doe" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Email:</label>
                                                        <input type="email" name="register[email]" class="form-email form-element rounded medium" placeholder="johndoe@gmail.com" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Password:</label>
                                                        <input type="password" name="register[password]" class="form-password form-element rounded medium" placeholder="•••••••• (8 or more characters)" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12 mt-10">
                                                    <input type="submit" value="Create Account" class="form-submit button rounded medium bkg-green bkg-hover-theme bkg-focus-green color-white color-hover-white no-margins">
                                                </div>
                                            </div>
                                        </form>
                                        <p class="text-small mt-20">By creating an account you agree to our terms - <a href="#">Read More</a></p>
                                        <div class="form-response show"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login Section End -->

                <!-- Subscribe Advanced Modal End -->
                <div id="subscribe-modal" class="section-block pt-0 pb-30 background-none hide">
                    
                    <!-- Intro Title Section 2 -->
                    <div class="section-block intro-title-2-1 xsmall bkg-grey-ultralight">
                        <div class="media-overlay bkg-black opacity-03"></div>
                        <div class="row">
                            <div class="column width-12">
                                <div class="title-container">
                                    <div class="title-container-inner center color-white">
                                        <h1 class="title-medium mb-0">Subscribe To Newsletter</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Intro Title Section 2 End -->

                    <!-- Signup -->
                    <div class="section-block pt-60 pb-0">
                        <div class="row">
                            <div class="column width-12 center">
                                <div class="signup-form-container">
                                    <div class="row">
                                        <div class="column width-10 offset-1">
                                            <p>Subscribe to our monthly newsletter and get the latest news from Kant. You can unsubscribe at any time.</p>
                                        </div>
                                    </div>
                                    <form class="signup-form merged-form-elements" action="php/subscribe.php" method="post" novalidate>
                                        <div class="row">
                                            <div class="column width-8">
                                                <div class="field-wrapper">
                                                    <input type="email" name="email" class="form-email form-element rounded medium left" placeholder="Email address*" tabindex="2" required>
                                                </div>
                                            </div>
                                            <div class="column width-4">
                                                <input type="submit" value="Subscribe" class="form-submit button rounded large bkg-theme bkg-hover-green color-white color-hover-white">
                                            </div>
                                        </div>
                                        <input type="text" name="honeypot" class="form-honeypot form-element">
                                    </form>
                                    <div class="form-response show"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Signup End -->

                </div>
@stop