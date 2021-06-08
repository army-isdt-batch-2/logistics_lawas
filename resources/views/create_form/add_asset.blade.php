@php $active = 'asset' @endphp
@extends('layout.main')
@section('title','Add Asset')
@section('content')


<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Add Asset <a href="/asset" class="btn btn-danger float-end mt-3">Cancel</a></h1> <hr>
<form action="{{ URL::route('asset') }}" method="post">
  @csrf
  <table class="table text-light borderless">
    <tbody>
      <tr>
        <td>
          <label class="form-label">Name</label> 
          <input type="text" class="form-control" name="name" required>
        </td>
        <td>
          <label class="form-label" for="description">Description</label>
          <textarea class="form-control" name="description" rows="1" cols=""></textarea>
        </td>
      </tr>
      <tr>

      </tr>
    </tbody>
  </table>
  <div class="mb-3">
    <button class="btn btn-success" name="save">Save</button>
  </div><hr>
</form>

@endsection
