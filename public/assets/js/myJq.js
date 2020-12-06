$(document).ready(function(){
    let sum=0;
    let price,temp;
    $('#cart_table > tr').each(function (i,tr) {
        price =parseInt($(this).find('.price').html());
        let product = parseInt($(this).find('.product_quantity').val());
        if(product<=0){
            $(this).find('.product_quantity').val(1);
            $(this).find('.subtotal').html(price);sum+=price;
        }else{
            temp =parseInt(product)*parseInt(price);
            $(this).find('.subtotal').html(temp);
            sum+=temp;
        }
    })
    $('.Total').html(sum);

});
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
    }
})
$('.remove_cart').click(function (e) {
    e.preventDefault();
    $.ajax({
        type:"POST",
        url:"/cart/remove/"+$(this).val(),
        data:{
            id: $(this).val(),
        },
        success: function (result) {

            location.reload();
        },
        error:function (result,error) {
            alert(error);
        }
    })
})
$('.product_quantity').change(function (e) {
    // make for loop for whole table
    let sum=0;
    let price,temp;
    $('#cart_table > tr').each(function (i,tr) {
        price =parseInt($(this).find('.price').html());
        let product = parseInt($(this).find('.product_quantity').val());
        if(product<=0){
            $(this).find('.product_quantity').val(1);
            $(this).find('.subtotal').html(price);sum+=price;
        }else{
            temp =parseInt(product)*parseInt(price);
            $(this).find('.subtotal').html(temp);
            sum+=temp;
        }
    })
    $('.Total').html(sum);
})
$('update_cart').click(function() {
    location.reload();
});
