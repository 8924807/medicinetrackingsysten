<?php
    include("connect.php");
    session_start();
    if($_SESSION['email'] == ""){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosage Page</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Medicine Tracker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notifications.php">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_medicines.php">Add Medicine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dosage_list.php">Dosage List</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <form action="dosage_logic.php" method="post">
        <h1>DOSAGE TAKEN</h1>
        <label for="email">Medicine Name</label>
        <select name='medicine_id' id='medicine_name'>
            <?php
                $query = "SELECT * FROM medicine WHERE user_ID = ".$_SESSION['ID']."";
                $result = mysqli_query($con, $query);

                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['ID']."'>".$row['name']."</option>";
                }
            ?>
        </select>

        <label for="date_taken">Date taken
            <input type="date" name="date_taken" id="date_taken">
        </label>

        <label for="time_taken">Time taken
            <input type="time" name="time_taken" id="time_taken">
        </label>

        <label for="quantity">Quantity
            <input type="number" name="quantity" id="quantity">
        </label>

        <button>SAVE</button>
    </form>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>