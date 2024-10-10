<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zeyn's Pizzeria Confirmation Form">
    <meta name="robots" content="noindex, nofollow">
    <title>Zeyn's Pizzeria Confirmation Form</title>

    <!-- adding google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- adding CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<!-- using php to gather variables from index.html -->
<?php

/* if submit button is pressed, gather variables */
if(isset($_POST['submitButton'])) {
    $pizzaAmount = $_POST['pizzaAmount'];
    $pizzaSize = $_POST['size_of_pizza'];
    $pizzaSauce = $_POST['sauce_of_pizza'];
    $pizzaCrust = $_POST['crust_of_pizza'];

    $topCheese = $_POST['ifCheese'];
    $topPepperoni = $_POST['ifPepperoni'];
    $topHam = $_POST['ifHam'];
    $topPineapple = $_POST['ifPineapple'];
    $topPepper = $_POST['ifPepper'];
    $topAnchovy = $_POST['ifAnchovy'];
}

?>

<header>
    <!-- logo to return to index.html / homepage -->
    <div>
        <a href="index.html"><img src = "./img/logo.jpeg" alt="Zeyn's Pizzeria Logo"></a>
        <h1>Zeyn's Pizzeria Order Form</h1>
    </div>
</header>

<main>
    <section>
        <div>
            <h2>Order Confirmation</h2>
            <!-- printing selected options in php and dialog in html -->
            <p>You ordered <?php echo $pizzaAmount ?> pizzas.</p>
            <p>You selected <?php echo $pizzaSize ?> as your size.</p>
            <p>You selected <?php echo $pizzaSauce ?> as your sauce.</p>
            <p>You selected <?php echo $pizzaCrust ?> as your crust.</p>
        </div>
    </section>

    <section>
        <div>
            <h3>Toppings Selected:</h3>
            <!-- unordered list, as it will only print if the variable is present -->
            <ul>
            <li><?php echo $topCheese ?></li>
            <li><?php echo $topPepperoni ?></li>
            <li><?php echo $topHam ?></li>
            <li><?php echo $topPineapple ?></li>
            <li><?php echo $topPepper ?></li>
            <li><?php echo $topAnchovy ?></li>
            </ul>       
        </div>
    </section>
</main>
</body>
</html>

