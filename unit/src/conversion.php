<?php

// @author Sahil Mahajan

namespace Drupal\unit;

class Conversion  {
	
//Length conversion


public  function convertlength($from, $val, $to)
{
	
	
	
	/*   print_r('value');
	print_r($val);
	print_r('from');
	print_r($from);
	print_r('to');
	print_r($to);      **/
		
	
	
switch ($from)
{
	
	
case 1:
$fromu="Centimeter";$cm=1;$me=0.01;$km=0.00001;$ft=0.3280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;break;
case 2:
$fromu="Meter";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;break;
case 3:
$fromu="Kilometer";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;break;
case 4:
$fromu="Feet";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;break;
case 5:
$fromu="Inches";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;break;
case 6:
$fromu="Miles";$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;break;
case 7:
$fromu="Yards";$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;break;
}


switch ($to)
{
	
case "Centimeter":

return  ($val*$cm);
break;

case "Meter":
return  ($val*$me);
break;
case "Kilometer":
return  ($val*$km);
break;
case "Feet":
return  ($val*$ft);
break;
case "Inches":
return  ($val*$in);
break;
case "Miles":
return  ($val*$mi);
break;
case "Yards":
return  ($val*$ya);
break;


}


}

//weight conversion

public function convertweight($frome, $value, $too)
{
	switch ($frome)
{
	
	
case 8:
$fromu="mg";$mg=1;$g=0.001;$kg=0.000001;$tooo=0.000000001;$gr=0.015432358;$ou=0.000035273966;$po=0.000002204623;$st=0.000000157473;break;
case 9:
$fromu="g";$mg=1000;$g=1;$kg=0.001;$tooo=0.000001;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
case 10:
$fromu="kg";$mg=1000000;$g=1000;$kg=1;$tooo=0.001;$gr=15432.358;$ou=35.273966;$po=2.204623;$st=0.157473;break;
case 11:
$fromu="Tonne";$mg=1000000000;$g=1000000;$kg=1000;$tooo=1;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
case 12:
$fromu="Grains";$mg=64.891;$g=0.064891;$kg=0.000064891;$tooo=0.000000064891;$gr=1;$ou=0.002285714;$po=0.000142857;$st=0.0000102041;break;
case 13:
$fromu="Ounces";$mg=28349.52;$g=28.34952;$kg=0.02834952;$tooo=0.00002834952;$gr=437.5;$ou=1;$po=0.0625;$st=0.004464286;break;
case 14:
$fromu="Pounds";$mg=453592.37;$g=453.59237;$kg=0.45359237;$tooo=0.00045359237;$gr=7000;$ou=16;$po=1;$st=0.071428571;break;

}


switch ($too)

{
	
case "Milligram":

return  ($value*$mg);
break;

case "Gram":
return  ($value*$g);
break;
case "Kilogram":
return  ($value*$kg);
break;
case "Tonnes":
return  ($value*$tooo);
break;
case "Grains":
return  ($value*$gr);
break;
case "Ounces":
return  ($value*$ou);
break;
case "Pounds":
return  ($value*$po);
break;



}
	
	
}

}
?>