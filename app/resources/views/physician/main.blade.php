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

      <div class='middle cell medium-6 large-8'>


        <div id='app' class='dashboard-content'>
          <div class='section'>
            <div class='header'>
              <span>Patients Today</span>
            </div>
            <div class='content'>

              @if ($data['patientsToday']->count() > 0)
                <div class='grid-x'>
                  @foreach ($data['patientsToday'] as $i)
                  <div class='cell medium-4 small-12'>
                    <div class='vue-patient-card'>
                      <div class='grid-x'>
                        <div class='left cell small-3'>
                          <div class='icon'>
                            @if ($i->patient->gender == 'M')
                            <i class="fas fa-male"></i>
                            @elseif ($i->patient->gender == 'F')
                            <i class="fas fa-female"></i>
                            @else
                            <i class="fas fa-user-circle"></i>
                            @endif
                          </div>
                        </div>
                        <div class='right cell small-9'>
                          <div class='name'>
                            {{ $i->patient['formattedName']['fullname'] }}
                          </div>
                          <div class='details'>
                            {{ $i->patient->details() }}<br />
                            {{ $i->chief_complaint }}
                          </div>
                          <div>
                            <a href=''><i class="fas fa-chevron-right"></i>&nbsp;See Patient</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
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
