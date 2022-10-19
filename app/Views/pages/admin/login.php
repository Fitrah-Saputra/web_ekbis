<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <?php
                if (session()->getFlashdata('message')) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php } ?>
                <form method="post" action="<?= base_url('login/auth') ?>">
                    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required="" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required="" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>