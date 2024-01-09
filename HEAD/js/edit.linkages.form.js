var item1 = 1;
var item2 = 1;
var item3 = 1;
var item4 = 1;
var item5 = 1;
var item6 = 1;
var item7 = 1;
var item8 = 1;
var item9 = 1;
var item10 = 1;
var implementation = 0;

var queryString = window.location.search;

var params = new URLSearchParams(queryString);

var id = params.get('id');

var loadPAO = new XMLHttpRequest();
loadPAO.open("POST", "load.pao.php");
loadPAO.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadPAO.send("id="+id);
loadPAO.onload = function() {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var area = document.getElementById("area-1");
		var tableRow = document.createElement("tr");
		var tableData1 = document.createElement("td");
		var tableData2 = document.createElement("td");
		var tableData3 = document.createElement("td");
		var input1 = document.createElement("input");
		var input2 = document.createElement("input");
		var button1 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");

		input1.setAttribute("class", "form-control");
		input2.setAttribute("class", "form-control");

		input1.setAttribute("type", "text");
		input2.setAttribute("type", "text");

		input1.setAttribute("name", "personnel[]");
		input2.setAttribute("name", "officials[]");

		input1.setAttribute("value", data['personnels']);
		input2.setAttribute("value", data['officials']);

		input1.setAttribute("required", "");
		input2.setAttribute("required", "");

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
		button1.setAttribute("onclick", `removeItem1(${item1})`);

		buttonIcon1.setAttribute("class", "fas fa-trash");

		button1.appendChild(buttonIcon1);

		tableData1.appendChild(input1);
		tableData2.appendChild(input2);
		tableData3.appendChild(button1);

		tableRow.appendChild(tableData1);
		tableRow.appendChild(tableData2);
		tableRow.appendChild(tableData3);

		tableRow.setAttribute("id", `item-1-${item1}`);

		item1++;

		area.appendChild(tableRow);
	});
}

var loadResources = new XMLHttpRequest();
loadResources.open("POST", "load.resources.php");
loadResources.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadResources.send("id="+id);
loadResources.onload = function () {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var area = document.getElementById("area-2");
		var tableRow = document.createElement("tr");
		var tableData1 = document.createElement("td");
		var tableData2 = document.createElement("td");
		var input1 = document.createElement("input");
		var button1 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");

		input1.setAttribute("class", "form-control");
		input1.setAttribute("type", "text");
		input1.setAttribute("name", "resources[]");
		input1.setAttribute("required", "");
		input1.setAttribute("value", data['resources']);

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
		button1.setAttribute("onclick", `removeItem2(${item1})`);

		buttonIcon1.setAttribute("class", "fas fa-trash");

		button1.appendChild(buttonIcon1);

		tableData1.appendChild(input1);
		tableData2.appendChild(button1);

		tableRow.appendChild(tableData1);
		tableRow.appendChild(tableData2);

		tableRow.setAttribute("id", `item-2-${item1}`);

		item1++;

		area.appendChild(tableRow);
	});
}

