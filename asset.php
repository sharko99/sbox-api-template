<?php

  $id = $_GET["a"];

  //Calling the api
  $asset = addslashes(file_get_contents("https://apix.facepunch.com/api/sbox/asset/get?id=$id"));

  //Parsing values into javascript tables so we can start working with javascript from now
  echo "
  <script>
  var asset = JSON.parse('$asset');
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
    <link href="assets/page_asset/style.css" rel="stylesheet" />

    <!-- Goggle Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Varela Round"
    />
    
    <link rel="icon" type="image/png" href="assets/images/sbox.png" />

    <title>SBOX API ASSET</title>
  </head>
  <body class="d-flex flex-column">
    <div id="background"></div>
    <!-- Top navigation -->
    <header>
      <!-- Logo -->
      <a href="https://wiki.facepunch.com/sbox/Backend_API" target="_blank"
        ><img id="logo" src="assets/images/sbox.png"
      /></a>
      <a href="index"
      class="no-underline"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          width="32"
          height="32"
          fill="white"
          class="bi bi-arrow-left-square-fill backIcon"
          viewBox="0 0 16 16"
        >
          <path
            d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"
          />
        </svg>
      </a>
      <div id="version-block">
        <p id="version">VERSION 1.0</p>
      </div>
    </header>
    <main class="container-fluid flex-fill">
      <div class="card mx-auto align-middle middle-card">
          <div class="col min hover-card">
            <div class="card-body col-sm inline-block">
              <div class="card card-package" style="width: 18rem">
                <img
                  src=""
                  class="card-img-top"
                  alt="..."
                  id="thumbnail"
                />
              </div>
            </div>
            <div class="tags">
              <p id="author" class="tag">Facepunch</p>
              <p id="type" class="tag">Gamemode</p>
            </div>
            <div class="description">
              <p id="description">"A classic pub game where your skill is determined by your blood-alcohol content. "</p>
            </div>
            <p id="date">Last update: 12-12-12</p>
          </div>
          <div class="btn-area">
            <button class="asset-btn disabled" disabled> Open in the game</button>
            <button class="asset-btn" onclick="download()"> Download </button>
          </div>
      </div>
    </main>
    <footer>
      <p>
        By
        <a href="https://forum.facepunch.com/u/sharko" target="_blank">Sharko</a
        >. Open source project, download it on
        <a href="https://github.com/sharko99/sbox-api-template" target="_blank">github</a>.
      </p>
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
    <script src="assets/page_asset/script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>
