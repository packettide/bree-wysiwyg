$(function() {
	$('.pt-wysiwyg').ckeditor();

	$('body').on('bree.cell.add', function() {
		$('.pt-wysiwyg').ckeditor();
	});
});