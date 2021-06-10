@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title','Add Delivery')
@section('content')


<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Add Delivery <a href="{{ URL::route('add.delivery') }}" class="btn btn-danger float-end mt-3">Cancel</a></h1> <hr>
<form action="{{ URL::route('add.delivery.save') }}" method="post">
  @csrf
  <table class="table text-light table-borderless">
    <tbody>
      <tr>
        <td>
          <label class="form-label" for="distribution_id">Distribution&nbsp;ID</label>
          <input type="text" class="form-control form-control" name="distribution_id" required>
        </td>
        <td>
          <label class="form-label" for="transportation_id">Transportation&nbsp;ID</label>
          <input type="number" class="form-control form-control" name="transportation_id" required>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="date_distributed">Date&nbsp;Distributed</label>
          <input type="date" class="form-control form-control" name="date_distributed" required>
        </td>
        <td>
          <label class="form-label" for="status">Status</label>
          <select class="form-control" name="status">
            <option value="">Select Status</option>
            <option value="delivered">Delivered</option>
            <option value="returned">Returned</option>
          </select>
        </td>
      </tr>

    </tbody>
  </table>
  <div class="d-grid gap-2">
    <button class="btn btn-primary" name="save">Save</button>
  </div><hr>
</form>

@endsection
