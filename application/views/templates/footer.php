<!-- jquery -->
<script src="/assets/js/jquery-3.2.1.min.js"></script>
<!-- popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!-- bootstrap -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- code mirror -->
<script src="/assets/js/myjs.js"></script>
<script src="/assets/js/intro.min.js"></script>
<script type="text/javascript">
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
</script>
</body>
</html>