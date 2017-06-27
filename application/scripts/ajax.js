jQuery(document).ready(function () {
    jQuery('#').bind('click',function () {
        var name = 'user';
        var pass = '1234';
        jQuery.ajax({
            url: 'index.php/tickets/addtocart/',
            type: 'POST',
            data: (this).#id,
            dataType: 'html',
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });
});