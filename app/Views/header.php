<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ================================================================================================================================================================================================================================ -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- ================================================================================================================================================================================================================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
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

    

 