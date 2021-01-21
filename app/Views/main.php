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

            <small>[Fictional Data]</small> 
            <h4 class="mb-3" id="tableTitle"> COVID CASES INCREASE PER MONTH </h4>
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
