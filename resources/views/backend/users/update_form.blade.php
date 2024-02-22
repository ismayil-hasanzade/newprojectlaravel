@extends('backend.shared.backend_theme')
@section('title','Yenileme modulu')
@section("subtitle",'Yenileme')
@section('add_new_url',url('/users'))
@section('color','btn-outline-dark')
@section('nextstep','Geri  Qayit')
@section('content')
    <form action="{{url("/users/$user->user_id")}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-6">
                <label for="name" class="form-label">Ad Soyad</label>
                <input type="text" name="name" id="name" class="form-control"
                       value="{{$user->name}}" placeholder="Ad Soyadi daxil edin">
                @error('name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control"
                       value="{{$user -> email}}" placeholder="Email i daxil edin">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
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
@endsection
<!doctype html>

