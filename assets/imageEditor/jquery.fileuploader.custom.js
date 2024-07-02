$(document).ready(function() {

	$('.files').fileuploader({
		extensions: ['image/*'],
		addMore: true,
        changeInput: '<div class="fileuploader-input">' +
					      '<div class="fileuploader-input-inner">' +
						      '<div class="fileuploader-icon-main"></div>' +
							  '<button type="button" class="fileuploader-input-button"><span>${captions.button}</span></button>' +
							  '<p style="padding-top:20px;">${captions.or}</p>' +
						  '</div>' +
					  '</div>',
		thumbnails: {
            onImageLoaded: function(item) {
                if (!item.html.find('.fileuploader-action-edit').length)
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-sort" title="Sırala"><i class="fileuploader-icon-sort"></i></button><button type="button" class="fileuploader-action fileuploader-action-popup fileuploader-action-edit" title="Düzenle"><i class="fileuploader-icon-edit"></i></button>');

            }
        },
        theme: 'dragdrop',
		upload: null,
		onRemove: null,
		captions: $.extend(true, {}, $.fn.fileuploader.languages['tr'], {
            or: 'Accepts images, videos, or 3D models',
            button: 'Upload New',
        }),
        editor: {
			cropper: {
		        ratio: null,
		        minWidth: 800,
		        minHeight: 1200,
		        maxHeight: 1400,
		        showGrid: true
		    },
		},
		sorter: {
			selectorExclude: null,
			placeholder: null,
			scrollContainer: window,
			onSort:null
		}
	});


	$('.files_not_multiple').fileuploader({
        limit: 1,
        extensions: ['image/*', 'application/*','video/*'],
		thumbnails: {
            onImageLoaded: function(item) {
                if (!item.html.find('.fileuploader-action-edit').length)
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-popup fileuploader-action-edit" title="Düzenle"><i class="fileuploader-icon-edit"></i></button>');

            }
        },
		upload: null,
		onRemove: null,
		captions: $.extend(true, {}, $.fn.fileuploader.languages['tr']),
        editor: {
			cropper: {
		        ratio: null,
		        minWidth: 800,
		        minHeight: 1200,
		        maxHeight: 1400,
		        showGrid: true
		    },
		},
		sorter: {
			selectorExclude: null,
			placeholder: null,
			scrollContainer: window,
			onSort:null
		}

	});

});