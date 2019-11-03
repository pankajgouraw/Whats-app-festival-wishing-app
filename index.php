
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <!-- <meta charset="UTF-8"> -->
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2  class="duration name animated infinite swing">
        <?php
          if(isset($_GET['n'])){
            echo $_GET['n'];
          }else{
            echo 'Your Name';
          }
        ?>
        <!-- &#x261F; -->
      </h2>
      <p class="showTime">
        wish you happy holi
         before<br> <span id="date"></span> days <span id="hour"></span> hours
        <span id="minute"></span> minutes <span id="second"></span> seconds...
      </p>
      <img src="img/happy-holi.png" class="duration animated infinite swing">
      <p class="name pad duration animated infinite tada">
        <?php
          if(isset($_GET['n'])){
            echo $_GET['n'];
          }else{
            echo 'Your Name';
          }
        ?>
      </p>
      <p class="bottom-name">
        प्यार क रंग से भरो पिचकारी,
        स्नेह क रंग से रंग दो दुनिया सारी,
        ये रंग ना जाने ना कोई बात ना बोली,
        आपको अड्वान्स मे मुबारक हो हॅपी होली…
      <p>
    </div>
    <form class="" action="profile.php" method="GET">
      <input type="text" name='n' placeholder="अपना नाम लिखे" class="duration animated infinite shake">
      <input type="submit" value="देखे" class="duration animated infinite shake">
    </form>
    <script src="js/main.js"></script>
  </body>
</html>
