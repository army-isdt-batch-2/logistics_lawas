@php $active = 'storage' @endphp
@extends('layout.main')
@section('title','Storage')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <hr><h1 class="rounded text-warning">Storage <a href="{{ URL::route('add.storage') }}" class="btn btn-success float-end mt-3">Add New</a></h1>

  <table class="table text-light">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Building</th>
        <th scope="col">Floor</th>
        <th scope="col">Room</th>
        <th scope="col">Cabinet</th>
        <th scope="col">Action</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $x)
      <tr>
        <td><ol><li></li></ol></td>
        <td>{{ $x->name }}</td>
        <td>{{ $x->building }}</td>
        <td>{{ $x->floor }}</td>
        <td>{{ $x->room }}</td>
        <td>{{ $x->cabinet }}</td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('update.storage', $x->id) }}" class="btn btn-primary btn-sm">Update</a>
          </div>
        </td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('delete.storage', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
