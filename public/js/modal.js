
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

    var idproductEdit ; 
    $('#modal-edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('idpedit') // Extract info from data-* attributes
        idproductEdit= id
        var modal = $(this)
        $.ajax({
            method: "GET",
            url: `/product-info/${idproductEdit}`,      
            success: function(data) {
                // console.log(modal.find('#name_product'));
                modal.find('#name_product').val(data.name_product)
                modal.find('#title').val(data.title)
                modal.find('#content').val(data.content)
                modal.find('#price').val(data.price)
                modal.find('#cpu_name').val(data.cpu_name)
                modal.find('#ram_name').val(data.ram_name)
                modal.find('#disk_name').val(data.disk_name)
                modal.find('#card_name').val(data.card_name)
                modal.find('#desktop_name').val(data.desktop_name)
                modal.find('#quanlity').val(data.quanlity)
                $('#category').val(data.id_category).change()
                $('#supplier').val(data.id_supplier).change()
                if(data.image_product!=null){
                    $("#my_image").attr("src",`/uploads/${data.image_product}`);
                }
               
            },
            error: function(err) {
                console.log(err);  
            }
        })

    })
    // $("#form-edit").on('submit',function(e){
    // })
    $("#btn-edit-modal").on('click',function(e){
        e.preventDefault()
        $("#form-edit").attr('action', `/product/${idproductEdit}`);
        $("#form-edit").submit();
    })
});