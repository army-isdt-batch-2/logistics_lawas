@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title','Add Transportation')
@section('content')


<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Add Transportation <a href="{{ URL::route('add.transportation') }}" class="btn btn-danger float-end mt-3">Cancel</a></h1> <hr>
<form action="{{ URL::route('add.transportation.save') }}" method="post">
  @csrf
  <table class="table text-light table-borderless">
    <tbody>
      <tr>
        <td>
          <label class="form-label" for="plate_number">Plate&nbsp;Number</label>
          <input type="number" class="form-control form-control" name="plate_number" required>
        </td>
        <td>
          <label class="form-label" for="driver_name">Driver&nbsp;Name</label>
          <input type="text" class="form-control form-control" name="driver_name" required>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="driver_contact">Driver&nbsp;Contact</label>
          <input type="number" class="form-control form-control" name="driver_contact" required>
        </td>
        <td>
          <label class="form-label" for="notes">Notes</label>
          <textarea class="form-control form-control" name="notes" rows="4" cols=""></textarea>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-grid gap-2">
    <button class="btn btn-primary" name="save">Save</button>
  </div><hr>
</form>

@endsection
