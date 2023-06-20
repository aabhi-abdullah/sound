@extends('master')
@section('body')

<!-- DATA TABLE -->
<div class="table-data__tool">
    <div class="table-data__tool-left">
       <h2 class="title-5 m-b-35">video songs</h2>
    </div>
    <div class="table-data__tool-right">
        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{url('dashboard/video/create')}}">
            <i class="zmdi zmdi-plus"></i>add video song</a>
    </div>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>id</th>
                <th>video</th>
                <th>title</th>
                <th>artist</th>
                <th>release date</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Videos as $v)
            <tr class="tr-shadow">
                <td>{{$v['id']}}</td>
                <td>
                        <a  data-toggle="tooltip" data-placement="top" title="Play Video" href="{{asset('storage')}}/{{$v['video']}}" target="_blank">
                            <img src="{{asset('admindashboard')}}/images/icon/video.PNG" height="40" width="40" alt="">
                        </a>
                </td>
                <td>{{$v['title']}}</td>
                <td>
                    <span class="block-email">{{$v['artist']}}</span>
                </td>
                <td>{{$v['releasedate']}}</td>
                <td>
                    <div class="table-data-feature">
                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{'edit/'.$v['id']}}">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{'delete/'.$v['id']}}">
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