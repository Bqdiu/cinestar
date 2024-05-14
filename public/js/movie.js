$(document).ready(function () {
    var sumCountTicket = 0;
    var totalPrice = 0;
    var movieID = $("#movie").data("movie-id");
    var dCityID = $(".dropdown-menu .city-option-menu.active").data("city-id");
    var dShowDate = $(".swiper-slide-item.active .date").data("date");
    LoadData(1);
    LoadCinemaList(dCityID, dShowDate, movieID);
    $(".slide-PhimDangChieu").click(function () {
        LoadData(1);
        $(".slide-PhimDangChieu").addClass("click");

        $(".slide-PhimSapChieu").removeClass("click");
        $(".slide-SuatChieuDacBiet").removeClass("click");
        $(".slide-BangGiaVe").removeClass("click");
    });
    $(".slide-PhimSapChieu").click(function () {
        $(".slide-PhimSapChieu").addClass("click");
        LoadData(2);
        $(".slide-PhimDangChieu").removeClass("click");
        $(".slide-SuatChieuDacBiet").removeClass("click");
        $(".slide-BangGiaVe").removeClass("click");
    });
    $(".slide-SuatChieuDacBiet").click(function () {
        $(".slide-SuatChieuDacBiet").addClass("click");
        LoadData(4);
        $(".slide-PhimDangChieu").removeClass("click");
        $(".slide-PhimSapChieu").removeClass("click");
        $(".slide-BangGiaVe").removeClass("click");
    });
    $(".slide-BangGiaVe").click(function () {
        $(".slide-BangGiaVe").addClass("click");
        $(".slide-PhimDangChieu").removeClass("click");
        $(".slide-SuatChieuDacBiet").removeClass("click");
        $(".slide-PhimSapChieu").removeClass("click");
    });
    function LoadData(idStatus) {
        $.ajax({
            url: "/booktickets-partial/" + $("#idRap").val() + "/" + idStatus,
            type: "GET",
            success: function (res) {
                $("#content-Movie-selector").html(res);
            },
        });
    }
    function LoadCinemaList(cityID, date, movieID) {
        $.ajax({
            url: "/cinemalist-partial/" + cityID + "/" + date + "/" + movieID,
            type: "GET",
            success: function (res) {
                $(".shtime-ft").html(res);
            },
        });
    }
    $(document).on("click", ".movie-collapse", function () {
        var movieShowID = $(this).data("movie-show");
        $("#" + movieShowID).toggleClass("active");
    });

    $(".swiper-slide-item").click(function () {
        var swiperID = $(this).data("swiper-slide");
        var defaultCityID = $(".dropdown-menu .city-option-menu.active").data(
            "city-id"
        );
        $(".swiper-slide-item").not(this).removeClass("active");
        $("#" + swiperID).addClass("active");
        var defaultShowDate = $(".swiper-slide-item.active .date").data("date");
        console.log(defaultShowDate);
        LoadCinemaList(defaultCityID, defaultShowDate, movieID);
    });
    $(document).on("click", ".city-option-menu", function () {
        var cityName = $(this).data("city-name");
        var cityID = $(this).data("city-id");
        var defaultShowDate = $(".swiper-slide-item.active .date").data("date");
        console.log(cityID);
        $(this).addClass("active");
        $(".city-option-menu").not(this).removeClass("active");
        $(".an-select-selection-item").empty();
        $(".an-select-selection-item").html(cityName);
        LoadCinemaList(cityID, defaultShowDate, movieID);
    });
    $(document).on("click", ".cinestar-heading", function () {
        var cinestarItemID = $(this).data("cinestar-collapse-item");
        // var cinestarBodyItemID = $(this).data("cinestar-body-item");
        // console.log(cinestarBodyItemID);
        $("#" + cinestarItemID).toggleClass("active");
    });
    // $(document).on("click", ".cinestar-item", function () {
    //     var cinestarItemID = $(this).data("cinestar-collapse-item");
    //     var cinestarBodyItemID = $(this).data("cinestar-body-item");
    //     console.log(cinestarBodyItemID);
    //     $("#" + cinestarItemID).toggleClass("active");
    // });
    $(document).ready(function () {
        // Bắt sự kiện khi nhấn nút "plus"

        $(".count-plus").click(function () {
            var countContainer = $(this).closest(".count");
            var ticketId = countContainer.data("ticket-id");
            var popupID = countContainer.data("popup-id");
            var countNumber = countContainer.find(".count-number");
            var currentCount = parseInt(countNumber.text());
            var price = parseInt(
                $("#food-box-" + ticketId)
                    .find(".price.sub-title p")
                    .text()
                    .replace(" VNĐ", "")
                    .replace(/\,/g, "")
            );

            if (currentCount == 0 && ticketId == 2) {
                $("#" + popupID).addClass("open");

                $("#" + popupID + " .btn.ok").click(function () {
                    // Tăng số lượng vé lên 1
                    currentCount += 1;
                    countNumber.text(currentCount);

                    // Đóng popup
                    $("#" + popupID).removeClass("open");

                    // Cập nhật tổng số vé và tổng giá tiền
                    sumCountTicket += 1;
                    totalPrice += price;

                    // Hiển thị tổng giá tiền đã định dạng
                    var formattedPrice = totalPrice.toLocaleString("vi", {
                        minimumFractionDigits: 0,
                    });
                    $(".bill-right .price .num").html(formattedPrice + " VNĐ");
                    console.log(currentCount);
                });
            } else if (ticketId != 2) {
                // Tăng số lượng vé lên 1 và cập nhật tổng giá tiền
                currentCount += 1;
                countNumber.text(currentCount);
                sumCountTicket += 1;
                totalPrice += price;

                // Hiển thị tổng giá tiền đã định dạng
                var formattedPrice = totalPrice.toLocaleString("vi", {
                    minimumFractionDigits: 0,
                });
                $(".bill-right .price .num").html(formattedPrice + " VNĐ");
            }

            console.log("Đã tăng số lượng vé của loại vé có ID: " + ticketId);
        });

        // Bắt sự kiện khi nhấn nút "minus"
        $(".count-minus").click(function () {
            var countContainer = $(this).closest(".count"); // Container chứa số lượng vé
            var ticketId = countContainer.data("ticket-id"); // ID của loại vé
            var countNumber = countContainer.find(".count-number"); // Phần hiển thị số lượng vé
            var currentCount = parseInt(countNumber.text()); // Số lượng vé hiện tại
            var price = parseInt(
                $("#food-box-" + ticketId)
                    .find(".price.sub-title p")
                    .text()
                    .replace(" VNĐ", "")
                    .replace(/\,/g, "")
            );
            // Giảm số lượng vé đi 1 nếu số lượng hiện tại lớn hơn 0 và cập nhật vào phần hiển thị
            if (currentCount > 0) {
                currentCount -= 1;
                countNumber.text(currentCount);
                console.log(currentCount);
                totalPrice -= price;
                // Đây là nơi bạn có thể thực hiện bất kỳ xử lý nào liên quan đến loại vé cụ thể.
                console.log(
                    "Đã giảm số lượng vé của loại vé có ID: " + ticketId
                );
                console.log(totalPrice);
                var formattedPrice = totalPrice.toLocaleString("vi", {
                    minimumFractionDigits: 0,
                });
                $(".bill-right .price .num").html(formattedPrice + " VNĐ");
            }
        });
    });

    $(document).on("click", ".item-time", function () {
        var showTimeID = $(this).data("show-time-item");
        console.log(showTimeID);
        $(this).addClass("active");
        $(".item-time").not(this).removeClass("active");

        $.ajax({
            url: "/seat-partial/" + showTimeID,
            type: "GET",
            success: function (res) {
                $(".ticket-cointainer").addClass("d-block");
                $(".sec-seat").addClass("d-block");
                $(".sec-seat").html(res);
                $(".dt-bill").addClass("d-block");
                $("html, body").animate(
                    {
                        scrollTop:
                            $(".ticket-cointainer").first().offset().top - 100,
                    },
                    300
                );
            },
        });
    });
    $(document).on("click", ".seat-wr", function () {
        var selectedSeat = $(this).data("seat-id"); // Lấy ID của ghế được chọn
        var selectedRow = selectedSeat.charAt(0); // Lấy hàng của ghế được chọn

        // Lấy danh sách các ghế đã chọn trên cùng một hàng
        var selectedSeatsOnRow = $(
            '.seat-wr[data-seat-id^="' + selectedRow + '"].choosing'
        );

        // Kiểm tra xem có ghế nào ở bên trái hoặc bên phải của ghế được chọn không
        var adjacentSeats = selectedSeatsOnRow
            .filter(".choosing")
            .map(function () {
                return $(this).data("seat-id").slice(1);
            })
            .get()
            .map(Number); // Chuyển đổi thành mảng số

        var selectedColumn = parseInt(selectedSeat.slice(1)); // Cột của ghế được chọn

        // Kiểm tra xem có ghế nào ở bên trái, giữa hoặc bên phải đã được chọn không
        if (
            adjacentSeats.includes(selectedColumn - 1) ||
            adjacentSeats.includes(selectedColumn + 1)
        ) {
            alert(
                "Việc chọn ghế của bạn không được để trống 1 ghế ở bên trái, giữa hoặc bên phải trên cùng một hàng ghế mà bạn vừa chọn!"
            );
            return;
        }

        // Tiếp tục xử lý khi không có ghế nào bên trái, giữa hoặc bên phải được chọn
        $(this).toggleClass("choosing");
    });
});
