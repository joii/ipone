<div class="navbar-slider">
    <button class="btn btn-icon navbar-toggle">
        <span class="group">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button> 
    <ul class="nav nav-genaral"> 
        <li class="lang">
        <a class="lang lang-th" href="{{ route('thai.language')}}">TH</a>&nbsp;|
        <a class="lang lang-en" href="{{ route('english.language')}}">EN</a>&nbsp;|
        <a class="lang lang-ch" href="{{ route('chinese.language')}}">CH</a>
        </li>
    </ul>

    <div class="navbar-close navbar-toggle"></div>
    <ul class="nav nav-main">
        <li><a href="aboutus">{{ __("messages.top_nav.about") }}</a></li>
        <li><a href="our-business">{{ __("messages.top_nav.business") }}</a></li>
        <li><a href="#section-brands" class="scrollLink">{{ __("messages.top_nav.brand") }}</a></li>
        <li><a href="inter-business" >{{ __("messages.top_nav.inter_biz") }}</a></li>
        <li><a href="#">{{ __("messages.top_nav.news") }}</a></li>
        <li><a href="https://ip-one.com/iplifelab" target="_blank">{{ __("messages.top_nav.life_lab") }}</a></li>
        <li><a href="https://iphouses.scoutcareers.com/th/home" target="_blank">{{ __("messages.top_nav.career") }}</a></li>
        <li><a href="https://officialstore.ip-one.com" target="_blank">{{ __("messages.top_nav.office_store") }}</a></li>
        <li><a href="reach-us" >{{ __("messages.top_nav.contact") }}</a></li>
    </ul>
</div>