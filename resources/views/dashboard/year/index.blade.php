@extends('master')
@section('body')

<!-- DATA TABLE -->
<div class="table-data__tool">
    <div class="table-data__tool-left">
       <h2 class="title-5 m-b-35">Year</h2>
    </div>
    <div class="table-data__tool-right">
        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{url('dashboard/year/create')}}">
            <i class="zmdi zmdi-plus"></i>Add Year</a>
    </div>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>Year</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($years as $y)
            <tr class="tr-shadow">
                <td>{{$y['id']}}</td>
                <td><div class="image img-cir img-40"><img src="{{asset('storage')}}/{{$y['year_image']}}" width="50" alt=""></div></td>
                <td>{{$y['name']}}</td>
                <td>
                    <div class="table-data-feature">
                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{'edit/'.$y['id']}}">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{'delete/'.$y['id']}}">
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