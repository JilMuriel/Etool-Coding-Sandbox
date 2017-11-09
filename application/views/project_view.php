
<div class="Dashboard h-100">
	<div class="d-flex flex-row">
	  <div class="side-nav h-100 shadow">
	  	<ul class="list-group">
		  <li class="list-group-item list-active"><i class="material-icons">dashboard</i></li>
		</ul>
	  </div>
	  <div class="page-box pt-4 w-100">
	  	
	  	<div class="ml-4 mr-4" style="padding-top: 100px;">
	  		<iframe class="w-100" id="result" style="height: 400px;">"></iframe>
	  		<button type="submit" class="btn btn-default float-right mr-4 mb-4" id="run_button">Run</button>
	  		<div class="row mt-4">
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>PHP</h6>
		  				</div>
		  				<textarea name="pphhpp" id="phpbox" class="asd w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>CSS</h6>
		  				</div>
		  				<textarea name="ccsssss" id="cssbox" class="w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>Javascript</h6>
		  				</div>
		  				<textarea name="jjss" id="jsbox" class="w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>
<script type="text/javascript">
	var doc = result.contentDocument;

// <<<<<<< HEAD
	run_button.addEventListener('click', 	function openInNewTab(url) {
	  var win = window.open(<?php echo base_url('user'); ?>, '_blank');
	  win.focus();
	};
// =======
	run_button.addEventListener('click', function openInNewTab(url) {
  var win = window.open('<?php echo base_url('user')?>', '_blank');
  win.focus();
});
// >>>>>>> ccff44aa2e50ec7022535b3b233dca9775798860

	

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

</script>

<script type="text/javascript">

</script>