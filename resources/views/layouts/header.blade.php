<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{ route('home') }}"><img src="img/logo.png" alt="" title=""/></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('jobs') }}">หางาน</a></li>
                    <li><a href="{{ route('people') }}">หาคนทำงาน</a></li>
                    <li><a href="{{ route('services') }}">บริการของเรา</a></li>
                    <li><a href="{{ route('abouts') }}">เกี่ยวกับเรา</a></li>
                    <li><a href="{{ route('blogs') }}">บทความ</a></li>
                    <li><a href="{{ route('contacts') }}">ติดต่อ</a></li>
                    <li><a class="ticker-btn" href="#">สมัครสมาชิก</a></li>
                    <li><a class="ticker-btn" href="#">เข้าสู่ระบบ</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
