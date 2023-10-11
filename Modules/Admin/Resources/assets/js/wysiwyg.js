import tinyMCE from 'tinymce';

tinyMCE.baseURL = `${FleetCart.baseUrl}/modules/admin/js/wysiwyg`;

tinyMCE.init({
    selector: '.wysiwyg',
    theme: 'silver',
    mobile: { theme: 'mobile' },
    height: 350,
    menubar: false,
    branding: false,
    image_advtab: true,
    automatic_uploads: true,
    media_alt_source: false,
    media_poster: false,
    relative_urls : false,
    remove_script_host : true,
    extended_valid_elements: 'span[class],i[class]',
    document_base_url : window.location.origin,
    directionality: FleetCart.rtl ? 'rtl' : 'ltr',
    cache_suffix: `?v=${FleetCart.version}`,
    content_css: '/themes/storefront/public/css/app.css',
    plugins: 'lists, link, table, image, imagetools, media, paste, autosave, autolink, wordcount, preview, code, fullscreen',
    toolbar: 'styleselect bold italic underline | bullist numlist | alignleft aligncenter alignright | outdent indent | image media link table | preview code fullscreen',

    images_upload_handler(blobInfo, success, failure) {
        let formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        $.ajax({
            method: 'POST',
            url: route('admin.media.store'),
            data: formData,
            processData: false,
            contentType: false,
        }).then((file) => {
            success(file.path);
        }).catch((xhr) => {
            failure(xhr.responseJSON.message);
        });
    },
});
