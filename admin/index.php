<?php
    include "../models/PDO.php";
    include "header.php";
  // controller
  if(isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) { 
      case 'add_categories' :
        include "categories/add.php";
        break;  
      case 'add_products' :
        include "products/add.php";
        break;
      case 'add_staff' :
        include "accounts/staff/add.php";
        break;
      default:
        include "home.php";
        break;  
    }
  } else {
    include "home.php";
  }
  include "footer.php";
?>