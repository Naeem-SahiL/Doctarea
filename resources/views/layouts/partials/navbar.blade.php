<header class="">
     <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
        {{-- nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 --}}

        @auth
          <div class="text-end">
          {{auth()->user()->name}}
         </div>
          <div class="text-end">
          {{auth()->user()->userRole}}
         </div>
        @endauth
        

        <ul class="nav">

          @auth 
            <li><a href="{{ route('logout.perform') }}" class="btn">Logout</a></li>
          @endauth
          @guest
          <li><a href="{{ route('login.perform') }}" class="btn">Login</a></li>
          <li><a href="{{ route('register.perform') }}" class="btn">Sign-up</a></li>
          @endguest
        </ul>
          
      </div>
    
  </header>