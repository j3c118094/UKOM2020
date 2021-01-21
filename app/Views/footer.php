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
          <p class="text-muted small mb-4 mb-lg-0">&copy; COVERSUS. ALAN RAIHAN MAULANA - J3C118094</p>
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
            $('#tableTitle').text("COVID CASES INCREASE PER MONTH");
            $('#table1').show();
            $('#table2').hide();
            $('#table3').hide();
            $('#table4').hide();
            $('#table5').hide();
        } else if (this.value == "bysub"){
            $('#tableTitle').text("COVID CASES PER SUB-DISTRICT");
            $('#table1').hide();
            $('#table2').show();
            $('#table3').hide();
            $('#table4').hide();
            $('#table5').hide();
        } else if (this.value == "byage"){
            $('#tableTitle').text("AGE GROUP OF COVID PATIENTS");
            $('#table1').hide();
            $('#table2').hide();
            $('#table3').show();
            $('#table4').hide();
            $('#table5').hide();
        } else if (this.value == "hospital"){
            $('#tableTitle').text("HOSPITAL ASSIGNED FOR COVID CASES");
            $('#table1').hide();
            $('#table2').hide();
            $('#table3').hide();
            $('#table4').show();
            $('#table5').hide();
        } else if (this.value == "doctor"){
            $('#tableTitle').text("DOCTORS ASSIGNED FOR COVID CASES");
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