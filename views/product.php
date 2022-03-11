<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP MVC</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>My Product</h1>
    <ul>
        <li><?php echo $product->getTitle(); ?></li>
        <li><?php echo $product->getDescription(); ?></li>
        <li><?php echo $product->getPrice(); ?></li>
        <li><?php echo $product->getSku(); ?></li>
        <li><?php echo $product->getImage(); ?></li>
    </ul>
    <a href="<?php echo $routes->get('homepage')->getPath(); ?>"></a>
</body>
</html>