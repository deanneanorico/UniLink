<?php
    include 'db.php';

    $searchQuery = $_POST['query'];

    if(strlen($searchQuery) == 0) {
    	$sql = "SELECT a.*, u.first_name, u.mid_name, u.last_name, u.profile_pic, DATE(a.date_added) AS date FROM announcement AS a INNER JOIN users AS u ON a.added_by = u.id ORDER BY a.id DESC";
    } else {
    	$sql = "SELECT a.*, u.first_name, u.mid_name, u.last_name, u.profile_pic, DATE(a.date_added) AS date FROM announcement AS a INNER JOIN users AS u ON a.added_by = u.id WHERE a.subject LIKE '%$searchQuery%' ORDER BY a.id DESC";
    }

    $result = $conn->query($sql);
    while($announcementRow = $result->fetch_assoc()) {
?>
    <div class="card mb-4">
        <div class="px-4 py-4">
            <div class="row justify-content-between">
                <div class="col"><h6><?=$announcementRow['subject']?></h6></div>
                <div class="dropdown">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col"><?=$announcementRow['content']?></div>
            </div>
            <hr>
            <div class="row">
                <div class="col ml-2">
                    <div class="row">
                        <img class="img-profile rounded-circle mr-2" width="30" src="../imgs/<?php if($announcementRow['profile_pic'] == '') {echo "BSU.png";} else {echo $announcementRow['profile_pic'];}?>">
                        <span class="mr-5"><?=$announcementRow['first_name'].' '.$announcementRow['mid_name'].' '.$announcementRow['last_name']?></span>
                        <span><?=$announcementRow['date']?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>