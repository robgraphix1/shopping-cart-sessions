<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    'novice_to_ninja/shopping-cart-sessions/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
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
    <h1>Your Shopping Cart</h1>
    <?php if(count($_SESSION['cart']) > 0): ?>  
      <table>
        <thead>
          <tr>
            <th>Item Description</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($cart as $item): ?>
            <tr>
              <td><?php htmlout($item['desc']); ?></td>
              <td><?php echo number_format($item['price'], 2); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>+
            <td>Total:</td>
            <td><?php echo number_format($total, 2); ?></td>
          </tr>
        </tfoot>
      </table>
    <?php else: ?>
    <p>You're cart is empty<p>
    <?php endif; ?>
    <form>
      <p><a href="?">Continue Shopping</a> 
        <?php if(count($_SESSION['cart']) > 0): ?>
          or
          <input type="submit" name="action" value="Empty cart">
        <?php endif; ?>
      <p>
    </form>

    </body> 
  </html> 

 