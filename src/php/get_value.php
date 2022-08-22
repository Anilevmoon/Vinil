  <?php
  if (isset($_POST['ACTION'])) {
    $value = $_POST['email'];

    $db = mysqli_connect("localhost", "root", "", "vanilka");
    $query = "INSERT INTO emeily (email, date) VALUES ('$value', NOW())";
    mysqli_query($db, $query);
  }

  /*  $dk = mysqli_connect("localhost", "root", "", "test" );
    $queryy = "INSERT INTO test1 (date) VALUES (NOW())";
    mysqli_query($dk, $queryy);
  }  */

  ?>
  <!--  $db = mysqli_connect("localhost", "root", "", "test" );
    $query = "INSERT INTO test1 (date) VALUES (NOW())";
    mysqli_query($db, $query);
 -->