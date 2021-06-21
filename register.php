<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Sign Up</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="register_logic.php" method="post">
            <h1 class="h3 mb-3 fw-normal">REGISTER</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Fullname" name="fullname" required>
                <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="email@example.com" name="email">
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingRePassword" placeholder="Retype Password" name="re-password">
                <label for="floatingRePassword">Retype Password</label>
            </div>

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
            <span>Already have an account? <a href="login.php">Log in</a> instead</span>
        </form>
    </main>
</body>
</html>