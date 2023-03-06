<div id="second-submenu">
<a href = "index.php?page=products&subpage=create">Create Products</a>
</div>
<?php
$subpage = 'index.php';
?>
<div id = "content">
    <?php 
        switch($subpage){
            case 'create':
                require_once 'process/process.php';
            break;
        }
    ?>
</div>

    