<?php

    if(!isset($_SESSION['admin_id'])) {
        $this->session->set_flashdata('err','Istifadeci Daxil edin!');
        redirect(base_url('user_sign'));
    }



?>
<!DOCTYPE html>
<html lang="en">

<?php $directory = "public/adminPanel/"; ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76"h ref="<?php echo base_url($directory); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost/tezexeber/Dashbook/assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url($directory); ?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url($directory); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url($directory); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url($directory); ?>assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">