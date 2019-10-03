$(document).ready(function () {
	$('#table-artikel').DataTable();
	$('#texteditor').summernote({
		toolbar: [
			// [groupName, [list of button]]
			['style', ['bold', 'italic', 'underline', 'clear']],
			['font', ['strikethrough', 'superscript', 'subscript']],
			['fontsize', ['fontsize']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			['insert', ['image']]
		],
		shortcuts: false,
		maxHeight: 450,
		minHeight: 450,
		width: 650
	})
	$('.alert').alert()
	$('#customFile').on('change', function () {
		var file = $('#customFile').val()
		$('#label').html(file)
	})

	// console.log($('.carousel-item').length);

})
