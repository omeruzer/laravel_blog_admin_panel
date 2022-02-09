<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="/assets/images/logo/{{$set->favicon}}" type="image/x-icon">

    @yield('head')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/vendors/fontawesome/all.min.css">
    <script src="/assets/vendors/ckeditor/ckeditor.js"></script>

</head>

<body>
    <div id="app">


        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{route('admin.home')}}"><img style="width: 100%; height: 100%" src="/assets/images/logo/{{$set->logo}}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="{{route('admin.home')}}" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menü</li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.home')}}" class='sidebar-link'>
                                <i class="fa fa-home"></i>
                                <span>Anasayfa</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.articles')}}" class='sidebar-link'>
                                <i class="fa fa-edit"></i>
                                <span>Yazılar</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.categories')}}" class='sidebar-link'>
                                <i class="fa fa-list"></i>
                                <span>Kategoriler</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.authors')}}" class='sidebar-link'>
                                <i class="fa fa-users"></i>
                                <span>Yazarlar</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.users')}}" class='sidebar-link'>
                                <i class="fa fa-user"></i>
                                <span>Kullanıcılar</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.comments')}}" class='sidebar-link'>
                                <i class="fa fa-comments"></i>
                                <span>Yorumlar</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.messages')}}" class='sidebar-link'>
                                <i class="fa fa-envelope"></i>
                                <span>Mesajlar</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.statistic')}}" class='sidebar-link'>
                                <i class="fa fa-chart-bar"></i>
                                <span>İstatistikler</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.socialmedia')}}" class='sidebar-link'>
                                <i class="fa fa-hashtag"></i>
                                <span>Sosyal Medya Ayarları</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.contact')}}" class='sidebar-link'>
                                <i class="fa fa-phone"></i>
                                <span>İletişim Ayarları</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.logo')}}" class='sidebar-link'>
                                <i class="fa fa-image"></i>
                                <span>Logo Ayarları</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.setting')}}" class='sidebar-link'>
                                <i class="fa fa-cog"></i>
                                <span>Genel Ayarlar</span>
                            </a>
                        </li>
        
                        <li class="sidebar-item ">
                            <a href="{{route('admin.logout')}}" class='sidebar-link'>
                                <i class="fa fa-sign-in-alt"></i>
                                <span>Çıkış Yap</span>
                            </a>
                        </li>
        
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>{{date('Y')}} &copy; Uzer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="{{route('admin.home')}}">Ömer Uzer</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/vendors/fontawesome/all.min.js"></script>
    @yield('footer')
</body>

</html>