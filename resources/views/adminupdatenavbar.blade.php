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
    <div class="log">
      <button class="submit" type="button" >
        <a href="/admin">Log-out</a>
      </button>
    </div>
</div>
  {{-- </div>
    <div class="offcanvas offcanvas-end tab" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title second" id="offcanvasNavbarLabel">Community Helping Hand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
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
    </div>--}} 
    <style>
      /* .log {
        display: flex;
        justify-content: end;
      } */
      .navbar{
        height: 100px;
      }
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
</nav>

