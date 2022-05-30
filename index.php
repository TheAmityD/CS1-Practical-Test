<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "persinfo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal InForm</title>
</head>
<body>
    <div class="main">
        <p>Personal Information</p>
        <div class="internal">
            <form action="index.php" method="post">
                <p>Name:</p>
                <input type="text" name="name" placeholder="Name">
                <p>Age:</p>
                <input type="text" name="age" placeholder="Age">
                <p>Hobby:</p>
                <input type="text" name="hobby" placeholder="Hobby">
                <p>Ambition:</p>
                <input type="text" name="ambition" placeholder="Ambition">
                <p>Date of Birth (DoB):</p>
                <input type="text" name="dob" placeholder="Date of Birth">
                <p>Place of Birth</p>
                <input type="text" name="pob" placeholder="Place of Birth">
                <p>Favourite Song:</p>
                <input type="text" name="favsong" placeholder="Favourite Song">
                <br><br>
                <input type="submit" name="submit" value="Submit">
                <button onClick="">Results</button>
                <?php
                if (isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $hobby = $_POST['hobby'];
                    $ambition = $_POST['ambition'];
                    $dob = $_POST['dob'];
                    $pob = $_POST['pob'];
                    $favsong = $_POST['favsong'];

                    $query = "INSERT INTO persinfo VALUES ('$name', '$age', '$hobby', '$ambition', '$dob', '$pob', '$favsong')";
                    $query_run = mysqli_query($con, $query);
                    if ($query_run) {
                       echo "Yes!";
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>