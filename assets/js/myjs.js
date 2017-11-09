$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$(function () {
  $('[data-toggle="popover"]').popover()
})
// slider
$('.carousel').carousel()
//code editor js
var doc = result.contentDocument;

	run_button.addEventListener('click', function(){
		doc.close();
		doc.open();
		doc.write(
			myCodeMirror.getValue() + '<style>' + myCodeMirror1.getValue() + '</style>' + '<script>' + editor.getValue() + '</' + 'script>' );
	});

	

	var editor = CodeMirror.fromTextArea(document.getElementById('jsbox'), {
  mode:  "javascript",
  matchBrackets: true,
  lineNumbers : true,
});
	var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('phpbox'), {
  mode:  "xml",
  matchBrackets: true,
   lineNumbers : true,
});
	var myCodeMirror1 = CodeMirror.fromTextArea(document.getElementById('cssbox'), {
  mode:  "css",
  matchBrackets: true,
   lineNumbers : true,
}); 