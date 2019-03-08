
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    
    <title>FACENA</title>
    <script src="jquery-3.3.1.min.js"></script>

    <script src="async.js"> </script>
    
  
       
      
</head>
<body>
    
<div id="left">
    <!-- <video src="video_1.mp4" muted autoplay loop></video> -->
   <!-- <div class="bxslider"> -->

  <div id="canvas" class="canvas"></div>
  
 
    
</div>
<div id="right">

    <div class="w" style=" display: table;">
            <div style=" display: table-cell; vertical-align: middle;">
                <img src="puente.png"  alt="">
                <h2 id="estadodelpuente"></h2>
            </div>

    </div>
    <div class="w">
        <!-- <div id="c_53d09d171dd7800e9b68b9cbc9639c3d" class="alto"></div><script type="text/javascript" src="https://www.clima.com/widget/widget_loader/53d09d171dd7800e9b68b9cbc9639c3d"></script> -->
        <!-- <a class="weatherwidget-io" href="https://forecast7.com/es/n27d47n58d83/corrientes/" data-label_1="CORRIENTES" data-label_2="WEATHER" data-theme="original" >CORRIENTES WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script> -->
<a class="weatherwidget-io" href="https://forecast7.com/es/n27d47n58d83/corrientes/" data-label_1="CORRIENTES" data-label_2="CLIMA" data-theme="original" >CORRIENTES CLIMA</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
    </div>
    
</div>
<div id="abajo">
<div class="alerta">
    <div class="h0" id="liston"></div>

     <h1 id="listonMensaje"></h1>
</div>

</div>

</body>

</html>