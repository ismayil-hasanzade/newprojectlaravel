<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <link rel="stylesheet" href="{{asset('build/assets/app-fLTi82ca.css')}}">

</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            Idareetme Paneli
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Istifadeciler
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Istifadeciler</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <a href="users/create" class="btn btn-sm btn-outline-danger">Yeni Ekle</a>
                    </div>
                </div>


            </div>


            <h2>Yeni Istifadeciler elave et</h2>
            <div class="table-responsive">
                Form alani
                <form action="{{url("/users/$user->user_id")}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name" class="form-label">Ad Soyad</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="{{$user->name}}" placeholder="Ad Soyadi daxil edin">
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                   value="{{$user -> email}}" placeholder="Email i daxil edin">
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin"
                                       value="1" {{$user->is_admin ? "checked" : ''}}>
                                <label class="form-check-label" for="is_admin" id="is_admin">
                                    Admin
                                </label>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active"
                                       id="is_active" value="1" {{$user->is_active ? "checked" : ''}}>
                                <label class="form-check-label" for="is_active">
                                    Aktiv Istifadeci
                                </label>
                            </div>

                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Gonder</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>


<script type="text/javascript" src="{{asset('build/assets/app-yt9VrtL6.js')}}"></script>
</body>
</html>
