<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thuong_mai_dien_tu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($conn, 'UTF8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from san_bong_noi_bat";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
       <div class="col-3 khunganh">
                    <div class="image">
                       <a href="chitietsan.php"> <?php echo $row["hinh_anh"]?></a>
                    </div>
                    <h6><?php echo $row["ten_san"]?></h6>
                    <h6><i class="fas fa-map-marker-alt"></i> <?php echo $row["dia_chi"]?></h6>
                    <h6><a  href="chitietsan.php"><button type="button" class="btn btn-dark">Chi tiết</button></a></h6>
                </div>
        <?php
    }
} else {
    echo "0 result";
}
$conn->close();
?>