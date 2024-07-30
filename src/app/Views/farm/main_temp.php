<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/fonts.css">
    <link rel="stylesheet" href="static/css/style.css">
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-bell">
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
        <?php $this->renderSection('header'); ?>
        <?php $this->renderSection('content'); ?>
        <?php $this->renderSection('footer'); ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="static/js/core.min.js"></script>
    <script src="static/js/script.js"></script>
    <?php $this->renderSection('script'); ?>
</html>