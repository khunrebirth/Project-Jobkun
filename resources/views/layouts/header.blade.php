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
                    <li><a class="ticker-btn" href="#" data-toggle="modal" data-target="#formSignUpWorker">เข้าสู่ระบบ</a></li>
                    <li><a class="ticker-btn" href="#" data-toggle="modal" data-target="#formSignUpCompany">ผู้ประกอบการ</a></li>
                    <li><a class="ticker-btn" href="#" data-toggle="modal" data-target="#formRegister">สมัครสมาชิก</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<!-- Modal -->
<div class="modal fade" id="formSignUpWorker" tabindex="-1" role="dialog" aria-labelledby="formSignUpWorker" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="ชื่อผู้ใช้งาน">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="รหัสผ่าน">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                                <a href="#" class="btn btn-primary"><i class="fa fa-facebook fa-fw"></i> เข้าสู่ระบบผ่านบัญชี Facebook</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formSignUpCompany" tabindex="-1" role="dialog" aria-labelledby="formSignUpCompany" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="ชื่อผู้ใช้งาน">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="รหัสผ่าน">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formRegister" tabindex="-1" role="dialog" aria-labelledby="formRegister" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">สมัครสมาชิก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                    <a href="{{ route('register') }}" class="btn btn-primary">ผู้สมัครงาน</a> |
                    <a href="#" class="btn btn-primary">ผู้ประกอบการ</a>
                </div>
            </div>
        </div>
    </div>
</div>