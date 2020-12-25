$(document).ready(function () {
    let url_string = window.location.href
    let url = new URL(url_string)
    $('#status').on('change', function () {
        $('#search').submit()
    });
    $('#id').val(url.searchParams.get("id"))
    $('#name').val(url.searchParams.get("name"))
    $('#status').val(url.searchParams.get("status"))

    $("#saveForm").validate({
        errorClass: 'validateError',
        rules: {
            name: {
                required: true
            }
        },
        messages: {
            name: {
                required: "* Vui lòng nhập tên danh mục"
            }
        }
    })

    $('.btn-update').click(function () {
        let collum = $(this).parent().parent().parent().children()
        let id = collum.eq(0).text().trim()
        let name = collum.eq(1).text().trim()
        let status = collum.eq(4).children().first().text().trim()
        $('#update-name').val(name)
        $('#update-status').val(status)
        $('form[name=update]').attr('action', '/admin/categories/' + id)
    })

    $('.btn-delete').click(function () {
        let id = $(this).parent().parent().parent().children().eq(0).text().trim()
        $('form[name=delete]').attr('action', '/admin/categories/' + id)
    })

})
