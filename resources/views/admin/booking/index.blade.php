@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid mt-3 border-top">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Booking</h3>
                @if(session('mess'))
                    <div class="alert alert-success alert_hide">
                        {{session('mess')}}
                    </div>
                    
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert_hide">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
       
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">ID</th>
                        <th scope="col" class="text-center align-middle">Number Of Seat</th>
                        <th scope="col" class="text-center align-middle">Status</th>
                        <th scope="col" class="text-center align-middle">Full Name</th>
                        <th scope="col" class="text-center align-middle">Movie</th>
                        <th scope="col" class="text-center align-middle">Phone number</th>
                        <th scope="col" class="text-center align-middle">Email</th>
                        <th scope="col" class="text-center align-middle">Toltal price</th>
                        <th scope="col" class="text-center align-middle">Date</th>
                        <th scope="col" class="text-center align-middle">Payment method</th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($bookings as $row)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$row->BookingID}}</th>
                            <td scope="row" class="text-center align-middle">{{$row->NumberOfSeats}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->Status}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->FullName}}</td>
                            <td scope="row" class="text-center align-middle">{{optional(optional($row->showinfor)->movie)->Title}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->PhoneNumber}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->Email}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->TotalPrice}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->createdAt}}</td>
                            <td scope="row" class="text-center align-middle">{{(optional($row->payment_method)->PaymentName)}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $bookings->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection