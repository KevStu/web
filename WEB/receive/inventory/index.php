<div id="third-submenu">
     | 
    Search <input type="text"/>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'result':
                    require_once 'inventory-module/search-user.php';
                break;
                default:
                    require_once 'inventory/main.php';
                break; 
            }
    ?>
  </div>