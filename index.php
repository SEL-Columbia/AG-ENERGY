<html>
<head>

<link media="screen" rel="stylesheet" href="colorbox.css" />

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="jquery.colorbox-min.js" type="text/javascript"></script>
 
<script type="text/javascript">
    $(function()
    {
        $('#link_content').colorbox({opacity:0.3});
    });
</script>

<style type="text/css">
body
{
font-size:75%;
font-family:verdana,arial,'sans serif';
background-color:#FFFFF0;
color:#000080;
margin:10px;
}

h1 {font-size:200%;}
h2 {font-size:140%;}
h3 {font-size:110%;}

th {background-color:#ADD8E6;}

ul {list-style:circle;}
ol {list-style:upper-roman;}

a:link {color:#000080;}
a:hover {color:red;}
</style>
</head>

<body>

<h1>Energy Maps of India</h1>

<p>This map shows the energy uses for agriculture practices</p>

<h2>View Energy Maps for Different Seasons</h2>

<ul><li><a href="maps/rabi">kwh per hectare for the season of Rabi</a></td>
	</li><li>
<a href="maps/kharif">kwh per hectare for the season of Kharif</a></td>

	</li><li>
<td><a href="maps/summer">kwh per hectare for the season of Summer</a></td>

	</li></ul>


<h2>Descrition of the project Calculations</h2>

<h3>Project Background</h3>
<p>With the growth in population, there has been constant increase in demand for food and energy. Availability of energy sources helped farmers to pump out ground water to meet the growing demands for food but years of pumping has resulted in drop in the average depth of ground water. This resulted in increase in demand in energy and stress in agricultural output. This project looks into calculations of energy for each district based on information from census data in India. The methodology is described in the next section.</p>

<h3>The Energy Calculations are done in  the following way</h3>
<p><ul>
<li>Cumulative seasonal deficit (in meters) for the district for all the crops  =  Sum (median deficit of the crop (m) * crop water requirements for the crop).
</li><li>
Dividing by Gross cropped area (GCA) provides with the seasonal
deficit (in meters) per hectare which is pumped out of
groundwater.
</li><li>
The energy required for pumping can be computed by measuring the
potential energy (mass*gravity*height) of the seasonal deficit of
ground water.
</li><li>
Converting the calculations into KWH/hectare to pump out the water. 
</li><li>
Energy Requirements in KWH/hectare = Seasonal deficit (m) per
hectare * average ground water depth * 10(gravity) * 10000/3600.
</li></ul></p>

<h3>Additional plugin's to Maps</h3>
<p><ul>
<li>Different Spatial and Temporal Remote Sensing products are Integrated to find regions with high energy Use. <a href="./RemoteSensingAnalysis">Remote Sensing Analysis</a> shows how these products can be used.
</li>
<li>Scrolling on the district shows the divide based on lighting source in houses, in urban and rural setup.
</li>
<li>
One can edit the district details and generate new calculations and optimizations in the following way.
</li></ul></p>

<br><br><br>
<table border="1">

<tr><td>
Edit Input Agriculture Parameters</td><td>
District Wise Calculation</td><td>
New Generated Energy Maps</td></tr>

<tr><td>
<p><ul><li>
	<a href="./CroppedArea">Cropped Area details</a>  	</li><li>
<a href="./groundwaterdepth">Ground Water Depth	</a>
</li><li>
<a href="./mediandeficit">Median Deficit of Crops</a>
</li><li>
<a href="./SeasonalWaterTable">Seasonal Water Table</a>
</li></ul></p>


</td><td>

	<p><ul><li>
		<a href="./CalculateDistricts">Run the Energy Model and Publish Maps</a>
	</li><li>
		<a href="http://www.w3schools.com">Run Spatial 			Crop Optimization</a>
	</li><li>
<a href="http://www.w3schools.com">Calculate Wind Potential</a>
</li><li><a href="http://www.w3schools.com">Calculate Solar Potential</a></li></ul>

	</td><td>

	<p><ul><li>
		<a href="https://topol.cartodb.com/tables/district_level_energy/embed_map">kwh per hectare for the season of Rabi</a>
		</li><li><a href="http://tiles.mapbox.com/modilabs/map/India_District_Level_Energy_Use">kwh per hectare for the season of Kharif</a>
</li><li>
<a href="http://tiles.mapbox.com/modilabs/map/India_District_Level_Energy_Use">kwh per hectare for the season of Summer</a>

	</li></ul>

</td></tr>

</table>
</body>
</html>