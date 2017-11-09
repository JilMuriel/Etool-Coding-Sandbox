<div class="mt-5 pt-5">
	<div class="container-fluid">
		<div class=" float-right">
			<div class="car-body mr-5 pr-5">
				<button id="fnc1_button" class="btn btn-primary">function 1</button>
				<button id="fnc2_button" class="btn btn-primary ml-2 mr-2">function 2</button>
				<button id="fnc3_button" class="btn btn-primary">function 3</button>
			</div>
		</div>
		<div class="w-75 mx-auto">
			<h1 class="pb-5">My Sql</h1>
			<div class="bg-white h-50 w-100 border border-dark mt-5">
				output here
			</div>
			<iframe id="result1" class="w-100 mt-4" style="height: 300px;"></iframe>
			<button class="btn btn-primarr pl-4 pr-4 shadow-super-light mt-3">Run</button>
		</div>
	</div>
</div>
<script type="text/javascript">

var fncc = result1.contentDocument;

fnc1_button.addEventListener('click', function(){
    fncc.close();
    fncc.open();
    fncc.write('CREATE DATABASE databasename;'); 
  });

fnc2_button.addEventListener('click', function(){
    fncc.close();
    fncc.open();
    fncc.write('CREATE TABLE table_name ();'); 
  });

fnc3_button.addEventListener('click', function(){
    fncc.close();
    fncc.open();
    fncc.write('CREATE TABLE table_name ();'); 
  });
</script>