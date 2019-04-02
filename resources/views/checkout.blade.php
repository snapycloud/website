@extends('layout.master_form')

@section('main')

                <div class="section-block intro-title-1 small">
                    <div class="row">
                        <div class="column width-6 offset-3">
                            <div class="title-container">
                                <div class="title-container-inner center left-on-mobile">
                                    <h1 class="mb-0">بررسی نهایی</h1>
                                    <p class="lead mb-0 mb-mobile-20">تأیید خرید شما</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Intro Title Section 1 End -->

                <!-- Checkout -->
                <div class="section-block pt-0">
                    <div class="row one-column-on-tablet">
                        <div class="column width-6 offset-3">
                            
                            <div class="with-background">
                    
                                <!-- Cart Overview and Totals -->
                                <div class="row">
                                    <div class="column width-12">
                                        <div class="cart-overview">
                                            <table class="table non-responsive rounded large mb-60 rtl right">
                                                <thead>
                                                    <tr>
                                                        <th class="product-details ">طرح انتخاب شده</th>
                                                        <th class="product-subtotal right">هزینه اشتراک</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart-item">
                                                        <td class="product-details right">
                                                            <span class="amount">اشتراک {{ $product['translate'] }} {{ $product['categoryName'] }}</span>
                                                        </td>
                                                        <td class="product-subtotal right">
                                                            <span class="amount">{{ $product['unitPriceConverted'] }} تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart-order-tax right">
                                                        <td colspan="2">تخفیف: <span class="amount">۰ تومان</span></td>
                                                    </tr>
                                                    <tr class="cart-order-total right">
                                                        <td colspan="2">مجموع قابل پرداخت: <span class="amount">{{ $product['unitPriceConverted'] }} تومان</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Overview and Totals End -->
 <div class="row">
                                                <div class="column width-12">
                                                    <form action="{{ route('payment', $product['id']) }}" method="POST">
                                                        <input type="hidden" value="{{ $product['id'] }}" name="id">
                                                        {{ csrf_field() }}
                                                    <input type="submit" value="پرداخت آنلاین" class="form-submit button rounded medium bkg-theme bkg-hover-theme color-white color-hover-white mb-0" tabindex="8">
                                                </form>
                                                </div>
                                            </div>
                        


                            </div>

                        </div>
                    </div>
                    <!-- Checkout End -->

                </div>


@stop