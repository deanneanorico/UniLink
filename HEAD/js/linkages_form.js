var item1 = 1;
var implementation = 1;

document.getElementById("add-button-1").addEventListener("click", function() {
	var area = document.getElementById("area-1");
	var tableRow = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var tableData3 = document.createElement("td");
	var input1 = document.createElement("input");
	var input2 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input2.setAttribute("class", "form-control");

	input1.setAttribute("type", "text");
	input2.setAttribute("type", "text");

	input1.setAttribute("name", "personnel[]");
	input2.setAttribute("name", "officials[]");

	input1.setAttribute("required", "");
	input2.setAttribute("required", "");

	tableData1.appendChild(input1);
	tableData2.appendChild(input2);

	tableRow.appendChild(tableData1);
	tableRow.appendChild(tableData2);
	tableRow.appendChild(tableData3);

	area.appendChild(tableRow);
});

document.getElementById("add-button-2").addEventListener("click", function() {
	var area = document.getElementById("area-2");
	var tableRow = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "resources[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	tableRow.appendChild(tableData1);
	tableRow.appendChild(tableData2);

	area.appendChild(tableRow);
});

document.getElementById("add-button-3").addEventListener("click", function() {
	var area = document.getElementById("area-3");
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

	area.appendChild(input1);
	area.appendChild(input2);
	area.appendChild(table1);
	area.appendChild(table2);
});

function addYear(e) {
	document.getElementById(`year-total-${e}`).value = parseInt(document.getElementById(`year-total-${e}`).value) + 1;

	var body = document.getElementById(`year-${e}`);
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "year[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	body.appendChild(row);
}

function addActivity(e) {
	document.getElementById(`activity-total-${e}`).value = parseInt(document.getElementById(`activity-total-${e}`).value) + 1;

	var body = document.getElementById(`activity-${e}`);
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "activity[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	body.appendChild(row);
}

document.getElementById("program-activity-projects").addEventListener("click", function() {
	var body = document.getElementById("program-activity-projects-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "program-activity-projects[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	body.appendChild(row);
});

document.getElementById("strategy-medium").addEventListener("click", function() {
	var body = document.getElementById("strategy-medium-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "strategy-medium[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	body.appendChild(row);
});

document.getElementById("target-audience").addEventListener("click", function() {
	var body = document.getElementById("target-audience-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "target-audience[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	body.appendChild(row);
});

document.getElementById("timing-frequency").addEventListener("click", function() {
	var body = document.getElementById("timing-frequency-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "timing-frequency[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	body.appendChild(row);
});

document.getElementById("outcomes").addEventListener("click", function() {
	var body = document.getElementById("outcomes-body");
	var row = document.createElement("tr");
	var tableData1 = document.createElement("td");
	var tableData2 = document.createElement("td");
	var input1 = document.createElement("input");

	input1.setAttribute("class", "form-control");
	input1.setAttribute("type", "text");
	input1.setAttribute("name", "outcomes[]");
	input1.setAttribute("required", "");

	tableData1.appendChild(input1);

	row.appendChild(tableData1);
	row.appendChild(tableData2);

	body.appendChild(row);
});