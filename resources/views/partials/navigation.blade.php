<nav class="navigation">
  <section class="container">
    <a class="navigation-title" href="{{ route('questions.index') }}">
      <img class="img" src="{{ asset('/images/logo.png') }}" alt="Bancakan" title="Bancakan" height="30">
    </a>
    @if(Auth::check())
    <ul class="navigation-list float-right">
      <li class="navigation-item">
        <a class="navigation-link" href="https://github.com/BancakanID/Bancakan/issues" target="_blank"><i class="fa fa-bug"></i></a>
      </li>
      <li class="navigation-item">
        <a class="navigation-link" href="{{ route('notifications') }}">
          <i class="fa fa-bell-o"></i>
          <sup>
            {!!
              Auth::user()->unreadNotifications->count() > 0
              ? '(<strong>'.Auth::user()->unreadNotifications->count().'</strong>)' : ''
            !!}
          </sup>
        </a>
      </li>
      <li class="navigation-item">
        <a class="navigation-link" href="{{ route('profiles.show') }}">{{ Auth::user()->name }}</a>
      </li>
    </ul>
    @else
    <ul class="navigation-list float-right">
      <li class="navigation-item">
        <a class="navigation-link" href="{{ url('/register') }}">Register</a>
      </li>
      <li class="navigation-item">
        <a class="navigation-link" href="{{ url('/login') }}">Login</a>
      </li>
    </ul>
    @endif
  </section>
</nav>
