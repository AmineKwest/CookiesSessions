<?php
session_start ();
if (empty($_SESSION['loginname'])) {
  header ('location: login.php');
}
?>
<?php require 'inc/head.php'; ?>

<section class="container-fluid">
  <div class="row">
    <h4>Votre panier:</h4></br>
<?php
  if (isset($_GET['id'])) {
    header ('location: cart.php');
    $cookie_id= $_GET['id'];
    $cookie_value = $_GET['id'];
    setcookie($cookie_id, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  }
  if(isset($_COOKIE['36'])) {
    echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
        </figcaption>
      </figure>
      <form name="Formulaire" method="POST" action="">
        <input type="hidden"  name="vider36" required>
        <button class="btn btn-danger" type="submit">Supprimer</button>
      </form>
    </div>';
    if (isset($_POST['vider36'])){
      setcookie($_COOKIE['36'], "", time() - 3600);
    }
  }
  if(isset($_COOKIE['46'])) {
    echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
        </figcaption>
      </figure>
      <form name="Formulaire" method="POST" action="">
        <input type="hidden"  name="vider46" required>
        <button class="btn btn-danger" type="submit">Supprimer</button>
      </form>
    </div>';
    if (isset($_POST['vider46'])){
      setcookie($_COOKIE['46'], "", time() - 3600);
    }
  }
  if(isset($_COOKIE['58'])) {
    echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
        </figcaption>
      </figure>
      <form name="Formulaire" method="POST" action="">
        <input type="hidden"  name="vider58" required>
        <button class="btn btn-danger" type="submit">Supprimer</button>
      </form>
    </div>';
    if (isset($_POST['vider58'])){
      setcookie($_COOKIE['58'], "", time() - 3600);
    };
  }
  if(isset($_COOKIE['32'])) {
    echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M\'s&copy; cookies</h3>
          <p>Cooked by Penny !</p>
        </figcaption>
      </figure>
      <form name="Formulaire" method="POST" action="">
        <input type="hidden"  name="vider32" required>
        <button class="btn btn-danger" type="submit">Supprimer</button>
      </form>
      </div>';
      if (isset($_POST['vider32'])){
        setcookie($_COOKIE['32'], "", time() - 3600);
      }
  }
?>

  </div>
  <a href="deconnexion.php" onClick="">Se déconnecter</a>
</section>

<?php require 'inc/foot.php'; ?>