var loadImplementation = new XMLHttpRequest();
loadImplementation.open("POST", "load.implementation.php");
loadImplementation.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadImplementation.send("id="+id);
loadImplementation.onload = function () {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var area = document.getElementById("area-3");
		var div = document.createElement("div");
		var input1 = document.createElement("input");
		var input2 = document.createElement("input");
		var table1 = document.createElement("table");
		var table2 = document.createElement("table");
		var tableHead1 = document.createElement("thead");
		var tableHead2 = document.createElement("thead");
		var tablebody1 = document.createElement("tbody");
		var tablebody2 = document.createElement("tbody");
		var tableRow1 = document.createElement("tr");
		var tableRow2 = document.createElement("tr");
		var tableHeader1 = document.createElement("th");
		var tableHeader2 = document.createElement("th");
		var tableHeader3 = document.createElement("th");
		var tableHeader4 = document.createElement("th");
		var button1 = document.createElement("button");
		var button2 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");
		var buttonIcon2 = document.createElement("i");

		implementation++;

		buttonIcon1.setAttribute("class", "fas fa-plus");
		buttonIcon1.setAttribute("style", "");
		buttonIcon1.style.color = "#1dbf1d";

		buttonIcon2.setAttribute("class", "fas fa-plus");
		buttonIcon2.setAttribute("style", "");
		buttonIcon2.style.color = "#1dbf1d";

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-primary btn-circle btn-sm");
		button1.setAttribute("style", "");
		button1.setAttribute("onclick", `addYear(${implementation})`);
		button1.style.marginLeft = "1px";
		button1.style.background = "white";
		button1.appendChild(buttonIcon1);

		button2.setAttribute("type", "button");
		button2.setAttribute("class", "btn btn-primary btn-circle btn-sm");
		button2.setAttribute("style", "");
		button2.setAttribute("onclick", `addActivity(${implementation})`);
		button2.style.marginLeft = "1px";
		button2.style.background = "white";
		button2.appendChild(buttonIcon2);

		tableHeader4.setAttribute("class", "col-md-1");
		tableHeader4.setAttribute("style", "");
		tableHeader4.style.paddingLeft = "0px";
		tableHeader4.appendChild(button2);

		tableHeader2.setAttribute("class", "col-md-1");
		tableHeader2.setAttribute("style", "");
		tableHeader2.style.paddingLeft = "0px";
		tableHeader2.appendChild(button1);

		tableHeader1.setAttribute("class", "col-md-11");
		tableHeader1.setAttribute("style", "");
		tableHeader1.style.textAlign = "left";
		tableHeader1.innerHTML = "Year";

		tableHeader3.setAttribute("class", "col-md-11");
		tableHeader3.setAttribute("style", "");
		tableHeader3.style.textAlign = "left";
		tableHeader3.innerHTML = "Activities";

		tableRow1.appendChild(tableHeader1);
		tableRow1.appendChild(tableHeader2);

		tableRow2.appendChild(tableHeader3);
		tableRow2.appendChild(tableHeader4);

		tableHead1.appendChild(tableRow1);

		tableHead2.appendChild(tableRow2);

		tablebody1.setAttribute("id", `year-${implementation}`);
		tablebody2.setAttribute("id", `activity-${implementation}`);

		table1.setAttribute("class", "table")
		table2.setAttribute("class", "table")

		table1.appendChild(tableHead1);
		table1.appendChild(tablebody1);

		table2.appendChild(tableHead2);
		table2.appendChild(tablebody2);

		input1.setAttribute("value", `0`);
		input2.setAttribute("value", `0`);

		input1.setAttribute("type", "hidden");
		input2.setAttribute("type", "hidden");

		input1.setAttribute("id", `year-total-${implementation}`);
		input2.setAttribute("id", `activity-total-${implementation}`);

		input1.setAttribute("name", "year-total[]");
		input2.setAttribute("name", "activity-total[]");

		div.appendChild(input1);
		div.appendChild(input2);
		div.appendChild(table1);
		div.appendChild(table2);

		item3++;

		div.setAttribute("id", `item-3-${item3}`);

		area.appendChild(div);
	});

	var loadYear = new XMLHttpRequest();
	loadYear.open("POST", "load.year.php");
	loadYear.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	loadYear.send("id="+id);
	loadYear.onload = function() {
		var datas = JSON.parse(this.responseText);
		var e = 1;
		var id2 = datas[0]['linkages_implementation_plan_id'];
		datas.forEach((data)=>{
			if(data['linkages_implementation_plan_id'] != id2) {
				id2 = data['linkages_implementation_plan_id'];
				e++;
			}

			document.getElementById(`year-total-${e}`).value = parseInt(document.getElementById(`year-total-${e}`).value) + 1;

			var body = document.getElementById(`year-${e}`);
			var row = document.createElement("tr");
			var tableData1 = document.createElement("td");
			var tableData2 = document.createElement("td");
			var input1 = document.createElement("input");
			var button1 = document.createElement("button");
			var buttonIcon1 = document.createElement("i");

			input1.setAttribute("class", "form-control");
			input1.setAttribute("type", "text");
			input1.setAttribute("name", "year[]");
			input1.setAttribute("required", "");
			input1.setAttribute("value", data['year']);

			button1.setAttribute("type", "button");
			button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
			button1.setAttribute("onclick", `removeItem4(${item4}, ${e})`);

			buttonIcon1.setAttribute("class", "fas fa-trash");

			button1.appendChild(buttonIcon1);

			tableData1.appendChild(input1);
			tableData2.appendChild(button1);

			row.appendChild(tableData1);
			row.appendChild(tableData2);

			row.setAttribute("id", `item-4-${item4}`);

			item4++;

			body.appendChild(row);
		});
	}

	var loadActivities = new XMLHttpRequest();
	loadActivities.open("POST", "load.activities.php");
	loadActivities.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	loadActivities.send("id="+id);
	loadActivities.onload = function() {
		var datas = JSON.parse(this.responseText);
		var e = 1;
		var id2 = datas[0]['linkages_implementation_plan_id'];
		datas.forEach((data)=>{
			if(data['linkages_implementation_plan_id'] != id2) {
				id2 = data['linkages_implementation_plan_id'];
				e++;
			}

			document.getElementById(`activity-total-${e}`).value = parseInt(document.getElementById(`activity-total-${e}`).value) + 1;

			var body = document.getElementById(`activity-${e}`);
			var row = document.createElement("tr");
			var tableData1 = document.createElement("td");
			var tableData2 = document.createElement("td");
			var input1 = document.createElement("input");
			var button1 = document.createElement("button");
			var buttonIcon1 = document.createElement("i");

			input1.setAttribute("class", "form-control");
			input1.setAttribute("type", "text");
			input1.setAttribute("name", "activity[]");
			input1.setAttribute("required", "");
			input1.setAttribute("value", data['activity']);

			button1.setAttribute("type", "button");
			button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
			button1.setAttribute("onclick", `removeItem5(${item5}, ${e})`);

			buttonIcon1.setAttribute("class", "fas fa-trash");

			button1.appendChild(buttonIcon1);

			tableData1.appendChild(input1);
			tableData2.appendChild(button1);

			row.appendChild(tableData1);
			row.appendChild(tableData2);

			row.setAttribute("id", `item-5-${item5}`);

			item5++;

			body.appendChild(row);
		});
	}
}

