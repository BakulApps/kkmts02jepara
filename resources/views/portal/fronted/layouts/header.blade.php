<header class="wrapper bg-light">
    @include('portal.fronted.layouts.navbar')
    <nav class="navbar center-nav transparent navbar-expand-lg navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{route('portal.home')}}">
                    <img src="{{asset($setting->value('app_logo'))}}" srcset="{{asset($setting->value('app_logo_retina'))}} 2x" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <a href="{{route('portal.home')}}"><img src="{{asset($setting->value('app_logo'))}}" srcset="{{asset($setting->value('app_logo_retina'))}} 2x" alt="" /></a>
                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                </div>
                <ul class="navbar-nav">
                    @foreach(\App\Models\Portal\Mainmenu::where('menu_parent', 0)->get() as $mainmenu)
                    @php($parentmenu = \App\Models\Portal\Mainmenu::where('menu_parent', $mainmenu->menu_id))
                    <li class="nav-item @if($parentmenu->count() >= 1) dropdown @endif">
                        <a class="nav-link @if($parentmenu->count() >= 1) dropdown-toggle @endif" href="{{$mainmenu->menu_link}}">{{$mainmenu->menu_name}}</a>
                        @if($parentmenu->count() >= 1)
                        <ul class="dropdown-menu">
                            @foreach($parentmenu->get() as $parent)
                            <li class="nav-item"><a class="dropdown-item" href="{{$parent->menu_link}}">{{$parent->menu_name}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                    <li class="nav-item d-none d-md-block">
                        <a href="contact.html" class="btn btn-sm btn-primary rounded-pill">Kontak</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
