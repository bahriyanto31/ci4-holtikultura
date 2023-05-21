$(document).ready(function () {
    dynamic_active_menu();
});

function dynamic_active_menu() {
    $('.menu-item').each(function () {
        let a = $(this).find('a');
        if ($(this).find('a').attr('href') === window.location.href) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
    if (window.location.pathname == "/web/dashboard") {
        // Helpers.setCollapsed(false)
    } else {
        // Helpers.setCollapsed(true)
    }
}

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    "toastClass": "custom-toastr"
};
function notif_toast(sts, titl, msg) {
    switch (sts) {
        case 0: toastr.error(msg, titl); break;
        case 1: toastr.success(msg, titl); break;
        case 3: toastr.warning(msg, titl); break;
        default:
            toastr.info(msg, titl);
            break;
    }
}

function confirm_delete(x) {
    let url = $(x).data('href');
    return (confirm("Apakah anda yakin menghapus data ini ?")) ?
        window.location.href = url :
        false;

}