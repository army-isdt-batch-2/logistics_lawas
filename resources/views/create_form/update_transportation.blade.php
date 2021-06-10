@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title','Update Transportation')
@section('content')


<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Update Transportation <a href="{{ URL::route('transportation') }}" class="btn btn-danger float-end mt-3">Cancel</a></h1> <hr>
<form action="{{ URL::route('update.transportation.save',$data->id) }}" method="post">
  @csrf
  <table class="table text-light table-borderless">
    <tbody>
      <tr>
        <td>
          <label class="form-label" for="plate_number">Plate&nbsp;Number</label>
          <input type="number" class="form-control form-control" name="plate_number" value="{{ $data->plate_number }}" required>
        </td>
        <td>
          <label class="form-label" for="driver_name">Driver&nbsp;Name</label>
          <input type="text" class="form-control form-control" name="driver_name" value="{{ $data->driver_name }}" required>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="driver_contact">Driver&nbsp;Contact</label>
          <input type="number" class="form-control form-control" name="driver_contact" value="{{ $data->driver_contact }}" required>
        </td>
        <td>
          <label class="form-label" for="notes">Notes</label>
          <textarea class="form-control form-control" name="notes" rows="4" cols="">{{ $data->notes }}</textarea>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-grid gap-2">
    <button class="btn btn-primary" name="save">Save</button>
  </div><hr>
</form>

@endsection
