<html>
<head>
<script>
    $(document).ready(function(){
  refreshdata();
});

function refreshdata(){
    $('#data').load('data.php', function(){
       setTimeout(refreshdata, 5000);
    });
}
</script>
</head>
<body>
<div id="data"></div>
</body>
</html>
