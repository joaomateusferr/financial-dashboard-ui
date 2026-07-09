
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

    <div class="page-card">

        <h1 class="page-title"><?php echo $Title; ?></h1>
        <p class="page-description"><?php echo $Description; ?></p>
        <div class="page-footer">
            Do you want to log in? <a href="<?php echo "/";?>">Login</a>
        </div>

    </div>

</section>
