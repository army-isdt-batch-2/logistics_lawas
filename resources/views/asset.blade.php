@php $active = 'asset' @endphp
@extends('layout.main')
@section('title','Asset')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Asset <a href="/create_form/add_asset" class="btn btn-success float-end mt-3">Add New</a></h1>

  <table class="table text-light">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Total&nbsp;Stocks</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $x)
      <tr>
        <td><ol><li></li></ol></td>
        <td>{{ $x->name }}</td>
        <td>{{ $x->description }}</td>
        <td>{{ $x->category }}</td>
        <td>{{ $x->total_stocks }}</td>
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
