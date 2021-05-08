<?php
  //Calling the api
  $gamemodes = addslashes(file_get_contents("https://apix.facepunch.com/api/sbox/menu/index"));
  $maps = addslashes(file_get_contents("http://apix.facepunch.com/api/sbox/asset/find?type=map"));

  //Parsing values into javascript tables so we can start working with javascript from now
  echo "
  <script>
  var gamemodes = JSON.parse('$gamemodes');
  var maps = JSON.parse('$maps');
  </script>
  ";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link href="assets/style.css" rel="stylesheet" />

    <!-- Goggle Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Varela Round"
    />
    <link rel="icon" type="image/png" href="assets/images/sbox.png" />

    <title>SBOX API</title>
  </head>
  <body class="d-flex flex-column">
    <!-- Top navigation -->
    <header>
      <!-- Logo -->
      <a href="https://wiki.facepunch.com/sbox/Backend_API" target="_blank"
        ><img id="logo" src="assets/images/sbox.png"
      /></a>
      <a href=""></a>
      <div id="version-block">
        <p id="version">VERSION 1.0</p>
      </div>
    </header>
    <main class="container-fluid flex-fill">
      <div class="card mx-auto align-middle top-card">
        <div class="row">
          <ul class="nav nav-pills mx-auto tabs">
            <li class="nav-item">
              <a class="nav-link button-link" id="gamemodes-category" onclick="select('gamemodes')">Gamemodes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link button-link" id="maps-category" onclick="select('maps')">maps</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="card mx-auto align-middle middle-card">
        <div class="row" id="gamemodes-container" style="display: none;">

        </div>
        <div class="row" id="maps-container" style="display: none;">
        
        </div>
      </div>
    </main>
    <footer>

      <p>By <a href="https://forum.facepunch.com/u/sharko" target="_blank">Sharko</a>. Open source project, download it on <a href="https://github.com/sharko99/sbox-api-template" target="_blank">github</a>.</p>

    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="assets/script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>
