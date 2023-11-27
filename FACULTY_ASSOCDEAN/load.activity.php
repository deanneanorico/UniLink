<?php
include 'db.php';
session_start();

$college = $_SESSION['college'];

$sql = "SELECT * FROM `activityform` WHERE `college` = '$college'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $i = 1;
    while ($row = $result->fetch_assoc()) {
        // Calculate the status based on conditions
        $status = '';
        $start_date = strtotime($row['start_date']);
        $end_date = strtotime($row['end_date']);
        $today = strtotime(date('Y-m-d'));

        if ($start_date > $today) {
            $status = 'For Implementation';
            $textColor = '#d7d0d0'; // Set text color for 'For Implementation'
        } elseif ($start_date <= $today && $end_date > $today) {
            $status = 'Ongoing';
            $textColor = 'orange'; // Set text color for 'Ongoing'
        } elseif ($end_date <= $today) {
            $status = 'Implemented';
            $textColor = '#228B22'; // Set text color for 'Implemented'
        }
        echo "<tr>";
        echo "<td style='text-align: center;'>" . $i . "</td>";
        echo "<td style='text-align: center;'>" . $row["activity_title"] . "</td>";
        echo "<td style='text-align: center;'>" . $row["partner"] . "</td>";
        echo "<td style='text-align: center;'>" . date("M. d, Y", $start_date) . " - " . date("M. d, Y", $end_date) . " </td>";
        echo '<td style="text-align: center;"><div style="background-color: '.$textColor.'; color: #000000; padding: 5px; border-radius: 45px;">' . $status . '</div></td>';
        if($status == "Implemented") {
            echo "
                <td style='text-align: center;'>
                    <a href='ui-formsEdit.php?id=" . $row["id"] . "'>
                        <span class='fas fa-edit text-secondary' title='Edit'></span>
                    </a>
                    <a href='pdf.php?id=". $row["id"]."' target='_blank' class='fas fa-file-download text-info' title='Request Form'></a>
                    <a href='report.php?id=" . $row['id'] . "' class='fas fa-clipboard text-success' title='Narrative Report'></a>
                </td>
            ";
        } else {
            echo "<td style='text-align: center;'>
                <a href='ui-formsEdit.php?id=" . $row["id"] . "'>
                    <span class='fas fa-edit text-secondary'></span>
                </a>
                <a onclick='confirmDelete(`".$row['id']."`)'><span class='fas fa-trash text-danger'></span></a>
                <a href='pdf.php?id=". $row["id"]."' target='_blank' class='fas fa-file-download text-info'></a>
            </td>";
        }
        echo "</tr>";
        $i++;
    }
} else {
    echo "No data found";
}