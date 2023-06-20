@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add User </strong> Data
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{url('dashboard/user/submit')}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" placeholder="Enter Your Name" id="name-input" class="form-control">
                    <span id="name-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="email" placeholder="Enter Your email" id="email-input" class="form-control">
                    <span id="email-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Phone</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="phone" placeholder="Enter Your phone" id="phone-input" class="form-control">
                    <span id="phone-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Address</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="address" placeholder="Enter Your Address" id="address-input" class="form-control">
                    <span id="address-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Roles</label>
                </div>
                <div class="col-12 col-md-9">
                    <select class="form-select form-select-lg form-control" name="role" id="">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" name="password" placeholder="Enter Your Password" id="password-input" class="form-control">
                    <span id="password-error" class="text-danger"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Photo</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="profile_photo_path" accept="image/*" id="photo-input" class="form-control">
                    <span id="photo-error" class="text-danger"></span>
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
        // Reset error messages
        clearErrors();

        // Get form inputs
        var name = document.getElementById("name-input").value;
        var email = document.getElementById("email-input").value;
        var phone = document.getElementById("phone-input").value;
        var address = document.getElementById("address-input").value;
        var password = document.getElementById("password-input").value;
        var photo = document.getElementById("photo-input").value;

        // Validate each field
        var isValid = true;
        if (name.trim() === "") {
            showError("name-error", "Please enter your name.");
            isValid = false;
        }
        if (email.trim() === "") {
            showError("email-error", "Please enter your email.");
            isValid = false;
        }
        if (phone.trim() === "") {
            showError("phone-error", "Please enter your phone number.");
            isValid = false;
        }
        if (address.trim() === "") {
            showError("address-error", "Please enter your address.");
            isValid = false;
        }
        if (password.trim() === "") {
            showError("password-error", "Please enter your password.");
            isValid = false;
        }
        if (photo.trim() === "") {
            showError("photo-error", "Please select a photo.");
            isValid = false;
        }

        return isValid;
    }

    function showError(id, message) {
        var errorElement = document.getElementById(id);
        errorElement.innerHTML = message;
    }

    function clearErrors() {
        var errorElements = document.getElementsByClassName("text-danger");
        for (var i = 0; i < errorElements.length; i++) {
            errorElements[i].innerHTML = "";
        }
    }
</script>

@stop
