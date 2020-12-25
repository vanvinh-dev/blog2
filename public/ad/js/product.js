$(document).ready(function () {
    let url_string = window.location.href
    let url = new URL(url_string)
    $('.select').on('change', function () {
        $('#search').submit()
    });
    $('#name').val(url.searchParams.get("name"))
    $('#weight').val(url.searchParams.get("weight"))
    $('#status').val(url.searchParams.get("status"))
    $('#category').val(url.searchParams.get("categoryId"))

    $('.btn-delete').click(function () {
        let id = $(this).parent().parent().parent().children().eq(0).text().trim()
        $('form[name=delete]').attr('action', '/admin/products/' + id)
    })

})
