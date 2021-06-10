@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title','Update Supplier')
@section('content')


<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Update Supplier <a href="{{ URL::route('supplier') }}" class="btn btn-danger float-end mt-3">Cancel</a></h1> <hr>
<form action="{{ URL::route('update.supplier.save',$data->id) }}" method="post">
  @csrf
  <table class="table text-light table-borderless">
    <tbody>
      <tr>
        <td>
          <label class="form-label" for="name">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $data->name }}" required>
        </td>
        <td>
          <label class="form-label" for="contact">Contact</label>
          <input type="number" class="form-control" name="contact" value="{{ $data->contact }}" required>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="category">Category</label>
          <input type="text" class="form-control" name="category" value="{{ $data->category }}" required>
        </td>
        <td>
          <label class="form-label" for="contact_person">Contact&nbsp;Person</label>
          <input type="text" class="form-control" name="contact_person" value="{{ $data->contact_person }}" required>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="address">Address</label>
          <textarea name="address" class="form-control" rows="8" cols="" required>{{ $data->address }}</textarea>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-grid gap-2">
    <button class="btn btn-primary">Save</button>
  </div><hr>
</form>
@endsection
