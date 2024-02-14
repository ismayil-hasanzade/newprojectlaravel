@extends('backend.shared.backend_theme')
@section('title','Yenileme modulu')
@section("subtitle",'Shifre Deyistirme')
@section('add_new_url',url('/users'))
@section('color','btn-outline-dark')
@section('nextstep','Geri  Qayit')
@section('content')
    <form action="{{url("/users/$user->user_id/change-password")}}" method="POST">
        @csrf
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

        <div class="row mt-2">
            <div class="col-12">
                <button type="submit" class="btn btn-success">Gonder</button>
            </div>
        </div>
    </form>

@endsection





