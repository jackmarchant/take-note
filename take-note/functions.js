$(document).ready(function(){
	// Open note
	$('.note .inner').click(function(){
		$(this).parents('.note').find('.outer').toggle(250);
		$(this).parents('.note').toggleClass('active');
		$(this).parents('.note').find('.note-content').attr('contenteditable','true');
	});

	if ($('#main').hasClass('new-note'))
	{
		CKEDITOR.replace('note');
	}

	$('.note-content').click(function(){
		$(this).addClass('active');
	});
	$(document).on('blur', '.note-content.active', function(){
		var note = $(this).html();
		var id = $(this).parents('.note').attr('id');
		$(this).removeClass('active');
		$.ajax({                    
		  url: 'database/update-note.php',     
		  type: 'post',
		  data : {
		    note : note,
		    id : id
		  },
		  dataType: 'json'
		});
	});
});