@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="col-lg-12 mt-5">
            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Student Name</span>
                            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Student Image</span>
                            <input type="file" name="student_image" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Student Age</span>
                            <input type="integer" name="age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <span class="input-group-text">Status
                            <div class="form-check form-check-inline status">
                                <input class="form-check-input" name="status" type="radio"  id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="status" type="radio"  id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Inactive</label>
                            </div>
                        </span>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-outline-primary submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Image</th>
                        <th scope="col">Student Age</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $key=>$task)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $task->name }}</td>
                        <td><img src="{{ $task->student_image }}" alt="" width="100px"></td>
                        <td>{{ $task->age }}</td>
                        <td>
                            @if ($task->status == 'active')
                                <span>Active</span>
                            @else
                                <span>Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('dashboard.delete',$task->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  </a>
                            <a href="javascript:void(0)" class="btn btn-success"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#taskEdit"></i> </a>
                        </td>
                    @endforeach
        </div>
    </div>
</div>


<div class="modal fade" id="taskEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="taskEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="taskEditLabel">Edit Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="taskEditContent">

        </div>
      </div>
    </div>
  </div>
@endsection

@push('css')
<style>
    .page-title {
        padding-top: 5vh;
        font-size: 5rem;
        color: rgb(71, 71, 139);
    }

    .status{
        padding-left: 50px;
    }

</style>

@endpush
