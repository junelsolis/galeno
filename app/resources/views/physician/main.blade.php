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

        <div class='dashboard-content'>
          <div class='section'>
            <div class='header'>
              <span>Patients Today</span>
            </div>
            <div class='content'>
              @if ($data['patientsToday']->count() > 0)
              <div class='table-scroll'>
                <table  id='patientsTodayTable' class='striped'>
                  <thead>
                    <tr>
                      <th>Patient Name</th>
                      <th>Details</th>
                      <th>Chief Complaint</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data['patientsToday'] as $i)
                    <tr>
                      <td>{{ $i->patient['formattedName']['fullname'] }}</td>
                      <td>{{ $i->patient->details() }}</td>
                      <td>{{ $i->chief_complaint }}</td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Patient</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              @else
              @endif
            </div>
          </div>

          <div class='section'>
            <div class='header'>
              <span>Unsigned Encounters</span>
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
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Chart</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>M 56y</td>
                      <td>persistent cough</td>
                      <td></td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Chart</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>M 56y</td>
                      <td>persistent cough</td>
                      <td></td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Chart</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>M 56y</td>
                      <td>persistent cough</td>
                      <td></td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Chart</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div class='section'>
            <div class='header'>
              <span>Laboratory Reports</span>
            </div>
            <div class='content'>
              <div class='table-scroll'>
                <table class='striped'>
                  <thead>
                    <thead>
                      <tr>
                        <th>Patient Name</th>
                        <th>Date</th>
                        <th>Laboratory</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>James Aberdeen Sr.</td>
                        <td>June 25, 2019</td>
                        <td>Precision Diagnostics</td>
                        <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                      </tr>
                      <tr>
                        <td>James Aberdeen Sr.</td>
                        <td>June 25, 2019</td>
                        <td>Precision Diagnostics</td>
                        <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                      </tr>
                      <tr>
                        <td>James Aberdeen Sr.</td>
                        <td>June 25, 2019</td>
                        <td>Precision Diagnostics</td>
                        <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                      </tr>
                      <tr>
                        <td>James Aberdeen Sr.</td>
                        <td>June 25, 2019</td>
                        <td>Precision Diagnostics</td>
                        <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                      </tr>
                    </tbody>
                  </thead>
                </table>
              </div>
            </div>
          </div>


          <div class='section'>
            <div class='header'>
              <span>Imaging Results</span>
            </div>
            <div class='content'>
              <div class='table-scroll'>
                <table class='striped'>
                  <thead>
                    <tr>
                      <th>Patient Name</th>
                      <th>Date</th>
                      <th>Laboratory</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>June 25, 2019</td>
                      <td>Precision Diagnostics</td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>June 25, 2019</td>
                      <td>Precision Diagnostics</td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>June 25, 2019</td>
                      <td>Precision Diagnostics</td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                    </tr>
                    <tr>
                      <td>James Aberdeen Sr.</td>
                      <td>June 25, 2019</td>
                      <td>Precision Diagnostics</td>
                      <td><a href=''><i class="fas fa-arrow-alt-circle-right"></i>&nbsp;See Result</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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
