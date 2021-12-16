<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p >Welcome to student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <div class="sports">
        <p>Favourite Players</p>
      </div>
      <div class="images">
          <div class="image"> <a href="https://en.wikipedia.org/wiki/Stephen_Curry"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Stephen_Curry_Shooting_%28cropped%29.jpg/330px-Stephen_Curry_Shooting_%28cropped%29.jpg" alt="Luka"></a>
          </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Luka_Don%C4%8Di%C4%87"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Luka_Don%C4%8Di%C4%87_2021.jpg/800px-Luka_Don%C4%8Di%C4%87_2021.jpg" alt="Luka"></a>
            </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Randy_Orton"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Randy_Orton_April_2018.jpg" alt="RKO"></a>
            </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Cristiano_Ronaldo"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.98-Xlqa3dmoI-6bqtpd6qAHaD5%26pid%3DApi&f=1" alt="CR7"></a>  
          </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/LeBron_James"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/LeBron_James_crop.jpg/330px-LeBron_James_crop.jpg" alt="Lebron James"></a>  
          </div>
      </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
