@extends('layouts.admin')
@section('title','Create Sections')
@section('main')

@if($errors->any())
<div class="allert allert-danger">
    @foreach($errors->all() as $error)
    <p> {{ $error }} </p>
    @endforeach
</div>
@endif
        <h1 class="mb-4">Creat Sections</h1>
        <form method="post" action="{{ route('sections.insert') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="section_name" class="form-control @error('section_name') is-invalid @enderror " id="section_name" value=" {{ old('section_name') }} ">
                 @if($errors->has('name'))
                <p class="text-danger"> {{ implode(', ',$errors->first('name')) }} </p> 
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control @error('Description') is-invalid @enderror " id="description"> {{ old('description') }} </textarea>
                @error('description')
                <p class="text-danger"> {{ $message }} </p>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>

        </form>
@endsection