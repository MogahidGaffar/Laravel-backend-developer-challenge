@extends('appointments.layout')
@section('content')

<br>
<h2> Show All Appointments </h2> <hr>
<br>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">date</th>
        <th scope="col">address</th>
        <th scope="col">postal_code</th>
        <th scope="col">customer_Fname</th>
        <th scope="col">customer_Sname</th>
        <th scope="col">customer_address</th>
        <th scope="col">customer_phone</th>
        <th scope="col">customer_Email</th>
         <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
 @foreach ($appointments as  $index=>$appointment)
      <tr>
        <th scope="row">{{ $index+=1 }}</th>
        <td>{{ $appointment->date }}</td>
        <td>{{ $appointment->address }}</td>
        <td>{{ $appointment->postal_code }}</td>
        <td>{{ $appointment->customer_Fname }}</td>
        <td>{{ $appointment->customer_Sname }}</td>
        <td>{{ $appointment->customer_address }}</td>
        <td>{{ $appointment->customer_phone }}</td>
        <td>{{ $appointment->customer_Email }}</td>
         
            <td>
                <a href="{{route('appointments.getEditpage',$appointment->id)}}" class="btn btn-outline-primary"><i class="fa fa-pencil-square aria-hidden="true"></i>                </a>
            </td>
            <td>
              <form action="{{ route('appointments.RemoveOne',$appointment->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i>                        </button>
              </form>
          </td>
      </tr>
        @endforeach 
        </tbody>
        <tfoot>
            <tr>
              <th>
                <a href="{{ route('appointments.getCreatepage') }}" class="btn btn-outline-primary">Create <i class="fa fa-plus-circle" aria-hidden="true"></i>                </a>
              </th>
              </tr>
        </tfoot>
  </table>
@endsection