@extends('master')
@section('body')

<!-- DATA TABLE -->
<div class="table-data__tool">
    <div class="table-data__tool-left">
       <h2 class="title-5 m-b-35">Categories</h2>
    </div>
    <div class="table-data__tool-right">
        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{url('dashboard/categories/create')}}">
            <i class="zmdi zmdi-plus"></i>Add Category</a>
    </div>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>title</th>
                <th>Description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Categories as $c)
            <tr class="tr-shadow">
                <td>{{$c['id']}}</td>
                <td><div class="image img-cir img-40"><img src="{{asset('storage')}}/{{$c['cat_image']}}" width="50" alt=""></div></td>
                <td>{{$c['title']}}</td>
                <td>{{$c['descr']}}</td>
                <td>
                    <div class="table-data-feature">
                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{'edit/'.$c['id']}}">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{'delete/'.$c['id']}}">
                            <i class="zmdi zmdi-delete"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>
          @endforeach
        </tbody>
    </table>
</div>
<!-- END DATA TABLE -->

@stop