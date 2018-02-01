var contact = (function () {
    var url = '{{ route('contacts.index') }}'
    var swalTitle = '@lang('Really destroy contact ?')'
    var confirmButtonText = '@lang('Yes')'
    var cancelButtonText = '@lang('No')'
    var errorAjax = '@lang('Looks like there is a server issue...')'
    var onReady = function () {
        $('#pagination').on('click', 'ul.pagination a', function (event) {
            back.pagination(event, $(this), errorAjax)
        })
        $('#pannel').on('change', ':checkbox[name="seen"]', function () {
                back.seen(url, $(this), errorAjax)
            })
            .on('click', 'td a.btn-danger', function (event) {
                back.destroy(event, $(this), url, swalTitle, confirmButtonText, cancelButtonText, errorAjax)
            })
        $('.box-header :radio, .box-header :checkbox').click(function () {
            back.filters(url, errorAjax)
        })
    }
    return {
        onReady: onReady
    }
})();
$(document).ready(contact.onReady)

<script src="/adminlte/js/back.js"></script>