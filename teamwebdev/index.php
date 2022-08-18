<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>📰DILLI DARBAR TIMES</title>
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap');
</style>
   <h1 class="mx-auto d-block" align="center" style="font-family: 'Black Ops One'">  <img  src="https://cdn.discordapp.com/attachments/1009475935319371816/1009709832837808128/black_on_trans.png" alt="logo" width="150" height="150">DILLI DARBAR TIMES</h1>      
<nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark mb-3" >
  <ul class="navbar-nav mx-auto">
    <li class="nav-item active mr-3">
      <a class="nav-link" href="index.php"><h4>Home🏠</h4></a>
    </li>
    <li class="nav-item mr-3">
      <a class="nav-link" href="sports.php"><h4> Sports🏏</h4></a>
    </li>
    <li class="nav-item mr-3">
      <a class="nav-link" href="bollywood.php"><h4> Bollywood🎞</h4></a>
    </li>
    <li class="nav-item mr-3">
      <a class="nav-link" href="daffairs.php"><h4> Daily_Affairs✍🏻</h4></a>
    </li>
    <li class="nav-item mr-3">
      <a class="nav-link" href="international.php"><h4> International🌎</h4></a>
    </li>
    <li class="nav-item mr-3">
      <a class="nav-link" href="finance.php"><h4> Finanace💰</h4></a>
    </li>
  </ul>
  
  <h1><div id="google_element"></div></h1>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate">
  </script>
  <script>
    function loadGoogleTranslate() {
      new google.translate.TranslateElement(
        "google_element"
      );
    }
  </script>
</nav>
<?php
$response = json_decode(file_get_contents('https://saurav.tech/NewsAPI/top-headlines/category/technology/in.json'), true);

for ($i=0; $i < 20; $i++) { 
    ?>
    
    <div class="card card-body bg-dark text-light" style="height:650px; width:1100px; margin-left:120px; padding-top:25px; padding-bottom:25px;">
    <img src="<?= $response['articles'][$i]['urlToImage'] ?>" class="rounded" style="height:400px; width:1055px;" alt=""><br>
    <h5>
    
    
    <?php
    echo ('NEWS:📢 '.$response['articles'][$i]['title']."<br>");
    echo ('Press Name: <span class="badge badge-pill badge-danger">'.$response['articles'][$i]['source']['name'].'</span><br>');
    echo (''.$response['articles'][$i]['publishedAt']."<br>");
    
    echo ('Description: '.$response['articles'][$i]['description']."<br>");
    ?>
    <a href="<?= $response['articles'][$i]['url'] ?>">Click Here for Detailed news</a><br>
    <?php
    echo ('<span class="badge badge-primary">✒Author: @'.$response['articles'][$i]['author'].'</span><br>');
    ?>
    <div class="rw-ui-container"></div>
    </h5>
    </div><br><br>
    <?php
}

?>
</body>
<script type="text/javascript">(function(d, t, e, m){

    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "469711",
            uid: "ae493b292d689c8f1ec44148201e885a",
            options: { "style": "oxygen" } 
        });
        RW.render();
    };
        
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>
</html>