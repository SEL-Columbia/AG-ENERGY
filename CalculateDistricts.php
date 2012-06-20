<?php
$input = "16205";
exec('java -jar ./Test.jar ' . $input , $output);
print_r($output);
?>

<html>
<h2>New Generated Energy Maps</h2>
<table border="1">
	<tr>
		<td>Energy Maps for Rabi</td>
<td><a href="https://topol.cartodb.com/tables/district_level_energy/embed_map">kwh per hectare for the season of Rabi</a></td>
	</tr><tr>
		<td>Energy Maps for Kharif</td>
<td><a href="http://tiles.mapbox.com/modilabs/map/India_District_Level_Energy_Use">kwh per hectare for the season of Kharif</a></td>

	</tr><tr>
		<td>Energy Maps for Summer</td>
<td><a href="http://tiles.mapbox.com/modilabs/map/India_District_Level_Energy_Use">kwh per hectare for the season of Summer</a></td>

	</tr>
</table>
</html>
