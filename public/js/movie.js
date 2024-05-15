$(document).ready(function () {
    var sumCountTicket = 0;
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
    var secondsRemaining = 60 * 5; // 60 giây = 1 phút

    // Hàm để cập nhật hiển thị
    function updateTimerDisplay() {
        // Hiển thị thời gian còn lại
        var formattedMinutes = String(minutesRemaining).padStart(2, "0");
        var formattedSeconds = String(secondsRemaining).padStart(2, "0");

        // Hiển thị thời gian còn lại
        $(".bill-coundown .bill-time #timer").text(
            formattedMinutes + ":" + formattedSeconds
        );
    }

    // Hàm đếm ngược
    function countdown() {
        // Cập nhật hiển thị
        updateTimerDisplay();

        // Giảm số giây còn lại đi 1
        if (secondsRemaining === 0) {
            // Nếu số giây bằng 0, giảm số phút và đặt lại số giây
            minutesRemaining--;
            secondsRemaining = 59;
        } else {
            secondsRemaining--;
        }

        // Kiểm tra xem có còn thời gian đếm ngược không
        if (minutesRemaining >= 0) {
            // Đặt lại hàm đếm ngược sau 1 giây
            setTimeout(countdown, 1000);
        } else {
            // Nếu hết thời gian, thực hiện các hành động sau đó
            console.log("Đếm ngược đã kết thúc!");
        }
    }

    $(document).ready(function () {
        var currentCount,
            countNumber,
            totalPrice = 0,
            price,
            popupID;

        // Bắt sự kiện khi nhấn nút "plus"
        $(".count-plus").click(function () {
            var countContainer = $(this).closest(".count");
            var ticketId = countContainer.data("ticket-id");
            countNumber = countContainer.find(".count-number");
            currentCount = parseInt(countNumber.text());
            price = parseInt(
                $("#food-box-" + ticketId)
                    .find(".price.sub-title p")
                    .text()
                    .replace(" VNĐ", "")
                    .replace(/\,/g, "")
            );

            if (currentCount == 0 && ticketId == 2) {
                // Nếu số lượng hiện tại là 0 và ticketId là 2, mở popup
                popupID = countContainer.data("popup-id");
                $("#" + popupID).addClass("open");
            } else if (ticketId != 3) {
                // Nếu ticketId không phải là 3, tăng số lượng vé lên 1 và cập nhật tổng giá tiền
                currentCount += 1;
                countNumber.text(currentCount);
                sumCountTicket += 1;
                totalPrice += price;
                console.log(sumCountTicket);
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
            } else {
                // Trường hợp còn lại, chỉ tăng số lượng vé lên 1 và cập nhật tổng giá tiền
                currentCount += 1;
                countNumber.text(currentCount);
                totalPrice += price;
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
            }

            console.log("Đã tăng số lượng vé của loại vé có ID: " + ticketId);
        });

        // Bắt sự kiện khi nhấn nút "Ok" trong popup
        $("#popup-2 .btn.ok").click(function () {
            currentCount += 1;
            countNumber.text(currentCount);

            // Đóng popup
            $("#" + popupID).removeClass("open");

            // Cập nhật tổng số vé và tổng giá tiền
            sumCountTicket += 1;
            totalPrice += price;
            console.log(totalPrice);
            console.log(price);
            console.log(sumCountTicket);
            // Hiển thị tổng giá tiền đã định dạng
            updateTotalPriceDisplay();
        });

        // Bắt sự kiện khi nhấn nút "close" trong popup
        $("#popup-2 .btn.close").click(function () {
            $("#" + popupID).removeClass("open");
        });

        // Hàm cập nhật tổng giá tiền và hiển thị giá tiền đã định dạng
        function updateTotalPriceDisplay() {
            var formattedPrice = totalPrice.toLocaleString("vi", {
                minimumFractionDigits: 0,
            });
            $(".bill-right .price .num").html(formattedPrice + " VNĐ");
        }
        // Bắt sự kiện khi nhấn nút "minus"
        $(".count-minus").click(function () {
            var countContainer = $(this).closest(".count");
            var ticketId = countContainer.data("ticket-id");
            countNumber = countContainer.find(".count-number");
            currentCount = parseInt(countNumber.text());
            price = parseInt(
                $("#food-box-" + ticketId)
                    .find(".price.sub-title p")
                    .text()
                    .replace(" VNĐ", "")
                    .replace(/\,/g, "")
            );

            // Giảm số lượng vé đi 1 nếu số lượng hiện tại lớn hơn 0
            if (currentCount > 0 && ticketId != 3) {
                currentCount -= 1;
                countNumber.text(currentCount);
                sumCountTicket -= 1;
                // Cập nhật tổng giá tiền
                totalPrice -= price;
                $(".seat-wr.seat-single").removeClass("choosing");

                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();

                console.log(
                    "Đã giảm số lượng vé của loại vé có ID: " + ticketId
                );
            }
            if (currentCount > 0 && ticketId == 3) {
                currentCount -= 1;
                countNumber.text(currentCount);
                // Cập nhật tổng giá tiền
                totalPrice -= price;
                $(".seat-couple .seat-wr").removeClass("choosing");
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
                console.log(currentCount);
                console.log(
                    "Đã giảm số lượng vé của loại vé có ID: " + ticketId
                );
            }
        });
    });

    $(document).on("click", ".item-time", function () {
        var showTimeID = $(this).data("show-time-item");
        var nameCinema = $(this).data("value-name");
        console.log(showTimeID);
        console.log(nameCinema);
        $(this).addClass("active");
        $(".item-time").not(this).removeClass("active");
        $(".cinema-name .txt").text(nameCinema);
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
    $(document).ready(function () {
        var selectedSeats = []; // Mảng chứa vị trí của các ghế đã chọn
        var selectedSeats_1 = [];
        // Sự kiện click vào ghế
        $(document).on("click", ".seat-wr.seat-single ", function () {
            var seatID = $(this).data("seat-id");

            // Kiểm tra nếu chưa mua vé
            if (sumCountTicket == 0 && selectedSeats.length === 0) {
                $(".popup.--w7 .popup-noti-des").text(
                    "You did not purchase this type of seat!"
                );
                $(".popup.--w7").addClass("open");
                return; // Dừng sự kiện nếu chưa mua vé
            }

            if (sumCountTicket == 0 && selectedSeats.length === 0) {
                $(".popup.--w7 .popup-noti-des").text(
                    "You did not purchase this type of seat!"
                );
                $(".popup.--w7").addClass("open");
                return; // Dừng sự kiện nếu chưa mua vé
            }
            // Kiểm tra xem ghế đã được chọn trước đó chưa
            var seatIndex = selectedSeats.indexOf(seatID);
            if (seatIndex === -1) {
                // Nếu ghế chưa được chọn trước đó và tổng số ghế đã chọn chưa đạt đến số lượng vé đã mua
                if (
                    selectedSeats.length < sumCountTicket &&
                    sumCountTicket != 0
                ) {
                    // Thêm ghế vào danh sách các ghế đã chọn
                    $(this).addClass("choosing");
                    selectedSeats.push(seatID);
                    minutesRemaining = 5; // Đặt lại số phút
                    secondsRemaining = 0;
                    countdown();
                } else {
                    // Nếu tổng số ghế đã chọn đã đủ số lượng vé đã mua, hiển thị thông báo
                    $(".popup.--w7 .popup-noti-des").text(
                        "You have selected the maximum number of seats!"
                    );
                    $(".popup.--w7").addClass("open");
                }
            } else {
                // Nếu ghế đã được chọn trước đó, bỏ chọn và loại bỏ khỏi danh sách
                $(this).removeClass("choosing");
                selectedSeats.splice(seatIndex, 1);
                minutesRemaining = 5; // Đặt lại số phút
                secondsRemaining = 0;
                countdown();
            }
        });

        $(document).on("click", ".seat-couple .seat-wr", function () {
            var seatID = $(this).data("seat-id");
            // Kiểm tra giá trị của food-box-3 .count-number
            var countNumber = parseInt($("#food-box-3 .count-number").text());
            console.log(countNumber);
            // Kiểm tra nếu chưa mua vé
            if (countNumber == 0 && selectedSeats_1.length === 0) {
                $(".popup.--w7 .popup-noti-des").text(
                    "You did not purchase this type of seat!"
                );
                $(".popup.--w7").addClass("open");
                return; // Dừng sự kiện nếu chưa mua vé
            }

            // Kiểm tra xem ghế đã được chọn trước đó chưa
            var seatIndex = selectedSeats_1.indexOf(seatID);
            if (seatIndex === -1) {
                // Nếu ghế chưa được chọn trước đó và tổng số ghế đã chọn chưa đạt đến số lượng vé đã mua
                if (selectedSeats_1.length < countNumber) {
                    // Thêm ghế vào danh sách các ghế đã chọn
                    $(this).addClass("choosing");
                    selectedSeats_1.push(seatID);

                    countdown();
                } else {
                    // Nếu tổng số ghế đã chọn đã đủ số lượng vé đã mua, hiển thị thông báo
                    $(".popup.--w7 .popup-noti-des").text(
                        "You have selected the maximum number of seats!"
                    );
                    $(".popup.--w7").addClass("open");
                }
            } else {
                // Nếu ghế đã được chọn trước đó, bỏ chọn và loại bỏ khỏi danh sách
                $(this).removeClass("choosing");
                selectedSeats_1.splice(seatIndex, 1);

                countdown();
            }
        });
        // Sự kiện click vào nút "OK" trong popup
        $(document).on("click", ".popup.--w7 .btn.OK", function () {
            $(".popup.--w7").removeClass("open");
        });
    });
});
