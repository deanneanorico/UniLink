<?php 
                    if(isset($_GET['id'])) {
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="table">
                         <table id="fileTable" style="width: 100%;" class="display" data-ordering="true" data-paging="true" data-searching="true">
                            <thead style='text-align: center;'>
                                <tr>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style='text-align: center;'>
                                <?php
                                    $folderID = $_GET['id'];
                                    $sql = "SELECT * FROM uploads WHERE create_folder_id = $folderID";
                                    $uploadsResult = $conn->query($sql);
                                    while($uploadsRow = $uploadsResult->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?=$uploadsRow['path']?></td>
                                    <td>
                                        <a href="../uploads/<?=$uploadsRow['path']?>" target="_blank">View</a>
                                        <a href="delete.local.file.php?id=<?=$uploadsRow['id']?>">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <?php
                    }
                ?>