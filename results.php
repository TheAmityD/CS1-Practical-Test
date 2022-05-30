<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "persinfo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results!</title>
</head>
<body>
    <div class="outer">
        <p>Results</p>
        <div class="inner">
            <form action="results.php" method="post">
            <p>Name:</p>
            <select name="name" id="name">
                <option value="sel" selected>Select</option>
                <?php
                $query = "SELECT * FROM persinfo";
                $query_run = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                }
                ?>
            </select>
            <input type="submit" name="submit" value="submit">

            <table border>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Hobby</th>
                    <th>Ambition</th>
                    <th>Date of Birth</th>
                    <th>Place of Birth</th>
                    <th>Favourite Song</th>
                </tr>
            <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];

                    $query2 = "select * from persinfo WHERE persinfo.class='$class' order by NAME ASC";
                    $query2_run = mysqli_query($con, $query);
                        while ($row2 = mysqli_fetch_array($query2_run)) {
                            $a = $row2['name'];
                            $b = $row2['age'];
                            $c = $row2['hobby'];
                            $d = $row2['ambition'];
                            $e = $row2['birthdate'];
                            $f = $row2['birthplace'];
                            $g = $row2['favsong'];
                            ?>
                            <tr>
                                <td><?php echo $a; ?></td>
                                <td><?php echo $b; ?></td>
                                <td><?php echo $c; ?></td>
                                <td><?php echo $d; ?></td>
                                <td><?php echo $e; ?></td>
                                <td><?php echo $f; ?></td>
                                <td><?php echo $g; ?></td>
                            </tr>
                            <?php
                        }
                }
            ?>
            </table>
            </form>
        </div>
    </div>
</body>
</html>