var loadPAP = new XMLHttpRequest();
loadPAP.open("POST", "load.pap.php");
loadPAP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadPAP.send("id="+id);
loadPAP.onload = function() {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var body = document.getElementById("program-activity-projects-body");
		var row = document.createElement("tr");
		var tableData1 = document.createElement("td");
		var tableData2 = document.createElement("td");
		var input1 = document.createElement("input");
		var button1 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");

		input1.setAttribute("class", "form-control");
		input1.setAttribute("type", "text");
		input1.setAttribute("name", "program-activity-projects[]");
		input1.setAttribute("required", "");
		input1.setAttribute("value", data['project']);

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
		button1.setAttribute("onclick", `removeItem6(${item6})`);

		buttonIcon1.setAttribute("class", "fas fa-trash");

		button1.appendChild(buttonIcon1);

		tableData1.appendChild(input1);
		tableData2.appendChild(button1);

		row.appendChild(tableData1);
		row.appendChild(tableData2);

		row.setAttribute("id", `item-6-${item6}`);

		item6++;

		body.appendChild(row);
	});
}

var loadStrat = new XMLHttpRequest();
loadStrat.open("POST", "load.strat.php");
loadStrat.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadStrat.send("id="+id);
loadStrat.onload = function () {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var body = document.getElementById("strategy-medium-body");
		var row = document.createElement("tr");
		var tableData1 = document.createElement("td");
		var tableData2 = document.createElement("td");
		var input1 = document.createElement("input");
		var button1 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");

		input1.setAttribute("class", "form-control");
		input1.setAttribute("type", "text");
		input1.setAttribute("name", "strategy-medium[]");
		input1.setAttribute("required", "");
		input1.setAttribute("value", data['strategy']);

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
		button1.setAttribute("onclick", `removeItem7(${item7})`);

		buttonIcon1.setAttribute("class", "fas fa-trash");

		button1.appendChild(buttonIcon1);

		tableData1.appendChild(input1);
		tableData2.appendChild(button1);

		row.appendChild(tableData1);
		row.appendChild(tableData2);

		row.setAttribute("id", `item-7-${item7}`);

		item7++;

		body.appendChild(row);
	});
}
var loadAud = new XMLHttpRequest();
loadAud.open("POST", "load.aud.php");
loadAud.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadAud.send("id="+id);
loadAud.onload = function () {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var body = document.getElementById("target-audience-body");
		var row = document.createElement("tr");
		var tableData1 = document.createElement("td");
		var tableData2 = document.createElement("td");
		var input1 = document.createElement("input");
		var button1 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");

		input1.setAttribute("class", "form-control");
		input1.setAttribute("type", "text");
		input1.setAttribute("name", "target-audience[]");
		input1.setAttribute("required", "");
		input1.setAttribute("value", data['audience']);

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
		button1.setAttribute("onclick", `removeItem8(${item8})`);

		buttonIcon1.setAttribute("class", "fas fa-trash");

		button1.appendChild(buttonIcon1);

		tableData1.appendChild(input1);
		tableData2.appendChild(button1);

		row.appendChild(tableData1);
		row.appendChild(tableData2);

		row.setAttribute("id", `item-8-${item8}`);

		item8++;

		body.appendChild(row);
	});
}

