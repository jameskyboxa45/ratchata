
 <h1>Ratchata techapatamanon<h1>

<iframe src = https://thingspeak.com/channels/1458407/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15  style="height:40%;width:35%;"></iframe>
  <br></br>
 <iframe src = https://thingspeak.com/channels/1458407/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15  style="height:40%;width:35%;"></iframe>
<br></br>
  <iframe src = https://thingspeak.com/channels/1458407/maps/channel_show  style="height:45%;width:35%;"></iframe>


  <html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('index.php').fadeIn("slow");
}, 2000); // refresh every 10000 milliseconds
</script>
<body>
<div id="load_tweets"> 
 <?php

 $humidity = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/1/last.txt');
$temp = file_get_contents('https://api.thingspeak.com/channels/1458407/fields/2/last.txt');

 echo "<br> temp is = ".$temp."<br>";
 echo "humidity is = ".$humidity;
 
?>
 </div>
</body>
</html>
