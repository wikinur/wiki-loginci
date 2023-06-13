<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />

    <!-- Title Page-->
    <title><?=$title;?></title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url('assets/');?>css/font-face.css" rel="stylesheet" media="all" />

    <!-- Bootstrap CSS-->
    <link
      href="<?=base_url('assets/');?>vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="<?=base_url('assets/');?>vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="<?=base_url('assets/');?>css/theme.css" rel="stylesheet" media="all" />
  </head>

  <body class="animsition">

    <?=$this->renderSection('content');?>

    <!-- Jquery JS-->
    <script src="<?=base_url('assets/');?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url('assets/');?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url('assets/');?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS -->
    <script src="<?=base_url('assets/');?>vendor/animsition/animsition.min.js"></script>

    <!-- Main JS-->
    <script src="<?=base_url('assets/');?>js/main.js"></script>
  </body>
</html>