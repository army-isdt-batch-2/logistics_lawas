@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title','Delivery')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Delivery <a href="{{ URL::route('add.delivery') }}" class="btn btn-success float-end mt-3">Add New</a></h1>

  <table class="table text-light">
    <thead>
      <tr>
        <th scope="col">Distribution&nbsp;ID</th>
        <th scope="col">Transportation&nbsp;ID</th>
        <th scope="col">Date&nbsp;Distributed</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $x)
      <tr>
        <td>{{ $x->distribution_id }}</td>
        <td>{{ $x->transportation_id }}</td>
        <td>{{ $x->date_distributed }}</td>
        <td>{{ $x->status }}</td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('update.delivery', $x->id) }}" class="btn btn-primary btn-sm">Update</a>
          </div>
        </td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('delete.delivery', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
