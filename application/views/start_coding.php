    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">


<script type="text/javascript">
10
        function view_text () {
11
            // Find html elements.
12
            var textArea = document.getElementById('my_text');
13
            var div = document.getElementById('view_text');
14
             
15
            // Put the text in a variable so we can manipulate it.
16
            var text = textArea.value;
17
             
18
            // Make sure html and php tags are unusable by disabling < and >.
19
            text = text.replace(/\</gi, "<");
20
            text = text.replace(/\>/gi, ">");
21
             
22
            // Exchange newlines for <br />
23
            text = text.replace(/\n/gi, "<br />");
24
             
25
            // Basic BBCodes.
26
            text = text.replace(/\[b\]/gi, "<b>");
27
            text = text.replace(/\[\/b\]/gi, "</b>");
28
             
29
            text = text.replace(/\[i\]/gi, "<i>");
30
            text = text.replace(/\[\/i\]/gi, "</i>");
31
             
32
            text = text.replace(/\[u\]/gi, "<u>");
33
            text = text.replace(/\[\/u\]/gi, "</u>");
34
             
35
            // Print the text in the div made for it.
36
            div.innerHTML = text;
37
        }
38
         
39
        function mod_selection (val1,val2) {
40
            // Get the text area
41
            var textArea = document.getElementById('my_text');
42
             
43
            // IE specific code.
44
            if( -1 != navigator.userAgent.indexOf ("MSIE") ) {
45
                 
46
                var range = document.selection.createRange();
47
                var stored_range = range.duplicate();
48
                 
49
                if(stored_range.length > 0) {
50
                    stored_range.moveToElementText(textArea);
51
                    stored_range.setEndPoint('EndToEnd', range);
52
                    textArea.selectionstart = stored_range.text.length - range.text.length;
53
                    textArea.selectionend = textArea.selectionstart + range.text.length;
54
                }
55
            }
56
            // Do we even have a selection?
57
            if (typeof(textArea.selectionstart) != "undefined") {
58
                // Split the text in three pieces - the selection, and what comes before and after.
59
                var begin = textArea.value.substr(0, textArea.selectionstart);
60
                var selection = textArea.value.substr(textArea.selectionstart, textArea.selectionend - textArea.selectionstart);
61
                var end = textArea.value.substr(textArea.selectionend);
62
                 
63
                // Insert the tags between the three pieces of text.
64
                textArea.value = begin + val1 + selection + val2 + end;
65
            }
66
        }
67
    </script>
68
     



<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow mx-auto animated fadeIn">
 
    

     
<a href="<?php echo base_url('main'); ?>" class=" navbar-brand text-light ml-2">
    <img src="/assets/img/logo.png" width="30" height="30" alt="">
</a>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent ">
    <ul class="navbar-nav mr-auto ">
   
      
        <a class="nav-link navbar-active" id="navbarDropdown" role="button" href="<?php echo base_url('user'); ?>">Sign in <span class="sr-only">(current)</span></a>

       
        
    </ul>

    </div>

 </nav>


    





<div class="card text-center">
  <div class="card-header">
   Introduction to E-tool  </div>
  <div class="card-body" style="height:300px;">
    <div class="h-100 " style="background-color: black; width: 100%; height: 100px;">
      <h1 class="display-2 p-5  mx-auto animated fadeIn" style="font-size: 10vw;">Getting involved</h1>
    </div>
  </div>
</div>


<div class="Dashboard1" >
	 <div class="container mx-auto " >
     <div class="row text-center ">
    <div class="col-md p-1 shadow-super-light" >  
    <div class="p-5 animated fadeIn" style="background-color: #FFFFFF; width: 100%; height: 200px; ">
     <a class="nav-link display-2" href="<?php echo base_url('Learn#php'); ?>" id="navbarDropdown"  aria-expanded="false" style="font-size: 5vw; color:#3cabfc;">PHP?</a> 
    </div>
    </div>
    <div class="col-md p-1 shadow-super-light">
    <div class="p-5 animated fadeIn" style="background-color:#175A8B; width: 100%; height: 200px;">
     <a class="nav-link display-2" href="<?php echo base_url('Learn#sql'); ?>" id="navbarDropdown"  aria-expanded="false" style="font-size: 5vw; color:WHITE;">SQL?</h1></a>
    </div>
    </div>
  </div>
    

 
 <div class="Dashboard">
    <div class="container mx-auto "> 
     <div class="row text-center shadow-super-light" style="height:500px; ">
    <div class="card-header display-4 h-25 p-1" style="width: 100%;">Output:</div>  
    
    <div id="view_text">

    </div>
    </div>
</div>

</div>
  <div class="container-fluid mx-auto p-5">
  <div class="row">
    <div class="col-md">
  
 <input class="shadow-super-light" type="button" value="try" style="  border: 10px;" onclick="mod_selection('[b]','[/b]')" />

   
    <br />

     

    <!-- Text area -->
    
  <textarea class="text_edit mx-auto shadow-super-light" id="my_text"  style=" width: 100%; border: 10px;">
  <!DOCTYPE html>
   <html>
   <head>
   <title></title>
   </head>
   <body>
    
   </body>
   </html>  </textarea>

    <br/>

     

    <!-- Submit button -->

    <input  class="card-header mx-auto shadow-super-light" type="button" value="Run" onclick="view_text()" />

     

    <!-- Empty div to put the text in -->

    </div>
    </div>
    <div class="col">
     <div class="container ">
    <div class="row ">
        <div class="col-md mx-auto pt-5 ">
            
        </div>
    </div>        
</div> 
 
    </div>
  </div>
<div class="Dashboard">
  </div>
</div>
<div class="Dashboard">

   <div class="container mx-auto "> 
     <div class="row text-center shadow-super-light" style="height:300px">

    <div class="col-md p-1"> 
      
    </div>
  </div>
</div>
    </div>


  <div class="Dashboard">
  </div>
      </div>
  </div>

