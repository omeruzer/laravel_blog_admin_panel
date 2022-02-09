<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli Giriş Formu</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="/assets/images/logo/{{$set->favicon}}" type="image/x-icon">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><img src="/assets/images/logo/{{$set->logo}}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Giriş Yap</h1>
                    <p class="auth-subtitle mb-5">Yönetim paneline ulaşmak için giriş yapınız.</p>

                    @include('admin.layouts.partials.error')

                    <form action="{{route('admin.login')}}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" value="{{old('email')}}" autocomplete="off" name="email" class="form-control form-control-xl" placeholder="E-mail">
                        </div> 
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" autocomplete="off" placeholder="Şifre">
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Giriş Yap</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>