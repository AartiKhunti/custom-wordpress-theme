jQuery(document).ready(function ($) {
    var mediaUploader;

    $('.upload-logo-button').click(function (e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Logo',
            button: {
                text: 'Choose Logo'
            },
            multiple: false  
        });

        mediaUploader.on('select', function () {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#casino_hotel_logo').val(attachment.url);
        });

        mediaUploader.open();
    });
});


