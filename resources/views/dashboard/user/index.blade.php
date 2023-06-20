@extends('master')
@section('body')

<!-- USER DATA-->
<div class="user-data m-b-30">
    <h3 class="title-3 m-b-30">
        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
    <div class="table-responsive table-data">
        <table class="table">
            <thead>
                <tr>
                    <td>id</td>
                    <td>photo</td>
                    <td>name or email</td>
                    <td>phone or address</td>
                    <td>role</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($Users as $u)
                <tr>
                    <td>{{$u['id']}}</td>
                    <td>
                        <div class="image img-cir img-40">
                            <img src="{{asset('storage')}}/{{$u['profile_photo_path']}}" width="50" alt="">
                        </div>
                    </td>
                    <td>
                        <div class="table-data__info">
                            <h6>{{$u['name']}}</h6>
                            <span>
                                <a href="#">{{$u['email']}}</a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class="table-data__info">
                            <a href="#"><h6>{{$u['phone']}}</h6></a><br>
                            <span>
                                <a href="#">{{$u['address']}}</a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <span class="role {{ $u->isAdmin() ? 'admin' : 'user' }}">{{ $u->isAdmin() ? 'admin' : 'user' }}</span>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{'edit/'.$u['id']}}">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{'delete/'.$u['id']}}">
                                <i class="zmdi zmdi-delete"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END USER DATA-->

@stop