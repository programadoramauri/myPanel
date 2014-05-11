<?php echo $this->Html->docType('html5') ?>
<html lang="en">
  <head>
    <?php echo $this->Html->charset('ISO-8859-1'); ?>
    <?php echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0')); ?>
    <?php echo $this->Html->meta('description'); ?>
    <?php echo $this->Html->meta(array('name' => 'author', 'content' => '')); ?>

    <title><?php echo $title_for_layout ?></title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('admin/bootstrap'); ?>

    <!-- Add custom CSS here -->
    <?php echo $this->Html->css('admin/sb-admin'); ?>
    <?php echo $this->Html->css('admin/font-awesome/css/font-awesome.min'); ?>
    
    <!-- Page Specific CSS -->
    <?php echo $this->Html->css('http://cdn.oesmith.co.uk/morris-0.4.3.min.css') ?>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="dropdown">
                <?php echo $this->Html->link($this->Html->tag('i', 'Author', array('class' => array('fa', 'fa-caret-square-o-down'))), array('controller' => 'authors', 'action' => 'index'), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('View', array('controller' => 'authors', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Add', array('controller' => 'authors', 'action' => 'add')) ?></li>
              </ul>
            </li>
            <li class="dropdown">
                <?php echo $this->Html->link($this->Html->tag('i', 'Categories', array('class' => array('fa', 'fa-caret-square-o-down'))), array('controller' => 'categories', 'action' => 'index'), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('View', array('controller' => 'categories', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Add', array('controller' => 'categories', 'action' => 'add')) ?></li>
              </ul>
            </li>
            <li class="dropdown">
                <?php echo $this->Html->link($this->Html->tag('i', 'Quotes', array('class' => array('fa', 'fa-caret-square-o-down'))), array('controller' => 'authors', 'action' => 'index'), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('View', array('controller' => 'quotes', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Add', array('controller' => 'quotes', 'action' => 'add')) ?></li>
              </ul>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <?php echo $content_for_layout ?>
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <?php echo $this->Html->script(array(
        'admin/jquery-1.10.2',
        'admin/bootstrap',
        'http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        'http://cdn.oesmith.co.uk/morris-0.4.3.min.js',
        'admin/morris/chart-data-morris',
        'admin/tablesorter/jquery.tablesorter',
        'admin/tablesorter/tables'
    )); ?>
  </body>
</html>
