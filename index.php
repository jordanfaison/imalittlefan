<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }



    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }

    footer {
  position: relative;
  margin-top: -180px; /* negative value of footer height */
  height: 180px;
  clear: both;
}
  </style>
</head>


<div class="container-fluid text-center">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8">
      <h1>Welcome</h1>
      <p>This is a poopy website that Jordan wants to control his overpriced fan.</p>
      <hr>
      <h3>Commands</h3>
      <input type="button" value="data.txt" style="display:none" onclick="loadFile()" />
            <div class="row" >
              <div class="col-sm-6">
              <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey"  id="power" style="z-index:0">
        		<span class="glyphicon glyphicon-off"></span>
        	  </a>
              <br>
              <br>
              <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" id="incrementSpeed" style="z-index:0" >O</a>
              <br>
              <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey"style="z-index:0" ><span class="glyphicon"></span></a>
              <br>
              <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" id="decrementSpeed" style="z-index:0" >o</a>
              <br>
              <input type="text" id="powerText">
              <br>
              <input type="number" id="speedText" onkeydown="return false" min=1 max=10>
              </div>

              <div class="col-sm-6" text-alignment="center">
              	<a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" id="swivel" style="z-index:0">
                	<span class="glyphicon glyphicon-triangle-left"></span><span class="glyphicon glyphicon-triangle-right">
                </a>
                <br>
                <br>
                <a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" id="incrementTimer" style="z-index:0">
        			<span class="glyphicon glyphicon-plus"></span>
        		</a>
              <br>
              	<a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" style="z-index:0">
        			<span class="glyphicon glyphicon-time"></span>
        		</a>
              <br>
              	<a class="w3-button w3-large w3-circle w3-xlarge w3-ripple w3-grey" id="decrementTimer" style="z-index:0">
        			<span class="glyphicon glyphicon-minus"></span>
        		</a>
            <br>
            <input type="text" id="swivelText">
            <br>
            <input type="number" id="timerText" onkeydown="return false" min=0 max=12>
              </div>
            </div>
            <p>
              <textarea id="values" style="display:none;"></textarea>
    </div>
    <div class="col-sm-2 sidenav">
    </div>

    <script>
    var reader = new XMLHttpRequest() || new ActiveXObject('MSXML2.XMLHTTP');
    var power;
    var swivel;
    var speed;
    var timer;

    $(document).ready(function($) {
        $(".w3-button").click(function(ID) {
          ID = $(this).attr("id");
            if(ID=="power")
            {
              power = !power;
              document.getElementById("powerText").value = power;
              document.getElementById("values").value = power+","+swivel+","+speed+","+timer;
              write();
            }
            else if(ID=="swivel")
            {
              swivel = !swivel;
              document.getElementById("swivelText").value = swivel;
              document.getElementById("values").value = power+","+swivel+","+speed+","+timer;
              write();
            }
            else if(ID=="incrementSpeed"&& speed !=10)
            {
              speed++;
              document.getElementById("speedText").value = speed;
              document.getElementById("values").value = power+","+swivel+","+speed+","+timer;
              write();
            }
            else if(ID=="decrementSpeed" && speed !=1)
            {
              speed--;
              document.getElementById("speedText").value = speed;
              document.getElementById("values").value = power+","+swivel+","+speed+","+timer;
              write();
            }
            else if(ID=="incrementTimer" && timer !=12)
            {
              timer++;
              document.getElementById("timerText").value = timer;
              document.getElementById("values").value = power+","+swivel+","+speed+","+timer;
              write();
            }
            else if(ID=="decrementTimer" && timer !=0)
            {
              timer--;
              document.getElementById("timerText").value = timer;
              document.getElementById("values").value = power+","+swivel+","+speed+","+timer;
              write();
            }
        });
    });
      function loadFile() {
          reader.open('get', 'data.txt', true);
          reader.onreadystatechange = displayContents;
          reader.send(null);
      }

      function displayContents() {
          if(reader.readyState==4) {
              var values = reader.responseText.split(',');
              power = Boolean(values[0]);
              swivel = Boolean(values[1]);
              speed = values[2];
              timer = values[3];
              document.getElementById("powerText").value = power;
              document.getElementById("swivelText").value = swivel;
              document.getElementById("speedText").value = speed;
              document.getElementById("timerText").value = timer;
          }
      }
      loadFile();
      displayContents();
      function write(){
        var partID = power+","+swivel+","+speed+","+timer;
       $.ajax({
         type: "GET",
     		 url: "write.php",
     		 data: {id: partID},
         success: function(data){

       }
       }); // END Ajax
     };
    </script>

</div>
</body>
</html>
