@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title','Distribution')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Distribution <a href="{{ URL::route('add.distribution') }}" class="btn btn-success float-end mt-3">Add New</a></h1>

  <table class="table text-light">
    <thead>
      <tr>
        <th scope="col">Requestor&nbsp;Name</th>
        <th scope="col">Requestor&nbsp;Contact</th>
        <th scope="col">Purpose</th>
        <th scope="col">Asset</th>
        <th scope="col">Quantity</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $x)
      <tr>
        <td>{{ $x->requestor_name }}</td>
        <td>{{ $x->requestor_contact }}</td>
        <td>{{ $x->purpose }}</td>
        <td>{{ $x->asset_id }}</td>
        <td>{{ $x->quantity }}</td>
        <td>{{ $x->status }}</td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('update.distribution', $x->id) }}" class="btn btn-primary btn-sm">Update</a>
          </div>
        </td>
        <td>
          <div class="d-grid gap-2">
            <a href="{{ URL::route('delete.distribution', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
