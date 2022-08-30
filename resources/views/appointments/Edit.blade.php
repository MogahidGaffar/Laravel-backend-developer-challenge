@extends('appointments.layout')
@section('content')


<br>
<h2> Edit  Appointment </h2> <hr>
<br>

<form action="{{ route('appointments.UpdateOne',$appointment->id) }}" method="post">
  @csrf
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="address"> address</label>
      <input type="text" class="form-control" id="address"  name="address" value="{{ $appointment->address}}">
    </div>
  </div>
      <div class="col-md-6">
    <div class="form-group">
        <label for="postal_code"> postal_code</label>
        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $appointment->postal_code}}">
      </div>
    </div>
  </div>
      <div class="row">
        <div class="col-md-6">
      <div class="form-group">
        <label for="customer_Fname"> customer_Fname</label>
        <input type="text" class="form-control" id="customer_Fname" name="customer_Fname" value="{{ $appointment->customer_Fname}}">
      </div>
    </div>

        <div class="col-md-6">
      <div class="form-group">
        <label for="customer_Sname">customer_Sname</label>
        <input type="text" class="form-control" id="customer_Sname" name="customer_Sname" value="{{ $appointment->customer_Sname}}" >
      </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-6">
      <div class="form-group">
        <label for="customer_address"> customer_address</label>
        <input type="text" class="form-control" id="customer_address" name="customer_address" value="{{ $appointment->customer_address}}" >
      </div>
    </div>

        <div class="col-md-6">
      <div class="form-group">
        <label for="customer_phone">customer_phone</label>
        <input type="text" class="form-control" id="customer_phone" name="customer_phone" value="{{ $appointment->customer_phone}}">
      </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-6">
      <div class="form-group">
        <label for="customer_Email"> customer_Email</label>
        <input type="email" class="form-control" id="customer_Email" name="customer_Email" value="{{ $appointment->customer_Email}}">
      </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
          <label for="customer_Email"> Date</label>
          <input type="date" class="form-control" id="date" name="date" value="{{ $appointment->date}}" >
        </div>
      </div>
       
    </div>

    <button type="submit" class="btn btn-primary">Save&nbsp; <i class="fa fa-save    " aria-hidden="true"></i>   </button>
  </form>

@endsection