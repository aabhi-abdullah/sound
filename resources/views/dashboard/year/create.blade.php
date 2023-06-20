@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add</strong> Year
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/year/submit') }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="year-input" class="form-control-label">Year</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" placeholder="Enter Year" id="year-input" class="form-control">
                    <span id="year-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="year-image-input" class="form-control-label">Year Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="year_image" accept="image/*" placeholder="Enter Year Image" id="year-image-input" class="form-control">
                    <span id="year-image-error" class="text-danger"></span>
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
        var yearInput = document.getElementById('year-input');
        var yearImageInput = document.getElementById('year-image-input');

        // Reset error messages
        document.getElementById('year-error').textContent = '';
        document.getElementById('year-image-error').textContent = '';

        // Validate each field
        if (yearInput.value.trim() === '') {
            document.getElementById('year-error').textContent = 'Please enter the year.';
            return false;
        }

        if (yearImageInput.value.trim() === '') {
            document.getElementById('year-image-error').textContent = 'Please select a year image.';
            return false;
        }

        return true;
    }
</script>

@stop
