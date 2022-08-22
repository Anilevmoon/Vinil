<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./src/css/custom.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>VanilVinil</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top navColor ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="src/img/logo.png" style="width: 40px;" alt="Main">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto ">
          <li class="nav-item naVText">
            <a class="nav-link" href="/index.php">Main</a>
          </li>
          <li class="nav-item naVText">
            <a class="nav-link" href="/catalog.php">Catalog</a>
          </li>
          <li class="nav-item naVText">
            <a class="nav-link" href="#">Contacts</a>
          </li>
          <li class="nav-item dropdown naVText">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Contacts</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">tg:#######</a></li>
              <li><a class="dropdown-item" href="#">+38 099 927 68 82</a></li>
              <li><a class="dropdown-item" href="#">+38 098 398 89 43</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" id="seARch">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="catalog">
    <p class="h1 whit" style="font-family: cursive; text-align:center">Who we are to clasify music...</p>
    <div class="justify-content-center" style="text-align:center ;">
      <img src="./src/img/notky.png" class="" style="width:100%">
    </div>

    <div class="row justify-content-center whit">

      <?php
      $link = mysqli_connect("localhost", "root", "", "vanilka");
      $resp = "SELECT * FROM `catalog` ";
      $sql = mysqli_query($link, $resp);
      $i = 0;
      $t = 0;
      while ($result = mysqli_fetch_array($sql)) {
        if ($i == 4) {
          echo '<div class="w-100"></div>';
          $i = 0;
        }

        echo '
                  <div class="col-sm-2 plates m-0">
                      <h3>TOP 1</h3>
                      <img src="' . $result["foto"] . '" alt="Los Angeles" class="d-block" style="width:100%">
                      <div class="card bg-trans">
                        <div class="card-header">
                          <a class="collapsed btn btnG whit" data-bs-toggle="collapse" href="#collapse' . $result["id"] . '">
                          ' . $result["name"] . '
                            </a>
                        </div>
                          <div id="collapse' . $result["id"] . '" class="collapse" data-bs-parent="#accordion">
                          <div class="card-body">
                          ' . $result["descrip"] . '    
                        </div>
                        </div>
                    </div>
                  
                      <hr>
                     </div> ';
        $i++;
      }
      ?>
      <!--  <h3>#3</h3>        
              <img src="./src/img/top2.jpg" alt="Los Angeles" class="d-block" style="width:100%">
              <div class="card bg-trans">
                <div class="card-header">
                  <a class="collapsed btn whit" data-bs-toggle="collapse" href="#collapse4">
                  Остання свинина - "Правда"
                   </a>
                </div>
                  <div id="collapse4" class="collapse" data-bs-parent="#accordion">
                  <div class="card-body">
                  Пісня написана 2014 році, символізує сущність президента рф.    
                </div>
                </div>
              </div>
              <hr>
            </div> -->

    </div>




    <footer class="text-center text-lg-start bg-dtrans mt-5">
      <section class="d-flex pt-2 border-top">

      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>VanilVinil
              </h6>
              <p>
                Our company never sells or buy anything in russia. <br> We don't want to help russia in war against Ukraine!
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Pyrizhky
              </h6>
              <p>
                <a href="#!" class="text-reset">Nothing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Interesting</a>
              </p>
              <p>
                <a href="#!" class="text-reset">There</a>
              </p>
              <p>
                <a href="#!" class="text-reset">At all</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful Phrases
              </h6>
              <p>
                <a href="#!" class="text-reset">Smert</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Occupantan</a>
              </p>
              <p>
                <a href="#!" class="text-reset">*******</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Naviky</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                . Contact
              </h6>
              <p><i class="fas fa-home me-3"></i> UKRAINE, SEVASTOPOL, Yasna 12.</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                gleblevtsun8@gmail.com
              </p>
              <p><i class="fas fa-phone me-3"></i> +38 099 927 68 82</p>
              <p><i class="fas fa-print me-3"></i> +38 098 398 89 43</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4 h1" style="background-color: rgba(0, 0, 0, 0.05);">
        GLORY TO UKRAINE!!!
      </div>
    </footer>
  </div>
</body>

</html>