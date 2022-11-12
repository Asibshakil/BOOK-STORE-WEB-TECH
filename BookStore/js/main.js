function addToCart(id) {
    var sessionID = $('#sessionID').val();
    if (sessionID) {
        window.location = "single-product.php?id=" + id;
    } else {
        $("#exampleModal").modal("show");
        setTimeout(function() {
            $('#exampleModal').modal('hide');
        }, 2000);
    }

}