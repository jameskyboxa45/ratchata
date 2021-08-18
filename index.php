
<?php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
</script>
</head>
<body onLoad="JavaScript:timedRefresh(1050);">

<h1>Ratchata techapatamanon<h1>

<iframe src = https://thingspeak.com/channels/1458407/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15  style="height:40%;width:35%;"></iframe>
  <br></br>
 <iframe src = https://thingspeak.com/channels/1458407/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15  style="height:40%;width:35%;"></iframe>
<br></br>
  <iframe src = https://thingspeak.com/channels/1458407/maps/channel_show  style="height:45%;width:35%;"></iframe>
<?php

 $humidity = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/1/last.txt');
$temp = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/2/last.txt');

 echo "temp is = ".$temp."<br>";
 echo "humidity is = ".$humidity;
</body>
  </html>

?>
?>
