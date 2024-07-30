<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <?php $this->renderSection('pageCss'); ?>
    
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
      .content-wrapper{min-height:calc(100vh - 130px)}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php $this->renderSection('leftsidebar'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php $this->renderSection('navbar'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php $this->renderSection('breadcumb'); ?>
            <?php $this->renderSection('content'); ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php $this->renderSection('footer'); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script>
      function logout() {
        window.location.href = "<?php echo site_url('admin/logout'); ?>";
      }
    </script>
    <script>
      $(document).ready(function(){
        $("#delete-primary").click(function(){
            alert("Bạn đã click vào div");
        });
    });
    </script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <?php $this->renderSection('script'); ?>
  </body>
</html>