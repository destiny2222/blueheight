<!-- Page Header -->
<div class="wptb-page-heading" style="background-image: url('assets/img/background/page-header-bg.jpg');">
    <div class="container">
        <div class="wptb-item--inner">
            <h2 class="wptb-item--title ">@yield('breadcrumbs')</h2>
            <div class="wptb-breadcrumb-wrap">
                <ul class="wptb-breadcrumb">
                    <li><a href="/">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li><span>@yield('breadcrumbs')</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

