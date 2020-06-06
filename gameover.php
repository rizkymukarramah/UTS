<?php
    session_start();
    include "koneksi.php";

    tambah($_SESSION["nama"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    Hello <?php echo $_SESSION["nama"]; ?>, Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.
    Score Anda : <?php echo $_SESSION["score"]; ?> <br> <br>

    HALL OF FAME <br> <br>

    <table border="1">
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Skor</td>
        </thead>

        <?php
    $koneksi = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());

    $sql = "SELECT * FROM game ORDER BY skor DESC LIMIT 10";
    $result = mysqli_query($GLOBALS['koneksi'], $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i = 1;
        // output data of each row
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["skor"] . "</td>";
            echo "</tr>";
            $i = $i + 1;

        }
    } else {

    }
    mysqli_close($GLOBALS['koneksi']);
    ?>
    </table>

    <a href="index.php">[Main Lagi]</a>

</body>
</html>
