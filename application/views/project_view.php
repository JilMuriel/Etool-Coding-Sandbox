<div class="Dashboard h-100">
	<div class="d-flex flex-row">
	  <div class="side-nav h-100 shadow">
	  	<ul class="list-group">
		  <li class="list-group-item list-active"><i class="material-icons">dashboard</i></li>
		</ul>
	  </div>
	  <div class="page-box pt-4 w-100">
	  	<button class="btn btn-default float-right mr-4 mb-4" id="run_button">Run</button>
	  	<div class="ml-4 mr-4">
<<<<<<< HEAD
	  		<iframe id="result" class="w-100" style="height: 500px;"></iframe>
=======
	  		<div id="result" class="w-100" style="height: 500px;"><?php echo $html . '<style>' . $css . '</style>' . '<script>' . $js . '</script>';?></div>
	  		<form id="preview-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  		<button type="submit" class="btn btn-default mr-4 mb-4" id="run_button">Run</button>
>>>>>>> da2cb8f265dd3d392ac36a4605fcb8dc59cbe5e9
	  		<div class="row mt-4">
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>PHP</h6>
		  				</div>
		  				<textarea id="PHP_input" class="asd w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>CSS</h6>
		  				</div>
		  				<textarea id="CSS_input" class="w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>Javascript</h6>
		  				</div>
		  				<textarea id="JS_input" class="w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
<script type="text/javascript">
	

	var doc = result.contentDocument;

	run_button.addEventListener('click', function(){

		doc.close();
		doc.open();
		doc.write(
		result.innerHTML = PHP_input.value + '<style>' + CSS_input.value + '</style>' + '<script>' + JS_input.value + '</' + 'script>' );

	});

	var editor = CodeMirror.fromTextArea(document.getElementById('JS_input'), {
  mode:  "javascript",
  lineNumbers : true
});
	var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('PHP_input'), {
  mode:  "xml",
   lineNumbers : true
});
	var myCodeMirror1 = CodeMirror.fromTextArea(document.getElementById('CSS_input'), {
  mode:  "css",
   lineNumbers : true
}); 
</script>
