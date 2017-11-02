$(document).ready(function(){
	//code here...
	var code = $(".mirror")[0];
	var editor = CodeMirror.fromTextArea(code, {
		lineNumbers : true,
		theme: 'monokai',
		mode: 'htmlmixed',
	});

});	     