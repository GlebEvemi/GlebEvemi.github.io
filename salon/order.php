<?php include 'services.php'?>
<?php
$selected = isset($_POST['selected']) ? $_POST['selected'] : [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order_style.css">
    <title>Order</title>
</head>
<body>

<div class="order-box">
  <h1>Hairdressing salon - Services</h1>
  <h2>Your order</h2>

  <?php if (count($selected) > 0): ?>
    <ul>
      <?php
      $total = 0;
      foreach ($selected as $id) {
        $item = $services[$id];
        echo "<li>{$item['title']}-{$item['price']}€</li>";
        $total += $item['price'];
      }
      ?>
    </ul>
    <p class="total">Total: <?php echo $total; ?>€</p>
    <p>Thanks for your order</p>
  <?php else: ?>
    <p>The order has not been completed</p>
  <?php endif; ?>

  <div class="back">
    <a href="hello.php">Back to services</a>
  </div>
</div>
    
</body>
</html>