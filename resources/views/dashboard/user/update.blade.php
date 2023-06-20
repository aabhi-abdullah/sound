@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Update User </strong> Data
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{url('dashboard/user/update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <div class="col-12 col-md-9">
                    <input type="hidden" name="id" value="{{$Users['id']}}" id="text-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="name" value="{{$Users['name']}}" id="text-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="email" value="{{$Users['email']}}" id="text-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Phone</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="phone" value="{{$Users['phone']}}" id="email-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Address</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="address" value="{{$Users['address']}}" id="email-input" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="role-input" class="form-control-label">Roles</label>
                </div>
                <div class="col-12 col-md-9">
                    <select class="form-select form-select-lg form-control" name="role" id="role-input">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $Users->roles->contains('id', $role->id) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Photo</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="profile_photo_path" accept="image/*" value="{{$Users['profile_photo_path']}}" id="email-input" class="form-control">
                </div>
            </div>
            </div>
        </div>
    <div class="card-footer">
        <button type="submit" name="submit" class="au-btn au-btn--green">Update Records</button>
    </div>
    </form>
</div>
@stop