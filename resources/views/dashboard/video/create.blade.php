@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add Video</strong> Songs
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{url('dashboard/video/submit')}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="title-input" class="form-control-label">Title</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="title" placeholder="Enter Video Title" id="title-input" class="form-control">
                    <span id="title-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="genre-input" class="form-control-label">Genre</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="genre" placeholder="Enter Video Genre" id="genre-input" class="form-control">
                    <span id="genre-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="language-input" class="form-control-label">Language</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="language" placeholder="Enter Video Language" id="language-input" class="form-control">
                    <span id="language-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="artist-input" class="form-control-label">Artists</label>
                </div>
                <div class="col-12 col-md-9">
                    <select class="form-select form-select-lg form-control" name="artist_id" id="artist-input">
                        @foreach ($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                        @endforeach
                    </select>
                    <span id="artist-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="album-input" class="form-control-label">Album</label>
                </div>
                <div class="col-12 col-md-9">
                    <select class="form-select form-select-lg form-control" name="album_id" id="album-input">
                        @foreach ($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->name }}</option>
                        @endforeach
                    </select>
                    <span id="album-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="year-input" class="form-control-label">Years</label>
                </div>
                <div class="col-12 col-md-9">
                    <select class="form-select form-select-lg form-control" name="year_id" id="year-input">
                        @foreach ($years as $year)
                            <option value="{{$year->id}}">{{$year->name}}</option>
                        @endforeach
                    </select>
                    <span id="year-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="release-date-input" class="form-control-label">Release Date</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" name="releasedate" placeholder="Enter Video Release Date" id="release-date-input" class="form-control">
                    <span id="release-date-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="lyrics-input" class="form-control-label">Lyrics</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="text" name="lyrics" placeholder="Enter Video lyrics" id="lyrics-input" class="form-control" cols="30" rows="10"></textarea>
                    <span id="lyrics-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="thumbnail-image-input" class="form-control-label">Thumbnail Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="thumbnailimage" accept="images/*" placeholder="Enter thumbnail image" id="thumbnail-image-input" class="form-control">
                    <span id="thumbnail-image-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="video-input" class="form-control-label">Video File</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="video" accept="video/*" placeholder="Enter Music Video" id="video-input" class="form-control">
                    <span id="video-error" class="text-danger"></span>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="au-btn au-btn--green">Add Records</button>
            </div>
        </form>
    </div>
</div>

<script>
    function validateForm() {
        // Get form inputs
        var titleInput = document.getElementById('title-input');
        var genreInput = document.getElementById('genre-input');
        var languageInput = document.getElementById('language-input');
        var artistInput = document.getElementById('artist-input');
        var albumInput = document.getElementById('album-input');
        var yearInput = document.getElementById('year-input');
        var releaseDateInput = document.getElementById('release-date-input');
        var lyricsInput = document.getElementById('lyrics-input');
        var thumbnailImageInput = document.getElementById('thumbnail-image-input');
        var videoInput = document.getElementById('video-input');

        // Reset error messages
        document.getElementById('title-error').textContent = '';
        document.getElementById('genre-error').textContent = '';
        document.getElementById('language-error').textContent = '';
        document.getElementById('artist-error').textContent = '';
        document.getElementById('album-error').textContent = '';
        document.getElementById('year-error').textContent = '';
        document.getElementById('release-date-error').textContent = '';
        document.getElementById('lyrics-error').textContent = '';
        document.getElementById('thumbnail-image-error').textContent = '';
        document.getElementById('video-error').textContent = '';

        // Validate each field
        if (titleInput.value.trim() === '') {
            document.getElementById('title-error').textContent = 'Please enter a title.';
            return false;
        }

        if (genreInput.value.trim() === '') {
            document.getElementById('genre-error').textContent = 'Please enter a genre.';
            return false;
        }

        if (languageInput.value.trim() === '') {
            document.getElementById('language-error').textContent = 'Please enter a language.';
            return false;
        }

        if (artistInput.value.trim() === '') {
            document.getElementById('artist-error').textContent = 'Please select an artist.';
            return false;
        }

        if (albumInput.value.trim() === '') {
            document.getElementById('album-error').textContent = 'Please select an album.';
            return false;
        }

        if (yearInput.value.trim() === '') {
            document.getElementById('year-error').textContent = 'Please select a year.';
            return false;
        }

        if (releaseDateInput.value.trim() === '') {
            document.getElementById('release-date-error').textContent = 'Please enter a release date.';
            return false;
        }

        if (lyricsInput.value.trim() === '') {
            document.getElementById('lyrics-error').textContent = 'Please enter lyrics.';
            return false;
        }

        if (thumbnailImageInput.value.trim() === '') {
            document.getElementById('thumbnail-image-error').textContent = 'Please select a thumbnail image.';
            return false;
        }

        if (videoInput.value.trim() === '') {
            document.getElementById('video-error').textContent = 'Please select a video file.';
            return false;
        }

        return true;
    }
</script>


@stop
