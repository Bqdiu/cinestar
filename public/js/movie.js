$(document).ready(function () {
    var selectedSeats = []; // Mảng chứa vị trí của các ghế đã chọn
    var selectedSeats_1 = [];
    var sumCountTicket = 0;
    var movieID = $("#movie").data("movie-id");
    var dCityID = $(".dropdown-menu .city-option-menu.active").data("city-id");
    var dShowDate = $(".swiper-slide-item.active .date").data("date");
    var showTimeID = null;
    var showtime = "";
    var roomNumber = "";
    // Output the room number to the console
    var currentCount,
        countNumber,
        totalPrice = 0,
        price,
        popupID;
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    let TypeOfTicket = [
        // Thêm các loại vé khác nếu cần
    ];
    // document.addEventListener("keydown", function (e) {
    //     if (e.key === "F12") {
    //         e.preventDefault();
    //     }
    // });

    // // Ngăn chặn việc mở menu chuột phải
    // document.addEventListener("contextmenu", function (e) {
    //     e.preventDefault();
    // });
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
        LoadPriceOfTicketPartial();
        $(".slide-PhimDangChieu").removeClass("click");
        $(".slide-SuatChieuDacBiet").removeClass("click");
        $(".slide-PhimSapChieu").removeClass("click");
    });
    //Ticket Price
    $(document).on("click", ".it.tabBtn", function () {
        var tabBtnID = $(this).data("tab-id");
        $(this).addClass("active");
        $(".it.tabBtn").not(this).removeClass("active");

        $(".tabPanel").removeClass("open");
        $("#" + tabBtnID).addClass("open");
    });
    ///
    function LoadPriceOfTicketPartial() {
        $.ajax({
            url: "/price-of-ticket",
            type: "GET",
            success: function (res) {
                $("#content-Movie-selector").html(res);
            },
        });
    }
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

    function resetSection() {
        selectedSeats = [];
        selectedSeats_1 = [];

        // $(".ticket-cointainer").removeClass("d-block");
        $(".seat-wr.seat-single").removeClass("choosing");
        $(".seat-couple .seat-wr").removeClass("choosing");
        // $(".dt-bill").removeClass("d-block");
        // $(".sec-seat").removeClass("d-block");
        totalPrice = 0;
        // countNumber = $(".count-number").text("0");
        $(".bill-right .price .num").text("0 VNĐ");
        $(".dt-bill .btn.btn--pri").addClass("opacity-40");
        $(".dt-bill .btn.btn--pri").addClass("pointer-events-none");
        $(".dt-bill .btn.btn--pri").removeClass("opcity-100");
        console.log(totalPrice);
        sumCountTicket = 0;
        updateCinemaInfo("", selectedSeats.concat(selectedSeats_1), "");
    }
    function resetSectionWhenTimerEnded() {
        selectedSeats = [];
        selectedSeats_1 = [];
        stopCountdown();
        sumCountTicket = 0;
        $(".seat-wr.seat-single").removeClass("choosing");
        $(".seat-couple .seat-wr").removeClass("choosing");
        totalPrice = 0;
        countNumber = $(".count-number").text("0");
        $(".bill-right .price .num").text("0 VNĐ");
        $("#timer").text("05:00");
        $(".dt-bill .btn.btn--pri").addClass("opacity-40");
        $(".dt-bill .btn.btn--pri").addClass("pointer-events-none");
        $(".dt-bill .btn.btn--pri").removeClass("opcity-100");
        console.log(totalPrice);
        updateCinemaInfo("", selectedSeats.concat(selectedSeats_1), "");
    }
    $(".swiper-slide-item").click(function () {
        var swiperID = $(this).data("swiper-slide");
        var defaultCityID = $(".dropdown-menu .city-option-menu.active").data(
            "city-id"
        );
        $(".swiper-slide-item").not(this).removeClass("active");
        $("#" + swiperID).addClass("active");
        var defaultShowDate = $(".swiper-slide-item.active .date").data("date");
        console.log(defaultShowDate);
        resetSection();
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
        $(".bill-coundown .bill-time #timerCheckout").text(
            formattedMinutes + ":" + formattedSeconds
        );
    }

    // Hàm đếm ngược
    var countdownTimeout = null; // Biến để lưu trữ ID của hàm đếm ngược

    // Hàm đếm ngược
    function countdown() {
        // Kiểm tra xem đã có hàm đếm ngược nào đang chạy hay không
        if (countdownTimeout) {
            clearTimeout(countdownTimeout); // Nếu có, hủy bỏ hàm đếm ngược đó
        }

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
            countdownTimeout = setTimeout(countdown, 1000);
        } else {
            $(".popup.--w7 .popup-noti-des").text("Đã hết thời gian giữ vé!");
            $(".popup.--w7").addClass("open");

            // resetSectionWhenTimerEnded();
            // Nếu hết thời gian, thực hiện các hành động sau đó
            console.log("Đếm ngược đã kết thúc!");
            return;
        }
    }
    function stopCountdown() {
        clearTimeout(countdownTimeout); // Stop the countdown
    }
    $(document).ready(function () {
        // Bắt sự kiện khi nhấn nút "plus"
        $(".count-plus").click(function () {
            var countContainer = $(this).closest(".count");
            var ticketId = countContainer.data("ticket-id");
            var foodBoxName = $("#food-box-" + ticketId)
                .find(".name.sub-title")
                .text();
            var ticketIndex = TypeOfTicket.findIndex(
                (t) => t.TicketTypeID === ticketId
            );
            countNumber = countContainer.find(".count-number");
            currentCount = parseInt(countNumber.text());

            price = parseInt(
                $("#food-box-" + ticketId)
                    .find(".price.sub-title p")
                    .text()
                    .replace(" VNĐ", "")
                    .replace(/\,/g, "")
            );

            if (currentCount === 0 && ticketId === 2) {
                var popupID = countContainer.data("popup-id");
                $("#" + popupID).addClass("open");
            } else if (ticketId != 3) {
                // Nếu ticketId không phải là 3, tăng số lượng vé lên 1 và cập nhật tổng giá tiền

                currentCount += 1;
                countNumber.text(currentCount);
                sumCountTicket += 1;
                totalPrice += price;
                console.log(sumCountTicket);

                if (ticketIndex !== -1) {
                    // Nếu đã có, cập nhật lại Quantity
                    TypeOfTicket[ticketIndex].Quantity = currentCount;
                } else {
                    // Nếu chưa có, thêm mới vào mảng TypeOfTicket
                    TypeOfTicket.push({
                        TicketTypeID: ticketId,
                        Name: foodBoxName,
                        Quantity: currentCount,
                    });
                }
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
                updateTicketCounts();
            } else {
                // Trường hợp còn lại, chỉ tăng số lượng vé lên 1 và cập nhật tổng giá tiền
                currentCount += 1;
                countNumber.text(currentCount);
                totalPrice += price;

                if (ticketIndex !== -1) {
                    // Nếu đã có, cập nhật lại Quantity
                    TypeOfTicket[ticketIndex].Quantity = currentCount;
                } else {
                    // Nếu chưa có, thêm mới vào mảng TypeOfTicket
                    TypeOfTicket.push({
                        TicketTypeID: ticketId,
                        Name: foodBoxName,
                        Quantity: currentCount,
                    });
                }
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
                updateTicketCounts();
            }
            $(".dt-bill .btn.btn--pri").addClass("opacity-40");
            $(".dt-bill .btn.btn--pri").addClass("pointer-events-none");
            $(".dt-bill .btn.btn--pri").removeClass("opcity-100");
            console.log(TypeOfTicket);
            console.log("Đã tăng số lượng vé của loại vé có ID: " + ticketId);
        });

        // Bắt sự kiện khi nhấn nút "Ok" trong popup
        $("#popup-2 .btn.ok").click(function () {
            currentCount += 1;
            countNumber.text(currentCount);
            var ticketIndex = TypeOfTicket.findIndex(
                (t) => t.TicketTypeID === 2
            );
            if (ticketIndex !== -1) {
                // Nếu đã có, cập nhật lại Quantity
                TypeOfTicket[ticketIndex].Quantity = currentCount;
            } else {
                // Nếu chưa có, thêm mới vào mảng TypeOfTicket
                TypeOfTicket.push({
                    TicketTypeID: 2,
                    Name: "HSSV-Người cao tuổi",
                    Quantity: currentCount,
                });
            }
            // Đóng popup
            $("#popup-2").removeClass("open");

            // Cập nhật tổng số vé và tổng giá tiền
            sumCountTicket += 1;
            totalPrice += price;

            console.log(totalPrice);
            console.log(price);
            console.log(sumCountTicket);
            // Hiển thị tổng giá tiền đã định dạng
            updateTotalPriceDisplay();
            updateTicketCounts();
            console.log(TypeOfTicket);
        });

        // Bắt sự kiện khi nhấn nút "close" trong popup
        $("#popup-2 .btn.close").click(function () {
            $("#popup-2").removeClass("open");
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
            var ticketIndex = TypeOfTicket.findIndex(
                (t) => t.TicketTypeID === ticketId
            );
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

                if (ticketIndex !== -1) {
                    // Nếu đã có, cập nhật lại Quantity
                    TypeOfTicket[ticketIndex].Quantity = currentCount;
                    if (currentCount === 0) {
                        TypeOfTicket.splice(ticketIndex, 1);
                    }
                }
                countNumber.text(currentCount);
                sumCountTicket -= 1;
                // Cập nhật tổng giá tiền
                totalPrice -= price;
                $(".seat-wr.seat-single").removeClass("choosing");
                resetSection();
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
                updateTicketCounts();
                console.log(
                    "Đã giảm số lượng vé của loại vé có ID: " + ticketId
                );
            }
            if (currentCount > 0 && ticketId == 3) {
                currentCount -= 1;
                if (ticketIndex !== -1) {
                    // Nếu đã có, cập nhật lại Quantity
                    TypeOfTicket[ticketIndex].Quantity = currentCount;
                    if (currentCount === 0) {
                        TypeOfTicket.splice(ticketIndex, 1);
                    }
                }
                countNumber.text(currentCount);
                // Cập nhật tổng giá tiền
                totalPrice -= price;
                $(".seat-couple .seat-wr").removeClass("choosing");
                $(".seat-wr.seat-single").removeClass("choosing");
                resetSection();
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
                updateTicketCounts();
                console.log(currentCount);
                console.log(TypeOfTicket);
                console.log(
                    "Đã giảm số lượng vé của loại vé có ID: " + ticketId
                );
            }
            currentCount = parseInt(countNumber.text());
            $(".dt-bill .btn.btn--pri").addClass("opacity-40");
            $(".dt-bill .btn.btn--pri").addClass("pointer-events-none");
            $(".dt-bill .btn.btn--pri").removeClass("opcity-100");
        });
        function updateTicketCounts() {
            var listItem = $(".bill-left .list .item .cinema-name");
            var ticketCounts = [];

            $(".count").each(function () {
                var ticketId = $(this).data("ticket-id");
                var count = parseInt($(this).find(".count-number").text()) || 0;
                if (count > 0) {
                    var foodBoxName = $("#food-box-" + ticketId)
                        .find(".name.sub-title")
                        .text();
                    ticketCounts.push(count + " " + foodBoxName);
                }
            });

            // Xóa hết các phần tử .dot và .type-ticket trước khi cập nhật
            listItem.find(".dot").remove();
            listItem.find(".type-ticket").remove();

            if (ticketCounts.length > 0) {
                // Thêm lại .dot nếu cần
                listItem.append('<span class="dot">|</span>');

                // Thêm .type-ticket
                var typeTicketSpan = $('<span class="txt type-ticket"></span>');
                typeTicketSpan.text(ticketCounts.join(", "));
                listItem.append(typeTicketSpan);
            }
        }
    });
    function LoadUpdateSeat(ShowID) {
        $.ajax({
            url: "/seat-partial/" + ShowID,
            type: "GET",
            success: function (res) {
                $(".ticket-cointainer").addClass("d-block");
                $(".sec-seat").addClass("d-block");
                $(".sec-seat").html(res);
                $(".dt-bill").addClass("d-block");

                roomNumber = $(".seat-wr .seat-heading.sec-heading .heading")
                    .text()
                    .slice(-2);
                $("html, body").animate(
                    {
                        scrollTop:
                            $(".ticket-cointainer").first().offset().top - 100,
                    },
                    300
                );
                updateSeats(ShowID);
            },
        });
    }
    function updateSeats(ShowID) {
        $.ajax({
            url: "/update-seat",
            type: "GET",
            data: { ShowID: ShowID },

            success: function (res) {
                updateSeatsUI(res.Seat);
            },
            error: function (err) {
                console.error("Error fetching seat information:", err);
            },
        });
    }
    function updateSeatsUI(seats) {
        seats.forEach((seat) => {
            let seatElement = $(`[data-cinema-seat-id="${seat.CinemaSeatID}"]`);

            // console.log(seatElement);
            if (seat.Status === "Ghế đã được đặt") {
                seatElement.addClass("booked");
                seatElement.off("click"); // Loại bỏ sự kiện click để ngăn người dùng nhấp lại
            }
        });
    }
    $(document).on("click", ".item-time", function () {
        showTimeID = $(this).data("show-time-item");
        var nameCinema = $(this).data("value-name");
        console.log(showTimeID);
        console.log(nameCinema);
        $(this).addClass("active");
        $(".item-time").not(this).removeClass("active");
        $(".cinema-name.txt").text(nameCinema);
        showtime = $(this).text();
        LoadUpdateSeat(showTimeID);
        console.log(showtime);
    });
    var minutesRemaining = 5;
    var secondsRemaining = 0;
    $(document).ready(function () {
        // Sự kiện click vào ghế
        $(document).on("click", ".seat-wr.seat-single ", function () {
            var seatID = $(this).data("seat-id");
            var cinemaSeatID = $(this).data("cinema-seat-id");
            // Kiểm tra nếu chưa mua vé
            if (sumCountTicket == 0 && selectedSeats.length === 0) {
                $(".popup.--w7 .popup-noti-des").text(
                    "Bạn chưa mua loại ghế này!"
                );
                $(".popup.--w7").addClass("open");
                return; // Dừng sự kiện nếu chưa mua vé
            }
            // Kiểm tra xem ghế đã được chọn trước đó chưa
            var seatIndex = selectedSeats.findIndex(
                (seat) => seat.SeatID === cinemaSeatID
            );
            if (seatIndex === -1) {
                // Nếu ghế chưa được chọn trước đó và tổng số ghế đã chọn chưa đạt đến số lượng vé đã mua
                if (
                    selectedSeats.length < sumCountTicket &&
                    sumCountTicket != 0
                ) {
                    // Thêm ghế vào danh sách các ghế đã chọn
                    $(this).addClass("choosing");
                    selectedSeats.push({
                        SeatID: cinemaSeatID,
                        SeatName: seatID,
                    });
                    resetCountdown();
                    // const options = {
                    //     method: "post",
                    //     url: "/reserve-seat",
                    //     data: {
                    //         seatID: seatID,
                    //     },
                    // };

                    // let answer = window.confirm(
                    //     "Reseve Seat: " + seatID + " ?"
                    // );
                    // if (answer) {
                    //     axios(options);
                    // } else {
                    //     $(this).removeClass("choosing");
                    // }
                    updateButtonState();
                } else {
                    // Nếu tổng số ghế đã chọn đã đủ số lượng vé đã mua, hiển thị thông báo
                    $(".popup.--w7 .popup-noti-des").text(
                        "Bạn đã mua đủ ghế loại này!"
                    );
                    $(".popup.--w7").addClass("open");
                }
            } else {
                // Nếu ghế đã được chọn trước đó, bỏ chọn và loại bỏ khỏi danh sách
                $(this).removeClass("choosing");
                selectedSeats.splice(seatIndex, 1);
                resetCountdown();

                updateButtonState();
            }
            console.log(roomNumber);
            updateCinemaInfo(
                roomNumber,
                selectedSeats.concat(selectedSeats_1),
                showtime
            );
        });

        $(document).on("click", ".seat-couple .seat-wr", function () {
            var cinemaSeatID = $(this).data("cinema-seat-id");
            var seatID = $(this).data("seat-id");
            // Kiểm tra giá trị của food-box-3 .count-number
            var countNumber = parseInt($("#food-box-3 .count-number").text());
            console.log(countNumber);
            // Kiểm tra nếu chưa mua vé
            if (countNumber == 0 && selectedSeats_1.length === 0) {
                $(".popup.--w7 .popup-noti-des").text(
                    "Bạn chưa mua loại ghế này!"
                );
                $(".popup.--w7").addClass("open");
                return; // Dừng sự kiện nếu chưa mua vé
            }

            // Kiểm tra xem ghế đã được chọn trước đó chưa
            var seatIndex = selectedSeats_1.findIndex(
                (seat) => seat.SeatID === cinemaSeatID
            );
            if (seatIndex === -1) {
                // Nếu ghế chưa được chọn trước đó và tổng số ghế đã chọn chưa đạt đến số lượng vé đã mua
                if (selectedSeats_1.length < countNumber) {
                    // Thêm ghế vào danh sách các ghế đã chọn
                    $(this).addClass("choosing");
                    selectedSeats_1.push({
                        SeatID: cinemaSeatID,
                        SeatName: seatID,
                    });
                    console.log(roomNumber);
                    resetCountdown();
                    updateButtonState();
                    // const options = {
                    //     method: "post",
                    //     url: "/reserve-seat",
                    //     data: {
                    //         seatID: seatID,
                    //     },
                    // };

                    // let answer = window.confirm(
                    //     "Reseve Seat: " + seatID + " ?"
                    // );
                    // if (answer) {
                    //     axios(options);
                    // } else {
                    //     $(this).removeClass("choosing");
                    // }
                } else {
                    // Nếu tổng số ghế đã chọn đã đủ số lượng vé đã mua, hiển thị thông báo
                    $(".popup.--w7 .popup-noti-des").text(
                        "Bạn đã mua đủ ghế loại này!"
                    );
                    $(".popup.--w7").addClass("open");
                }
            } else {
                // Nếu ghế đã được chọn trước đó, bỏ chọn và loại bỏ khỏi danh sách
                $(this).removeClass("choosing");
                selectedSeats_1.splice(seatIndex, 1);

                resetCountdown();
                updateButtonState();
            }
            updateCinemaInfo(
                roomNumber,
                selectedSeats.concat(selectedSeats_1),
                showtime
            );
        });
        function resetCountdown() {
            minutesRemaining = 5; // Đặt lại số phút
            secondsRemaining = 0;
            countdown();
        }
        // Sự kiện click vào nút "OK" trong popup
        $(document).on("click", ".popup.--w7 .btn.OK", function () {
            $(".popup.--w7").removeClass("open");
        });
        function updateButtonState() {
            if (
                selectedSeats.length + selectedSeats_1.length ===
                sumCountTicket + parseInt($("#food-box-3 .count-number").text())
            ) {
                $(".dt-bill .btn.btn--pri")
                    .removeClass("opacity-40 pointer-events-none")
                    .addClass("opcity-100");
            } else {
                $(".dt-bill .btn.btn--pri")
                    .addClass("opacity-40 pointer-events-none")
                    .removeClass("opcity-100");
            }
        }
    });

    function updateCinemaInfo(roomNumber, seatList, showTime) {
        if (!roomNumber && !showTime) {
            $(".bill-left .list .item.cinema-hall-info").html("");
            return;
        }

        if (Array.isArray(seatList) && seatList.length > 0) {
            let seatText = seatList.map((seat) => seat.SeatName).join(", ");
            $(".bill-left .list .item.cinema-hall-info").html(`
                Phòng chiếu: ${roomNumber} 
                <span class="dot">|</span> 
                Ghế: ${seatText} 
                <span class="dot">|</span> 
                Suất chiếu: ${showTime}
            `);
        } else {
            $(".bill-left .list .item.cinema-hall-info").html("");
        }
    }
    //Show Check
    $(document).ready(function () {
        // Initialize endTime from localStorage or set it to 2 minutes from now

        $(".btn--booking").click(() => {
            console.log(showTimeID);
            console.log(JSON.stringify(selectedSeats.concat(selectedSeats_1)));
            console.log($("#userID").val());
            console.log(totalPrice);
            console.log(countdownTimeout);
            console.log(showTimeID);
            if (
                !showTimeID ||
                !selectedSeats ||
                !selectedSeats_1 ||
                !$("#userID").val() ||
                !totalPrice ||
                !countdownTimeout ||
                !TypeOfTicket
            ) {
                console.error("One or more required variables are undefined");
                return;
            }
            let formData = new FormData();
            endTime = new Date().getTime() + 2 * 60 * 1000;

            // Lưu endTime vào localStorage để duy trì qua các lần tải lại trang
            localStorage.setItem("endTime", endTime);
            formData.append(
                "Seats",
                JSON.stringify(selectedSeats.concat(selectedSeats_1))
            ); // Convert array to JSON string
            formData.append("UserID", $("#userID").val());
            formData.append("ShowID", showTimeID);
            formData.append("TotalPrice", totalPrice);
            formData.append("TypeTicketQuantity", JSON.stringify(TypeOfTicket));
            console.log(JSON.stringify(TypeOfTicket));
            localStorage.setItem(
                "TypeTicketList",
                JSON.stringify(TypeOfTicket)
            );
            // Include CSRF token for security
            $.ajax({
                url: "/booking",
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: formData,
                processData: false, // Prevent jQuery from automatically transforming the data into a query string
                contentType: false,
                success: function (res) {
                    // console.log(res.redirectUrl);
                    if (res.redirectUrl) window.location.href = res.redirectUrl;
                    else if (res.error) {
                        $(".popup.--w7 .popup-noti-des").text(
                            "Ghế này đã có người đặt!"
                        );
                        $(".popup.--w7").addClass("open");
                    }
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.error("An error occurred:", error);
                    console.error("Status:", status);
                    console.error("Response:", xhr.responseText);
                    // $(".popup.--w7 .popup-noti-des").text(
                    //     "Ghế này đã có người đặt!"
                    // );
                    // $(".popup.--w7").addClass("open");
                },
            });
        });
    });

    $(document).ready(function () {
        $(".checkout-cus-left").on(
            "input",
            "#FullName, #Email, #PhoneNumber",
            function () {
                var id = $(this).attr("id");
                var value = $(this).val().trim();
                var errorId =
                    "#error" + id.charAt(0).toUpperCase() + id.slice(1);

                $(errorId).text(""); // Clear previous error message

                switch (id) {
                    case "FullName":
                        if (value === "") {
                            $(errorId).text("Vui lòng điền họ tên");
                        }
                        break;
                    case "Email":
                        if (value === "") {
                            $(errorId).text("Vui lòng điền Email");
                        } else if (!validateEmail(value)) {
                            $(errorId).text("Email không hợp lệ!");
                        }
                        break;
                    case "PhoneNumber":
                        if (value === "") {
                            $(errorId).text("Vui lòng nhập số điện thoại");
                        } else if (!validatePhoneNumber(value)) {
                            $(errorId).text("Số điện thoại không hợp lệ!");
                        }
                        break;
                }
            }
        );
        $(".checkout-cus-left").on("submit", "#UpdateInfor", function (e) {
            e.preventDefault();
            var fullName = $("#FullName").val().trim();
            var email = $("#Email").val().trim();
            var phoneNumber = $("#PhoneNumber").val().trim();
            var hasError = false;
            if (fullName === "") {
                $("#errorFullName").text("Vui lòng điền họ tên");
                hasError = true;
            }

            if (email === "") {
                $("#errorEmail").text("Vui lòng điền Email");
                hasError = true;
            } else if (!validateEmail(email)) {
                $("#errorEmail").text("Email không hợp lệ!");
                hasError = true;
            }

            if (phoneNumber === "") {
                $("#errorPhoneNumber").text("Vui lòng nhập số điện thoại");
                hasError = true;
            }

            // Validate phone number format (optional)
            else if (!validatePhoneNumber(phoneNumber)) {
                $("#errorPhoneNumber").text("Số điện thoại không hợp lệ!");
                hasError = true;
            }
            if (hasError) {
                return false;
            }
            var formData = new FormData(this);
            $.ajax({
                url: "/updateInforBooking",
                type: "POST",
                data: formData,
                processData: false, // Prevent jQuery from automatically transforming the data into a query string
                contentType: false,
                success: function (res) {
                    $(".checkout-cus-left").html(res.view);
                    $(".process-item:eq(1)").addClass("active");
                },
                error: function (xhr, status, error) {
                    //         Handle error response here
                    console.error("An error occurred:", error);
                    console.error("Status:", status);
                    console.error("Response:", xhr.responseText);
                    alert("Đã xảy ra lỗi, vui lòng thử lại sau.");
                },
            });
        });
        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }

        // Function to validate phone number format (simple)
        function validatePhoneNumber(phoneNumber) {
            var re = /^\d{10,11}$/;
            return re.test(phoneNumber);
        }
    });
    $(document).on(
        "change",
        'input[name="input-checkout-payment"]',
        function () {
            // Kiểm tra nếu có bất kỳ radio nào được chọn
            var anyChecked =
                $('input[name="input-checkout-payment"]:checked').length > 0;

            // Nếu có radio nào được chọn, hiển thị nút "Thanh toán"
            if (anyChecked) {
                $(".btn-submit")
                    .removeClass("opacity-30 pointer-events-none")
                    .addClass("opacity-100");
            } else {
                // Ngược lại, ẩn nút "Thanh toán"
                $(".btn-submit")
                    .addClass("opacity-30 pointer-events-none")
                    .removeClass("opacity-100");
            }
        }
    );
    $(document).ready(function () {
        $(".checkout-cus-left").on("submit", "#FormPayment", function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("TotalPrice", $("#TotalPrice").val());

            // for (var pair of formData.entries()) {
            //     console.log(pair[0] + ", " + pair[1]);
            // }
            $.ajax({
                url: "/payment",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    console.log(res.payUrl);
                    window.location.href = res.payUrl;
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error: ", error);
                    alert("An error occurred while processing the payment.");
                },
            });
        });
    });

    function LoadCusLeft() {
        var bookingId = $("#BookingID").val();
        if (
            $("#userID").val() == 43 &&
            $("#FullNameBooking").val().trim().length == 0 &&
            $("#PhoneNumberBooking").val().trim().length == 0 &&
            $("#EmailBooking").val().trim().length == 0
        )
            $.ajax({
                url: "/formCusPartial",
                type: "GET",
                data: { BookingID: bookingId },
                success: function (res) {
                    $(".checkout-cus-left").html(res.view);
                },
            });
        else {
            $.ajax({
                url: "/formPaymentPartial",
                type: "GET",
                success: function (res) {
                    $(".checkout-cus-left").html(res.view);
                    $(".process-item:eq(1)").addClass("active");
                },
            });
        }
    }
    LoadCusLeft();
});
function handleReserveSeatEvent(e) {
    // Log to check if the event is being received
    console.log("Event received:", e);
    // Extract the array of seats from the event object
    const seats = e.ShowSeat;

    // Log the received seats for debugging purposes
    console.log("Seats array:", seats);

    // Iterate over each seat in the array
    seats.forEach((seat) => {
        // Extract the CinemaSeatID from the current seat object
        const seatID = seat.CinemaSeatID;

        // Select the seat element in the DOM using the CinemaSeatID
        let seatElement = $(`[data-cinema-seat-id="${seatID}"]`);
        console.log(seatElement);
        // Check if the seat element exists
        if (seatElement.length > 0) {
            // Check if the seat status is "Ghế đã được đặt"
            if (seat.Status === "Ghế đã được đặt") {
                // Add the "booked" class to the seat element
                seatElement.addClass("booked");

                // Remove the click event to prevent further clicks
                seatElement.off("click");
            } else {
                // Log an error if the seat status is not "Ghế đã được đặt"
                console.error(
                    `Unexpected status for seat with id: ${seatID} - Status: ${seat.Status}`
                );
            }
        } else {
            // Log an error if the seat element is not found
            console.error(`Không tìm thấy phần tử ghế với id: ${seatID}`);
        }
    });
}

