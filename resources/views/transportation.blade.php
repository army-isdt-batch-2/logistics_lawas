@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title','Transportation')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Transportation <a href="{{ URL::route('add.transportation') }}" class="btn btn-success float-end mt-3">Add New</a></h1>

  <table class="table text-light">
    <thead>
      <tr>
        <th scope="col">Plate&nbsp;Number</th>
        <th scope="col">Driver&nbsp;Name</th>
        <th scope="col">Driver&nbsp;Contact</th>
        <th scope="col">Notes</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $x)
      <tr>
        <td>{{ $x->plate_number }}</td>
        <td>{{ $x->driver_name }}</td>
        <td>{{ $x->driver_contact }}</td>
        <td>{{ $x->notes }}</td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('update.transportation', $x->id) }}" class="btn btn-primary btn-sm">Update</a>
          </div>
        </td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('delete.transportation', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
