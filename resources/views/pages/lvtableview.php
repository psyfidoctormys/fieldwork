<?php
    // Initialize the session
    session_start();

    // Access Database
    require 'db.php';
    $lv_q = mysqli_query($link, 'select * from lv_T');


?> 

<html>
<head>
    <title>View LabVantage Table</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">

<CENTER>


<div class="container">
<h1 class="page-header text-monospace text-primary font-weight-bold">LabVantage TABLE</h1>
<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Type in filter value.." title="Type in a ID">
            <table class="table table-striped" id="myTable">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Cohort</th>
                    <th scope="col">Clinical Event</th>
                    <th scope="col">Sample Type</th>
                    <th scope="col">External Participant ID</th>
                    <th scope="col">LV Sample ID</th>
                    <th scope="col">Current Location</th>
                    <th scope="col">Container Type</th>
                    <th scope="col">Prep Type</th>
                    <th scope="col">Treatment Method</th>
                    <th scope="col">Initial Mass</th>
                    <th scope="col">Initial Mass Units</th>
                    <th scope="col">Initial Volume</th>
                    <th scope="col">Initial Volume Units</th>
                    <th scope="col">Collection Date/Time</th>
                    <th scope="col">Clinical Protocol</th>
                    <th scope="col">Storage Status</th>
                    <th scope="col">Study Site</th>
                </tr>
            </thead>
                <tbody>
<?php
        while($lv_t_vals = mysqli_fetch_object($lv_q))
        { 
?>

                <tr>
                    <td><?php echo $lv_t_vals->cpCohort; ?></td>
                    <td><?php echo $lv_t_vals->clinicalEvent; ?></td>
                    <td><?php echo $lv_t_vals->smapleType; ?></td>
                    <td><?php echo $lv_t_vals->externalSubject; ?></td>
                    <td><?php echo $lv_t_vals->sample; ?></td>
                    <td><?php echo $lv_t_vals->currentLocation; ?></td>
                    <td><?php echo $lv_t_vals->container; ?></td>
                    <td><?php echo $lv_t_vals->preptype; ?></td>
                    <td><?php echo $lv_t_vals->treatmentMethod; ?></td>
                    <td><?php echo $lv_t_vals->initialMass; ?></td>
                    <td><?php echo $lv_t_vals->initialmassUnits; ?></td>
                    <td><?php echo $lv_t_vals->initialVolume; ?></td>                
                    <td><?php echo $lv_t_vals->initialvolumeUnits; ?></td>
                    <td><?php echo $lv_t_vals->collection; ?></td>
                    <td><?php echo $lv_t_vals->clinicalProtocol; ?></td>
                    <td><?php echo $lv_t_vals->storageStatus; ?></td>
                    <td><?php echo $lv_t_vals->studysite; ?></td>
                </tr>

<?php
      }  
?>

<script>
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    foundRow = false;
    for (i = 0; i < tr.length; i++) {
        for (j = 0; j < tr[i].getElementsByTagName("td").length; j++) {
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    foundRow = true;
                    break;
                }
            }
        }
        if (foundRow) {
            tr[i].style.display = "";
            foundRow = false;
        } else {
            tr[i].style.display = "none";
            foundRow = false;
        }
    }
}
</script>          
            </tbody>
            </table>
            </div>
</body>
</html>