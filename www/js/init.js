/**
 * 
 */

$(document).ready(function() {
	
	var dirname = -1;
	$.post( "system/touchdir.php", {test: 'alo'}).done(function( data ) {
		dirname = data;
		$( ".result" ).html( data );
	});
	
	var uploader = $("#bootstrapped-fine-uploader").fineUploader({
		element : $('#bootstrapped-fine-uploader'),
		button: $('#upload-button'),
		request : {
			endpoint : 'system/server/endpoint.php'
		},
		autoUpload: false,
//		debug: true,
		template : 'qq-template-bootstrap',
		validation: {
	          allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
		},
	      thumbnails: {
	          placeholders: {
	            waitingPath: "assets/placeholders/waiting-generic.png",
	            notAvailablePath: "assets/placeholders/not_available-generic.png"
	          }
	      },		
	      editFilename: {
	          enabled: false
	        },	      
		classes : {
			success : 'alert alert-success',
			fail : 'alert alert-error'
		},
        messages: {
            typeError: "{file} má neplatnou příponu. Platné přípony jsou: {extensions}.",
            sizeError: "{file} is too large, maximum file size is {sizeLimit}.",
            minSizeError: "{file} is too small, minimum file size is {minSizeLimit}.",
            emptyError: "{file} is empty, please select files again without it.",
            noFilesError: "Nevybrali jste žádné soubory.",
            tooManyItemsError: "Too many items ({netItems}) would be uploaded.  Item limit is {itemLimit}.",
            maxHeightImageError: "Image is too tall.",
            maxWidthImageError: "Image is too wide.",
            minHeightImageError: "Image is not tall enough.",
            minWidthImageError: "Image is not wide enough.",
            retryFailTooManyItems: "Retry failed - you have reached your file limit.",
            onLeave: "Soubory se právě nahrávají. Pokud nyní odejdete, nahrávání se přeruší."
        },	        
	}).on('submitted', function (event, id) {
//		updateUploadButtonStatus(uploader);
	}).on('statusChange', function (event, id, name) {
//		updateUploadButtonStatus(uploader);
	}).on('allComplete', function (event, id, name, responseJSON) {
		
		var uploads = uploader.fineUploader('getUploads');

		$.post( "system/movefiles.php", {dir: dirname, uploaded: uploads}).done(function( data ) {
		});
		
		$( "#dirname" ).html( dirname);
		$( "#dirname-wrap").show('slow');
		
	}).on('complete', function (event, id, name, responseJSON) {
		updateUploadButtonStatus(uploader);
	});
	
	updateUploadButtonStatus(uploader);
	
	$('#triggerUpload').click(function() {
	      uploader.fineUploader('uploadStoredFiles');
    });

	
});

function updateUploadButtonStatus(uploader) {
	var submitted = $('.qq-upload-list li').length;
	console.log(submitted);
	$('#files-submitted-count').text(submitted);
}