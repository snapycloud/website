@include('layout.partials.head')
@include('components.aside')

    <div class="wrapper reveal-side-navigation bkg-charcoal">
        <div class="wrapper-inner">

            @include('components.header')            
            <div class="content clearfix reveal-footer">
                @yield('main')
            </div>
        </div>
    </div>
@include('layout.partials.footer')
