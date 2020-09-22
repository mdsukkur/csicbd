<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">    <div class="main-menu-content">        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">            <li class="nav-item">                <a href="{{route('admin.home')}}">                    <i class="ft-home"></i>                    <span class="menu-title" data-i18n="">                        Dashboard                    </span>                </a>            </li>            <li class="nav-item">                <a href="{{route('admin.usermanagement')}}">                    <i class="ft-users"></i>                    <span class="menu-title" data-i18n="">                        User Management                    </span>                </a>            </li>            <li class="nav-item">                <a href="{{route('category.index')}}">                    <i class="ft-list"></i>                    <span class="menu-title" data-i18n="">                        Sector                    </span>                </a>            </li>            <li class="nav-item">                <a href="{{route('company.index')}}">                    <i class="ft-package"></i>                    <span class="menu-title" data-i18n="">                        Company                    </span>                </a>            </li>            <li class="nav-item">                <a href="{{route('admin.questionmanagement')}}">                    <i class="ft-folder"></i>                    <span class="menu-title" data-i18n="">                        Question Management                    </span>                </a>            </li>            <li class="nav-item">                <a href="{{route('admin.complainmanagement')}}">                    <i class="ft-slack"></i>                    <span class="menu-title" data-i18n="">                        Complain Management                    </span>                </a>            </li>            <li class=" nav-item"><a href="#"><i class="ft-share"></i><span class="menu-title"                                                                            data-i18n="">Website Control</span></a>                <ul class="menu-content">                    <li>                        <a class="menu-item" href="{{route('slider.index')}}">                            Slider                        </a>                    </li>                    <li>                        <a class="menu-item" href="{{route('aboutus.index')}}">                            About US                        </a>                    </li>                    <li>                        <a class="menu-item" href="{{route('officeAddress.index')}}">                            Office Address                        </a>                    </li>                    <li>                        <a class="menu-item" href="{{route('term_service.index')}}">                            Term & Service                        </a>                    </li>                    <li>                        <a class="menu-item" href="{{route('general.index')}}">                            General                        </a>                    </li>                </ul>            </li>            <li class="nav-item">                <a href="{{route('contactus.index')}}">                    <i class="ft-award"></i>                    <span class="menu-title" data-i18n="">                        Contact US                    </span>                </a>            </li>            @if(Auth::guard('admin')->user()->is_super == 1)                <li class="nav-item">                    <a href="{{route('admins.index')}}">                        <i class="ft-users"></i>                        <span class="menu-title" data-i18n="">                        Admin Management                    </span>                    </a>                </li>            @endif            <li class="nav-item">                <a href="{{route('admin.setting')}}">                    <i class="ft-settings"></i>                    <span class="menu-title" data-i18n="">                        Setting                    </span>                </a>            </li>        </ul>    </div></div>