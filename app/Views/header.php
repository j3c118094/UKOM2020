<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
    <!-- ================================================================================================================================================================================================================================ -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="/css/header.css">
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="/js/fusioncharts.js"></script>
    <!-- ================================================================================================================================================================================================================================ -->
    <script type="text/javascript" src="/js/themes/fusioncharts.theme.fusion.js"></script>

    <title>UKOM-INF2021</title>
</head>
<body class="bg-light">
      <!-- Navigation -->
    <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">COVERSUS</a>
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button type="button" id="headliner" class="btn btn-danger headlines" disabled>MENU</button>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle headlines" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="#stats">Statistics</a>
        <a class="dropdown-item" href="#si">System Information</a> 
        <a class="dropdown-item" href="#multimedia">Multimedia</a>
        <a class="dropdown-item" href="#comments">Comments</a>
        <a class="dropdown-item" href="#top">Back to Top</a>
        </div>
    </div>
    </div>
    </div>
  </nav>


  <header class="container text-white text-center">
    <div id="top" class="mainbg"></div>
    <div class="container containme">
      <div class="row">
        <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Self Contained COVID-19 Information on Kabupaten Bekasi</h1>
        </div>
        <div class=".d-sm-none .d-md-block col-md-10 col-lg-8 col-xl-12 mx-auto stats ">
            <div class="row ">
                <div class="col">
                    <h2>TOTAL CASES <br><br> <?= $totalCaseNumber ?></h2>
                </div>
                <div class="col">
                    <h2>RECOVERED <br><br>  <?= $jumlahSembuh[0]->JUMLAH ?></h2>
                </div>
                <div class="col">
                    <h2>FATALITY <br><br>  <?= $jumlahMeninggal[0]->JUMLAH ?></h2>
                </div>
            </div>
        </div>
      </div>
    </div>
  </header>

    <!-- Icons Grid -->
    <section id="stats" class="features-icons bg-light text-center" style="height: 100vh;">
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
      "caption": "Covid Patient Gender Distribution",
      "plottooltext": "<b>$percentValue</b> of covid patients are $label ",
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



  <section id="si" class="features-icons bg-light text-center" style="height: 100vh;">
    <div class="container containtips" >
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>AGES 65+ </h3>

            <blockquote class="blockquote text-center">
            <p class="lead mb-0">Elders are easier to be infected by COVID-19, please take care.</p>
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>ONLY 9</h3>
            
            <blockquote class="blockquote text-center">
            <p class="lead mb-0">Spread across 100+ Sub-districts, ONLY 9 hospitals are assigned to take COVID patients.</p><br /> <br /> <br /><br /><br />
            <p><small>Every info in this website is purely fictional and made-up.</small></p>
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
                <h3>ONLY 35 DOCTORS</h3>

            <blockquote class="blockquote text-center">
                <p class="lead mb-0">Didn't stop there, this district only enforces 35 capable doctors.</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>



<section  style="min-height: 100vh;">
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

        <div id="table3">
            <table id="byage" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Age Group</th>
                        <th>Number of Patients</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $i=1;
                    foreach ($ageGroup as $age => $people) {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$age.'</td>';
                        echo '<td>'.$people.'</td>';
                        echo '</tr>';
                        $i+=1;
                    }

                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Age Group</th>
                        <th>Number of Patients</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div id="table4">
            <table id="hospital" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hospital Name</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $i=1;
                    foreach ($dataHospital as $rs) {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$rs->NAMARS.'</td>';
                        echo '<td>'.$rs->KONTAK.'</td>';
                        echo '</tr>';
                        $i+=1;
                    }

                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Hospital Name</th>
                        <th>Contact</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div id="table5">
            <table id="doctor" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Doctor Name</th>
                        <th>On Duty at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $i=1;
                    foreach ($dataDocs as $doc) {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$doc->NAMADOK.'</td>';
                        echo '<td>'.$doc->NAMARS.'</td>';
                        echo '</tr>';
                        $i+=1;
                    }

                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Doctor Name</th>
                        <th>On Duty at</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        </div>
    </div>
    </div>
