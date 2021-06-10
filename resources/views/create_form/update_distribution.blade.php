@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title','Update Distribution')
@section('content')

<div class="container bg-dark text-light mt-4 rounded" style="opacity: 0.8;">
  <h1 class="rounded text-warning">Update Distribution <a href="{{ URL::route('distribution') }}" class="btn btn-danger float-end mt-3">Cancel</a></h1>

  <form action="{{ URL::route('update.distribution.save',$data->id) }}" method="post">
    @csrf
    <table class="table text-light table-borderless">
      <tbody>
        <tr>
          <td>
            <label class="form-label" for="requestor_name">Requestor&nbsp;Name</label>
            <input type="text" class="form-control form-control" name="requestor_name" value="{{ $data->requestor_name }}" required>
          </td>
          <td>
            <label class="form-label" for="requestor_contact">Requestor&nbsp;Contact</label>
            <input type="number" class="form-control form-control" name="requestor_contact" value="{{ $data->requestor_contact }}" required>
          </td>
        </tr>
        <tr>
          <td>
            <label class="form-label" for="quantity">Quantity</label>
            <input type="number" class="form-control form-control" name="quantity" value="{{ $data->quantity }}" required>
          </td>
          <td>
            <label class="form-label" for="asset_id">Asset</label>
            <input type="number" class="form-control form-control" name="asset_id" value="{{ $data->asset_id }}" required>
          </td>
        </tr>
        <tr>
          <td>
            <label class="form-label" for="purpose">Purpose</label>
            <textarea class="form-control form-control" name="purpose" rows="4" cols="" required>{{ $data->purpose }}</textarea>
          </td>
          <td>
            <label class="form-label" for="status">Status</label>
            <select class="form-control" name="status" required>
              <option value="{{ $data->status }}">{{ $data->status }}</option>
              <option value="processing">Processing</option>
              <option value="declined">Declined</option>
              <option value="distributed">Distributed</option>
            </select>
            <!-- <label class="form-label" for="supplier_id">Supplier ID</label> -->
            <!-- <input type="number" class="form-control form-control" name="supplier_id" required> -->
          </td>

        </tr>
      </tbody>
    </table>
    <div class="d-grid gap-2">
      <button class="btn btn-primary" name="save">Save</button>
    </div><hr>
  </form>

</div>


@endsection
