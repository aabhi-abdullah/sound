@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add </strong> Album
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/album/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $albums['id'] }}">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" value="{{ $albums['name'] }}" id="text-input" class="form-control">
                </div>
            </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Album Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="Album_image" accept="image/*" value="{{ $albums['album_image'] }}" id="email-input" class="form-control">
                </div>
            </div>
        </div>
    <div class="card-footer">
        <button type="submit" name="submit" class="au-btn au-btn--green">Update Records</button>
    </div>
    </form>
</div>
@stop
