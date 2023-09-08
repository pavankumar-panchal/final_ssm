<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('../inc/navigation.php');
include('../inc/includefiles.php');
include('../inc/checktype.php');
include('../inc/teamchart.php');
/*if($_GET['a_link'] == 'logout')
  include('../inc/logout.php');*/

$localdate = datetimelocal('d-m-Y');
$localtime = datetimelocal('H:i:s');
$monthnum = date('n');
// logged in Users
include('../inc/membersloggedin.php');
//values for in and out time - Last Working Day
$fetch = runmysqlqueryfetch("SELECT MAX(logindate) AS yintimedate FROM ssm_usertime WHERE userid = '" . $user . "' AND logindate <> CURDATE() AND logintype = 'IN'");
if ($fetch['yintimedate'] <> '' && $fetch['yintimedate'] <> '0000-00-00')
  $yintimedateresult = $fetch['yintimedate'];
else
  $yintimedateresult = 'NA';

$fetch = runmysqlqueryfetch("SELECT MAX(logindate) AS lastworkingday FROM ssm_usertime WHERE userid = '" . $user . "' AND logindate <> CURDATE()");
if ($fetch['lastworkingday'] <> '' && $fetch['lastworkingday'] <> '0000-00-00')
  $ydateresult = $fetch['lastworkingday'];
else
  $ydateresult = 'NA';

$fetch = runmysqlqueryfetch("SELECT MIN(logintime) AS ylogintime FROM ssm_usertime WHERE userid = '" . $user . "' AND logindate = '" . $ydateresult . "' AND logintype = 'IN'");
if ($fetch['ylogintime'] <> '' && $fetch['ylogintime'] <> '00:00:00')
  $yintimeresult = $fetch['ylogintime'];
else
  $yintimeresult = 'NA';

$fetch = runmysqlqueryfetch("SELECT MAX(logintime) AS ylogouttime FROM ssm_usertime WHERE userid = '" . $user . "' AND logindate = '" . $ydateresult . "' AND logintype = 'OUT' ");
$fetch1 = runmysqlqueryfetch("SELECT MAX(logintime) AS ylogouttime FROM ssm_usertime WHERE userid = '" . $user . "' AND logindate = '" . $ydateresult . "' AND logintype = 'IN' ");

if ($fetch['ylogouttime'] <> '' && $fetch['ylogouttime'] <> '00:00:00' && $fetch['ylogouttime'] > $fetch1['ylogouttime'])
  $youttimeresult = $fetch['ylogouttime'];
else
  $youttimeresult = 'NA';


//Today's In Time
$fetch = runmysqlqueryfetch("SELECT MIN(logintime) AS tlogintime FROM ssm_usertime WHERE userid = '" . $user . "' AND logindate = CURDATE() AND logintype = 'IN'");
$tintimeresult = $fetch['tlogintime'];

// Attendance Details ------------------------------------------------------------
$year = date("Y", mktime(0, 0, 0, date('n')));
$attendanceCal = attendanceCalendardashboard(date('m'), $year, $user);

?>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
    google.charts.load('current', { packages: ['annotatedtimeline'] });
    google.charts.setOnLoadCallback(gettimelinedata);
  </script>

<div class="card mt-4 mb-4  " style="border-radius:10px;">
  <div class="card-body" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); border-radius:10px;">
    <div class="" style="">
      <div>
        <div class="card-header " style="position:relative; padding:20px; margin:0px -20px 0px -20px; bottom:20px;">
          Chart on count of Calls and emails</div>
      </div>
    </div>
    <!-- Chart container -->
    <div id="lineChart"></div>

    <script>
      // Sample data for emails and calls
      const emailData = [
        { month: 'January', count: 50 },
        { month: 'February', count: 80 },
        { month: 'March', count: 100 },
        { month: 'April', count: 70 },
        { month: 'May', count: 90 },
        { month: 'June', count: 120 },
      ];

      const callData = [
        { month: 'January', count: 30 },
        { month: 'February', count: 40 },
        { month: 'March', count: 50 },
        { month: 'April', count: 60 },
        { month: 'May', count: 35 },
        { month: 'June', count: 45 },
      ];

      // Extract the months and counts for emails and calls
      const emailMonths = emailData.map(d => d.month);
      const emailCounts = emailData.map(d => d.count);

      const callMonths = callData.map(d => d.month);
      const callCounts = callData.map(d => d.count);

      // Define the traces for the line chart
      const emailTrace = {
        x: emailMonths,
        y: emailCounts,
        type: 'scatter', // Use 'scatter' for line charts
        mode: 'lines+markers', // Show both lines and markers
        name: 'Emails',
        line: {
          color: 'blue', // Line color
          width: 2, // Line width
        },
        marker: {
          size: 8, // Marker size
          color: 'blue', // Marker color
        },
      };

      const callTrace = {
        x: callMonths,
        y: callCounts,
        type: 'scatter', // Use 'scatter' for line charts
        mode: 'lines+markers', // Show both lines and markers
        name: 'Calls',
        line: {
          color: 'green', // Line color
          width: 2, // Line width
        },
        marker: {
          size: 8, // Marker size
          color: 'green', // Marker color
        },
      };

      // Define the layout for the line chart
      const layout = {
        title: 'Emails and Calls Line Chart',
        xaxis: {
          title: 'Month',
        },
        yaxis: {
          title: 'Count',
        },
      };

      // Combine the traces and layout and create the plot
      const data = [emailTrace, callTrace];
      const config = {
        responsive: true // Make the chart responsive
      };
      Plotly.newPlot('lineChart', data, layout, config);

      // Function to remove the "Calls" trace from the chart
    </script>
    <!--  -->

  </div>
</div>


<!-- /.row-->
<div class="row">
  <div class="col-md-12  ">
    <div class="card mb-4" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363); border-radius:10px;">
      <div class="card-header"> Attendance Summary of this Month</div>
      <div class="card-body">
        <div class="row">
          <!-- Attendence  -->
          <div class="container">
            <div class="content">
              <div id='calendar'></div>
            </div>
          </div>
        </div>
        <div class="container mt-4">
          <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
              aria-expanded="false" aria-controls="collapseExample" id="toggleButton">
              Team Chart
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              Team chart.
            </div>
          </div>
        </div>
      </div>
      <!-- stops here -->
    </div class="col-md-12">
    <!-- <div id="wrapper" class="table-container"></div> -->
  </div>
</div>
</div>

<?php
include("../navigation/footer.php");
?>