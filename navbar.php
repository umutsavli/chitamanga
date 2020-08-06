<html lang="en">
<head>
  <?php include "app/database/connect.php"; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="navbar.css">
  <title>Chita Manga</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="module" src="https://unpkg.com/dark-mode-toggle"></script>
  <script>

  $(function() {
    $(".toggle").on("click", function(){

      if($(".item").hasClass("active")) {
        $(".item").removeClass("active");
      }
        else{
          $(".item").addClass("active");
        }
    })

    });

  </script>
</head>
<body>
    <nav>
      <ul class="menu">
      <li class="logo"><a href="#">Chita</a></li>
      <li class="item"><a href="#">Ana Sayfa</a></li>
      <li class="item"><a href="#">Mangalar</a></li>
      <li class="item"><a href="#">Hakkımızda</a></li>
      <li class="button"><a href="#">Giriş yap</a></li>
      <li class="button secondary"><a href="#">Kayıt ol</a></li>
      <li class="toggle"><span class="bars"></span></li>
      </ul>
    </nav>