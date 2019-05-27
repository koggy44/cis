 <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#5cdb95;">
  <div>
    <a href="/home"><img src="{{url('images/Security-Bell-icon_2.png')}}" width="64px" height="64px"></a>
    <a href="/home" class="navbar-brand d-inline-flex text-uppercase">Campus Incident System</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

     <ul class="navbar-nav ml-auto">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
           @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About CIS</a>
            </li>
         </ul>
            @endif
            @else
             <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/reports/create">Report Incident</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About CIS</a>
                   </li>
         </ul>
            <ul>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->first_name }} <span class="caret"></span>
                </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" role="menu">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                  </form>
                </div>
              </li>
              
                        @endguest
                    </ul>
                </div>
</div>
  </div>
</nav>