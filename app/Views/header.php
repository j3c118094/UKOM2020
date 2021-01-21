<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
    <!-- ================================================================================================================================================================================================================================ -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="/css/header.css">

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

    <script type="text/javascript" src="/js/fusioncharts.js"></script>

    <script type="text/javascript" src="/js/themes/fusioncharts.theme.fusion.js"></script>

    <title>UKOM-INF2021</title>
</head>
<body class="bg-light">
      <!-- Navigation -->
    <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">COVERSUS</a>
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button type="button" class="btn btn-primary">#HEADLINE</button>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="#">Dropdown link</a>
        <a class="dropdown-item" href="#">Dropdown link</a>
        </div>
    </div>
    </div>
    </div>
  </nav>


  <header class="container text-white text-center">
    <div class="mainbg"></div>
    <div class="container containme">
      <div class="row">
        <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Self Contained COVID-19 Information on Kabupaten Bekasi</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-12 mx-auto stats">
            <div class="row ">
                <div class="col">
                    <h2>TOTAL CASES <br><br> 884</h2>
                </div>
                <div class="col">
                    <h2>RECOVERED <br><br> 827</h2>
                </div>
                <div class="col">
                    <h2>DEATHS <br><br> 342</h2>
                </div>
            </div>
        </div>
      </div>
    </div>
  </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center" style="height: 100vh;">
    <div class="container containtips" >
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Put On Your Mask</h3>

            <blockquote class="blockquote text-center">
            <p class="lead mb-0">It's worrying how many people doesn't take it seriously.</p>
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Social Distancing</h3>
            
            <blockquote class="blockquote text-center">
            <p class="lead mb-0">Yes, humans needs to socialize, but we need you alive to socialize too.  </p><br /> <br /> <br /><br /><br />
            <p><small>Every info in this website is purely fictional and made-up.</small></p>
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
                <h3>Keep It Clean</h3>

            <blockquote class="blockquote text-center">
                <p class="lead mb-0">You know the drill, just like Mama said, which one? that one.</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="height: auto;">
  <?php
include("fusioncharts-wrapper/fusioncharts.php");

$chartData = "";
foreach ($bulan as $key => $value){
    $chartData .= '{"label": "'.$key.'","value": "'.$value.'"},';
}


$columnChart = new FusionCharts("column2d", "chart_kel_pasien", "100%", 400, "chart-pasien", "json", '{
  "chart": {
    "caption": "Case Additions Each Month as of January 2021",
    "xaxisname": "Month-Year",
    "yaxisname": "Cases Increased By",
    "numbersuffix": " PATIENTS",
    "theme": "fusion"
  },
  "data": [
    '.$chartData.'
    ]
    }');

$columnChart->render();

$chartData = '{"label": "Female","value": "'.$Female[0]->JUMLAH.'"}, {"label": "Male","value": "'.$Male[0]->JUMLAH.'"}';

$columnChart = new FusionCharts("pie2d", "gender", "100%", 400, "chart-gender", "json", '{
    "chart": {
      "caption": "Market Share of Web Servers",
      "plottooltext": "<b>$percentValue</b> of web servers run on $label servers",
      "showlegend": "1",
      "showpercentvalues": "1",
      "legendposition": "bottom",
      "usedataplotcolorforlabels": "1",
      "theme": "fusion"
    },
    "data": [
        '.$chartData.'
        ]
        }');
    
  
  $columnChart->render();


?>
<div class="container">
    <div class="row mb-2 mt-5 my-auto">
        <div class="col-lg-10 col-sm-12 mx-auto">
            <div id="chart-pasien"></div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-lg-10 col-sm-12 mx-auto">
            <div id="chart-gender"></div>
        </div>
    </div>
</div>
</section>


<section>
    <div class="container">
    <div class="row">
        <div class="col-lg-10 col-sm-12 mx-auto text-center bg-white py-3 px-4">
            <label for="data">Select data to be shown :</label>

            <select name="data" id="data">
                <option value="monthly">Covid Patients per Month</option>
                <option value="bysub">Covid Patients per Sub-District</option>
                <option value="byage">Age Group of Covid Patients</option>
                <option value="hospital">Hospitals Assigned for Covid</option>
                <option value="doctor">Doctors Assigned for Covid</option>
            </select>
            <h4 class="mb-3"> Covid cases in each Subdistrict<br><small>[Fictional Data]</small> </h4>
            <div id="table1">
            <table id="monthly" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Month-Year</th>
                        <th>Number of Cases</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $i=1;
                    foreach ($bulan as $bln => $jml) {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$bln.'</td>';
                        echo '<td>'.$jml.'</td>';
                        echo '</tr>';
                        $i+=1;
                    }

                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Month-Year</th>
                        <th>Number of Cases</th>
                    </tr>
                </tfoot>
            </table>
            </div>

            <div id="table2">
            <table id="bysub" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Sub-district</th>
                        <th>District</th>
                        <th>Number of Cases</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $i=1;
                    foreach ($KelKec as $Kel => $Kec) {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$Kel.'</td>';
                        echo '<td>'.$Kec.'</td>';
                        echo '<td>'.$KelJumlah[$Kel].'</td>';
                        echo '</tr>';
                        $i+=1;
                    }

                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Sub-district</th>
                        <th>District</th>
                        <th>Number of Cases</th>
                    </tr>
                </tfoot>
            </table>
        </div>


        </div>
    </div>
    </div>
</section>

<section style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center py-3">
                <iframe style="width: 100%;" height="575" src="https://www.youtube.com/embed/snftmhohtYU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<script>
 $(document).ready(function() {
    $('#data').on('change', function() {
        if (this.value == "monthly"){
            $('#table1').show();
            $('#table2').hide();
        } else if (this.value == "bysub"){
            $('#table1').hide();
            $('#table2').show();
        }
    });

    $('#monthly').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

    $('#bysub').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

</script>


  
</body>
</html>