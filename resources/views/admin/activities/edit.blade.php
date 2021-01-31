@extends('layouts.admin')
@section('title','edit Sections')
@section('main')
<h1 class="mb-4">Edit Section</h1>
        <form method="post" action="{{ route('activities.update',[$activity->id]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="activity_name">Name</label>
                <input type="text" name="activity_name" class="form-control @error('activity_name') is-invalid @enderror " id="activity_name" value=" {{ old('activity_name' , $activity->activity_name) }} ">
                 @if($errors->has('activity_name'))
                <p class="text-danger"> {{ implode(', ',$errors->first('activity_name')) }} </p> 
                @endif
            </div>
            <div class="form-group">
                <label for="section_id">section</label>
                <select name="section_id" id="section_id" class="form-control @error('section_id') is-invalid @enderror">
                    <option value="">No section</option>
                    @foreach (App\Section::all() as $sec)
                        <option value="{{ $sec->id }}" @if(old('section_id' , $activity->section_id) == $sec->id) selected @endif >{{ $sec->section_name }}</option>
                    @endforeach
                </select>
                @error('section_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="teacher">Teacher</label>
                <input type="text" name="teacher" class="form-control @error('teacher') is-invalid @enderror " id="teacher" value=" {{ old('teacher' , $activity->teacher) }} ">
                 @if($errors->has('teacher'))
                <p class="text-danger"> {{ implode(', ',$errors->first('teacher')) }} </p> 
                @endif
            </div>
            <div class="form-group">
                <label for="requirments">Requirments</label>
                <textarea name="requirments" class="form-control @error('requirments') is-invalid @enderror " id="requirments"> {{ old('requirments' , $activity->requirments) }} </textarea>
                @error('requirments')
                <p class="text-danger"> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="start_date">Start date</label>
                <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror " id="start_date" value=" {{ old('start_date' , $activity->start_date) }} ">
                 @if($errors->has('start_date'))
                <p class="text-danger"> {{ implode(', ',$errors->first('start_date')) }} </p> 
                @endif
            </div>
            <div class="form-group">
                <label for="end_date">End date</label>
                <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror " id="end_date" value=" {{ old('end_date' , $activity->end_date) }} ">
                 @if($errors->has('end_date'))
                <p class="text-danger"> {{ implode(', ',$errors->first('end_date')) }} </p> 
                @endif
            </div>
            <div class="form-group">
                <label for="max_students">Max students</label>
                <input type="text" name="max_students" class="form-control @error('max_students') is-invalid @enderror " id="max_students" value=" {{ old('max_students' , $activity->max_students) }} ">
                 @if($errors->has('max_students'))
                <p class="text-danger"> {{ implode(', ',$errors->first('max_students')) }} </p> 
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>

        </form>
@endsection