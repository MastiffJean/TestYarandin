@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit Project</a></h2>
<br>
 
<form action="{{ route('projects.update', $project_info->id) }}" method="POST" name="update_project">
{{ csrf_field() }}
@method('PATCH')
 
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $project_info->title }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description" >{{ $project_info->description }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</div>
</form>
@endsection