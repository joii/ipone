 <header class="header">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a href="homepage">
                <img src="{{ asset('frontend/img/logo1.svg')}}" alt="">
                <img src="{{ asset('frontend/img/logo2.svg')}}" alt="">
            </a>
        </div>
        <div class="navbar-main">
       
            <ul class="nav nav-main">
                <li><a href="{{ route('page.about_us') }}">{{ __("messages.top_nav.about") }}</a></li>
                <li><a href="{{ route('page.our_business') }}">{{ __("messages.top_nav.business") }}</a></li>
                <li><a href="#section-brands" class="scrollLink">{{ __("messages.top_nav.brand") }}</a></li>
                <li><a href="{{ route('page.inter_business') }}" >{{ __("messages.top_nav.inter_biz") }}</a></li>
                <li><a href="#">{{ __("messages.top_nav.news") }}</a></li>
                <li><a href="https://ip-one.com/iplifelab" target="_blank">{{ __("messages.top_nav.life_lab") }}</a></li>
                <li><a href="https://iphouses.scoutcareers.com/th/home" target="_blank">{{ __("messages.top_nav.career") }}</a></li>
                <li><a href="https://officialstore.ip-one.com" target="_blank">{{ __("messages.top_nav.office_store") }}</a></li>
                <li><a href="{{ route('page.reach_us') }}" >{{ __("messages.top_nav.contact") }}</a></li>
            </ul>
           
            <ul class="nav nav-lang">
                <li class="dropdown select">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">TH</a>
                    <ul class="dropdown-menu">
                        <a class="lang lang-th active" href="{{ route('thai.language')}}">TH</a>
                        <a class="lang lang-en" href="{{ route('english.language')}}">EN</a>
                        <a class="lang lang-ch" href="{{ route('chinese.language')}}">CH</a>
                    </ul>
                </li>
            </ul>

            <button class="btn btn-icon navbar-toggle">
            <span class="group">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
        </div>
    </div>
    <!--container-fluid-->
</header>

<div class="navbar-slider">
    <button class="btn btn-icon navbar-toggle  d-none">
        <span class="group">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>
        <ul class="nav nav-genaral d-none">
            <li class="lang">
            <a class="lang lang-th active" href="{{ route('thai.language')}}">TH</a>
            <a class="lang lang-en" href="{{ route('english.language')}}">EN</a>
            <a class="lang lang-ch" href="{{ route('chinese.language')}}">CH</a>
            </li>
        </ul>

        <div class="navbar-close navbar-toggle"></div>
            <ul class="nav nav-main">
                <li><a href="{{ route('page.about_us') }}">{{ __("messages.top_nav.about") }}</a></li>
                <li><a href="{{ route('page.our_business') }}">{{ __("messages.top_nav.business") }}</a></li>
                <li><a href="#section-brands" class="scrollLink">{{ __("messages.top_nav.brand") }}</a></li>
                <li><a href="{{ route('page.inter_business') }}" >{{ __("messages.top_nav.inter_biz") }}</a></li>
                <li><a href="#">{{ __("messages.top_nav.news") }}</a></li>
                <li><a href="https://ip-one.com/iplifelab" target="_blank">{{ __("messages.top_nav.life_lab") }}</a></li>
                <li><a href="https://iphouses.scoutcareers.com/th/home" target="_blank">{{ __("messages.top_nav.career") }}</a></li>
                <li><a href="https://officialstore.ip-one.com" target="_blank">{{ __("messages.top_nav.office_store") }}</a></li>
                <li><a href="{{ route('page.reach_us') }}" >{{ __("messages.top_nav.contact") }}</a></li>
            </ul>
    </div>
<div class="navbar-slider">
<button class="btn btn-icon navbar-toggle  d-none">
<span class="group">
    <span></span>
    <span></span>
    <span></span>
</span>
</button>
<ul class="nav nav-genaral d-none">
    <li class="lang">
        <a class="lang lang-th active" href="{{ route('thai.language')}}">TH</a>
        <a class="lang lang-en" href="{{ route('english.language')}}">EN</a>
        <a class="lang lang-ch" href="{{ route('chinese.language')}}">CH</a>
    </li>
</ul>

<div class="navbar-close navbar-toggle"></div>
    <ul class="nav nav-main">
        <li><a href="{{ route('page.about_us') }}">{{ __("messages.top_nav.about") }}</a></li>
        <li><a href="{{ route('page.our_business') }}">{{ __("messages.top_nav.business") }}</a></li>
        <li><a href="#section-brands" class="scrollLink">{{ __("messages.top_nav.brand") }}</a></li>
        <li><a href="{{ route('page.inter_business') }}" >{{ __("messages.top_nav.inter_biz") }}</a></li>
        <li><a href="#">{{ __("messages.top_nav.news") }}</a></li>
        <li><a href="https://ip-one.com/iplifelab" target="_blank">{{ __("messages.top_nav.life_lab") }}</a></li>
        <li><a href="https://iphouses.scoutcareers.com/th/home" target="_blank">{{ __("messages.top_nav.career") }}</a></li>
        <li><a href="https://officialstore.ip-one.com" target="_blank">{{ __("messages.top_nav.office_store") }}</a></li>
        <li><a href="{{ route('page.reach_us') }}" >{{ __("messages.top_nav.contact") }}</a></li>
    </ul>
</div>
<!--navbar-slider-->
