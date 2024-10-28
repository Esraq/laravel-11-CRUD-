@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Students List
                </h6>
                <!-- Align 'Create' button to the right -->
                <div>
                    <a class="btn btn-success btn-xs" href="{{ route('student.create') }}" role="button">Create</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td><img src="/images/{{ $student->image }}" width="100px"></td>
                            <td>{{$student->student_id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <!-- Extra small Edit and Delete buttons -->
                                <a class="btn btn-primary " <a href="{{ route('student.edit', $student->id) }}">Edit</a>
                                <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>

@endsection
