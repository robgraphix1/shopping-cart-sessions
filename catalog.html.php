<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    'novice_to_ninja/shopping-cart-sessions/includes/magicquotes.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product Catalog</title>
    <style>
    table {
      border-collapse: collapse;
    }
    td, th {
      border: 1px solid black;
    }
    </style>
  </head>
  <body>
    <p>Your shopping cart contains <?php 
      echo count($_SESSION['cart']); ?> items.</p>
      <table border="1">
      <thead>
        <tr>
          <th>Item Description</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
      </table>
      <?php foreach($items as $item): ?>

 