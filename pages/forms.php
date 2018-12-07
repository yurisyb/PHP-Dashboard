<?php require('header.php'); ?>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Analysis<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables.php"><i class="fa fa-table fa-fw"></i> Users List<span class="fa arrow"></span></a></a>
                <ul class="nav nav-third-level">
                    <li>
                        <a href="tables.php">All</a>
                    </li>
                    <li>
                        <a href="tables.php">Active</a>
                    </li>
                    <li>
                        <a href="sudpended_users.php">Suspended</a>
                    </li>
                    <li>
                        <a href="terminated.php">Terminated</a>
                    </li>
                </ul>
            </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Add New User</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Apartment<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="permai_putera.php">Permai Putera</a>
                                </li>
                                <li>
                                    <a href="permai_putri.php">Permai Puteri</a>
                                </li>
                                <li>
                                    <a href="permai_seri.php">Permai Seri</a>
                                </li>
                                <li>
                                    <a href="permai_court_1.php">Permai Court One</a>
                                </li>
                                <li>
                                    <a href="permai_court_2">Permai Court Two</a>
                                </li>
                                <li>
                                    <a href="kojaya.php">Kojaya Condominiom</a>
                                </li>
                                <li>
                                    <a href="dsuria.php">D'Suria Residency</a>
                                </li>
                                <li>
                                    <a href="mcity.php">Mcity Jalan Ampang</a>
                                </li>
                                <li>
                                    <a href="gcb.php">GCB Court</a>
                                </li>
                      <!--  <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="technician.php"><i class="fa fa-sitemap fa-fw"></i> Technician Team</a>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        fillup the form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="insert_customer_sql_process.php" method="post" >
                                        <div class="form-group">
                                            <label class="control-label">Full Name</label>
						                    <input type="text" name="full_name" placeholder="Full name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label">IC Number</label>
						                <input type="text" name="ic_number" placeholder="IC number" class="form-control">
                                        </div>
                                        <div class="form-group">
                           
                                        <label class="control-label">Passport Number</label>
                                        <input type="text" name="passport_number" placeholder="passport number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Nationality</label>
                                        <input type="text" name="netionality" placeholder="Nationality" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <input type="radio" name="sex" value="Male" checked>Male
                                        <input type="radio" name="sex" value="Female" checked>Female
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Occupation</label>
                                        <input type="text" name="occupation" placeholder="Studen, UNHCR..." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Telephone</label>
                                        <input type="text" name="telephone" placeholder="03xxxxxxxx" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Mobile Number</label>
                                        <input type="text" name="mobile" placeholder="0060xxxxxxx" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">E-mail</label>
                                        <input type="text" name="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input type="text" name="address" placeholder="PPI-21-12 Permai ...." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Post Code</label>
                                        <input type="text" name="post_code" placeholder="68000" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">City</label>
                                        <input type="text" name="city" placeholder="Kuala lumpur..." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Billing Address</label>
                                        <input type="text" name="billing" placeholder="PPA-21-10 Permai..." class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label">Copy of Passport or IC</label>
                                    <input name="upload" class="form-control type="file">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Package</label>
                                        <input type="radio" name="package" value="10Mb" checked>10Mb
                                        <input type="radio" name="package" value="30Mb" >30Mb
                                        <input type="radio" name="package" value="50Mb">50Mb
                                        <input type="radio" name="package" value="100Mb">100Mb
                                        <input type="radio" name="package" value="200Mb">200Mb
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Login ID</label>
                                        <input type="text" name="login_id" placeholder="Username" class="form-control">	
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" name="password" placeholder="Password" class="form-control">	
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Activation Date</label>
                                        <input type="text" name="activation_date" placeholder="2018/12/11" class="form-control">	
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Deposit</label>
                                        <input type="text" name="deposit" placeholder="RM" class="form-control">	
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Connection type</label>
                                        <input type="radio" name="connection_type" value="point to point" checked>point to point
                                        <input type="radio" name="connection_type" value="fiber" >fiber
                                        <input type="radio" name="connection_type" value="cat5">cat5
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Equitment</label>
                                        <input type="text" name="equipment" placeholder="Mikrotik..." class="form-control">	
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Note</label>
                                        <textarea type="text" name="remark" placeholder="Contract is for one year..." class="form-control"></textarea>
                                    </div>    
                                        <button type="submit" name="add" value="Add" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset Entry</button>
                                        </form>
                                    </div>

                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h1>Disabled Form States</h1>
                                    <form role="form">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h1>Form Validation States</h1>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </form>
                                    <h1>Input Groups</h1>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