var loadTiming = new XMLHttpRequest();
loadTiming.open("POST", "load.timing.php");
loadTiming.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadTiming.send("id="+id);
loadTiming.onload = function () {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var body = document.getElementById("timing-frequency-body");
		var row = document.createElement("tr");
		var tableData1 = document.createElement("td");
		var tableData2 = document.createElement("td");
		var input1 = document.createElement("input");
		var button1 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");

		input1.setAttribute("class", "form-control");
		input1.setAttribute("type", "text");
		input1.setAttribute("name", "timing-frequency[]");
		input1.setAttribute("required", "");
		input1.setAttribute("value", data['timing']);

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
		button1.setAttribute("onclick", `removeItem9(${item9})`);

		buttonIcon1.setAttribute("class", "fas fa-trash");

		button1.appendChild(buttonIcon1);

		tableData1.appendChild(input1);
		tableData2.appendChild(button1);

		row.appendChild(tableData1);
		row.appendChild(tableData2);

		row.setAttribute("id", `item-9-${item9}`);

		item9++;

		body.appendChild(row);
	});
}

var loadOutcome = new XMLHttpRequest();
loadOutcome.open("POST", "load.outcome.php");
loadOutcome.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
loadOutcome.send("id="+id);
loadOutcome.onload = function () {
	var datas = JSON.parse(this.responseText);
	datas.forEach((data)=>{
		var body = document.getElementById("outcomes-body");
		var row = document.createElement("tr");
		var tableData1 = document.createElement("td");
		var tableData2 = document.createElement("td");
		var input1 = document.createElement("input");
		var button1 = document.createElement("button");
		var buttonIcon1 = document.createElement("i");

		input1.setAttribute("class", "form-control");
		input1.setAttribute("type", "text");
		input1.setAttribute("name", "outcomes[]");
		input1.setAttribute("required", "");
		input1.setAttribute("value", data['outcome']);

		button1.setAttribute("type", "button");
		button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
		button1.setAttribute("onclick", `removeItem10(${item10})`);

		buttonIcon1.setAttribute("class", "fas fa-trash");

		button1.appendChild(buttonIcon1);

		tableData1.appendChild(input1);
		tableData2.appendChild(button1);

		row.appendChild(tableData1);
		row.appendChild(tableData2);

		row.setAttribute("id", `item-10-${item10}`);

		item10++;

		body.appendChild(row);
	});
}

document.getElementById("add-button-1").addEventListener("click", function() {
	var area = document.getElementById("area-1");
	var tableRow = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var tableData3 = document.createElement("td");
	var input1 = document.createElement("input");
	var input2 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input2.setAttribute("class", "form-control");

	input1.setAttribute("type", "text");
	input2.setAttribute("type", "text");

	input1.setAttribute("name", "personnel[]");
	input2.setAttribute("name", "officials[]");

	input1.setAttribute("required", "");
	input2.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem1(${item1})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(input2);
	tableData3.appendChild(button1);

	tableRow.appendChild(tableData1);
	tableRow.appendChild(tableData2);
	tableRow.appendChild(tableData3);

	tableRow.setAttribute("id", `item-1-${item1}`);

	item1++;

	area.appendChild(tableRow);
});

