@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add</strong> Album
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/album/submit') }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name-input" class="form-control-label">Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" placeholder="Enter Album Name" id="name-input" class="form-control">
                    <span id="name-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="album-image-input" class="form-control-label">Album Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="album_image" accept="image/*" placeholder="Enter Album Image" id="album-image-input" class="form-control">
                    <span id="album-image-error" class="text-danger"></span>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="submit" class="au-btn au-btn--green">Add Records</button>
        </div>
    </form>
</div>

<script>
    function validateForm() {
        // Get form inputs
        var nameInput = document.getElementById('name-input');
        var albumImageInput = document.getElementById('album-image-input');

        // Reset error messages
        document.getElementById('name-error').textContent = '';
        document.getElementById('album-image-error').textContent = '';

        // Validate each field
        if (nameInput.value.trim() === '') {
            document.getElementById('name-error').textContent = 'Please enter the album name.';
            return false;
        }

        if (albumImageInput.value.trim() === '') {
            document.getElementById('album-image-error').textContent = 'Please select an album image.';
            return false;
        }

        return true;
    }
</script>

@stop
