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
    <title>Add Medicine</title>
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

    <main class="form-signin text-center">
        <form action="update_medicine_logic.php" method="post">
            <h1 class="h3 mb-3 fw-normal">UPDATE MEDICINE</h1>

            <?php
                $id = $_GET['id'];
                
                $query = "SELECT * FROM medicine WHERE ID = ".$id."";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($result)){
                    echo "<label for='id'>
                            <input type='hidden' name='ID' id='id' value=".$row['ID'].">
                        </label>";
                    echo "<label for='medicine_name'>Medicine name
                            <input type='text' name='name' id='medicine_name' value=".$row['name'].">
                        </label>";
                    
                    echo "<label for='dosage_quantity'>Dosage Quantity
                            <input type='number' name='dosage_quantity' id='dosage_quantity' value=".$row['dosage_quantity'].">
                        </label>";
                    if($row['dosage_unit'] == "Tab"){
                        echo "<label for='dosage_unit'>Dosage Unit</label>
                        <select name='dosage_unit' id='dosage_unit'>
                            <option value='Tab' selected>Tab</option>
                            <option value='Bottle'>Bottle</option>
                            <option value='Syringe/Injection'>Syringe/Injection</option>
                        </select>";
                    }else if($row['dosage_unit'] == "Bottle"){
                        echo "<label for='dosage_unit'>Dosage Unit</label>
                        <select name='dosage_unit' id='dosage_unit'>
                            <option value='Tab'>Tab</option>
                            <option value='Bottle' selected>Bottle</option>
                            <option value='Syringe/Injection'>Syringe/Injection</option>
                        </select>";
                    }else if($row['dosage_unit'] == "Syringe/Injection"){
                        echo "<label for='dosage_unit'>Dosage Unit</label>
                        <select name='dosage_unit' id='dosage_unit'>
                            <option value='Tab'>Tab</option>
                            <option value='Bottle'>Bottle</option>
                            <option value='Syringe/Injection' selected>Syringe/Injection</option>
                        </select>";
                    }
                    echo "<label for='milligram'>Milligram
                            <input type='text' name='milligram_quantity' id='milligram' value=".$row['milligram_quantity'].">
                        </label>";

                    if($row['milligram_unit'] == "g"){
                        echo "<label for='unit'>Milligram Unit</label>
                        <select name='milligram_unit' id='unit'>
                            <option value='g' selected>g</option>
                            <option value='mg'>mg</option>
                        </select>";
                    }else if($row['milligram_unit'] == "mg"){
                        echo "<label for='unit'>Milligram Unit</label>
                        <select name='milligram_unit' id='unit'>
                            <option value='g'>g</option>
                            <option value='mg' selected>mg</option>
                        </select>";
                    }

                    echo "<label for='frequency_quantity'>Frequency Quantiy
                            <input type='number' name='frequency_quantity' id='frequency_quantity' value=".$row['frequency_quantity'].">
                        </label>";

                    if($row['frequency_unit'] == "Daily"){
                        echo "<label for='frequency_unit'>Frequency Unit</label>
                        <select name='frequency_unit' id='frequency_unit'>
                            <option value='Daily' selected>Daily</option>
                            <option value='Per Day'>Per Day</option>
                            <option value='Per Week'>Per Week</option>
                        </select>";
                    }else if($row['frequency_unit'] == "Per Day"){
                        echo "<label for='frequency_unit'>Frequency Unit</label>
                        <select name='frequency_unit' id='frequency_unit'>
                            <option value='Daily'>Daily</option>
                            <option value='Per Day' selected>Per Day</option>
                            <option value='Per Week'>Per Week</option>
                        </select>";
                    }else if($row['frequency_unit'] == "Per Week"){
                        echo "<label for='frequency_unit'>Frequency Unit</label>
                        <select name='frequency_unit' id='frequency_unit'>
                            <option value='Daily'>Daily</option>
                            <option value='Per Day'>Per Day</option>
                            <option value='Per Week' selected>Per Week</option>
                        </select>";
                    }
                }
            ?>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
            <a href="index.php">View Medicines</a>
        </form>
    </main>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>