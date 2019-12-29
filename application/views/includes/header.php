<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php if($this->router->fetch_class()=='frontend_controller'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'resources/fullpage/css/fullpage.css'; ?>" />
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo base_url().'resources/css/style.css'; ?>" type="text/css" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
  </head>
  <body>

  