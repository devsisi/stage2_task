<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!DOCTYPE html>
<html>
  <head>
    <title>Ferris.ng</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <!--I created the internal stylesheet because the attributes
    for the body element weren't working in the external stylesheet-->
    <style>
      body{
          background: url("img/ferris pic.jpg") fixed center;
          background-size: cover;
          background-repeat: no-repeat;
          margin-top: 35px;
          background-color: #ffffff;
          opacity: 0.8;
          left: 0;
          right: 0;
          
         
      }
    </style>
</head>
<body>
    
      

    <!-- This brand name logo -->

        <div>
                <span class="font-prop1">fer</span>
                <span class="font-prop2">ris</span>
                 <span class="font-prop3">.</span> 
                 <span class="font-prop4">ng</span>
        </div>
       
      
        <!-- This belongs to the TAKE ACTION word -->
        <div class="big-font">
            <h1><b>TAKE</b></h1>
            <h1>ACTION</h1>
        </div>
    
        <!-- This is for the time and the text underneath it -->
        <div>
                

        <!--Prints the time -->
                <?php

                echo "<p  style = 'color : #E85656' id = small-font>" .date('h:i:sA'). "</p>"

                ?>
                <p class="p-font">Your time starts now...</p>
                
                 </div>
                 
       
</body>


</html>