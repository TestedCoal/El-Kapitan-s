<?php require views_path('partials/header');?>

    <div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow-lg">

        <form method="post">

            <center>
                <h1><i class="fa fa-user"></i></h1>
                <h3>Login</h1>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" autofocus>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <br>
            <div class="row">
                <button class="btn btn-primary" style="font-size:20px">Login</button>
            </div>
        </form>

    </div>

<?php require views_path('partials/footer');?>