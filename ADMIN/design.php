    <style>
    .custom-text-black {
    color: black;
    font-size: 12;
    }
    </style>

                <?php
                      $id = $_SESSION['id'];
                      include '../db.php';
                      $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();
                    ?>
<span class="mr-2 d-none d-lg-inline custom-text-black">Admin | <?=$row['first_name']." ".$row['last_name']?></span> 