// Attach the event handler to the Echo listener
Echo.channel("Reserve").listen(`.reserveSeat`, handleReserveSeatEvent);
$(document).on("click", ".popup.--w7 .checkout.btn.OK", function () {
    $(".popup.--w7").removeClass("open");
    history.back();
});

let endTime = localStorage.getItem("endTime");

// Bắt đầu countdown nếu có endTime
if (endTime) {
    startCountdown(endTime);
}

function startCountdown(endTime) {
    // Bắt đầu cập nhật countdown mỗi giây
    const interval = setInterval(updateCountdown, 1000);

    // Cập nhật ngay lần đầu tiên
    updateCountdown();

    function updateCountdown() {
        // Lấy thời gian hiện tại
        const now = new Date().getTime();

        // Tính khoảng cách giữa thời gian kết thúc và thời gian hiện tại
        const distance = endTime - now;

        // Tính toán thời gian còn lại bằng phút và giây
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Hiển thị kết quả trong phần tử HTML
        updateTimerDisplay(minutes, seconds);

        // Nếu countdown kết thúc, dừng countdown và hiển thị thông báo
        if (distance <= 0) {
            clearInterval(interval);
            $(".popup.--w7 .popup-noti-des").text("Đã hết thời gian giữ vé!");
            $(".popup.--w7").addClass("open");

            // Xóa thời gian kết thúc từ localStorage
            localStorage.removeItem("endTime");
        }
    }

    function updateTimerDisplay(minutes, seconds) {
        // Định dạng thời gian còn lại
        const formattedMinutes = String(minutes).padStart(2, "0");
        const formattedSeconds = String(seconds).padStart(2, "0");

        // Hiển thị thời gian còn lại
        $(".bill-coundown .bill-time #timerCheckout").text(
            `${formattedMinutes}:${formattedSeconds}`
        );
    }
}

