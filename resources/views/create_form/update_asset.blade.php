@php $active = 'asset' @endphp
@extends('layout.main')
@section('title','Update Asset')
@section('content')


<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Update Asset <a href="{{ URL::route('asset') }}" class="btn btn-danger float-end mt-3">Cancel</a></h1> <hr>
<form action="{{ URL::route('update.asset.save',$data->id) }}" method="post">
  @csrf
  <table class="table text-light table-borderless">
    <tbody>
      <tr>
        <td>
          <label class="form-label" for="name">Name</label>
          <input type="text" class="form-control form-control" name="name" value="{{ $data->name }}" required>
        </td>
        <td>
          <label class="form-label" for="supplier_id">Supplier</label>
          <input type="number" class="form-control form-control" name="supplier_id" value="{{ $data->supplier_id }}" required>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="category">Category</label>
          <input type="text" class="form-control form-control" name="category" value="{{ $data->category }}" required>
        </td>
        <td>
          <label class="form-label" for="total_stocks"> Total Stocks</label>
          <input type="number" class="form-control form-control" name="total_stocks" value="{{ $data->total_stocks }}" required>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="description">Description</label>
          <textarea class="form-control form-control" name="description" rows="4" cols="">{{ $data->description }}</textarea>
        </td>
        <td>
          <label class="form-label" for="storage_id">Storage ID</label>
          <input type="number" class="form-control form-control" name="storage_id" value="{{ $data->storage_id }}" required>
        </td>

      </tr>
    </tbody>
  </table>
  <div class="d-grid gap-2">
    <button class="btn btn-primary" name="save">Save</button>
  </div><hr>
</form>

@endsection
