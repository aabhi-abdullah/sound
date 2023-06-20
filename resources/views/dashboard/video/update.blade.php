@extends('master')

@section('body')

<div class="card">
    <div class="card-header">
        <strong>Update Video</strong> Songs
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/video/update') }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            <input type="hidden" name="id" value="{{ $Videos['id'] }}">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="title" class="form-control-label">Title</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="title" value="{{ $Videos['title'] }}" id="title" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="genre" class="form-control-label">Genre</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="genre" value="{{ $Videos['genre'] }}" id="genre" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="genre" class="form-control-label">Language</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="language" value="{{ $Videos['language'] }}" id="genre" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="releasedate" class="form-control-label">Release Date</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" name="releasedate" value="{{ $Videos['releasedate'] }}" id="releasedate" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="releasedate" class="form-control-label">Lyrics</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="text" name="lyrics" value="" class="form-control" cols="30" rows="10">{{ $Videos['lyrics'] }}</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="video" class="form-control-label">Thumbnail Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="thumbnailimage" accept="image/*" id="video" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="video" class="form-control-label">Video File</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="video" accept="video/*" id="video" class="form-control">
                </div>
            </div>
        </div>
    <div class="card-footer">
        <button type="submit" name="submit" class="au-btn au-btn--green">Update Records</button>
    </div>
    </form>
</div>

@stop
