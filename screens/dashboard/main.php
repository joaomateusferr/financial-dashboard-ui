<?php

    use App\Constants\DashboardTabsConstants;

    $DashboardTabsConstants = DashboardTabsConstants::getDashboardTabs();
    $GetTab = isset($_GET['tab']) ? $_GET['tab'] : array_key_first($DashboardTabsConstants);

?>

<aside class="sidebar">

    <div class="sidebar-header">

        <div class="search-area">

            <input type="text" class="form-control" placeholder="Pesquisar">

        </div>

    </div>

    <div class="options-list">

        <?php

            foreach($DashboardTabsConstants as $Tab => $TabName){

                ?>
                    <div class="options-item <?php echo $Tab == $GetTab ? 'active' : '';?>" onclick="window.location.href='<?php echo "/?tab=$Tab";?>'">
                        <span><?php echo $TabName; ?></span>
                    </div>

                <?php

            }

        ?>

    </div>

    <div class="sidebar-footer">
        <span>Usuário</span>
    </div>

</aside>

<main class="main">

    <div class="option-header">
        <h1 class="page-title"><?php echo $DashboardTabsConstants[$GetTab];?></h1>
    </div>

    <div class="option">
        <?php

            $PagePath = dirname(__FILE__)."/$GetTab.php";

            if(file_exists($PagePath))
                require_once $PagePath;
            else
                require_once dirname(__FILE__).'/page-not-found.php';
        ?>
    </div>

</main>