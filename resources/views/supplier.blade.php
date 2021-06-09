@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title','Supplier')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Supplier <a href="/create_form/add_supplier" class="btn btn-success float-end mt-3">Add New</a></h1>

  <table class="table text-light">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Contact&nbsp;Person</th>
        <th scope="col">Address</th>
        <th scope="col">Category</th>
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
          <!-- <a href=" URL::route('update', $x->id) ">Update</a> -->
          <!-- <a href=" URL::route('delete', $x->id) ">Delete</a> -->
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
