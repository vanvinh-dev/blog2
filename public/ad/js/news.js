$(document).ready(function () {
    let url_string = window.location.href
    let url = new URL(url_string)
    $('.select').on('change', function () {
        $('#search').submit()
    });
    $('#title').val(url.searchParams.get("title"))
    $('#status').val(url.searchParams.get("status"))

    $('.btn-delete').click(function () {
        let id = $(this).parent().parent().parent().children().eq(0).text().trim()
        $('form[name=delete]').attr('action', '/admin/news/' + id)
    })

})
