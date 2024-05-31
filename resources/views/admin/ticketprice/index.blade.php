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
                                <a class="col btn btn-secondary edit-ticketprice-btn" data-bs-toggle="modal" data-bs-target="#editTicketPrice" data-ticketprice-id="{{$row->TicketID}} ">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

      {{-- edit modal --}}
    <div class="modal fade" id="editTicketPrice" tabindex="-1" aria-labelledby="editTicketPriceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('editTicketPrice')}}" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Edit Show</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="editTicketPriceID" name="editTicketPriceID">
                        <div class="mb-3">
                            <h5 id="editTicketPriceName">Hello</h5 >
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Price</label>
                            <input type="number" class="form-control" id="TicketPrice" name="TicketPrice">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
                        <input type="submit" class="btn btn-primary" value="Edit"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection