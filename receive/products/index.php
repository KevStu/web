<div id="third-submenu">
<a href = "index.php?page=products&subpage=products&action=create">Create Products</a> 
<a href = "index.php?page=products&subpage=products&action=receive">Receive</a>
<a href = "index.php?page=products&subpage=products&action=release">Release</a>
<a href = "index.php?page=products&subpage=products&action=inventory">Inventory</a>
</div>

<div id = "content">
    <?php 
        switch($action){
            case 'create':
                require_once 'products/create_prod.php';
            break;
            case 'inventory':
                require_once 'inventory/main.php';
            break;
            case 'receive':
                require_once 'receive/create_transac.php';
            break;
            case 'release':
                require_once 'release/create_trans.php';
            break;
        }
    ?>
</div>

    