<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email == false && $password == false){
  header('Location: login.php');
}else{
  $sql = "SELECT * FROM usertable WHERE email = '$email'";
  $run_Sql = mysqli_query($con, $sql);
  if($run_Sql){
    $fetch_info = mysqli_fetch_assoc($run_Sql);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProSkin - Inicio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
    integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./include/navbar.css">
</head>
<body style='background-color: #f9f3f3;'>
    <?php
        require_once("./include/navbar.php");
        getNavbar($fetch_info['name']);
    ?>
    <main role="main" class="container">
      <div class="container">
        <h1>Eventos de hoy</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Cliente</th>
              <th scope="col">Tratamiento</th>
              <th scope="col">Hora</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Sara F.</td>
              <td>Masaje relajador</td>
              <td>12:30-1:30</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Claudia X</td>
              <td>Lorem ipsum dolor sit amet </td>
              <td>3:00-4:00</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Nombre Apellido</td>
              <td>Tratamiento de ejemplo</td>
              <td>Duarcion del tratamiento</td>
            </tr>
          </tbody>
        </table>
        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto enim fugiat repudiandae incidunt, optio dicta et dolorem quos. Perferendis dolorem facere quae id veritatis alias est illum non, sequi saepe.</p>
        <img src="./img/bg.webp" class="img-fluid" alt="Responsive image">
      </div>
    </main>
</body>
</html>