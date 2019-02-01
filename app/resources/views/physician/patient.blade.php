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

        <div id='app'>
          <patientcontent :data="'{{ json_encode($data) }}'"></patientcontent>
        </div>

        <div class='patient-content'>
          <div class='summary'>
            @if ($data['patient']->gender == 'M')
            <i class="fas fa-male"></i>
            @elseif ($data['patient']->gender == 'F')
            <i class="fas fa-female"></i>
            @endif
            <span>{{ $data['patient']['formattedName']['fullname'] }} | {{ $data['patient']->gender }} | {{ $data['patient']->ageString() }}</span>
          </div>
          <div class='patient-tabs'>
            <ul class="tabs" data-tabs id="example-tabs">
              <li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><i class="far fa-calendar-alt"></i>&nbsp;Today</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2"><i class="fas fa-heartbeat"></i>&nbsp;Vital Signs</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2"><i class="fas fa-notes-medical"></i>&nbsp;Visits & Notes</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel3"><i class="fas fa-pills"></i>&nbsp;Diagnoses & Medications</a></li>
              <li class="tabs-title"><a data-tabs-target="panel2" href="#panel4"><i class="fas fa-flask"></i>&nbsp;Laboratory & Imaging</a></li>
            </ul>
          </div>


          <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="tabs-panel is-active" id="panel1">
              <fieldset class='fieldset'>
                <legend>
                  Vital Signs
                </legend>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </fieldset>
              <fieldset class='fieldset'>
                <legend>
                  Chief Complaint
                </legend>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </fieldset>
              <fieldset class='fieldset'>
                <legend>
                  Note
                </legend>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </fieldset>

              <fieldset class='fieldset'>
                <legend>
                  Problem List
                </legend>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </fieldset>

              <fieldset class='fieldset'>
                <legend>
                  Medications
                </legend>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </fieldset>

            </div>
            <div class="tabs-panel" id="panel2">
              <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
            </div>
          </div>
        </div>


      </div>


      @include('physician.sidebar')

    </div>


    <script type="text/javascript" src="/js/includes.js">

      $(document).foundation();


      $(document).ready( function () {
        $('#patientsTodayTable').DataTable();
      });
    </script>

    <script src='/js/app.js'></script>
  </body>
</html>
