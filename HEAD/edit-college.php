<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>college_editmodal</title>
    <link rel="shortcut icon" type="image/png" href="../Unilink/BSU.png" alt="Logo" />

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby= "addmodallabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addmodallabel">Add College</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                                </button>
                               
                            </div>

                            <div class="modal-body">
                                <!-- Form Fields-->
                                <form>
                                    <div class="form-group">
                                        <label>Campus</label>
                                       <select class="form-control" id="selectCampus">
                                           <option>Select Campus</option>
                                           <option>Nasugbu</option>
                                       </select>
                                    </div>

                                      <div class="form-group">
                                        <label>Abbreviation</label>
                                        <input type="text" class="form-control" >
                                    </div>

                                      <div class="form-group">
                                        <label>College</label>
                                        <input type="text" class="form-control">
                                    </div>


                             

                                 <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="button" class="btn btn-primary" >Create College</button>
                        </div>
                           </form>

                           <!--form ends-->
                            </div>
                        </div>
                       
                    </div>
                    
</body>
</html>