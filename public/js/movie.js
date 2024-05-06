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

    $(document).on("click", ".movie-collapse", function () {
        var collapseId = $(this).data("collapse-id"); // Lấy giá trị của thuộc tính "data-collapse-id" của phần tử "movie-collapse" được click
        var contentId = $(this).data("movie-id"); // Lấy giá trị của thuộc tính "data-movie-id" của phần tử "movie-collapse" được click
        $("." + collapseId).toggleClass("active");
        // Thêm hoặc loại bỏ class "active" cho phần tử "movie-collapse" được click
        $("#" + contentId).toggleClass("d-none"); // Hiển thị hoặc ẩn phần tử "content-movieShow" tương ứng
    });
});
