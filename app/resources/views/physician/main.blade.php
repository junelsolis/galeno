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
    <div class='grid-x'>
      @include('physician.menu')

      <div class='middle cell medium-6 large-8'>
        @include('physician.search-bar')

        <div class='dashboard-content'>
          <div class='section'>
            <div class='header'>
              <span>Patients Today</span>
            </div>
            <div class='content'>
              <div class='table-scroll'>
                <table class='striped'>
                  <thead>
                    <tr>
                      <th>Patient Name</th>
                      <th>Details</th>
                      <th>Chief Complaint</th>
                      <th>Reminders</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>M 56y</td>
                      <td>persistent cough</td>
                      <td></td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Patient</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>M 56y</td>
                      <td>persistent cough</td>
                      <td></td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Patient</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>M 56y</td>
                      <td>persistent cough</td>
                      <td></td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Patient</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>M 56y</td>
                      <td>persistent cough</td>
                      <td></td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Patient</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class='section'>
            <div class='header'>
              <span>Unsigned Encounters</span>
            </div>
            <div class='content'>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>


          <div class='section'>
            <div class='header'>
              <span>Laboratory Reports</span>
            </div>
            <div class='content'>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>


          <div class='section'>
            <div class='header'>
              <span>Imaging Results</span>
            </div>
            <div class='content'>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
