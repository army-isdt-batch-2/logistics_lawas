@php $active = 'storage' @endphp
@extends('layout.main')
@section('title','Update Storage')
@section('content')


<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Update Storage <a href="{{ URL::route('storage') }}" class="btn btn-danger float-end mt-3">Cancel</a></h1> <hr>
<form action="{{ URL::route('update.storage.save',$data->id) }}" method="post">
  @csrf
  <table class="table text-light table-borderless">
    <tbody>
      <tr>
        <td>
          <label class="form-label" for="name">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $data->name }}" required>
        </td>
        <td>
          <label class="form-label" for="building">Building</label>
          <input type="text" class="form-control" name="building" value="{{ $data->building }}" required>
          <td>
            <label class="form-label" for="floor">Floor</label>
            <input type="text" class="form-control" name="floor" value="{{ $data->floor }}" required>
          </td>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="room">Room</label>
          <input type="number" class="form-control" name="room" value="{{ $data->room }}" required>
        </td>
        <td>
          <label class="form-label" for="cabinet">Cabinet</label>
          <input type="text" class="form-control" name="cabinet" value="{{ $data->cabinet }}" required>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-grid gap-2">
    <button class="btn btn-primary">Save</button>
  </div><hr>
</form>

@endsection
