<div id="b" class="tab-pane" role="tabpanel">
<div class="row">
	<div class="row">
		<div class="col-xl-12">
			<div class="d-flex justify-content-between flex-wrap">
				<div class="input-group contacts-search mb-4">
					<label style="margin-left: 40px">Roles</label>
				</div>
				<div class="mb-4" style="margin-left: 40px;">
					<button type="button" onclick="addRole()" class="btn btn-primary shadow btn-xs sharp"><i class="fas fa-plus"></i></button>
				</div>
			</div>
		</div>				
	</div>
	<hr style="width: 100%; margin-left: 10px; margin-right: 20px;">
<div class="table-responsive">
	<div class="modal fade modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" style="font-size: 23px">Add</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body" style="padding: 0.875rem">
					<?php
						$sql = "SELECT count(*) FROM `role`";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
					?>
					<input type="text" id="total-role" value="<?=$row['count(*)']?>" style="display: none">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example6" class="table header-border table-responsive-sm">
								<thead>
									<tr>
										<th class="col-md-4" style="text-align: left;">Name</th>
										<th class="col-md-7" style="text-align: left;">Designation</th>
										<th class="col-md-1" style="text-align: right;">Action</th>
									</tr>
								</thead>
								<tbody id="tbody_roles1"></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="role1">
		<table class="table header-border table-responsive-sm">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="col-md-11">
				<input class="form-control form-control-lg" id="role_description_1" type="text" value="Project Leader/s" disabled>
				</div>
				<div class="md-1" style="padding-right: 33px;">
				<button type="button" name="addRole" onclick="removeRole(1)" class="btn btn-danger shadow btn-xs sharp">
					<i class="fas fa-trash"></i>
				</button>
				</div>
			</div>
			<thead>
				<tr>
				<th class="col-md-4" style="text-align: left;">Name</th>
				<th class="col-md-7" style="text-align: left;">Designation</th>
				<th class="col-md-1" style="align-items: center;">
					<button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target=".modal1" onclick="setSelectRole(1)">
					<i class="fas fa-user-plus"></i>
					</button>
					<button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" onclick="addCustomMember(1)">
					<i class="fas fa-plus" style="color: #1dbf1d"></i>
					</button>
				</th>
				</tr>
			</thead>
			<tbody id="member1"></tbody>
		</table>

		<table class="table">
			<thead>
				<tr>
				<th class="col-md-11" style="text-align: left;">Responsibility</th>
				<th class="col-md-1" style="align-items: center;">
					<button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target=".responsibility_modal_1" onclick="openModal(1)">
					<i class="fas fa-plus"></i>
					</button>
					<div class="modal fade responsibility_modal_1" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" style="font-size:23px">Add Project Leader/s Responsibility</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal">
									</button>
								</div>
								<div class="modal-body" style="padding: 0.875rem">
									<div class="card-body">
										<div class="table-responsive">
											<table id="example6" class="table header-border table-responsive-sm">
												<thead>
													<tr>
														<th class="col-md-4" style="text-align: left;">Role</th>
														<th class="col-md-7" style="text-align: left;">Resposibility</th>
														<th class="col-md-1" style="text-align: right;">Action</th>
													</tr>
												</thead>
												<tbody id="responsibility_list_1">
													<!-- List Responsibility of Leader -->
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" onclick="addCustomResponsibility(1)">
					<i class="fas fa-plus" style="color: #1dbf1d"></i>
					</button>
				</th>
				</tr>
			</thead>
			<tbody id="added_responsibility_list_1">
				<!-- Added Responsibility of Leader -->
			</tbody>
		</table>
	</div>

	<div id="role2">
		<table class="table header-border table-responsive-sm">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="col-md-11">
					<input class="form-control form-control-lg" type="text" id="role_description_2" value="Asst. Project Leader/s" disabled>
				</div>
				<div class="md-1" style="padding-right: 33px;">
					<button type="button" name="addRole" onclick="removeRole(2)" class="btn btn-danger shadow btn-xs sharp">
						<i class="fas fa-trash"></i>
					</button>
				</div>
			</div>
			<thead>
				<tr>
					<th class="col-md-4" style="text-align: left;">Name</th>
					<th class="col-md-7" style="text-align: left;">Designation</th>
					<th class="col-md-1" style="align-items: center;">
						<button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target=".modal1" onclick="setSelectRole(2)">
							<i class="fas fa-user-plus"></i>
						</button>
						<button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" onclick="addCustomMember(2)">
						<i class="fas fa-plus" style="color: #1dbf1d"></i>
						</button>
				</th>
				</tr>
			</thead>
			<tbody id="member2"></tbody>
		</table>


		<table class="table">
		<thead>
			<tr>
			<th class="col-md-11" style="text-align: left;">Responsibility</th>
			<th class="col-md-1" style="align-items: center;">
				<button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" onclick="openModal(2)" data-bs-target=".responsibility_modal_2">
				<i class="fas fa-plus"></i>
				</button>
				<div class="modal fade responsibility_modal_2" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" style="font-size:23px">Add Asst. Project Leader/s Responsibility</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body" style="padding: 0.875rem">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table header-border table-responsive-sm">
											<thead>
												<tr>
													<th class="col-md-4" style="text-align: left;">Role</th>
													<th class="col-md-7" style="text-align: left;">Resposibility</th>
													<th class="col-md-2" style="text-align: right;">Action</th>
												</tr>
											</thead>
											<tbody id="responsibility_list_2">
												<!-- List Responsibility of Leader -->
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" onclick="addCustomResponsibility(2)">
				<i class="fas fa-plus" style="color: #1dbf1d"></i>
				</button>
			</th>
			</tr>
		</thead>
		<tbody id="added_responsibility_list_2">
			<!-- Added Responsibility of Leader -->
		</tbody>
		</table>
	</div>
	
  <div id="role3">
    <table class="table header-border table-responsive-sm">
      <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="col-md-11">
          <input class="form-control form-control-lg" type="text" id="role_description_3" value="Project Coordinator/s" disabled>
        </div>
        <div class="md-1" style="padding-right: 33px;">
          <button type="button" name="addRole" onclick="removeRole(3)" class="btn btn-danger shadow btn-xs sharp">
            <i class="fas fa-trash"></i>
          </button>
        </div>
      </div>
      <thead>
        <tr>
          <th class="col-md-4" style="text-align: left;">Name</th>
          <th class="col-md-7" style="text-align: left;">Designation</th>
          <th class="col-md-1" style="align-items: center;">
            <button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target=".modal1" onclick="setSelectRole(3)">
              <i class="fas fa-user-plus"></i>
            </button>
            <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" onclick="addCustomMember(3)">
              <i class="fas fa-plus" style="color: #1dbf1d"></i>
            </button>
          </th>
        </tr>
      </thead>
      <tbody id="member3"></tbody>
    </table>


    <table class="table">
      <thead>
        <tr>
          <th class="col-md-11" style="text-align: left;">Responsibility</th>
          <th class="col-md-1" style="align-items: center;">
            <button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" onclick="openModal(3)" data-bs-target=".responsibility_modal_3">
            <i class="fas fa-plus"></i>
            </button>
            <div class="modal fade responsibility_modal_3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="font-size:23px">Add Project Coordinator/s Responsibility</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body" style="padding: 0.875rem">
                          <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-responsive-sm">
                                        <thead>
                                            <tr>
                                              <th class="col-md-4" style="text-align: left;">Role</th>
                                              <th class="col-md-7" style="text-align: left;">Resposibility</th>
                                              <th class="col-md-1" style="text-align: right;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="responsibility_list_3">
                                        <!-- List Responsibility of Leader -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" onclick="addCustomResponsibility(3)">
              <i class="fas fa-plus" style="color: #1dbf1d"></i>
            </button>
          </th>
        </tr>
      </thead>
      <tbody id="added_responsibility_list_3">
      <!-- Added Responsibility of Leader -->
      </tbody>
    </table>
  </div>

    <div id="table_roles">
    </div>
    <div id="role_modal">
    </div>
	<div id="responsibility_modal"></div>
