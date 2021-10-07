<script>
jQuery(document).ready(function() {
    $('.edit_button').click(function() {

        var id = $(this).attr('id');
        jQuery.ajax({
            url: "home-edit",
            method: 'post',
            dataType: "json",
            data: {
                "_token": "{{ csrf_token() }}",
                id,
            },
            success: function(data) {

                $('#id_e').val(data.data.id);
                $('#username_e').val(data.data.username);
                $('#email_e').val(data.data.email);


            },






        });

    });

    $('#edit_serve').click(function() {
        var id_e = jQuery('#id_e').val();
        var username_e = jQuery('#username_e').val();
        var email_e = jQuery('#email_e').val();
        var password_e = jQuery('#password_e').val();
        var title_role_e = jQuery('#title_role_e').val();


        if (username_e != "" && email_e != "" && password_e !== "") {

            if (password_e.length>=8) {

                jQuery.ajax({
                    url: "e_update",
                    method: 'post',
                    dataType: "json",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id_e,
                        username_e,
                        email_e,
                        password_e,
                        title_role_e,

                    },
                    success: function(data) {
                        valid = data.message;
                        $("#message").css("color", "#28a745");
                        $('#message').html(valid);
                        location.replace("home")


                    },

                    error: function(data) {


                        $('#message').html(data.responseText);
                    }

                });

            } else {
                $('#message').html('passward อย่างน้อย 8 ตัวอักษร');
                $("#message").css("color", "#f70606");
            }
        } else {
            $('#message').html('กรอกข้อมูลให้ครบ');
            $("#message").css("color", "#f70606");
        }

        /*
               
                */

    });
});
</script>