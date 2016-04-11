<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Template</title>

        <!-- Bootstrap -->
        <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
<!--        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">-->
        <link href="assets/admin/css/material-icons.css" rel="stylesheet">
        <!--<link href="assets/admin/css/awesome-checkbox.css" rel="stylesheet">-->
        <link href="assets/admin/css/app.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="col-md-48">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" class="tip" data-original-title="Profile" data-placement="bottom"><i class="mi">account_circle</i></a></li>
                        <li><a href="#" class="tip" data-original-title="Notifications" data-placement="bottom"><i class="mi">notifications</i></a></li>
                        <li><a href="#" class="tip" data-original-title="Settings" data-placement="bottom"><i class="mi">settings</i></a></li>
                        <li><a href="#" class="tip" data-original-title="Logout" data-placement="bottom"><i class="mi">power_settings_new</i></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <aside class="left-sidebar">
            <ul class="menu">
                <li><a href="#" class="tip" data-original-title="New" data-placement="right"><i class="mi">add</i></a>
                    <ul class="sub-menu">
                        <li><a href="#">A</a></li>
                        <li><a href="#">B</a></li>
                        <li><a href="#">C</a></li>
                        <li><a href="#">D</a></li>
                    </ul>
                </li>
                <li><a href="#" class="tip" data-original-title="Dashboard" data-placement="right"><i class="mi">dashboard</i></a>
                    <ul class="sub-menu">
                        <li><a href="#">A</a></li>
                        <li><a href="#">B</a></li>
                        <li><a href="#">C</a></li>
                        <li><a href="#">D</a></li>
                    </ul>
                </li>
                <li><a href="#" class="tip" data-original-title="History" data-placement="right"><i class="mi">history</i></a>
                    <ul class="sub-menu">
                        <li><a href="#">A</a></li>
                        <li><a href="#">B</a></li>
                        <li><a href="#">C</a></li>
                        <li><a href="#">D</a>
                            <ul class="sub-menu">
                                <li><a href="#">A</a></li>
                                <li><a href="#">B</a></li>
                                <li><a href="#">C</a></li>
                                <li><a href="#">D</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">A</a></li>
                                        <li><a href="#">B</a></li>
                                        <li><a href="#">C</a></li>
                                        <li><a href="#">D</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="wrapper">
            <main class="col-md-48">
                <div class="col-md-12 col-sm-24 col-xs-24">
                    <div class="card shadow-1">
                        <div class="card-heading text-uppercase">Backups</div>
                        <div class="card-widget bg-warning">
                            
                            <div class="card-widget-text text-center">48%</div>
                            <div class="card-widget-icon"><i class="mi">backup</i></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12 col-sm-24 col-xs-24">
                    <div class="card shadow-1">
                        <div class="card-heading text-uppercase">Likes</div>
                        <div class="card-widget bg-info">
                            <div class="card-widget-text">4200</div>
                            <div class="card-widget-icon"><i class="mi">favorite</i></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12 col-sm-24 col-xs-24">
                    <div class="card shadow-1">
                        <div class="card-heading text-uppercase">Marketing</div>
                        <div class="card-widget bg-danger">
                            <div class="card-widget-text">100+</div>
                            <div class="card-widget-icon"><i class="mi">insert_chart</i></div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12 col-sm-24 col-xs-24">
                    <div class="card shadow-1">
                        <div class="card-heading text-uppercase">New Users</div>
                        <div class="card-widget bg-success">
                            <div class="card-widget-text">35+</div>
                            <div class="card-widget-icon"><i class="mi">supervisor_account</i></div>
                        </div>
                    </div>
                </div>
                <!--widgets ends here-->
                <div class="clearfix"></div>
                <!--charts start here-->
                <div class="col-md-24">
                    <div class="card shadow-1">
                        <div class="card-heading">Bar Chart</div>
                        <div class="card-body">
                            <div class="barchart" id="barchart" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-24">
                    <div class="card shadow-1">
                        <div class="card-heading">Pie Chart</div>
                        <div class="card-body">
                            <div class="peichart" id="piechart" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-24">
                    <div class="shadow-2 card">
                        <div class="card-heading with-border">Image Library Testing</div>
                        <div class="card-image">
                            <img style="background-image : url('assets/admin/images/card-image.jpg')">
                            <div class="image-placeholder">
                                some long image Placeholders like this, as this is a big placeholder. some more dummy text.
                            </div>
                        </div>
                        <div class="card-actions">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="assets/admin/images/card-image.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading <small>1 min ago</small></h4>
                                    <span class="media-actions">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mi">keyboard_arrow_down</i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Some Action</a></li>
                                        </ul>
                                    </span>
                                    Media Body
                                </div>
                            </div>
                            
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="assets/admin/images/card-image.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading <small>1 min ago</small></h4>
                                    <span class="media-actions">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mi">keyboard_arrow_down</i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Some Action</a></li>
                                        </ul>
                                    </span>
                                    Media Body
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-24 hidden">
                    <div class="card shadow-2">
                        <div class="card-heading">Add Product</div>
                        <form method="post" class="ajax-form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product-name">Product Name</label>
                                    <input type="text" name="name" data-required-message="this is a customized message for Required" class="form-control required" id="product-name">
                                </div>
                                <div class="form-group">
                                    <label for="product-size">Product Size</label>
                                    <input type="text" name="size" class="form-control" id="product-size">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" class="form-control required min max" data-min="5" data-max="6" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="password1">Re Password</label>
                                    <input type="text" name="password1" class="form-control required match" data-field="password" id="password1">
                                </div>
                                <div class="form-group">
                                    <label for="product-color">Product URL</label>
                                    <input type="text" name="color" class="form-control url" data-url-message="custom url message" id="product-color">
                                </div>
                                <div class="form-group">
                                    <label for="product-weight">Product Weight</label>
                                    <input type="text" name="weight" class="form-control required" id="product-weight">
                                </div>
                                <div class="form-group">
                                    <label for="dropdown" class="label-float-always">Options</label>
                                    <select name="dropdown" class="form-control required" id="dropdown">
                                        <option value="">Select Value</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" name="checkbox" id="checkbox" class="required">
                                    <label for="checkbox"> Checkbox</label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="radio" value="1" id="radio1" class="required">
                                    <label class="" for="radio1">Radio 1</label>

                                    <input type="radio" name="radio" value="2" id="radio2" class="required">
                                    <label class="" for="radio2">Radio 2</label>
                                </div>
                            </div>
                            <div class="card-actions">
                                <button type="submit" id="submit" class="paper-button ripple bg-primary">submit</button>
                                <button type="reset" class="paper-button ripple">reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-48 hidden">
                    <h3 class="text-primary text-uppercase inline control-heading">Data table</h3>
                    <div class="controls">
                        <ul>
                            <li><button class="paper-button btn-circle bg-primary search tip" data-original-title="Search" data-placement="top" data-search-field=".search-field"><i class="mi">search</i></button></li>
                            <li class="search-field hidden"><input type="search" class="table-search form-control" placeholder="Search Orders" data-search-table=".running-orders"></li>
                            <li><button class="paper-button btn-circle bg-success tip" data-original-title="Refresh" data-placement="top"><i class="mi">refresh</i></button></li>
                            <li><button class="paper-button btn-circle bg-info tip" data-original-title="Change" data-placement="top"><i class="mi">autorenew</i></button></li>
                            <li><button class="paper-button btn-circle bg-info tip" data-original-title="Merge" data-placement="top"><i class="mi">link</i></button></li>
                            <li><button class="paper-button btn-circle bg-danger tip" data-original-title="Delete" data-placement="top"><i class="mi">delete</i></button></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="table-responsive contents-table bg-white shadow-2 card">
                        <div class="scrollable-heading">
                            <table class="table table-fixed no-margin">
                                <thead>
                                    <th><input type="checkbox" id="table-checkbox-1" class="check-lg"><label for="table-checkbox-1">All</label></th>
                                    <th>Order #</th>
                                    <th>Table #</th>
                                    <th>Waiter #</th>
                                    <th>Time</th>
                                    <th>Append</th>
                                </thead>
                            </table>
                        </div>
                        <div class="scrollable-table">
                            <table class="table table-js-hover table-fixed no-margin running-orders">
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T1</td>
                                        <td>ahmed</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T1</td>
                                        <td>ali</td>
                                        <td>2014-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>safeer</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>basharat</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>inam</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 2</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 5</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="check-lg"></td>
                                        <td>1</td>
                                        <td>T 1</td>
                                        <td>Kashif</td>
                                        <td>2015-01-31</td>
                                        <td>2015-01-31</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-24 hidden">
                    <div class="card shadow-2">
                        <div class="card-heading with-border">Tabs</div>
                        <div class="card-body">
                            <div class="bs-tabs adjust-width">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        lks hdfkahs dfkhsadfkjhaskjfhlksdfh ksadhf ksadhfsa
                                        dfa
                                        sdf
                                        sad
                                        f
                                        sadf
                                        
                                        sa
                                        dfsf shfkasdhfkjshf kjshaldkf jhasdkfhskdjhfkasdjlhflkashdf kashfkasdf
                                        sadfaskjjdhfaskdhfkasjdhfksahfkjsahfka shdfkh skf ksjfh ksjhd fkjsh kfjsa
                                        sdkjfhas kfhas kfhas kdjfguiwefhnksjay82yrhk2rjh ionsddhf 
                                         oioishdfklsndfk
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">b</div>
                                    <div role="tabpanel" class="tab-pane" id="messages">cc</div>
                                    <div role="tabpanel" class="tab-pane" id="settings">d</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <a href="#!" class="fab shadow-3 bg-danger tip" data-original-title="Show Toast" data-placement="top"><i class="mi">add</i></a>
            </main>
            
            <div class="toast">
                <div class="toast-text">hi i m a toast...</div>
                <div class="toast-icon"></div>
            </div>
            
            <footer>
                <strong>Copyright &copy; <?php echo date('Y');?> <a href="#">Myschool</a>.</strong> All rights reserved.
            </footer>
        </div>
        
        

        <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
        <script src="assets/admin/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/admin/js/bootstrap.min.js"></script>
        <script src="assets/admin/js/mousetrap.min.js"></script>
        <script src="assets/admin/js/validate.js"></script>
        <!--charts js-->
        <script src="assets/admin/js/amcharts/amcharts.js"></script>
        <script src="assets/admin/js/amcharts/serial.js"></script>
        <script src="assets/admin/js/amcharts/pie.js"></script>
        <script src="assets/admin/js/app.js"></script>
        <script type="text/javascript">
            $('.fab').on('click', function(){
                showToast('oye toast!', '<i class="mi text-success">check</i>', false);
            })
        </script>
    </body>
</html>
