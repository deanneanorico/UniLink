<?php
	include 'includes/db.php';

	$count = $_GET['q'];
    $forRole = $_GET['forRole'];
	$sql = "SELECT * FROM `responsibilities` WHERE `role` LIKE '$forRole'";
	$result = $conn->query($sql);
    if(mysqli_num_rows($result) == 0){
        $sql = "SELECT * FROM `responsibilities`";
	    $result = $conn->query($sql);
    }
	while($row = $result->fetch_assoc()){

?>
    <tr id="list_responsibility_row_<?=$row['id']?>_<?=$count?>">
        <td class="col-md-4" style="text-align: left;" id="list_responsibility_name_<?=$row['id']?>_<?=$count?>"><?=$row['role']?></td>
        <td class="col-md-7" style="text-align: left;" id="list_responsibility_description_<?=$row['id']?>_<?=$count?>"><?=$row['responsibility']?></td>
        <td class="col-md-1" style="align-items: center;"><button type="button" name="" id="add_responsibility_<?=$count?>" onclick="addResponsibility('<?=$row['id']?>', '<?=$count?>')" class="btn btn-primary shadow btn-circle btn-sm"><i class="fas fa-plus"></i></button>
        </td>											
    </tr>
<?php
	}
?>