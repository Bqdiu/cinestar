$(document).ready(function () {
    var selectedSeats = []; // Mảng chứa vị trí của các ghế đã chọn
    var selectedSeats_1 = [];
    var sumCountTicket = 0;
    var movieID = $("#movie").data("movie-id");
    var dCityID = $(".dropdown-menu .city-option-menu.active").data("city-id");
    var dShowDate = $(".swiper-slide-item.active .date").data("date");
    var showtime = "";
    var roomNumber = "";
    // Output the room number to the console
    var currentCount,
        countNumber,
        totalPrice = 0,
        price,
        popupID;
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

    function resetSection() {
        selectedSeats = [];
        selectedSeats_1 = [];
        stopCountdown();
        $(".ticket-cointainer").removeClass("d-block");
        $(".seat-wr.seat-single").removeClass("choosing");
        $(".seat-couple .seat-wr").removeClass("choosing");
        $(".dt-bill").removeClass("d-block");
        $(".sec-seat").removeClass("d-block");
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
    function resetSectionWhenTimerEnded() {
        selectedSeats = [];
        selectedSeats_1 = [];
        stopCountdown();

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
        $(".bill-coundown .bill-time #timer").text(
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

            resetSectionWhenTimerEnded();
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
                updateTicketCounts();
            } else {
                // Trường hợp còn lại, chỉ tăng số lượng vé lên 1 và cập nhật tổng giá tiền
                currentCount += 1;
                countNumber.text(currentCount);
                totalPrice += price;
                // Hiển thị tổng giá tiền đã định dạng
                updateTotalPriceDisplay();
                updateTicketCounts();
            }
            $(".dt-bill .btn.btn--pri").addClass("opacity-40");
            $(".dt-bill .btn.btn--pri").addClass("pointer-events-none");
            $(".dt-bill .btn.btn--pri").removeClass("opcity-100");

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
            updateTicketCounts();
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

            price = parseInt(
                $("#food-box-" + ticketId)
                    .find(".price.sub-title p")
                    .text()
                    .replace(" VNĐ", "")
                    .replace(/\,/g, "")
            );
            selectedSeats = [];
            selectedSeats_1 = [];
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
                updateTicketCounts();
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
                updateTicketCounts();
                console.log(currentCount);
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

    $(document).on("click", ".item-time", function () {
        var showTimeID = $(this).data("show-time-item");
        var nameCinema = $(this).data("value-name");
        console.log(showTimeID);
        console.log(nameCinema);
        $(this).addClass("active");
        $(".item-time").not(this).removeClass("active");
        $(".cinema-name.txt").text(nameCinema);
        showtime = $(this).text();

        console.log(showtime);
        $.ajax({
            url: "/seat-partial/" + showTimeID,
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
            },
        });
    });
    var minutesRemaining = 5;
    var secondsRemaining = 0;
    $(document).ready(function () {
        // Sự kiện click vào ghế
        $(document).on("click", ".seat-wr.seat-single ", function () {
            var seatID = $(this).data("seat-id");

            // Kiểm tra nếu chưa mua vé
            if (sumCountTicket == 0 && selectedSeats.length === 0) {
                $(".popup.--w7 .popup-noti-des").text(
                    "Bạn chưa mua loại ghế này!"
                );
                $(".popup.--w7").addClass("open");
                return; // Dừng sự kiện nếu chưa mua vé
            }

            if (sumCountTicket == 0 && selectedSeats.length === 0) {
                $(".popup.--w7 .popup-noti-des").text(
                    "Bạn chưa mua loại ghế này!"
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
                    if (
                        selectedSeats.length + selectedSeats_1.length ==
                        sumCountTicket +
                            parseInt($("#food-box-3 .count-number").text())
                    ) {
                        $(".dt-bill .btn.btn--pri").removeClass("opacity-40");
                        $(".dt-bill .btn.btn--pri").removeClass(
                            "pointer-events-none"
                        );
                        $(".dt-bill .btn.btn--pri").addClass("opcity-100");
                    }
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
                minutesRemaining = 5; // Đặt lại số phút
                secondsRemaining = 0;
                countdown();

                if (
                    selectedSeats.length + selectedSeats_1.length <
                    sumCountTicket +
                        parseInt($("#food-box-3 .count-number").text())
                ) {
                    $(".dt-bill .btn.btn--pri").addClass("opacity-40");
                    $(".dt-bill .btn.btn--pri").addClass("pointer-events-none");
                    $(".dt-bill .btn.btn--pri").removeClass("opcity-100");
                }
            }
            console.log(roomNumber);
            updateCinemaInfo(
                roomNumber,
                selectedSeats + selectedSeats_1,
                showtime
            );
        });

        $(document).on("click", ".seat-couple .seat-wr", function () {
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
            var seatIndex = selectedSeats_1.indexOf(seatID);
            if (seatIndex === -1) {
                // Nếu ghế chưa được chọn trước đó và tổng số ghế đã chọn chưa đạt đến số lượng vé đã mua
                if (selectedSeats_1.length < countNumber) {
                    // Thêm ghế vào danh sách các ghế đã chọn
                    $(this).addClass("choosing");
                    selectedSeats_1.push(seatID);
                    console.log(roomNumber);
                    countdown();
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
                    if (
                        selectedSeats.length + selectedSeats_1.length ==
                        sumCountTicket +
                            parseInt($("#food-box-3 .count-number").text())
                    ) {
                        $(".dt-bill .btn.btn--pri").removeClass("opacity-40");
                        $(".dt-bill .btn.btn--pri").removeClass(
                            "pointer-events-none"
                        );
                        $(".dt-bill .btn.btn--pri").addClass("opcity-100");
                    }
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

                countdown();
                if (
                    selectedSeats.length + selectedSeats_1.length <
                    sumCountTicket +
                        parseInt($("#food-box-3 .count-number").text())
                ) {
                    $(".dt-bill .btn.btn--pri").addClass("opacity-40");
                    $(".dt-bill .btn.btn--pri").addClass("pointer-events-none");
                    $(".dt-bill .btn.btn--pri").removeClass("opcity-100");
                }
            }
            updateCinemaInfo(
                roomNumber,
                selectedSeats.concat(selectedSeats_1),
                showtime
            );
        });

        // Sự kiện click vào nút "OK" trong popup
        $(document).on("click", ".popup.--w7 .btn.OK", function () {
            $(".popup.--w7").removeClass("open");
        });

        // Echo.channel("reserve").listen("reserveSeat", (e) => {
        //     const seatID = e.seatID; // Lấy id của ghế từ sự kiện
        //     const seatElement = document.querySelector(
        //         `[data-seat-id="${seatID}"]`
        //     ); // Tìm phần tử ghế bằng data-seat-id

        //     if (seatElement) {
        //         seatElement.classList.add("booked");
        //         console.log(seatID);
        //     } else {
        //         console.error("Không tìm thấy phần tử ghế với id:", seatID);
        //     }
        // });
    });
    function updateCinemaInfo(roomNumber, seatList, showTime) {
        let seatText = Array.isArray(seatList) ? seatList.join(", ") : seatList;

        $(".bill-left .list .item.cinema-hall-info").html(`
            Phòng chiếu : ${roomNumber} 
            <span class="dot">|</span> 
            ${seatText} 
            <span class="dot">|</span> 
            ${showTime}
        `);
        if (seatList.length == 0) {
            $(".bill-left .list .item.cinema-hall-info").html("");
        }

        if (roomNumber == "" && showTime == "") {
            $(".bill-left .list .item.cinema-hall-info").html("");
        }
    }
});
