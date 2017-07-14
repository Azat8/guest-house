<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/admin_custom.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/css/datepicker3.css">
    <title>Admin</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action='<?= base_url()?>/admin/check_auth' method="POST">
<!--                    <div class="alert alert-danger">-->
<!--                        Wrong username or password, please try again.-->
<!--                    </div>-->
                <fieldset>
                    <div id="legend">
                        <legend class="">Login</legend>
                    </div>
                    <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="username">Username</label>
                        <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success">Login</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url()?>/public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>/public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>/public/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url()?>/public/js/custom.js"></script>

</body>
</html>
