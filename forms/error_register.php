<?php

include("../navigation/navigation.php");

?>

<body>

    <div class="container mt-5">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light" onclick="showhide('maindiv','toggleimg');">
                <div class="d-flex justify-content-between">
                    <div class="py-2">&nbsp;&nbsp;Enter/Edit/View Details</div>
                    <div class="py-2">
                        <div><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                                align="absmiddle"></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                    <div class="display">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-white p-2 ">
                                    <label for="anonymous">Anonymous:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="anonymous"
                                            id="databasefield11" value="yes">
                                        <label class="form-check-label" for="databasefield11">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="anonymous"
                                            id="databasefield12" value="no">
                                        <label class="form-check-label" for="databasefield12">No</label>
                                    </div>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="reported-by">Reported By:</label>
                                    <input name="reported-by" type="text" class="form-control" id="reported-by"
                                        autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="date">Date:</label>
                                    <input name="date" type="date" class="form-control" id="date" autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="time">Time:</label>
                                    <input name="time" type="time" class="form-control" id="time" autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="state">State:</label>
                                    <select name="state" class="form-select swiftselect form-control" id="state"
                                        onchange="">
                                        <option value="" selected="selected">Make a Selection</option>
                                        <!-- Add state options here -->
                                    </select>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="product-group">Product Group:</label>
                                    <select name="product-group" class="form-select swiftselect form-control"
                                        id="product-group" onchange="">
                                        <option value="" selected="selected">Make a Selection</option>
                                        <!-- Add product group options here -->
                                    </select>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="product-name">Product Name (Optional):</label>
                                    <select name="product-name" class="form-select swiftselect form-control"
                                        id="product-name" onchange="">
                                        <option value="" selected="selected">Make a Selection</option>
                                        <!-- Add product name options here -->
                                    </select>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="product-version">Product Version:</label>
                                    <select name="product-version" class="form-select swiftselect form-control"
                                        id="product-version" onchange="">
                                        <option value="" selected="selected">Make a Selection</option>
                                        <!-- Add product version options here -->
                                    </select>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="database">Database:</label>
                                    <select name="database" class="form-select swiftselect form-control" id="database"
                                        onchange="">
                                        <option value="" selected="selected">Make a Selection</option>
                                        <!-- Add database options here -->
                                    </select>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="status">Status:</label>
                                    <select name="status" class="form-select swiftselect form-control" id="status"
                                        onchange="">
                                        <option value="" selected="selected">Make a Selection</option>
                                        <!-- Add status options here -->
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="bg-white p-2 ">
                                    <label for="solved-date">Solved Date:</label>
                                    <input name="solved-date" type="date" class="form-control" id="solved-date"
                                        autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="solution-given">Solution Given:</label>
                                    <textarea name="solution-given" cols="45" class="form-control" id="solution-given"
                                        data-gramm="false" wt-ignore-input="true"></textarea>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="solution-entered-time">Solution Entered Time:</label>
                                    <input name="solution-entered-time" type="text" class="form-control"
                                        id="solution-entered-time" autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="solution-file">Solution File:</label>
                                    <input name="solution-file" type="file" class="form-control" id="solution-file"
                                        autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="remarks">Remarks:</label>
                                    <textarea name="remarks" cols="45" class="form-control" id="remarks"
                                        data-gramm="false" wt-ignore-input="true"></textarea>
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="entered-by">Entered By:</label>
                                    <input name="entered-by" type="text" class="form-control swifttext" id="entered-by"
                                        autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="email-id">Email ID:</label>
                                    <input name="email-id" type="email" class="form-control swifttext" id="email-id"
                                        autocomplete="off">
                                </div>
                                <div class="bg-white p-2 ">
                                    <label for="error-reported">Error Reported:</label>
                                    <textarea name="error-reported" cols="45" class="form-control" id="error-reported"
                                        data-gramm="false" wt-ignore-input="true"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-end">
                                <button name="new" type="submit" class="btn btn-secondary m-2" id="new"
                                    onclick="formsubmit('new');">New</button>
                                <button name="save" type="submit" class="btn btn-primary m-2" id="save"
                                    onclick="formsubmit('save');">Save</button>
                                <button name="delete" type="submit" class="btn btn-danger m-2" id="delete"
                                    onclick="formsubmit('delete');">Delete</button>
                                <button name="error-report" type="submit" class="btn btn-warning m-2" id="error-report"
                                    onclick="formsubmit('error-report');">Error Report</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container mt-4">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light d-flex justify-content-between" onclick="showhide('maindiv','toggleimg');">
                <div>&nbsp;&nbsp;Enter/Edit/View Details:</div>
            </div>
            <div class="card-body">
                <div id="maindiv" style="display: block;">
                    <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                        <div class="display">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="bg-white p-2">
                                        <label for="date">Date:</label>
                                        <input name="customerid" type="date" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="date">Time:</label>
                                        <input name="customerid" type="time" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="anonymous">Anonymous:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="databasefield11" value="yes">
                                            <label class="form-check-label" for="databasefield11">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="databasefield12" value="no">
                                            <label class="form-check-label" for="databasefield12">No</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="databasefield13" value="both">
                                            <label class="form-check-label" for="databasefield13">Both</label>
                                        </div>
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by">State:</label>
                                        <select name="solvedby" id="solvedby" class="form-control form-select">
                                            <option value="">ALL</option>
                                            <!-- Add other options here -->
                                        </select>
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by"> Reported By:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by">Product Group:</label>
                                        <select name="solvedby" id="solvedby" class="form-control form-select">
                                            <option value="">ALL</option>
                                            <!-- Add other options here -->
                                        </select>
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by">Product Name:</label>
                                        <select name="solvedby" id="solvedby" class="form-control form-select">
                                            <option value="">ALL</option>
                                            <!-- Add other options here -->
                                        </select>
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by"> Error Reported :</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by"> Reported To:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by">Error File:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>

                                    <!-- More input fields... -->
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-white p-2">
                                        <label for="reported-by">Status:</label>
                                        <select name="solvedby" id="solvedby" class="form-control form-select">
                                            <option value="">ALL</option>
                                            <!-- Add other options here -->
                                        </select>
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="date">Solved Date:</label>
                                        <input name="customerid" type="date" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="time">Solution Given:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="time">Solution File:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="time">Remarks:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="time">Entered By:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="time">Error ID:</label>
                                        <input name="customerid" type="text" class="form-control" id="customername"
                                            size="20" autocomplete="off" isdatepicker="true">
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="anonymous">Flags:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="databasefield11" value="yes">
                                            <label class="form-check-label" for="databasefield11">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="databasefield12" value="no">
                                            <label class="form-check-label" for="databasefield12">No</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="databasefield13" value="both">
                                            <label class="form-check-label" for="databasefield13">Both</label>
                                        </div>
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by">Support Unit:</label>
                                        <select name="solvedby" id="solvedby" class="form-control form-select">
                                            <option value="">ALL</option>
                                            <!-- Add other options here -->
                                        </select>
                                    </div>
                                    <div class="bg-white p-2">
                                        <label for="reported-by">Order By:</label>
                                        <select name="solvedby" id="solvedby" class="form-control form-select">
                                            <option value="callertype">Caller Type
                                            </option>
                                            <option value="category">Category</option>
                                            <option value="compliantid" selected="selected">Compliant ID
                                            </option>
                                            <option value="customerid">Customer ID
                                            </option>
                                            <option value="customername">Registered Name
                                            </option>
                                            <option value="date">Date</option>
                                            <option value="userid">Entered By</option>
                                            <option value="problem">Problem</option>
                                            <option value="productgroup">Product Group
                                            </option>
                                            <option value="productname">Product Name
                                            </option>
                                            <option value="status">Status</option>
                                            <option value="callcategory">Call Category
                                            </option>
                                            <option value="transferredto">Transferred To
                                            </option>
                                            <option value="time">Time</option>
                                        </select>
                                    </div>
                                    <!-- More input fields... -->
                                </div>
                            </div>
                            <!-- More rows... -->
                        </div>
                        <div class="container ">
                            <div class="row">

                                <div class="col-md-12 float-right" align="right">
                                    <button name="new" type="submit" class="btn btn-secondary m-2" id="view"
                                        onclick="formsubmit('toview');">New</button>
                                    <button name="save" type="submit" class="btn btn-primary m-2" id="view"
                                        onclick="formsubmit('toview');">Save</button>
                                    <button name="delete" type="submit" class="btn btn-danger m-2" id="toexcel"
                                        onclick="formsubmit('toexcel');">Delete</button>
                                    <button name="error-report" type="submit" class="btn btn-warning m-2" id="toexcel"
                                        onclick="formsubmit('toexcel');">Error Report</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="tab container"
            style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); border-radius: 10px; padding: 10px;">
            <span id="toggleButton" class="btn btn-primary btn-sm mb-3 float-end">Default/Flagged</span>
            <div class="table-container1">
                <h2 class="mb-3">Default</h2>
                <div id="tableContainer1"></div>
            </div>
            <div class="table-container2" style="display: none;">
                <h2 class="mb-3">Flagged</h2>
                <div id="tableContainer2"></div>
            </div>
        </div>
    </div>

    <script>
        const data1 = [
            ["1", "first", "Address 1", "123456789", "john@example.com", "Contact 1", /* ... */],
            ["2", "Jane Smith", "Address 2", "987654321", "jane@example.com", "Contact 2", /* ... */],
            // Add more rows here...
        ];

        const data2 = [
            ["1", "second", "Address 1", "123456789", "john@example.com", "Contact 1", /* ... */],
            ["2", "Jane Smith", "Address 2", "987654321", "jane@example.com", "Contact 2", /* ... */],
            // Add more rows here...
        ];

        const columns = [
            "Sl No",
            "Flag",
            "Call Type",
            "Date",
            "Start Time",
            "End Time",
            "Duration",
            "User Id",
            "Anonymous",
            "Customer ID",
            "Customer Name",
            "Person Name",
            "Category",
            "State",
            "Caller Type",
            "Product Group",
            "Product Name",
            "Product Version",
            "Problem",
            "Remarks",
            "Status",
            "Remote Connection",
            "Compliant ID",
            "Authorized",
            "Authorized Group",
            "Team Leader Remarks",
            "Authorized Person",
            "Authorized Date&amp",
            "Time",
            "Call Category",
        ];

        // Create both tables
        const table1 = new gridjs.Grid({
            columns: columns.map((col) => ({ name: col })),
            data: data1,
            pagination: true,
            search: true,
            sort: true,
            language: {
                search: {
                    placeholder: 'Search...'
                },
                pagination: {
                    previous: 'Previous',
                    next: 'Next',
                    showing: 'Showing',
                    results: () => 'Records'
                }
            }
        });

        const table2 = new gridjs.Grid({
            columns: columns.map((col) => ({ name: col })),
            data: data2,
            pagination: true,
            search: true,
            sort: true,
            language: {
                search: {
                    placeholder: 'Search...'
                },
                pagination: {
                    previous: 'Previous',
                    next: 'Next',
                    showing: 'Showing',
                    results: () => 'Records'
                }
            }
        });

        // Render the initial table (table1)
        const tableContainer1 = document.getElementById('tableContainer1');
        table1.render(tableContainer1);

        // Add event listener to the toggle button
        document.getElementById('toggleButton').addEventListener('click', function () {

            const tableContainer1 = document.querySelector('.table-container1');
            const tableContainer2 = document.querySelector('.table-container2');

            // Toggle between tables
            if (tableContainer1.style.display === 'none') {
                tableContainer1.style.display = 'block';
                tableContainer2.style.display = 'none';
                table2.destroy();
                table1.render(tableContainer1.querySelector('#tableContainer1'));
            } else {
                tableContainer1.style.display = 'none';
                tableContainer2.style.display = 'block';
                table1.destroy();
                table2.render(tableContainer2.querySelector('#tableContainer2'));
            }
        });
    </script>
    <?php

    include("../navigation/footer.php");

    ?>