$(document).ready(function () {
    LoadData(1);

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

    $(document).on("click", ".movieShow", function () {
        var movieShowID = $(this).data("movie-show");
        $("#" + movieShowID).toggleClass("active");
    });

    $(".swiper-slide-item").click(function () {
        var swiperID = $(this).data("swiper-slide");
        $(".swiper-slide-item").not(this).removeClass("active");
        $("#" + swiperID).addClass("active");
    });
    $(document).on("click", ".city-option-menu", function () {
        var cityName = $(this).data("city-name");
        $(".an-select-selection-item").empty();
        $(".an-select-selection-item").html(cityName);
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
