<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Scatter Chart
    </title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['scatterchart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Height');
        data.addRows(3);
        data.setCell(0, 0, 'Tong Ning mu');
        data.setCell(1, 0, 'Huang Ang fa');
        data.setCell(2, 0, 'Teng nu');
        data.setCell(0, 1, 174);
        data.setCell(1, 1, 523);
        data.setCell(2, 1, 86);
      
        // Create and draw the visualization.
        new google.visualization.ScatterChart(document.getElementById('visualization')).
            draw(data, null);  
      }
      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 300px; height: 300px;"></div>
  </body>
</html>
