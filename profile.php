<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>Wish You Happy Holi</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <meta property="og:title" description="holi mubarak">
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
  
   <a class="share" href="whatsapp://send?text=आपके और आपके परिवार के लिए <?php echo $_GET['n'];?> ने कुछ संदेसा भेजा है जानने के लिए ब्लू लाइन पे क्लिक करे..  &#x261F;  &#x261F; http://www.dosomecode.com/festwish/?n=<?php echo $_GET['n'];?>" data-action="share/whatsapp/share">Share via Whatsapp <img src="img/icon.png"></a>

    <script src="js/main.js"></script>
  </body>
</html>
