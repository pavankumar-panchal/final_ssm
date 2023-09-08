<!DOCTYPE html>
<html>

<head>
    <!-- Add your meta tags, title, and other headers here if needed -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Additional CSS if required -->
    <style>
        /* Add any additional custom CSS here */
        body {
            background-color: #fff;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            /* border: 1px solid #6393df; */
            border-top: none;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .mt-4 {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-4 bg-light">
        <h4 class="" style="padding:10px 30px 10px 30px; cursor:pointer" onclick="showhide('maindiv','toggleimg');">
            &nbsp;&nbsp;Enter the Details</h4>
        <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
            <div id="maindiv" style="display: block;">
                <table class="table table-bordered bg-light">
                    <tbody>
                        <tr>
                            <td style="border-right:1px solid #c2cad4;">
                                <div class="form-group">
                                    <label for="fromdate">From Date:</label>
                                    <input name="fromdate" type="date" class="form-control swifttext" id="DPC_fromdate"
                                        size="30" autocomplete="off" value="" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="form-group">
                                    <label for="todate">To Date:</label>
                                    <input name="todate" type="date" class="form-control swifttext" id="DPC_todate"
                                        size="30" autocomplete="off" value="" datepicker_format="DD-MM-YYYY"
                                        maxlength="10" isdatepicker="true">
                                </div>
                                <div class="form-group">
                                    <label for="s_productgroup">Product group:</label>
                                    <select name="s_productgroup" class="form-control swiftselect" id="s_productgroup"
                                        onchange="">
                                        <option value="" selected="selected">Make a Selection</option>
                                        <option value="null">null</option>
                                        <option value="pro">pro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="productname">Product Name:</label>
                                    <select name="productname" id="productname" class="form-control swiftselect">
                                        <option value="">Make A Selection</option>
                                        <option value="2">null</option>
                                        <option value="1">products</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="errorreported">Requirement Description:</label>
                                    <input name="errorreported" type="text" class="form-control swifttext"
                                        id="errorreported" size="30" autocomplete="off" isdatepicker="true">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select name="status" id="status" class="form-control swiftselect">
                                        <option value="">Make A Selection</option>
                                        <option value="solved">Solved</option>
                                        <option value="unsolved">Un Solved</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="userid">Entered By:</label>
                                    <select name="userid" id="userid" class="form-control swiftselect">
                                        <option value="">ALL</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reportedto">Reported To:</label>
                                    <input name="reportedto" type="text" class="form-control swifttext" id="reportedto"
                                        size="30" autocomplete="off" isdatepicker="true">
                                </div>
                                <div class="form-group">
                                    <label for="customername">Reported By:</label>
                                    <input name="customername" type="text" class="form-control swifttext"
                                        id="customername" size="30" autocomplete="off" isdatepicker="true">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right" valign="middle"
                                style="padding-right:15px; border-top:1px solid #d1dceb;">
                                <div class="form-group">
                                    <div id="form-error"></div>
                                </div>
                                <button name="view" type="submit" class="btn btn-primary" id="view"
                                    onclick="formsubmit();">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and any additional scripts if required -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your JavaScript code and any additional scripts if required -->
    <script>
    // Your JavaScript functions and code here
    </script>
</body>

</html>