function removeItem1(e) {
	document.getElementById(`item-1-${e}`).remove();
}

document.getElementById("add-button-2").addEventListener("click", function() {
	var area = document.getElementById("area-2");
	var tableRow = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "resources[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem2(${item1})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	tableRow.appendChild(tableData1);
	tableRow.appendChild(tableData2);

	tableRow.setAttribute("id", `item-2-${item1}`);

	item1++;

	area.appendChild(tableRow);
});

function removeItem2(e) {
	document.getElementById(`item-2-${e}`).remove();
}

document.getElementById("add-button-3").addEventListener("click", function() {
	var area = document.getElementById("area-3");
	var div = document.createElement("div");
	var input1 = document.createElement("input");
	var input2 = document.createElement("input");
	var table1 = document.createElement("table");
	var table2 = document.createElement("table");
	var tableHead1 = document.createElement("thead");
	var tableHead2 = document.createElement("thead");
	var tablebody1 = document.createElement("tbody");
	var tablebody2 = document.createElement("tbody");
	var tableRow1 = document.createElement("tr");
	var tableRow2 = document.createElement("tr");
	var tableHeader1 = document.createElement("th");
	var tableHeader2 = document.createElement("th");
	var tableHeader3 = document.createElement("th");
	var tableHeader4 = document.createElement("th");
	var button1 = document.createElement("button");
	var button2 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");
	var buttonIcon2 = document.createElement("i");

	implementation++;

	buttonIcon1.setAttribute("class", "fas fa-plus");
	buttonIcon1.setAttribute("style", "");
	buttonIcon1.style.color = "#1dbf1d";

	buttonIcon2.setAttribute("class", "fas fa-plus");
	buttonIcon2.setAttribute("style", "");
	buttonIcon2.style.color = "#1dbf1d";

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-primary btn-circle btn-sm");
	button1.setAttribute("style", "");
	button1.setAttribute("onclick", `addYear(${implementation})`);
	button1.style.marginLeft = "1px";
	button1.style.background = "white";
	button1.appendChild(buttonIcon1);

	button2.setAttribute("type", "button");
	button2.setAttribute("class", "btn btn-primary btn-circle btn-sm");
	button2.setAttribute("style", "");
	button2.setAttribute("onclick", `addActivity(${implementation})`);
	button2.style.marginLeft = "1px";
	button2.style.background = "white";
	button2.appendChild(buttonIcon2);

	tableHeader4.setAttribute("class", "col-md-1");
	tableHeader4.setAttribute("style", "");
	tableHeader4.style.paddingLeft = "0px";
	tableHeader4.appendChild(button2);

	tableHeader2.setAttribute("class", "col-md-1");
	tableHeader2.setAttribute("style", "");
	tableHeader2.style.paddingLeft = "0px";
	tableHeader2.appendChild(button1);

	tableHeader1.setAttribute("class", "col-md-11");
	tableHeader1.setAttribute("style", "");
	tableHeader1.style.textAlign = "left";
	tableHeader1.innerHTML = "Year";

	tableHeader3.setAttribute("class", "col-md-11");
	tableHeader3.setAttribute("style", "");
	tableHeader3.style.textAlign = "left";
	tableHeader3.innerHTML = "Activities";

	tableRow1.appendChild(tableHeader1);
	tableRow1.appendChild(tableHeader2);

	tableRow2.appendChild(tableHeader3);
	tableRow2.appendChild(tableHeader4);

	tableHead1.appendChild(tableRow1);

	tableHead2.appendChild(tableRow2);

	tablebody1.setAttribute("id", `year-${implementation}`);
	tablebody2.setAttribute("id", `activity-${implementation}`);

	table1.setAttribute("class", "table")
	table2.setAttribute("class", "table")

	table1.appendChild(tableHead1);
	table1.appendChild(tablebody1);

	table2.appendChild(tableHead2);
	table2.appendChild(tablebody2);

	input1.setAttribute("value", `0`);
	input2.setAttribute("value", `0`);

	input1.setAttribute("type", "hidden");
	input2.setAttribute("type", "hidden");

	input1.setAttribute("id", `year-total-${implementation}`);
	input2.setAttribute("id", `activity-total-${implementation}`);

	input1.setAttribute("name", "year-total[]");
	input2.setAttribute("name", "activity-total[]");

	div.appendChild(input1);
	div.appendChild(input2);
	div.appendChild(table1);
	div.appendChild(table2);

	item3++;

	div.setAttribute("id", `item-3-${item3}`);

	area.appendChild(div);
});

