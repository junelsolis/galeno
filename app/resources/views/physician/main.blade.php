<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('header-tags')
    <title>Medicoffice | Provider</title>
  </head>
  <body class='physician'>

    @include('provider-top-bar')

    <div class='grid-x'>
      @include('physician.menu')

      <div class='cell medium-9 large-10'>


        <div id='app' class='dashboard-content'>

          <div class='grid-x'>
            <div class='cell medium-9'>
              <patients-today :data='@json($data['patientsToday'])'></patients-today>

            </div>
            <div class='cell medium-3'>
              <!-- <today-widget></today-widget> -->
            </div>
          </div>

        </div>

      </div>



    </div>

    <script src='/js/includes.js'>
      $(document).foundation();


      $(document).ready( function () {
        $('#patientsTodayTable').DataTable();
      });

    </script>
    <script src='/js/app.js'>

    </script>
  </body>
</html>
