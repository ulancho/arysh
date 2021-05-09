<div class="modal"></div>
<!-- /Load Js -->
<input type="hidden" id="url" value="<?=base_url()?>">
<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>public/js/admin.js"></script>
<script src="<?=base_url()?>ckeditor5/build/ckeditor.js"></script>
<script>
    var allEditors = document.querySelectorAll( '.editor' );
    for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor
            .create( allEditors[i], {

                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'indent',
                        'outdent',
                        '|',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        'undo',
                        'redo',
                        'fontBackgroundColor',
                        'fontColor',
                        'fontSize',
                        'fontFamily',
                        'highlight'
                    ]
                },
                language: 'ru',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',

            } )
                .then( editor => {
                    window.editor = editor;

                } )
                .catch( error => {
                    console.error( error );
                } );
    }


</script>
</body>
</html>
