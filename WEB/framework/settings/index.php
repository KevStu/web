<div id="third-subcontent"></a>
    <a href = "index.php?page=settings&subpage=systems">System Settings</a>
</div>
<div id="content">
    <?php 
        switch ($subpage){
            case 'systems':
                require_once 'framework/index.php';
            break;
        }
    ?>
</div>
