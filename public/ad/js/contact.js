$(document).ready(function () {
    let url_string = window.location.href
    let url = new URL(url_string)
    $('.select').on('change', function () {
        $('#search').submit()
    });
    $('#name').val(url.searchParams.get("name"))
    $('#email').val(url.searchParams.get("email"))
    $('#phone').val(url.searchParams.get("phone"))
    $('#status').val(url.searchParams.get("status"))
})
