<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('header-tags')
    <title>Medicoffice | Provider</title>
  </head>
  <body class='physician'>
    <div class='grid-x'>
      @include('physician.menu')

      <div class='middle cell medium-6 large-8'>
        @include('physician.search-bar')

        <div class='patient-content'>
          <div class='summary'>
            @if ($data['patient']->gender == 'M')
            <i class="fas fa-male"></i>
            @elseif ($data['patient']->gender == 'F')
            <i class="fas fa-female"></i>
            @endif
            <span>Jane Doe | F | 28 years old</span>
          </div>
          <div class='patient-tabs'>
            <ul class="tabs" data-tabs id="example-tabs">
              <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Today</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Vital Signs</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Visits & Notes</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Diagnoses & Medications</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Laboratory & Imaging</a></li>
            </ul>
          </div>
        </div>

      </div>


      @include('physician.sidebar')

    </div>

    <script>
      $(document).foundation();


      $(document).ready( function () {
        $('#patientsTodayTable').DataTable();
      });



    </script>
  </body>
</html>
