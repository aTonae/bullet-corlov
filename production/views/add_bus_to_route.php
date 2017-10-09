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
            <!-- create form -->
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
                    <form method="post" action="/admin/production/views/addbustoroute" class="form-horizontal form-label-left input_mask">
                      <div class="form-group">
                      <input type="hidden" name="school_id" value="1">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Route Detail <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                         <select class="form-control" name="route_id">
                            <option>Select Route</option>
                            <?php foreach ($data['route']as $key => $value) { ?>
                                   <option value="<?= $value['id'] ?>"><?= $value['route_code']." / ".$value['name']?></option>

                           <?php } ?>
                          </select>
                        </div>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" disabled="disabled" placeholder="Secondary Detail">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bus Detail <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select class="form-control" name="bus_id">
                            <option>Select Bus</option>
                            <?php foreach ($data['bus']as $key => $value) { ?>
                                   <option value="<?= $value['id'] ?>"><?= $value['reg_number']." / ".$value['name']?></option>

                           <?php } ?>
                          </select>
                        </div>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" disabled="disabled" placeholder="Secondary Detail">
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
            <!-- from end -->

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
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Registration</th>
                          <th>Bus Name</th>
                          <th>Route Code</th>
                          <th>Route Name</th>
                          <th>Created At</th>

                        </tr>
                      </thead>


                      <tbody>
                        <?php 

                     /*  if(array_key_exists ('create_info' , $data )){
                          print_r($data['create_info']);

                       }. */

                      $count = 1;
                      foreach ($data['set'] as $key => $value) { ?>
                        
                      
                        <tr>
                          <td><?= $count ?></td>
                          <td><?php echo $value['reg_number']; ?></td>
                          <td><?php echo $value['bus_name']; ?></td>
                          <td><?php echo $value['route_code']; ?></td>

                          <td><?php echo $value['route_name']==null?"No Data":$value['route_name']; ?></td> 
                          <td><?php echo $value['created_at']; ?></td>

                          
                        </tr>
                       
                       <?php $count++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- dynamic table end -->



              </div>


          
          </div>
        </div>
        <!-- /page content -->

<?php include "footer.php"; ?>
