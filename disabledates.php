<?php
?>
<!DOCTYPE>
<html>
<title>Disable Dates</title>
<head>
<link href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
  
  
  
<script type="text/javascript">

/** Days to be disabled as an array */
var disableddates = ['20-02-2017', '21-02-2017', '22-02-2017', '23-02-2017'];


function DisableSpecificDates(date) {
    var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
    return [disableddates.indexOf(string) == -1];
  }
  /*
var m = date.getMonth();
var d = date.getDate();
var y = date.getFullYear();

// First convert the date in to the mm-dd-yyyy format 
// Take note that we will increment the month count by 1 
var currentdate = (m + 1) + '-' + d + '-' + y ;

// We will now check if the date belongs to disableddates array 
for (var i = 0; i < disableddates.length; i++) {

// Now check if the current date is in disabled dates array. 
if ($.inArray(currentdate, disableddates) != -1 ) {
return [false];

}
}

}*/


$(function() {
  $("#date").datepicker({
    beforeShowDay: DisableSpecificDates
  });
});

</script>
  
  
</head>
<body>
<input id="date" type="text">

</body>
</html>