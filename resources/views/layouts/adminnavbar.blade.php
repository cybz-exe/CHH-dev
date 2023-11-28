
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <div class="row align-items-center">
      <h1>CHH Administrator</h1>
    </div>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            <button class="btn btn-outline-primary fw-bold">Logout  <i class="fa-solid fa-right-from-bracket"></i></button>
        </x-responsive-nav-link>
    </form>
  </div>
 
  <style>
    .log {
      display: flex;
      justify-content: end;
    }
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

<div class="container">
  @if(request()->is('adminevent'))
      <button class="btn btn-primary float-end"><a href="/admineventproposal" style="text-decoration: none; color:white">Proposed Events</a></button>
  @endif
</div>
  
  
  