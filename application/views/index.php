<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view('include/header'); ?>
  <title></title>
</head>

<body>
<div id="wrapper">

<?php $this->load->view('include/navbar'); ?>

<!-- Page Main Content -->
<div id="page-wrapper">
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Dashboard</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-3">
            <i class="fa fa-comments fa-5x"></i>
          </div>
          <div class="col-xs-9 text-right">
            <div class="huge">26</div>
            <div>New Comments!</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <span class="pull-left">View Details</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </a>
    </div>
  </div>
</div>

<!-- ./Page Main Content -->
</div>
<!-- ./Page -->
</div>
</body>
</html>
