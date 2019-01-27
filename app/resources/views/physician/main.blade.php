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
  <body class='physician'>
    <div class='top-bar grid-x'>
      <div class='image cell medium-3 large-2'>
        <img src='images/medicoffice-logo.png' />
      </div>
      <div class='search-bar cell medium-6 large-8'>
        <span><i class="fas fa-search"></i>&nbsp;Search for Patients, Medications, Lab Results, Imaging</span>
      </div>
      <div class='cell medium-3 large-2'>
        right
      </div>
    </div>
    <div class='grid-x'>
      @include('physician.menu')

      <div class='cell medium-6 large-8'>
        <div class='dashboard'>
          <div class='widget'>
            <div class='header'>
              <span>Patients Today</span>
            </div>
            <div class='content'>

            </div>
          </div>

          <div class='widget'>
            <div class='header'>
              <span>Unsigned Encounters</span>
            </div>
            <div class='content'>

            </div>
          </div>

          <div class='widget'>
            <div class='header'>
              <span>Laboratory Results</span>
            </div>
            <div class='content'>

            </div>
          </div>


          <div class='widget'>
            <div class='header'>
              <span>Imaging Results</span>
            </div>
            <div class='content'>

            </div>
          </div>
        </div>
      </div>

      @include('physician.sidebar')
    </div>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
