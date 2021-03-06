  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>                                                                                                                            
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Web Graph</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
    <script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
</head>

    </head>

   <body onload="JavaScript:timedRefresh(15000);">
      <h1>62107883 RATCHATA TECHAPATAMANON</h1>
      
      <div class="container">
        <div class="class row">
          <div class="class col-6">
            <canvas id="myChart" width="400" height="200"></canvas>
          </div>
          <div class="class col-6">
            <canvas id="myChart2" width="400" height="200"></canvas>
          </div>
          <div class="class col-6">
            <canvas id="myChart3" width="400" height="200"></canvas>
          </div>
          <div class="class col-6">
            <canvas id="myChart4" width="400" height="200"></canvas>
          </div>
        </div>

        <div class="class row">
          <div class="class col-3">
            <div class="class row">
              <div class="class col-5"><b>Temperature:</b></div>
              <div class="col-1" >
                <span id="lastTemperature"></span>
              </div>
                
              
            </div>

            <div class="class row">
              <div class="class col-5"><b>Humidity:</b></div>
              <div class="col-1" >
                <span id="lastHumidity"></span>
              </div>
                
              
            </div>
            <div class="class row">
              <div class="class col-5"><b>Light:</b></div>
              <div class="col-1" >
                <span id="lastlight"></span>
              </div>
                
              
            </div>
            <div class="class row">
              <div class="class col-5"><b>Light check:</b></div>
              <div class="col-1" >
                <span id="lastlightcheck"></span>
              </div>
                
              
            </div>

            <div class="class row">
              <div class="class col-4"><b>Update</b></div>
              <div class="col-8" >
                <span id="lastUpdate"></span>
              </div>
                
              
            </div>
          </div>
        </div>
      </div>


    </body>
    <script>

function loaddata(){
    let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=50"
       $.getJSON(url).done(function(data){
         console.log(data);
         let feed = data.feeds;
         console.log(feed);
             $("#lastTemperature").text(feed[0].field1 + "c");
             $("#lastHumidity").text(feed[0].field2 + "%")
             $("#lastlight").text(feed[0].field3 );
             $("#lastlightcheck").text(feed[0].field4  );
             $("#lastUpdate").text(feed[0].created_at);
             
             

       })
       .fail(function(error){


       });
  }
      function showChart(data){
        var ctx=document.getElementById('myChart').getContext('2d');
        var myChart=new Chart(ctx,{
            type:'line',
            data:{
              labels:data.xlabel,
              datasets:[{
                  label:data.label,
                  data:data.data
              }]
            }
        });
      }

      function showChart2(data2){
        var ctxy=document.getElementById('myChart2').getContext('2d');
        var myChart=new Chart(ctxy,{
            type:'line',
            data:{
              labels:data2.xlabel,
              datasets:[{
                  label:data2.label,
                  data:data2.data
              }]
            }
        });
      }
      function showChart3(data3){
        var ctxy=document.getElementById('myChart3').getContext('2d');
        var myChart=new Chart(ctxy,{
            type:'line',
            data:{
              labels:data3.xlabel,
              datasets:[{
                  label:data3.label,
                  data:data3.data
              }]
            }
        });
      }
      function showChart4(data4){
        var ctxy=document.getElementById('myChart4').getContext('2d');
        var myChart=new Chart(ctxy,{
            type:'line',
            data:{
              labels:data4.xlabel,
              datasets:[{
                  label:data4.label,
                  data:data4.data
              }]
            }
        });
      }
        
        
      
        $(()=>{
            
            let url="https://api.thingspeak.com/channels/1458407/feeds.json?results=50";
            $.getJSON(url)
              .done(function(data){
                let feed=data.feeds;
                let chan=data.channel;
                console.log(feed);

                

              var plot_data=Object();
              var xlabel=[];
              var temp=[];
              var humi=[];
              var light=[];
              var lightcheck=[];
              
              $.each(feed,(k,v)=>{
                  xlabel.push(v.entry_id);
                  humi.push(v.field2);
                  temp.push(v.field1);
                  light.push(v.field3);
                  lightcheck.push(v.field4)
                  console.log(k,humi);
              });
              
                var data=new Object();
                data.xlabel=xlabel;
                data.data=temp;
                data.label=chan.field1;
                showChart(data);

              
                var data2=new Object();
                data2.xlabel=xlabel;
                data2.data=humi;
                data2.label=chan.field2;
                showChart2(data2);

                var data3=new Object();
                data3.xlabel=xlabel;
                data3.data=light;
                data3.label=chan.field3;
                showChart3(data3);

                var data4=new Object();
                data4.xlabel=xlabel;
                data4.data=lightcheck;
                data4.label=chan.field4;
                showChart4(data4);


                
                
                
                console.log(humi);
                
              })
              loaddata();  
        });
      
    </script>
  </html>
