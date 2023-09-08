<?php

include("../navigation/navigation.php");

?>


<body>



    <div class="container mt-5">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light d-flex justify-content-between" onclick="showhide('maindiv','toggleimg');">
                <div>&nbsp;&nbsp;Enter/Edit/View Details</div>
            </div>
            <div class="card-body">
                <div id="maindiv" style="display: block;">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <div class="display">
                                    <div class="mb-3">
                                        <label class="form-label mt-2">Anonymous:</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="anonymous-yes" value="yes">
                                            <label class="form-check-label" for="anonymous-yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="anonymous"
                                                id="anonymous-no" value="no">
                                            <label class="form-check-label" for="anonymous-no">No</label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Registered Name:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Customer Id:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Date:</label>
                                        <input name="customername" type="date" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Time:</label>
                                        <input name="customername" type="time" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Category:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">State:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Caller Type:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Product Group[Optional]:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Product Name:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Product Version:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Contact Person:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Problem:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Service Charge:</label>
                                        <input class="form-check-input" type="checkbox" name="anonymous"
                                            id="databasefield11">
                                    </div>




                                    <!-- More input fields -->
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                                <div class="display">
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Status:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Support Units:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Assigned By:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="state" class="form-label">Solved By:</label>
                                        <select name="s_productgroup" class="form-select swiftselect form-control"
                                            id="s_productgroup">
                                            <option value="" selected="selected">ALL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Solved Through:</label> <br>
                                        <label><input name="stremoteconnection" id="stremoteconnection" type="checkbox"
                                                value=""> Remote Connection
                                        </label> <br> <label><input name="marketingperson" id="marketingperson"
                                                type="checkbox" value=""> Marketing Person
                                        </label> <br> <label><input name="onsitevisit" id="onsitevisit" type="checkbox"
                                                value=""> Onsite Visit </label><br>
                                        <label><input name="overphone" id="overphone" type="checkbox" value=""> Over
                                            Phone
                                        </label> <br> <label><input name="mail" id="mail" type="checkbox" value=""> Mail
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Solved Date:</label>
                                        <input name="customername" type="date" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Bill Number:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="caller-type" class="form-label">Bill Date:</label>
                                        <input name="customername" type="date" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Acknowledgement Number:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Remarks:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Entered By:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="registered-name" class="form-label">Compliant ID:</label>
                                        <input name="customername" type="text" class="form-control" id="customername"
                                            autocomplete="off">
                                    </div>


                                    <!-- More input fields -->
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12 float-right text-end">
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
                </div>
            </div>
        </div>
    </div>








    <div class="container mt-4">
        <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
            <div class="card-header bg-light d-flex justify-content-between" onclick="showhide('maindiv','toggleimg');">
                <div>Filter the Data:</div>
                <div>
                    <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
                </div>
            </div>
            <div class="card-body">
                <div id="maindiv" style="display: block;">
                    <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="from-date" class="form-label">From Date:</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="from-date" class="form-label">T Date:</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Anonymous:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anonymous" id="anonymous-yes"
                                            value="yes">
                                        <label class="form-check-label" for="anonymous-yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anonymous" id="anonymous-no"
                                            value="no">
                                        <label class="form-check-label" for="anonymous-no">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="anonymous"
                                            id="anonymous-both" value="both">
                                        <label class="form-check-label" for="anonymous-both">Both</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="customer-name" class="form-label">Customer Name:</label>
                                    <input name="complaintid" type="text" class="form-control swifttext"
                                        id="complaintid" size="30" autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="customer-name" class="form-label">Customer ID:</label>
                                    <input name="complaintid" type="text" class="form-control swifttext"
                                        id="complaintid" size="30" autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="categoryblr"
                                            id="categoryblr" value="" checked>
                                        <label class="form-check-label" for="categoryblr">BLR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="categorycsd"
                                            id="categorycsd" value="" checked>
                                        <label class="form-check-label" for="categorycsd">CSD</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="categorykkg"
                                            id="categorykkg" value="" checked>
                                        <label class="form-check-label" for="categorykkg">KKG</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="state" class="form-label">State:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Caller Type:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_customer"
                                            id="s_customer" value="Customer" checked="checked">
                                        <label class="form-check-label" for="s_customer">Customers</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_dealer" id="s_dealer"
                                            value="Dealer" checked="checked">
                                        <label class="form-check-label" for="s_dealer">Dealers</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_employee"
                                            id="s_employee" value="employee" checked="checked">
                                        <label class="form-check-label" for="s_employee">Employees</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="s_ssmuser" id="s_ssmuser"
                                            value="SSMUser" checked="checked">
                                        <label class="form-check-label" for="s_ssmuser">SSM Users</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Product Group:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Product Name:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="state" class="form-label">Problem:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">

                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Status:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="state" class="form-label">Solved By:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Solved Date</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" value="21-07-2023" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Bill Date:</label>
                                    <input name="fromdate" type="date" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Bill Number:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">
                                </div>

                                <div class="mb-3">
                                    <label for="state" class="form-label">Acknowledgement Number:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Entered By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Compliant ID:</label>
                                    <input name="fromdate" type="text" class="form-control" id="DPC_fromdate" size="30"
                                        autocomplete="off" datepicker_format="DD-MM-YYYY" maxlength="10"
                                        isdatepicker="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Flags:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Flags" id="anonymous-yes"
                                            value="yes">
                                        <label class="form-check-label" for="anonymous-yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Flags" id="anonymous-no"
                                            value="no">
                                        <label class="form-check-label" for="anonymous-no">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Flags" id="anonymous-both"
                                            value="both">
                                        <label class="form-check-label" for="anonymous-both">Both</label>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="state" class="form-label">Support Unit:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">Order By:</label>
                                    <select name="productname" id="productname"
                                        class="form-select form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>

                                <!-- More fields in the right column -->
                            </div>
                        </div>

                        <div class="container  mt-2">
                            <div class="row">
                                <div class="col-md-12 float-right text-end">
                                    <button name="view" type="submit" class="btn btn-primary m-2" id="view"
                                        onclick="formsubmit('toview');">View</button>
                                    <button name="toexcel" type="submit" class="btn btn-info m-2" id="toexcel"
                                        onclick="formsubmit('toexcel');">To Excel</button>
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