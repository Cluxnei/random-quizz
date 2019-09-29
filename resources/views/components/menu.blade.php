<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('img/logo.png') }}" alt="Random Quizz" class="logo">
    </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ranking-button">
                @if(Request::route()->getName() == 'ranking')
                <a class="nav-link" href="{{ route('home') }}">
                    Home
                </a>
                @else
                <a class="nav-link" href="{{ route('ranking') }}">
                    Ranking
                </a>
                @endif
            </li>
        </ul>
  </nav>
