@extends('backend.shared.backend_theme')
@section('title','Istifadeciler modulu')
@section("subtitle",'Istifadeciler')
@section('add_new_url',url('/users/create'))
@section('color','btn-outline-danger')
@section('nextstep','Elave et')
@section('content')
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">Sira No</th>
            <th scope="col">Ad Soyad</th>
            <th scope="col">Email</th>
            <th scope="col">Durum</th>
            <th scope="col">Ishlemler</th>
        </tr>
        </thead>
        <tbody>
        @if(count($users ) > 0)

            @foreach($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>

                        @if($user->is_active)
                            <span class="badge bg-success">Aktiv</span>
                        @else
                            <span class="badge bg-danger">Passiv</span>

                        @endif
                    </td>
                    <td>
                        <ul class="nav float-start">
                            <li class="nav-item">
                                <a href="{{url("users/$user->user_id/edit")}}" class="nav-link text-black">
                                    <span data-feather="edit"></span>
                                    Yenile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url("users/$user->user_id/delete")}}"
                                   class="nav-link lit-item-delete text-black"
                                   onclick="return confirm('Bunu silmeye eminsiz?')">
                                    <span data-feather="trash-2"></span>
                                    Sil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/users/{{$user->user_id}}/change-password"
                                   class="nav-link text-black">
                                    <span data-feather="lock"></span>
                                    Sifreni deyish
                                </a>
                            </li>

                        </ul>

                    </td>
                </tr>
            @endforeach

        @else
            <tr>
                <td colspan="5">
                    <p class="text-center">Her hansi bir istifadeci tapilmadi</p>
                </td>
            </tr>
        @endif

        </tbody>
    </table>

@endsection
