<?php include "head.php"; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
<!--dyanmic table start -->
 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Button Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <?php 
                  $alert_code = "alert-warning";
                  ?>

                  <div class="alert <?php echo $alert_code; ?> alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                  </div>


                  

                  

                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Class</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Address</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php 
                      $count = 1;
                      foreach ($data['set'] as $key => $value) { ?>
                        
                      
                        <tr>
                          <td><?= $count ?></td>
                          <td><?php echo $value['name']; ?></td>
                          <td><?php echo $value['class_id']; ?></td>
                          <td><?php echo $value['email']; ?></td>
                          <td><?php echo $value['contact']; ?></td>
                          <td><?php echo $value['address']; ?></td>
                          
                        </tr>

                       <?php
                        $count++;

                        } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
<!-- dynamic table end -->


          
          </div>
        </div>
        <!-- /page content -->

<?php include "footer.php"; ?>
