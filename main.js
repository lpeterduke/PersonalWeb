$('#img1').click(function() {
  $('#mainDisplay').html('Text 1');
});

$('#img2').click(function() {
  $('#mainDisplay').html('Text 2');
});


$('#img3').click(function() {
  $('#mainDisplay').html('Text 3');
});
  
/** --OR-- you could get the images alt attribute and print that out 

$('#aardvark').click(function() {
  var alt = $(this).attr('alt');
  $('div').html(alt);
});
**/