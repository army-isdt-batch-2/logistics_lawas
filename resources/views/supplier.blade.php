@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title','Supplier')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Supplier <a href="{{ URL::route('add.supplier') }}" class="btn btn-success float-end mt-3">Add New</a></h1>

  <table class="table text-light">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Contact&nbsp;Person</th>
        <th scope="col">Address</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $x)
      <tr>
        <td><ol><li></li></ol></td>
        <td>{{ $x->name }}</td>
        <td>{{ $x->contact }}</td>
        <td>{{ $x->contact_person }}</td>
        <td>{{ $x->address }}</td>
        <td>{{ $x->category }}</td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('update.supplier', $x->id) }}" class="btn btn-primary btn-sm">Update</a>
          </div>
        </td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('delete.supplier', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
