
<?php

$Title = '';
$Description = '';

if($Success){

    $Title = 'Account successfully created!';
    $Description = 'Validate your account by accessing your email!';

} else {

    $Title = 'Error during account creation!';
    $Description = !empty($_POST['error']) ? $_POST['error'] : '';

}

?>


<section class="page-shell">

    <div class="page-card text-center">

        <h1 class="page-title"><?php echo $Title; ?></h1>
        <p class="page-description"><?php echo $Description; ?></p>
        <div class="page-footer">
            <button class="btn-primary" onclick="window.location.href='/'">Home</button>
        </div>

    </div>

</section>
