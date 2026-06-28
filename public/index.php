<?php

require __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Financial Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="index.css">

</head>
<body>

<div class="app">

    <?php

        $Page = isset($_GET['page']) ? $_GET['page'] : '';

        $LoggedIn = true;

        if($LoggedIn){
            require_once dirname(__DIR__, 1).'/screens/dashboard/main.php';
        }elseif(empty($Page)){
            require_once dirname(__DIR__, 1).'/screens/login.php';
        } else {

            $PagePath = dirname(__DIR__, 1)."/screens/$Page.php";

            if(file_exists($PagePath))
                require_once $PagePath;
            else
                require_once dirname(__DIR__, 1).'/screens/page-not-found.php';

        }

    ?>

</div>

<script>

function updateTheme() {
    document.documentElement.setAttribute('data-bs-theme',window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
}

updateTheme();

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateTheme);

</script>

</body>
</html>
