@extends('layouts.admin')
@section('title','edit Sections')
@section('main')
<h1 class="mb-4">Edit Section</h1>
        <form method="post" action="{{ route('sections.update',[$sections->id]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="section_name" class="form-control" id="section_name" value="{{ old('section_name', $sections->section_name) }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description">{{ old('description', $sections->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>

        </form>
@endsection