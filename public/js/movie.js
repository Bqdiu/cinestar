$(document).ready(function () {
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
    $(".count-minus").click(function () {
        var countElement = $(this).siblings(".count-number");
        var count = parseInt(countElement.text());
        if (count > 0) {
            countElement.text(count - 1);
        }
    });
    $(".count-plus").click(function () {
        var countElement = $(this).siblings(".count-number");
        var count = parseInt(countElement.text());
        countElement.text(count + 1);
    });
});
