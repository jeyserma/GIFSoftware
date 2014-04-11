<?php
/*
 * index.php
 */

require_once 'config/config.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <title><?php echo settings('title'); ?></title>
  <link rel="stylesheet" type="text/css" href="config/css/screen.css" />
  <script type="text/javascript" src="config/js/jquery-1.10.2.min.js"></script> 
  <script type="text/javascript" src="config/js/ajax.js"></script> 
  <script type="text/javascript" src="config/js/js.js"></script> 
</head>

<body>
  
    <div class="header">    
        <div class="logo"><img alt="" src="config/img/cms.jpg" width="80px" /></div>
        <div class="headertext"><tt><?php echo settings('title'); ?></tt></div>
        <div class="menu">
            <a href="index.php?q=monitor">Monitor</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?q=meteo">Meteo</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?q=hvscan">HV scan</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?q=stabilitytest">Stability test</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?q=setdetectors">Configure detectors</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?q=setmodules">Configure mainframes</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?q=data">Data files</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?q=settings">Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <?php
    switch(filter_input(INPUT_GET, 'q')) {

      default               :   include 'includes/monitor.php';         break;
      case 'setdetectors'   :   include 'includes/setDetectors.php';    break; 
      case 'hvscan'         :   include 'includes/HVscan.php';          break;
      case 'stabilitytest'  :   include 'includes/stabilitytest.php';   break;

      case 'setmodules'     :   include 'includes/setModules.php';      break;
      case 'editmodule'     :   include 'includes/editModule.php';      break;
      case 'deletemodule'   :   include 'includes/deleteModule.php';    break;

      case 'environment'    :   include 'includes/environment.php';     break; 
      case 'settings'       :   include 'includes/settings.php';        break; 
      case 'data'           :   include 'includes/data.php';            break;
      case 'meteo'          :   include 'includes/meteo.php';           break;
      case 'plotstability'  :   include 'includes/plotStability.php';   break;
    }
    ?>
  
</body> 
</html>

<?php

$dbh = null; // Close SQL connection