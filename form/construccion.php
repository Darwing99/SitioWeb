
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="La cafetería presenta uno de los mayores servicios a nivel departamental en Santa Bárbara, a la mano de emprendedores que han dado de lo mejor en ella.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Media/img/Logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../Styles/css/mdb.min.css" >

    <style type="text/css">
    html,
    body,
    .view {
      height: 100%;
    }

    @media (max-width: 559px) {

      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 700px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 600px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
</style>




    <link rel="stylesheet" href="../Styles/fuente.css">
    <script src="../Scripts/jquery.min.js"></script>

    <title>En Construcción</title>
</head>
<body >
 
    <header>
    <?php include('header.php'); ?>       
    </header>

    <div class="view">

    <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline="" autoplay="" muted="" loop="">
      <source src="https://mdbootstrap.com/img/video/Lines-min.mp4" type="video/mp4">
    </video>

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">

        <h1 class="display-4 mb-4">
          <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¡Próximamente!</font></font></strong>
        </h1>

        <!-- Time Counter -->
        <p id="time-counter" class="border-light my-4">29d 23h 59m 36s </p>


        <h4 class="mb-4">
          <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estamos trabajando duro para terminar el desarrollo de este sitio. </font></font></strong>
        </h4>

        <h4 class="mb-4 d-none d-md-block">
          <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></strong>
        </h4>

        <a target="_blank" href="https://www.facebook.com/628851103865100/" class="btn btn-outline-white btn-lg waves-effect waves-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visitanos en Facebook
          </font></font><i class="fab fa-facebook-f ml-2"></i>
        </a>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
   
  
    <div>
      <?php include('footer.php');?>
    </div> 
    
   
  
  <div class="hiddendiv common"></div>
  <!-- Initializations -->
  
      <!-- Time Counter -->

  

    </body>
    <script type="text/javascript">
    // Set the date we're counting down to
    var countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 30);

    // Update the count down every 1 second
    var x = setInterval(function () {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("time-counter").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("time-counter").innerHTML = "EXPIRED";
      }
    }, 1000);

  </script>
</html>