$(document).on("click", ".checkout.btn-back", function () {
    if (interval) {
        clearInterval(interval);
    }
    history.back();
});
$(document).on("click", ".thank.btn-back", function () {
    window.location.href = "/";
});

$(document).ready(function () {
    function LoadProfilePartial() {
        $(".prof-main .heading").text("THÔNG TIN KHÁCH HÀNG");
        $.ajax({
            url: "/profile-partial",
            type: "POST",
            success: function (res) {
                $(".acc-prf").html(res.view);
            },
        });
    }
    LoadProfilePartial();
    $(document).on("click", ".acc-menu-link", function () {
        const wrapperID = $(this).data("swiper-wrapper");
        $(".swiper-slide").removeClass("active");
        $("#" + wrapperID).addClass("active");
        if (wrapperID == "swiper-slide-1") {
            $(".prof-main .heading").text("THÔNG TIN KHÁCH HÀNG");
            $.ajax({
                url: "/profile-partial",
                type: "POST",
                success: function (res) {
                    $(".acc-prf").html(res.view);
                },
            });
        } else {
            $(".prof-main .heading").text("LỊCH SỬ MUA HÀNG");
            $.ajax({
                url: "/history-partial",
                type: "POST",
                success: function (res) {
                    $(".acc-prf").html(res.view);
                },
            });
        }
    });

    $(document).on("click", ".popup.--w7 .profile.btn.OK", function () {
        $(".popup.--w7").removeClass("open");
    });
    $(".acc-prf").on("input", "#FullName, #Email, #PhoneNumber", function () {
        var id = $(this).attr("id");
        var value = $(this).val().trim();
        var errorId = "#error" + id.charAt(0).toUpperCase() + id.slice(1);

        $(errorId).text(""); // Clear previous error message

        switch (id) {
            case "FullName":
                if (value === "") {
                    $(errorId).text("Vui lòng điền họ tên");
                }
                break;
            case "Email":
                if (value === "") {
                    $(errorId).text("Vui lòng điền Email");
                } else if (!validateEmail(value)) {
                    $(errorId).text("Email không hợp lệ!");
                }
                break;
            case "PhoneNumber":
                if (value === "") {
                    $(errorId).text("Vui lòng nhập số điện thoại");
                } else if (!validatePhoneNumber(value)) {
                    $(errorId).text("Số điện thoại không hợp lệ!");
                }
                break;
        }
    });
    $(".acc-prf").on(
        "input",
        "#OldPassword, #NewPassword, #RetypePassword",
        function () {
            var id = $(this).attr("id");
            var value = $(this).val().trim();
            var errorId = "#error" + id.charAt(0).toUpperCase() + id.slice(1);

            $(errorId).text(""); // Clear previous error message

            switch (id) {
                case "OldPassword":
                    if (value === "") {
                        $(errorId).text("Vui lòng nhập thông tin");
                    }
                    break;
                case "NewPassword":
                    if (value === "") {
                        $(errorId).text("Vui lòng nhập thông tin");
                    }
                    break;
                case "RetypePassword":
                    if (value === "") {
                        $(errorId).text("Vui lòng nhập thông tin");
                    }
                    break;
            }
        }
    );
    $(document).on("submit", "#changePassword", function (e) {
        e.preventDefault();
        var oldPassword = $("#OldPassword").val().trim();
        var newPassword = $("#NewPassword").val().trim();
        var retypePassword = $("#RetypePassword").val().trim();
        var hasError = false;
        if (!oldPassword) {
            hasError = true;
            $("#errorOldPassword").text("Vui lòng nhập thông tin");
        } else if (!newPassword) {
            hasError = true;
            $("#errorNewPassword").text("Vui lòng nhập thông tin");
        } else if (!retypePassword) {
            hasError = true;
            $("#errorRetypePassword").text("Vui lòng nhập thông tin");
        } else if (newPassword !== retypePassword) {
            hasError = true;
            $("#errorRetypePassword").text(
                "Mật khẩu mới và xác nhận mật khẩu không trùng khớp"
            );
        }

        if (hasError) {
            return false;
        }
        var formData = new FormData(this);
        $.ajax({
            url: "/change-pass",
            type: "POST",
            data: formData,
            processData: false, // Prevent jQuery from automatically transforming the data into a query string
            contentType: false,
            success: function (res) {
                console.log(res);
                if (res.Successful) {
                    $(".popup.--w7 .popup-noti-des").text(res.Successful);
                    $(".popup.--w7").addClass("open");
                } else {
                    $(".popup.--w7 .popup-noti-des").text(res.Error);
                    $(".popup.--w7").addClass("open");
                }
            },
            error: function (xhr, status, error) {
                //         Handle error response here
                console.error("An error occurred:", error);
                console.error("Status:", status);
                console.error("Response:", xhr.responseText);
                alert("Đã xảy ra lỗi, vui lòng thử lại sau.");
            },
        });
    });
    $(document).on("submit", "#formUpdateInfo", function (e) {
        e.preventDefault();
        var fullName = $("#FullName").val().trim();
        var email = $("#Email").val().trim();
        var phoneNumber = $("#PhoneNumber").val().trim();
        var hasError = false;
        if (fullName === "") {
            $("#errorFullName").text("Vui lòng điền họ tên");
            hasError = true;
        }

        if (email === "") {
            $("#errorEmail").text("Vui lòng điền Email");
            hasError = true;
        } else if (!validateEmail(email)) {
            $("#errorEmail").text("Email không hợp lệ!");
            hasError = true;
        }

        if (phoneNumber === "") {
            $("#errorPhoneNumber").text("Vui lòng nhập số điện thoại");
            hasError = true;
        }

        // Validate phone number format (optional)
        else if (!validatePhoneNumber(phoneNumber)) {
            $("#errorPhoneNumber").text("Số điện thoại không hợp lệ!");
            hasError = true;
        }

        if (hasError) {
            return false;
        }
        var formData = new FormData(this);
        $.ajax({
            url: "/update-infor",
            type: "POST",
            data: formData,
            processData: false, // Prevent jQuery from automatically transforming the data into a query string
            contentType: false,
            success: function (res) {
                console.log(res);
                if (res.Successful) {
                    $(".popup.--w7 .popup-noti-des").text(res.Successful);
                    $(".popup.--w7").addClass("open");
                    $(".about-user .info .name").text(res.FullName);
                } else {
                    $(".popup.--w7 .popup-noti-des").text(res.Error);
                    $(".popup.--w7").addClass("open");
                }
            },
            error: function (xhr, status, error) {
                //         Handle error response here
                console.error("An error occurred:", error);
                console.error("Status:", status);
                console.error("Response:", xhr.responseText);
                alert("Đã xảy ra lỗi, vui lòng thử lại sau.");
            },
        });
    });

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    // Function to validate phone number format (simple)
    function validatePhoneNumber(phoneNumber) {
        var re = /^\d{10,11}$/;
        return re.test(phoneNumber);
    }
});
