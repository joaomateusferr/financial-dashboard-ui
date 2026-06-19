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

        $Action = isset($_GET['action']) ? $_GET['action'] : '';

        $LoggedIn = false;

        if($LoggedIn)
            require_once __DIR__.'/screens/dashboard/main.php';
        elseif($Action == 'signin')
            require_once __DIR__.'/screens/signin.php';
        elseif($Action == 'start-reset-password')
            require_once __DIR__.'/screens/start-reset-password.php';
        elseif($Action == 'reset-password')
            require_once __DIR__.'/screens/reset-password.php';
        else
            require_once __DIR__.'/screens/login.php';

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
