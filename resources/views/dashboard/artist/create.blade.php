@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add</strong> Artist
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/artist/submit') }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="name-input" class="form-control-label">Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" placeholder="Enter Artist Name" id="name-input" class="form-control">
                    <span id="name-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="artist-image-input" class="form-control-label">Artist Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="artist_image" accept="image/*" placeholder="Enter Artist Image" id="artist-image-input" class="form-control">
                    <span id="artist-image-error" class="text-danger"></span>
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
        var artistImageInput = document.getElementById('artist-image-input');

        // Reset error messages
        document.getElementById('name-error').textContent = '';
        document.getElementById('artist-image-error').textContent = '';

        // Validate each field
        if (nameInput.value.trim() === '') {
            document.getElementById('name-error').textContent = 'Please enter the artist name.';
            return false;
        }

        if (artistImageInput.value.trim() === '') {
            document.getElementById('artist-image-error').textContent = 'Please select an artist image.';
            return false;
        }

        return true;
    }
</script>

@stop
