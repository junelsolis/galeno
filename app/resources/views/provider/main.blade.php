<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='/css/app.css' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="/js/app.js"></script>
    <title>Medicoffice | Provider</title>
  </head>
  <body class='provider'>
    <div class='grid-x'>
      @include('provider.menu')

      <div class='chart cell medium-6 large-8'>
        <div class='fake-space'>

        </div>
        <ul class="tabs" data-tabs id="example-tabs" data-auto-focus="false">
          <li class="tabs-title is-active"><a href="#panel1">Patient Summary</a></li>
          <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Vital Signs</a></li>
          <li class="tabs-title"><a data-tabs-target="panel3" href="#panel3">Encounters & Notes</a></li>
          <li class="tabs-title"><a data-tabs-target="panel4" href="#panel4">Diagnoses & Medications</a></li>
          <li class="tabs-title"><a data-tabs-target="panel5" href="#panel5">Laboratory & Imaging</a></li>
        </ul>


        <div class="tabs-content" data-tabs-content="example-tabs" data-auto-focus="false">
          <div class="tabs-panel is-active" id="panel1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class='section'>
              <div class='header'>
                <span>Problems</span>
              </div>
            </div>

            <div class='section'>
              <div class='header'>
                <span>Allergies</span>
              </div>
            </div>

            <div class='section'>
              <div class='header'>
                <span>Medications</span>
              </div>
            </div>
          </div>
          <div class="tabs-panel" id="panel2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tabs-panel" id="panel3">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tabs-panel" id="panel4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tabs-panel" id="panel5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

      @include('provider.sidebar')
    </div>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
