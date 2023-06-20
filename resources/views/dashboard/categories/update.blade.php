@extends('master')
@section('body')

<div class="card">
    <div class="card-header">
        <strong>Add </strong> Categories
    </div>
    <div class="card-body card-block">
        <form class="form-horizontal" action="{{ url('dashboard/categories/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $categories['id'] }}">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Title</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="title" value="{{ $categories['title'] }}" id="text-input" class="form-control">
                </div>
            </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Description</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="text" name="descr" value=""  id="email-input" class="form-control" cols="30" rows="10">{{ $categories['descr'] }}</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class="form-control-label">Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" name="cat_image" accept="image/*" value="{{ $categories['cat_image'] }}" id="email-input" class="form-control">
                </div>
            </div>
        </div>
    <div class="card-footer">
        <button type="submit" name="submit" class="au-btn au-btn--green">Update Records</button>
    </div>
    </form>
</div>
@stop
