<?php
session_start();
if (!isset($_SESSION['loginname'])) {
  header('Location: login.php');
  exit();}?>
  <?php require 'inc/head.php'; ?>
  <?php if (!isset($_COOKIE['cookie'])) {
    echo "Please add Cookies";}?>
    <section class="cookies container-fluid">
      <div class="row">
        <table class="table">
          <tr>
            <th>Name</th>
            <th> </th>
            <th>Quantity</th>
          </tr>
          <?php if (isset($_COOKIE['cookie'])): ?>
            <?php foreach ($_COOKIE['cookie'] as $article => $quantity):?>
              <tr>
                <td><h3 class="cookie_name"><?= $article ?></h3></td>
                <td><img src="assets/img/<?= $article ?>.jpg" class="img-responsive" style="height: 100px;"></td>
                <td><?= $quantity ?></td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </table>
      </div>
    </section>
    <?php require 'inc/foot.php'; ?>