function removeItem3() {
	document.getElementById(`item-3-${item3}`).remove();
	item3--;
}

function addYear(e) {
	document.getElementById(`year-total-${e}`).value = parseInt(document.getElementById(`year-total-${e}`).value) + 1;

	var body = document.getElementById(`year-${e}`);
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "year[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem4(${item4}, ${e})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	row.setAttribute("id", `item-4-${item4}`);

	item4++;

	body.appendChild(row);
}

function removeItem4(e, r) {
	document.getElementById(`year-total-${r}`).value = parseInt(document.getElementById(`year-total-${r}`).value) - 1;
	document.getElementById(`item-4-${e}`).remove();
}

function addActivity(e) {
	document.getElementById(`activity-total-${e}`).value = parseInt(document.getElementById(`activity-total-${e}`).value) + 1;

	var body = document.getElementById(`activity-${e}`);
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "activity[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem5(${item5}, ${e})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	row.setAttribute("id", `item-5-${item5}`);

	item5++;

	body.appendChild(row);
}

function removeItem5(e, r) {
	document.getElementById(`activity-total-${r}`).value = parseInt(document.getElementById(`activity-total-${r}`).value) - 1;
	document.getElementById(`item-5-${e}`).remove();
}

document.getElementById("program-activity-projects").addEventListener("click", function() {
	var body = document.getElementById("program-activity-projects-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "program-activity-projects[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem6(${item6})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	row.setAttribute("id", `item-6-${item6}`);

	item6++;

	body.appendChild(row);
});

function removeItem6(e) {
	document.getElementById(`item-6-${e}`).remove();
}

document.getElementById("strategy-medium").addEventListener("click", function() {
	var body = document.getElementById("strategy-medium-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "strategy-medium[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem7(${item7})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	row.setAttribute("id", `item-7-${item7}`);

	item7++;

	body.appendChild(row);
});

function removeItem7(e) {
	document.getElementById(`item-7-${e}`).remove();
}

document.getElementById("target-audience").addEventListener("click", function() {
	var body = document.getElementById("target-audience-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "target-audience[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem8(${item8})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	row.setAttribute("id", `item-8-${item8}`);

	item8++;

	body.appendChild(row);
});

function removeItem8(e) {
	document.getElementById(`item-8-${e}`).remove();
}

document.getElementById("timing-frequency").addEventListener("click", function() {
	var body = document.getElementById("timing-frequency-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "timing-frequency[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem9(${item9})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	row.setAttribute("id", `item-9-${item9}`);

	item9++;

	body.appendChild(row);
});

function removeItem9(e) {
	document.getElementById(`item-9-${e}`).remove();
}


document.getElementById("outcomes").addEventListener("click", function() {
	var body = document.getElementById("outcomes-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");
	var button1 = document.createElement("button");
	var buttonIcon1 = document.createElement("i");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "outcomes[]");
	input1.setAttribute("required", "");

	button1.setAttribute("type", "button");
	button1.setAttribute("class", "btn btn-danger shadow btn-circle btn-sm");
	button1.setAttribute("onclick", `removeItem10(${item10})`);

	buttonIcon1.setAttribute("class", "fas fa-trash");

	button1.appendChild(buttonIcon1);

	tableData1.appendChild(input1);
	tableData2.appendChild(button1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	row.setAttribute("id", `item-10-${item10}`);

	item10++;

	body.appendChild(row);
});

function removeItem10(e) {
	document.getElementById(`item-10-${e}`).remove();
}