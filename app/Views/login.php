<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url('assets/css/login.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
</head>

<body>
    <form method="post" action="<?php echo url_to('login.store') ?>">
        <div class="imgcontainer">
            <div class="icon">
                <i class="bi bi-person-circle" style="font-size: 70px;"></i>
            </div>
        </div>



        <div class="container">
            <?php if (session()->has('message_error')) :  ?>
                <span class="text text-danger"> <?php echo session()->getFlashdata('message_error'); ?></span>
            <?php endif; ?>
            <div>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="email">
                <span class="text text-danger"><?php echo session()->getFlashdata('errors')['email'] ?? ''  ?></span>
            </div>
            <div>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password">
                <span class="text text-danger"><?php echo session()->getFlashdata('errors')['password'] ?? '' ?> </span>
            </div>
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</body>

</html>