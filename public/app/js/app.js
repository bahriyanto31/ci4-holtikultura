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