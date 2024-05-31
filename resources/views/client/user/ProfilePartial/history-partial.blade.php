@if(count($Booking)>0)
<table class="table table-sm bg-linear" style="border-radius:10px;">
    <thead>
        <tr style="color:yellow;">
            <th scope="col" style="padding:20px">Mã Đơn</th>
            <th scope="col" style="padding:20px">Phim</th>
            <th scope="col" style="padding:20px">Chi Nhánh</th>
            <th scope="col" style="padding:20px">Ngày</th>
            <th scope="col" style="padding:20px">Thanh Toán</th>
            <th scope="col" style="padding:20px">Tổng Cộng</th>
            <th scope="col" style="padding:20px"></th>
        </tr>
    </thead>
    <tbody style="color:white">
        @foreach($Booking as $b)
        <tr>
            <th scope="row" style="padding:20px">{{$b->BookingID}}</th>
            <td style="padding:20px">{{$b->showinfor->movie->Title}}</td>
            <td style="padding:20px">{{$b->showinfor->cinemahall->cinema->Name}}</td>
            <td style="padding:20px">{{$b->createdAt}}</td>
            <td style="padding:20px">{{$b->payment_method->PaymentName}}</td>
            <td style="padding:20px">{{ number_format($b->TotalPrice, 0, ',', ',') }}VNĐ</td>
            <td style="padding:20px">
                <form action="/booking-detail-partial" id="FormRedirectoDetail" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="BookingID" value="{{$b->BookingID}}">
                    <button style="background:none;border:0px" type="submit">
                        <i class="far fa-eye" style="padding-top:5px;color:yellow"></i>
                    </button>
                </form>

            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@else
<div class="container">
    <h5 class="text-white d-flex justify-content-center align-items-center mt-5">Không có dữ liệu!</h5>
</div>

@endif