<?php include 'services.php'?>
<h1>Salon</h1>
<hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salon</title>
</head>
<body>

<form id="orderForm" method="POST" action="order.php">
  <div class="services-container">
    <?php foreach ($services as $service): ?>
      <div class="card">
        <img src="img/<?php echo $service['img']; ?>" alt="<?php echo $service['title']; ?>">
        <div class="card-body">
          <h3><?php echo $service['title']; ?></h3>
          <p><?php echo $service['desc']; ?></p>
          <p class="price">Price: <?php echo $service['price']; ?>€</p>
        </div>
        <button type="button" class="order-btn" onclick="toggleSelect(this, <?php echo $service['id']; ?>)">Order</button>
        <input type="checkbox" name="selected[]" value="<?php echo $service['id']; ?>" style="display:none;">
      </div>
    <?php endforeach; ?>
  </div>

  <div class="checkout">
    <button type="submit">Checkout</button>
  </div>
</form>


<script>
  function toggleSelect(button) {
    const card = button.closest('.card');
    const checkbox = card.querySelector('input[type="checkbox"]');
    const isSelected = button.classList.contains('selected-btn');

    if (isSelected) {
      button.textContent = 'Order';
      button.classList.remove('selected-btn');
      button.classList.add('order-btn');
      checkbox.checked = false;
    } else {
      button.textContent = 'Selected';
      button.classList.remove('order-btn');
      button.classList.add('selected-btn');
      checkbox.checked = true;
    }
  }
</script>

    
</body>
</html>


