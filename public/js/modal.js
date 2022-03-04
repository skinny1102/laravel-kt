
window.addEventListener('DOMContentLoaded', (event) => {
    var idpr;
$('#delete-product-modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var idproduct = button.data('idproduct') // Extract info from data-* attributes
        idpr= idproduct
})
$("#btn-delete-product").on('click',function(){
    $("#form_delete_product").attr('action', `/product/${idpr}`);
    $("#form_delete_product").submit();
})

});