</div>
</div>
</div>

<script type="text/javascript">
	var role = 4;
	var member = 1;
	var memRow = 1;
	var responbilityRow = 1;
	var selectedRole;
	var total = document.getElementById("total-role").value;

	function addRole() {
		var newrow = $('#table_roles').append('<div id="role'+role+'"><table id="example8" class="table header-border table-responsive-sm"><div class="d-flex justify-content-between align-items-center flex-wrap"><div class="col-md-11"><input class="form-control form-control-lg" id="role_description_'+role+'" type="text" placeholder="Role"></div><div class="md-1" style="padding-right: 25px;"><button type="button" name="addRole" onclick="removeRole('+role+')" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-trash"></i></button></div></div><thead><tr><th class="col-md-4" style="text-align: left;">Name</th><th class="col-md-7" style="text-align: left;">Designation</th><th class="col-md-1" style="align-items: center;"><button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target=".modal1" onclick="setSelectRole('+role+')"><i class="fas fa-user-plus"></i></button><button style="margin-left:6px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp"><i class="fas fa-plus"style="color:#1dbf1d"></i></button></th></tr></thead><tbody id="member'+role+'"></tbody></table><table class="table"><thead><tr><th class="col-md-11" style="text-align: left;">Responsibility</th><th class="col-md-1" style="align-items: center;"><button type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal" onclick="openModal('+role+')" data-bs-target=".responsibility_modal_'+role+'"><i class="fas fa-plus"></i></button><button style="margin-left:6px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-xs sharp"  onclick="addCustomResponsibility('+role+')"><i class="fas fa-plus" style="color: #1dbf1d"></i></button></th></tr></thead><tbody id="added_responsibility_list_'+role+'"></tbody></table>');
		
		var xhttp = new XMLHttpRequest();
		var id = "tbody_roles"+role;
		xhttp.onreadystatechange = function(){
			document.getElementById(id).innerHTML = this.responseText;
		};
		xhttp.open("GET", "roles.php?q="+role);
		xhttp.send();

		var newResponsibilityModal = $('#responsibility_modal').append('<div class="modal fade responsibility_modal_'+role+'" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="font-size:23px">Add Responsibility</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body" style="padding: 0.875rem"><div class="card-body"><div class="table-responsive"><table id="example7" class="table header-border table-responsive-sm"><thead><tr><th class="col-md-4" style="text-align: left;">Role</th><th class="col-md-7" style="text-align: left;">Resposibility</th><th class="col-md-1" style="text-align: right;">Action</th></tr></thead><tbody id="responsibility_list_'+role+'"><!-- List Responsibility of Leader --></tbody></table></div></div></div></div></div></div>');
		role++;
	}

  loadRoles();

	function setSelectRole(q){
		selectedRole = q;
	}

  function loadRoles(){
    var xhttp1 = new XMLHttpRequest();
    xhttp1.onreadystatechange = function(){
      document.getElementById("tbody_roles"+1).innerHTML = this.responseText;
    };
    
    xhttp1.open("GET", "roles.php?q="+1);
    xhttp1.send();
  }

	function addMember(q){
		var name = document.getElementById("name-"+q).innerHTML;
		var desig = document.getElementById("designation-"+q).innerHTML;
		var newrow = $('#member'+selectedRole).append('<tr id="memRow'+memRow+'"><td><input class="form-control form-control-lg" disabled id="name-'+q+'-'+selectedRole+'" value="'+name+'"></td><td><input class="form-control form-control-lg" disabled value="'+desig+'"></td><td><button type="button" name="addRole" onclick="removeMember('+memRow+','+q+','+selectedRole+')" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-minus"></i></button></td></tr>');
		$('#row-'+q).hide();
		memRow++;
	}

  function addCustomMember(q){
    var newrow = $('#member'+q).append('<tr id="memRow'+memRow+'"><td><input class="form-control form-control-lg" id="name-0-'+q+'"></td><td><input class="form-control form-control-lg"></td><td><button type="button" name="addRole" onclick="removeCustomMember('+memRow+')" class="btn btn-danger shadow btn-xs sharp"><i class="fas fa-minus"></i></button></td></tr>');
    memRow++;
  }

  function removeCustomMember(q){
    $('#memRow'+q).remove();
  }

	function removeMember(q, t, u){
		$('#row-'+t).show();
		$('#memRow'+q).remove();
	}

	function removeRole(q) {
		for(var i = 1; i <= total; i++){
			var val1 = document.getElementById("name-"+i+"-"+q);
			if(val1){
				$('#row-'+i).show();
			}
		}
		$('#role'+q).remove();
	}

	function openModal(q) {
		var forRole = "";
		forRole = document.getElementById("role_description_"+q).value;
		var responsiblityList = new XMLHttpRequest();
		responsiblityList.onreadystatechange = function (){
			document.getElementById("responsibility_list_"+q).innerHTML = this.responseText;
			for(var i = 1; i <= 17; i++){
				if(!document.getElementById("responsibility_description_"+i+"_"+q)){
					continue;
				}
				if(document.getElementById("responsibility_description_"+i+"_"+q).value == document.getElementById("list_responsibility_description_"+i+"_"+q).innerHTML){
					$('#list_responsibility_row_'+i+'_'+q).hide();
				}
			}
		};
		responsiblityList.open("GET", "responsibility.php?q="+q+"&forRole="+forRole);
		responsiblityList.send();
	}

	function addResponsibility(q, u){
		var responsibility_description = document.getElementById("list_responsibility_description_"+q+"_"+u).innerHTML;
		var newrow = $('#added_responsibility_list_'+u).append('<tr id="responsibility_row_'+responbilityRow+'"><td><input class="form-control form-control-lg" disabled id="responsibility_description_'+q+'_'+u+'" value="'+responsibility_description+'"></td><td><button type="button" class="btn btn-danger shadow btn-xs sharp" onclick="removeResponsibility('+responbilityRow+', '+q+', '+u+')"><i class="fas fa-minus"></i></button></td></tr>');
		$('#list_responsibility_row_'+q+'_'+u).hide();
		responbilityRow++;
	}

	function addCustomResponsibility(q) {
		var newrow = $('#added_responsibility_list_'+q).append('<tr id="responsibility_row_'+responbilityRow+'"><td><input class="form-control form-control-lg" id="responsibility_description_0_'+q+'"></td><td><button type="button" class="btn btn-danger shadow btn-xs sharp" onclick="removeCustomResponsibility('+responbilityRow+')"><i class="fas fa-minus"></i></button></td></tr>');
		responbilityRow++;
	}

	function removeCustomResponsibility(q) {
		$('#responsibility_row_'+q).remove();
	}

	function removeResponsibility(row, q, u) {
		$('#list_responsibility_row_'+q+'_'+u).show();
		$('#responsibility_row_'+row).remove();
	}
</script>