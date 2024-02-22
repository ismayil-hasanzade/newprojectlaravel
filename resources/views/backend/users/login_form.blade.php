@extends('backend.shared.backend_theme')
@section('title','Login Sehifesi')
@section("subtitle",'Login')
@section('add_new_url',url('/users/'))
@section('color','btn-outline-dark')
@section('nextstep','Geri  Qayit')
@section('content')
    <form action="{{route('login')}}" method="POST">
        @csrf

        <div class="row ">
            <div class="col-lg-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                       value="{{old('email')}}" placeholder="Email i daxil edin">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


        </div>

        <div class="col">
            <div class="col-lg-6">
                <label for="password" class="form-label">Shifre</label>
                <input type="password" name="password" id="password" class="form-control"
                       placeholder="Shifreni daxil edin">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


        </div>
        @error('login')
        <span class="text-danger">Login ve ya parol sehfdir</span>
        @enderror

        <div class="row mt-2">
            <div class="col-12">
                <button type="submit" class="btn btn-success">Gonder</button>
            </div>
        </div>
    </form>

@endsection
