<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['admin_photo'])) ? '../images/' . $admin['admin_photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['admin_name']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li><a href="../home/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      
      <?php
      if ($admin['customers_view'] || $admin['renewal_view']) { ?>
        <li class="header">MANAGE</li>
        <?php
        if ($admin['renewal_view']) { ?>
          <li><a href="../renewal/"><i class="fa fa-refresh"></i> <span>Renewal</span></a></li>
        <?php } ?>
        <?php
        if ($admin['customers_view']) { ?>
          <li><a href="../customers/"><i class="fa fa-cubes"></i> <span>Customers</span></a></li>
        <?php } ?>
        
      <?php } ?>
      <?php
      if ($admin['admin_view']) { ?>
        <li class="header">LOGIN'S</li>
        <?php
        if ($admin['admin_view']) { ?>
          <li><a href="../admin/"><i class="fa fa-grav"></i> <span>Admin</span></a></li>
        <?php } ?>
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>