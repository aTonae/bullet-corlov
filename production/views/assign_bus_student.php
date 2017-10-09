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

            <div class="row">
            <!-- Add Operation Box -->
              <div class="col-md-12 col-sm-12 col-xs-12">


                <div class="row" >
                 <!-- first operation view -->

                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
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
                    <br />
                    <form method="post" action="/admin/production/views/assignbus" class="form-horizontal form-label-left input_mask">

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="student_id">
                            <option>Select Student</option>
                            <?php foreach ($data['stu']['data'] as $key => $value) { ?>
                                   <option value="<?= $value['id'] ?>"><?= $value['name']?></option>

                           <?php } ?>
                          </select>
                       
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Student Name" disabled="">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Class" disabled="">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bus Detail</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select class="form-control" name="bus_id">
                            <option>Choose Bus</option>
                            <?php foreach ($data['bus']['data'] as $key => $value) { ?>
                                   <option value="<?= $value['id']?>"><?= $value['reg_number']." / ".$value['bus_name']?></option>

                           <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" class="form-control" placeholder="Detail Primary">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" class="form-control" placeholder="Detail Secondary">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Stop Detail</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select class="form-control" name="stop_id">
                            <option>Choose Stop</option>
                            <?php foreach ($data['stop']['data'] as $key => $value) { ?>
                                   <option value="<?= $value['id']?>"><?= $value['name']?></option>

                           <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" class="form-control" placeholder="Detail Primary">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" class="form-control" placeholder="Detail Secondary">
                        </div>
                      </div>

                      
                      
                     
                    
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-3 col-sm-9 col-xs-12 col-md-offset-9">
                          <button type="button" class="btn btn-primary">Cancel</button>
                           <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                  


                  </div>
                    <!-- first operation end -->

                      <!-- second operation view -->

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
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
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Student Name</th>
                          <th>Stop Name</th>
                          <th>Route Code</th>
                          <th>Stop Code</th>
                          <th>Bus Number</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php 
                      $count = 1;
                      foreach ($data['set']['data'] as $key => $value) { ?>
                        
                      
                        <tr>
                          <td><?= $count ?></td>
                          <td><?php echo $value['s_name']; ?></td>
                          <td><?php echo $value['name']==null?"No Data":$value['name']; ?></td>
                          <td><?php echo $value['r_code']==null?"No Data":$value['r_code']; ?></td>                         
                          <td><?php echo $value['s_code']; ?></td>
                          <td><?php echo $value['r_number']; ?></td>
                        </tr>
                       
                       <?php $count++; } ?>
                      </tbody>

                    </table>
                     
                  </div>
                </div> 
                  


                  </div>
                    <!-- second operation end -->
                </div>
             
              </div>
              <!-- Add Operation end -->


            </div>
          </div>
        </div>
        <!-- /page content -->

<?php include "footer.php"; ?>
