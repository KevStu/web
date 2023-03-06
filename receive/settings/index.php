<div id="third-subcontent"></a>
    <a href = "index.php?page=settings&subpage=systems">System Settings</a>
</div>
<div id="content">
    <?php 
        switch ($subpage){
            case 'settings':
                require_once 'settings/index.php';
            break;
            default:
                require_once 'main.php';
            break;
        }
    ?>
</div>