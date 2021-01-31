@extends('layouts.admin')
@section('title','Activities')
@section('main')
        <h1 class="mb-4">Activities</h1>
        <a class="btn btn-primary btn-sm mb-2 " href="{{ route('activities.create') }}">Create Activity</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>activity_name</th>
                    <th>section</th>
                    <th>teacher</th>
                    <th>requirments</th>
                    <th>start_date</th>
                    <th>end_date</th>
                    <th>max_students</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1 @endphp
                @forelse($activities as $act)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $act->id }}</td>
                        <td>{{ $act->activity_name }}</td>
                        <td>{{ $act->section->section_name }}</td>
                        <td>{{ $act->teacher }}</td>
                        <td>{{ $act->requirments }}</td>
                        <td>{{ $act->start_date }}</td>
                        <td>{{ $act->end_date }}</td>
                        <td>{{ $act->max_students }}</td>
                        <td>
                            <a href="{{ route('activities.edit', [$act->id]) }}">Edit</a>
                            <form method="post" action="{{ route('activities.delete',[$act->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="5">No activities found!</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
@endsection