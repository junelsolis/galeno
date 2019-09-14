<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('header-tags')
    <title>Galeno &mdash; @yield('title')</title>
  </head>
  <body class='' style='overscroll-behavior: none;'>
    <div id='app' class='w-full h-screen bg-grey-100 flex'>
      <div class='bg-white py-8 flex flex-col' style='width:4.7rem;box-shadow: 3px 0px 10px rgba(0,0,0,0.08);'>
        <div class='bg-accent rounded-full mx-auto' style='width:3rem;height: 3rem;overflow:hidden'>
          <img src='https://www.gravatar.com/avatar/d9a9e7f53d61e12ef933d846da67ff7a' class='h-full w-auto'/>
        </div>
        <div class='w-full flex-grow'>
          
        </div>
        <div class='flex items-center justify-center'>
          <p class='text-blue-100 text-lg'>
            <i class="fas fa-sign-out-alt"></i>
          </p>
        </div>
      </div>
      <div class='flex-grow flex h-full'>
        <div class='w-3/4 p-10'>
          <div class='w-full flex items-center justify-between'>
            <div class='flex items-center text-grey-400'>
              <p class='font-bold text-2xl mr-40 pb-4'>
                Dashboard
              </p>
              <p class='text-grey-300 text-base mr-16 pb-4'>
                Patients
              </p>
              <p class='text-blue-200 text-base mr-16 border-b-2 pb-4 border-blue-200'>
                Visits
              </p>
              <p class='text-grey-300 text-base mr-16 pb-4'>
                Documents
              </p>
            </div>
            <div class='flex items-center justify-end'>
              <p class='text-lg text-grey-300'>
                <i class="fas fa-search"></i>
              </p>
              <p class='ml-8 text-lg text-grey-300'>
                <i class="far fa-bell"></i>
              </p>
            </div>
          </div>
        </div>
        <div class='w-1/4 p-6 h-full'>
          <div class='sidebar'>
            sidebar
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
