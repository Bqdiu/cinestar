@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid mt-3 border-top">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Ticket Price</h3>
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
               @if(session('error'))
                    <div class="alert alert-danger alert_hide">
                        {{session('error')}}
                    </div>
                    
                @endif
            </div>
        </div>
      
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">ID</th>
                        <th scope="col" class="text-center align-center">Ticket Name</th>
                        <th scope="col" class="text-center align-center">Ticket Price</th>
                        <th scope="col" class="text-center align-center">Seat Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($ticket_price as $row)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$row->TicketID}}</th>
                            <td scope="row" class="text-center align-middle">{{$row->TicketName}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->TicketPrice}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->SeatTypeName}}</td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-secondary edit-ticketprice-btn" data-bs-toggle="modal" data-bs-target="#editUser" data-ticketprice-id="{{$row->UserID}} ">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection