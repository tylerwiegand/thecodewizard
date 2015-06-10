$('.thumbnail').click(function(){
	$('.modal-body').empty();
	var title = $(this).parent('a').attr("title");
	$('.modal-title').html(title);
	$($(this).parents('div').html()).appendTo('.modal-body');
	$('#myModal').modal({show:true});
});

/**
 * 1) load an array of images with preload.js
 *		each image can have an id, which could be - say - its high res file name
 * 2) onClick() of the image, pop up a generic modal
 * 3) set the img.src in the modal to the high resolution image
 **/
