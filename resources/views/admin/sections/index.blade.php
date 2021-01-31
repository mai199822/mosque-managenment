@extends('layouts.admin')
@section('title','Sections')
@section('main')
        <h1 class="mb-4">Sections</h1>
        <a class="btn btn-primary btn-sm mb-2 " href="{{ route('sections.creat') }}">Creat Section</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1 @endphp
                @foreach ($sections as $sec)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sec->id }}</td>
                        <td>{{ $sec->section_name }}</td>
                        <td>{{ $sec->description }}</td>
                        <td>
                            <a href="{{ route('sections.edit', [$sec->id]) }}">Edit</a>
                            <form method="post" action="{{ route('sections.delete',[$sec->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
@endsection