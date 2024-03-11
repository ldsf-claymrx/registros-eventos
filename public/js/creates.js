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
                Swal.fire({
                    title: xhr.title,
                    text: xhr.text,
                    icon: xhr.icon
                });
            }
        });
    });


    $('#form-creariglesia').submit(function(event){
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
                Swal.fire({
                    title: xhr.title,
                    text: xhr.text,
                    icon: xhr.icon
                });
            }
        });
    });


    $('#form-crearcargo').submit(function(event){
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
                Swal.fire({
                    title: xhr.title,
                    text: xhr.text,
                    icon: xhr.icon
                });
            }
        });
    });



    $('#form-crearpersona').submit(function(event){
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
                Swal.fire({
                    title: xhr.title,
                    text: xhr.text,
                    icon: xhr.icon
                });
            }
        });
    });


    $('#form-crearevento').submit(function(event){
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
                Swal.fire({
                    title: xhr.title,
                    text: xhr.text,
                    icon: xhr.icon
                });
            }
        });
    });

});