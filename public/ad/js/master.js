$(document).ready(function () {
    let text_truncate = function (str, length, ending) {
        if (length == null) {
            length = 100;
        }
        if (ending == null) {
            ending = '...';
        }
        if (str.length > length) {
            return str.substring(0, length - ending.length) + ending;
        } else {
            return str;
        }
    };

    $(".custom-file-input").on("change", function() {
        let fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(text_truncate(fileName,25));
    });

    $('.status').each(function () {
        let status = parseInt($(this).text())
        status === 1 ? $(this).text('Hoạt động').addClass('bg-success') : $(this).text('Không hoạt động').addClass('bg-danger')
    })
})

