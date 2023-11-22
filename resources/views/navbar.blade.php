
<nav class="navbar bg-body-tertiary">
  <div class="container">
      <div class="row align-items-center">
          <div class="col">
              <img src="{{ URL('images/CHH logo.png') }}" alt="logo" style="width: 4rem" class="pic">
          </div>
          <div class="col">
              <a class="navbar-brand h2 comms" href="#">Community Helping Hand</a>
          </div>
      </div>

      @if(request()->is('event'))
            <button class="btn btn-primary offset-5"><a href="/eventproposal" style="text-decoration: none; color:white">Submit a proposal</a></button>
        @endif
      <div class="col-auto">
        <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" class="d-flex justify-content-end">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
      <div class="offcanvas offcanvas-end tab" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title second" id="offcanvasNavbarLabel">Community Helping Hand</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/announcement">Announcements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/event">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/register">Register</a>
            </li>
          </ul>
        </div>
      </div>
      <style>
        @media screen and (max-width: 425px) {
          .comms {
          font-size: 15px;
          }
          
          .pic{
            max-width: 40px;
          }

          .tab{
            max-width: 250px;
          }
          .second{
            font-size: 15px;
          }
      }
      </style>
    </div>
  </nav>

