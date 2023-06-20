@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add Audio</strong> Musics
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/audio/submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Title</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="title" placeholder="Enter Music Title" id="text-input" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" required>
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Genre</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="genre" placeholder="Enter Music Genre" id="email-input" class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" value="{{ old('genre') }}" required>
                    @if ($errors->has('genre'))
                        <span class="text-danger">{{ $errors->first('genre') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Language</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="language" placeholder="Enter Music language" id="email-input" class="form-control{{ $errors->has('language') ? ' is-invalid' : '' }}" value="{{ old('language') }}" required>
                    @if ($errors->has('language'))
                        <span class="text-danger">{{ $errors->first('language') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Artists</label>
                </div>
                <div class="col-12 col-md-9">
                    <select class="form-select form-select-lg form-control{{ $errors->has('artist_id') ? ' is-invalid' : '' }}" name="artist_id" id="" required>
                        <option value="">Select Artist</option>
                        @foreach ($artists as $artist)
                            <option value="{{ $artist->id }}" {{ old('artist_id') == $artist->id ? 'selected' : '' }}>{{ $artist->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('artist_id'))
                        <span class="text-danger">{{ $errors->first('artist_id') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Album</label>
                </div>
                <div class="col-12 col-md-9">
                    <select class="form-select form-select-lg form-control{{ $errors->has('album_id') ? ' is-invalid' : '' }}" name="album_id" id="" required>
                        <option value="">Select Album</option>
                        @foreach ($albums as $album)
                            <option value="{{ $album->id }}" {{ old('album_id') == $album->id ? 'selected' : '' }}>{{ $album->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('album_id'))
                        <span class="text-danger">{{ $errors->first('album_id') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Release Date</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" name="releasedate" placeholder="Enter Music Release Date" id="email-input" class="form-control{{ $errors->has('releasedate') ? ' is-invalid' : '' }}" value="{{ old('releasedate') }}" required>
                    @if ($errors->has('releasedate'))
                        <span class="text-danger">{{ $errors->first('releasedate') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Lyrics</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="lyrics" placeholder="Enter Music Lyrics" class="form-control{{ $errors->has('lyrics') ? ' is-invalid' : '' }}" cols="30" rows="10" required>{{ old('lyrics') }}</textarea>
                    @if ($errors->has('lyrics'))
                        <span class="text-danger">{{ $errors->first('lyrics') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="image" accept="image/*" placeholder="Enter Image Video" id="email-input" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required>
                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Music</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="music" accept="audio/*" placeholder="Enter Music Video" id="email-input" class="form-control{{ $errors->has('music') ? ' is-invalid' : '' }}" required>
                    @if ($errors->has('music'))
                        <span class="text-danger">{{ $errors->first('music') }}</span>
                    @endif
                </div>
            </div>
        </div>
    <div class="card-footer">
        <button type="submit" name="submit" class="au-btn au-btn--green">Add Records</button>
    </div>
    </form>
</div>


@stop
