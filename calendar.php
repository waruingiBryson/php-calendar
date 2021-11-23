<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="calendar.css" />
</head>
<body>
    
</body>
</html>

<?php 

$current_time=date("h:i a");
$get_hour_string =array(0,1,2,3,4,5,6,7,8,9,10,11,12);




echo"<div class='container'>
'<p>Bryson Family Schedule for  ".date ("  D, F, Y  "). $current_time," </p>'

'<table id='event_table'>


<tr> 
    <th class='hr_td'> &nbsp; </th> <th class='table_header'>Bryson</th><th class='table_header'>Ian</th><th class='table_header'>Brian</th> 
</tr> 
<tr class='even_row'> 
<td class='hr_td'>$current_time</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>11.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>12.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>1.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>2.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>3.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>4.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>5.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>6.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>7.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>8.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>9.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>10.00am</td> <td> </td> <td> </td> <td></td>
</tr>	

</table>'

</div>";


?>