<div id="second-submenu">
<a href = "index.php?page=products&subpage=products">Products</a>
</div>
<?php
$subpage = 'index.php';
?>
<div id = "content">
    <?php 
        switch($subpage){
            case 'products':
                require_once 'products/index.php';
            break;
        }
    ?>
</div>

    