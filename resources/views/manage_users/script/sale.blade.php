<script>
jQuery(document).ready(function() {
    $('.sale_Edit').click(function() {
        

        var id = $(this).attr('id');
       // console.log(id);
        jQuery.ajax({
            url: "sale-edit",
            method: 'post',
            dataType: "json",
            data: {
                "_token": "{{ csrf_token() }}",
                id,
            },
            success: function(data) {

                $('#id_sale').val(data.data.id);
                $('#username_sale').val(data.data.username);
                $('#email_sale').val(data.data.email);


            },

        });

    });

    $('#sale_save').click(function() {
        var id_sale = jQuery('#id_sale').val();
        var username_sale = jQuery('#username_sale').val();
        var email_sale = jQuery('#email_sale').val();
        var password_sale = jQuery('#password_sale').val();

        if (username_sale != "" && email_sale != "" && password_sale !== "") {

            if (password_sale.length >= 8) {

                jQuery.ajax({
                    url: "sale-update",
                    method: 'post',
                    dataType: "json",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id_sale,
                        username_sale,
                        email_sale,
                        password_sale,

                    },
                    success: function(data) {
                        valid = data.message;
                        $("#message_sale").css("color", "#28a745");
                        $('#message_sale').html(valid);
                         location.replace("sale")


                    },

                    error: function(data) {


                        $('#message_sale').html(data.responseText);
                    }

                });

            } else {
                $('#message_sale').html('passward อย่างน้อย 8 ตัวอักษร');
                $("#message_sale").css("color", "#f70606");
            }
        } else {
            $('#message_sale').html('กรอกข้อมูลให้ครบ');
            $("#message_sale").css("color", "#f70606");
        }


    });
});
</script>