</section>

<section id="multimedia" class="features-icons bg-light text-center" style="height: 100vh;">
    <div class="container containtips" >
      <div class="row">
      <div class="col"></div>
        <div class="col-lg-8">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <h3>This is the multimedia page</h3>
            
            <blockquote class="blockquote text-center">
            <p class="lead mb-0">Please enjoy this uplifting music with Kinetic Typography. </p><br /> <br /> <br />
            <p><small>Psst... I got copyrighted.</small></p>
            </blockquote>
          </div>
        </div>
       
      <div class="col"></div>
      </div>
    </div>
  </section>

<section  style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center py-3">
                <iframe style="width: 100%;" height="575" src="https://www.youtube.com/embed/snftmhohtYU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


<section id="comments"  class="features-icons bg-light text-center" style="height: 100vh;">
    <div class="container " >
      <div class="row">
      <div class="col"></div>
        <div class="col-lg-8">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <h3>Leave a track!</h3>
            
            <blockquote class="blockquote text-center">
            <p class="lead mb-0">I truly hope you enjoy this website with all its flaws, if you do, be sure to let me know! regards. </p>
            </blockquote>
            <form id="comment" action="<?php echo site_url('Main/send'); ?>" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="It doesn't have to be real ;)">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment</label>
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2 py-2 w-100">Send Comment</button>
            </form>

          </div>
        </div>
       
      <div class="col"></div>
      </div>
    </div>
  </section>

  <section class="features-icons bg-light text-center" style="min-height: 75vh;">
    <div class="container " >
      <div class="row">
      <div class="col"></div>
        <div class="col-lg-8">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <h3>Comments are shown below</h3>
            
            <blockquote class="blockquote text-center">
            <p class="lead mb-0">Check if yours are posted! </p>
            
            <br /> <br /> <br />
            <?php 
            
            foreach ($comments as $comment) {
                echo ' <p><small>"'.$comment->COMMENT.'"</small></p>';
                echo ' <small>--- &nbsp;'.$comment->NAMA.'</small>';
                echo '<br><br><br>';
            } 
           

            ?>
            </blockquote>
          </div>
        </div>
       
      <div class="col"></div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer bg-light shadow" style="height: 25vh; padding-top: 2rem;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#top">Back To Top</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#multimedia">Multimedia</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#si">Information Systems</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#stats">Statistics</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#comments">Comments</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; COVERSUS. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fa fa-facebook-square fa-2x fa-fw" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fa fa-twitter-square fa-2x fa-fw" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-instagram fa-2x fa-fw" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<script>
 $(document).ready(function() {

    $('#table1').show();
    $('#table2').hide();
    $('#table3').hide();
    $('#table4').hide();
    $('#table5').hide();

    $('#data').on('change', function() {
        if (this.value == "monthly"){
            $('#table1').show();
            $('#table2').hide();
            $('#table3').hide();
            $('#table4').hide();
            $('#table5').hide();
        } else if (this.value == "bysub"){
            $('#table1').hide();
            $('#table2').show();
            $('#table3').hide();
            $('#table4').hide();
            $('#table5').hide();
        } else if (this.value == "byage"){
            $('#table1').hide();
            $('#table2').hide();
            $('#table3').show();
            $('#table4').hide();
            $('#table5').hide();
        } else if (this.value == "hospital"){
            $('#table1').hide();
            $('#table2').hide();
            $('#table3').hide();
            $('#table4').show();
            $('#table5').hide();
        } else if (this.value == "doctor"){
            $('#table1').hide();
            $('#table2').hide();
            $('#table3').hide();
            $('#table4').hide();
            $('#table5').show();
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

    $('#byage').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

    $('#hospital').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

    $('#doctor').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

    $(window).scroll(function(){
	    $('.headlines').toggleClass('scrolled', $(this).scrollTop() > 600);
    });

} );

</script>


  
</body>
</html>