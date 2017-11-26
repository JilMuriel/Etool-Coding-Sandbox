$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
});
$(function () {
  $('[data-toggle="popover"]').popover();
});
// slider
$('.carousel').carousel()
 $(document).ready(function() {      
        $('.carousel').carousel('pause');
    });
 // collapse
 // $('.collapse').collapse();
//code editor js

$(function() {
$( ".movable" ).draggable();
$( "#sortable" ).sortable();
$( "#sortable" ).disableSelection();
});


//start of export project
$('#result').each(function() {
$(this).data('contents', $(this).html());
});
$('#clickhere').click(function(){
location.reload();
downloadeverything();
});
function downloadeverything(){
function downloadInnerHtml(filename, elId, mimeType) {
    var elHtml = $('#' + elId).data('contents');     
    var link = document.createElement('a');
    mimeType = mimeType || 'text/plain';
    link.setAttribute('download', filename);
    link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + encodeURIComponent(elHtml));
    link.click(); 
}
var fileName =  'asdasd.html';
downloadInnerHtml(fileName, 'main','text/html');
}
$('#yeah').show('puff', 750);
// end of export project