<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li><a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Maize Calculator</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Maize Yield Estimation</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Amount of Kgs</label>
              <div class="controls">
                <select name="amountofkgs">
                  <option>Select</option>
                  <option>50Kgs</option>
                  <option>70Kgs</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Number of Bags</label>
              <div class="controls">
                <input name="numberofBags" type="number" min="1" class="span11" placeholder="1 or 2 or 3 ...." required/>
              </div>
            </div>
            <div class="form-actions">
              <button name ="submit" type="submit" class="btn btn-success">Calculate</button>
            </div>
            <?php 
                if(isset($_GET['submit'])){
                  $result1 = $_GET['numberofBags'];
                  $result2 = $_GET['amountofkgs'];
                  
                  switch($result2){
                    case "Select":
                      echo "Please Select 50 or 70";
                    case "50Kgs":
                      $maizeYieldOf50kgs = 50 * 0.016;
                      $npkBags = 0.04 * $result1;
                      $ureaBags = 0.04 * $result1;
                      echo"<center><strong> For $result1 Maize Bag(s) of 70Kgs, You will need <b>$maizeYieldOf50kgs </b> hectares of land <br>
                            <b>$npkBags </b> NPK Fertilizer Bag(s) <b> $ureaBags </b> Urea Fertilizer Bag(s) With Moderate rainfall.
                           </strong><center>";
                    break;
                    case "70Kgs";
                    $maizeYieldOf70kgs = 70 * 0.0224;
                    $npkBags = 0.0224 * $result1;
                    $ureaBags = 0.0224 * $result1;
                    echo"<center><strong> For $result1 Maize Bag(s) of 50Kgs, You will need <b>$maizeYieldOf70kgs </b> hectares of land <br>
                          <b>$npkBags </b> NPK Fertilizer Bag(s) <b> $ureaBags </b> Urea Fertilizer Bag(s) With Moderate rainfall.
                         </strong><center/>";

                    break;
                  }
                }
            ?>
          </form>

        </div>
      </div>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/matrix.form_validation.js"></script>

</body>
</html>
