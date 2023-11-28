<?php
include 'includes/db.php';
$count = 1;
$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?=$count?></td>
    <td><?=$row['title']?></td>
    <td><?= $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['last_name'] ?></td>
    <td><?=$row['sex']?></td>
    <td><?=$row['privelege']?></td>
    <td><?= $row['college_abbrev'] ?></td>
    <td>
    <a href="user_edit.php?id=<?=$row['id']?>"class="editUser">
      <i class='fas fa-edit text-success'></i>
    </a>
    <a name="deluser" onclick="confirmDelete(`<?=$row['id']?>`)">
      <i class="fas fa-trash text-danger"></i>
    </a>
  </td>
</tr>
<?php
$count++;
}
?>