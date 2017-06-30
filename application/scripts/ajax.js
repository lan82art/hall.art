jQuery(document).ready(function () {
    jQuery('.place').bind('click',function () {
        var plases;
        jQuery(this).css({'font-weight':'bolder','background':'red'});
        plases = [jQuery(this).attr('id')];


        jQuery.ajax({
            url: '/tickets/addToCart',
            type: 'POST',
            data: 'id='+jQuery(this).attr('id'),
            dataType: 'html',
            success: function (data) {
                jQuery('#order').html('<div class="order">'+data+'</div>');
            }
        });
        return false;
    });

});