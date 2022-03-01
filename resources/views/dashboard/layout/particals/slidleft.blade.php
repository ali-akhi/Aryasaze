<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <div class="sidebar-profile clearfix">
                    <div class="profile-img">
                        <img src="images/usrbig.jpg" alt="profile">
                    </div>
                    <div class="profile-info">
                        <h3>آرش خادملو</h3>
                        <p>خوش آمدید !</p>
                    </div>
                </div>
            </li>
            <li class="header">-- اصلی</li>
            <li>
                <a href="{{route('dashboard.index')}}">
                    <i class="menu-icon ti-home"></i>
                    <span>خانه</span>
                </a>
            <li>
            <li>
                <a href="{{route('dashboard.profile.index')}}">
                    <i class="menu-icon ti-home"></i>
                    <span>پروفایل</span>
                </a>
            <li>
            <li class="active">
                <a href="{{route('dashboard.chat.index')}}">
                    <i class="menu-icon ti-comment"></i>
                    <span>چت</span>
                </a>
            <li>
                <a href="{{route('dashboard.portfolio.index')}}">
                    <i class="menu-icon ti-briefcase"></i>
                    <span>نمونه کارها</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-shopping-cart-full"></i>
                    <span>فروشگاه</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('dashboard.product.index')}}">محصولات</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.product-detail.index')}}">جزئیات محصول</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-user"></i>
                    <span>احراز هویت</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('dashboard.auth.login-register')}}">ورود و ثبت نام</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.auth.sing-in')}}">ورود</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.auth.sing-up')}}">ثبت نام</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.auth.forgot-password')}}">فراموشی رمزعبور</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.auth.locked')}}">قفل شده</a>
                    </li>
                   <!-- <li>
                        <a href="404.html">404 - یافت نشد</a>
                    </li>
                    <li>
                        <a href="500.html">500 - خطای سرور</a>
                    </li> --!>
                </ul>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
</aside>
