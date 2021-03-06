$(function() {
    // tinymce
    altair_wysiwyg._tinymce();
});

// wysiwyg editors
altair_wysiwyg = {
    _tinymce: function() {
        var $tinymce = '#wysiwyg_tinymce';
        if($($tinymce).length) {
            tinymce.init({
                skin_url: '/assets/backend/skins/tinymce/material_design',
                selector: "#wysiwyg_tinymce",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code",
                    "insertdatetime media table contextmenu responsivefilemanager paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
   
                external_filemanager_path:"/assets/plugins/filemanager/",
                filemanager_title:"File Manager" ,
                external_plugins: { "filemanager" : "/assets/plugins/filemanager/plugin.min.js" },
                relative_urls: false
            });
        }
    }
};