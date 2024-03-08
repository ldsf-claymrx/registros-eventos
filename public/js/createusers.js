$(document).ready(function(){


    $('#form-crearusuario').submit(function(event){
        event.preventDefault();

        var formData = $(this).serialize();

        url_path = $('#url').val();

        $.ajax ({
            type: 'POST',
            url: url_path,
            data: formData,
            success: function(response) {
                Swal.fire({
                    title: response.title,
                    text: response.text,
                    icon: response.icon
                });
            },

            error: function(xhr) {
                console.error(xhr.responseText);
            }

        });

    });

});