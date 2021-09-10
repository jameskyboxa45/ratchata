
  

 <h1>Ratchata techapatamanon<h1>

<iframe src = https://thingspeak.com/channels/1458407/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=50  style="height:40%;width:35%;"></iframe>
  <br></br>
 <iframe src = https://thingspeak.com/channels/1458407/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=50  style="height:40%;width:35%;"></iframe>
<br></br>
<iframe src = https://thingspeak.com/channels/1458407/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=50  style="height:40%;width:35%;"></iframe>
  <br></br>
 <iframe src = https://thingspeak.com/channels/1458407/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=50  style="height:40%;width:35%;"></iframe>
<br></br>
  <iframe src = https://thingspeak.com/channels/1458407/maps/channel_show  style="height:45%;width:35%;"></iframe>
<html>
<head>
<script type="text/JavaScript">

function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}

</script>
</head>
<body onload="JavaScript:timedRefresh(15000);">

<?php

 $humidity = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/1/last.txt');
$temp = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/2/last.txt');
  $light = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/3/last.txt');
$lightcheck = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/4/last.txt');


 echo "<br> temp is = ".$temp."<br>";
 echo "humidity is = ".$humidity;
  echo "<br> light is = ".$light."<br>";
 if ($lightcheck == 1) {

  echo " lightcheck is = สว่าง <br>";


}
if ($lightcheck == 0) {

echo " lightcheck is = มืด <br>";

}
 
?>

</body>
</html>
