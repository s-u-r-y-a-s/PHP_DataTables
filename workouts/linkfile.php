<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
        alert=function(){};
        $.ajax({
       "bProcessing": true,
       "bServerSide": true,
       'type': "GET",
       'dataType' :'json',
       'url': "http://ergast.com/api/f1/2004/1/results.json"
    
}).done( function(data) {
  $('#table').dataTable( {

        "aaData":data.MRData.RaceTable.Races[0].Results,
        "columns": [
            { "data": "position" },
            { "data": "Driver.code" },
            { "data": "Driver.driverId" },
            { "data": "Driver.givenName" },
            { "data": "Driver.nationality" },
            { "data": "Driver.url" }
            
        ]
   
})
})


</script>
</head>
<body>
	<h1>RESULT</h1>
		<table id="table"  class="display" style="width:100%">
		<thead>
			<tr>
				<th>Position</th>
				<th>DRIVER CODE</th>
				<th>DRIVERID</th>
				<th>Given Name</th>
				<th>Nationality</th>
				<th>URL</th>	
			</tr>
		</thead>
 		</table>
   

</body>
</html>

