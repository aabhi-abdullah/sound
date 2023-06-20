@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add Audio </strong> Musics
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/audio/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $Audios['id'] }}">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Title</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="title" value="{{ $Audios['title'] }}" id="text-input" class="form-control">
                </div>
            </div>
            {{-- <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Artist</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="artist" value="{{ $Audios['artist'] }}" id="text-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Album</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="album" value="{{ $Audios['album'] }}" id="email-input" class="form-control">
                </div>
            </div> --}}
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Genre</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="genre" value="{{ $Audios['genre'] }}" id="email-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Language</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="language" value="{{ $Audios['language'] }}" id="email-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Release Date</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" name="releasedate" value="{{ $Audios['releasedate'] }}"  id="email-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Lyrics</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="text" name="lyrics" value=""  id="email-input" class="form-control" cols="30" rows="10">{{ $Audios['lyrics'] }}</textarea>
                    {{-- <input type="text" name="lyrics" value="{{ $Audios['lyrics'] }}"  id="email-input" class="form-control"> --}}
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="image" accept="image/*" value="{{ $Audios['image'] }}" id="email-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Music</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="music" accept="audio/*" value="{{ $Audios['music'] }}" id="email-input" class="form-control">
                </div>
            </div>
        </div>
    <div class="card-footer">
        <button type="submit" name="submit" class="au-btn au-btn--green">Add Records</button>
    </div>
    </form>
</div>
@stop
