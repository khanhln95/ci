if($("#form-products").length) {
    var error1=$('#form-products #name').attr('data-error');
    var error2=$('#form-products #description').attr('data-error');
    var error3=$('#form-products #price').attr('data-error');
    $("#form-products").validate({
        rules: {
            name: "required",
            description: "required",
            price: "required",
        },
        messages: {
            name: error1,
            description: error2,
            price: error3,
        },
        highlight : function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight : function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
    });    
}