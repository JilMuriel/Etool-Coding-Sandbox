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


