@extends('backend.shared.backend_theme')
@section('title','Qeydiyyat modulu')
@section("subtitle",'Qeydiyyat')
@section('add_new_url',url('/users/'))
@section('color','btn-outline-dark')
@section('nextstep','Geri  Qayit')

@section('content')
    <form action="{{url('/users')}}" method="POST">
        @csrf
        <div class="row ">
            <div class="col-lg-6">
                <label for="name" class="form-label">Ad Soyad</label>
                <input type="text" name="name" id="name" class="form-control"
                       value="{{old('name')}}" placeholder=" Ad Soyadi daxil edin">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                       value="{{old('email')}}" placeholder="Email i daxil edin">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


        </div>

        <div class="row">
            <div class="col-lg-6">
                <label for="password" class="form-label">Shifre</label>
                <input type="password" name="password" id="password" class="form-control"
                       placeholder="Shifreni daxil edin">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="password_confirmation" class="form-label">Shifreni tekrar daxil edin</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                       class="form-control"
                       placeholder="Shifrenizi tekrar daxil edin">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin"
                           value="1">
                    <label class="form-check-label" for="is_admin" id="is_admin">
                        Admin
                    </label>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_active"
                           id="is_active" value="1">
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

@endsection
