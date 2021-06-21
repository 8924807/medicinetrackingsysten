<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="login_logic.php" method="post">
            <h1 class="h3 mb-3 fw-normal">SIGN IN</h1>

            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
            </div>

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <span>Don't have an account? <a href="register.php">Create Account</a></span>
        </form>
    </main>
</body>
</html>