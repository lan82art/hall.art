jQuery(document).ready(function () {
    jQuery('.place').bind('click',function () {

        jQuery(this).css('font-weight','bolder');
        if(jQuery(this).css('background-color') === 'rgb(255, 0, 0)'){
            jQuery(this).css({'background':'#00AA88'});
        } else {
            jQuery(this).css({'background':'red'});
        }


        jQuery.ajax({
            url: '/tickets/addToCart',
            type: 'POST',
            data: 'id='+jQuery(this).attr('id'),
            dataType: 'html',
            success: function (data) {
                jQuery('#order').html('<div>'+data+'</div>');
            }
        });
        return false;
    });

});