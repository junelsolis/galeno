<div class='top-bar grid-x'>
  <div class='cell medium-3 large-2'>
    <div class='logo'>
      <img src='/images/medicoffice-logo.png' />
    </div>
  </div>


  <div class='cell medium-6 large-8'>
    <div class='search-bar'>
      <span><i class="fas fa-search"></i>&nbsp;Patients, Encounters, Medications, Lab Results, Imaging</span>
    </div>

  </div>


  <div class='cell medium-3 large-2'>
    <div class='user-details'>
      <p><strong>{{ Auth::user()->name }}</strong> | Physician</p>
      <a><i id='bars' class="fas fa-bars"></i></a>
    </div>
  </div>
</div>
