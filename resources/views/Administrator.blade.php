<li class="nav-item">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Odjava</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf</form></li>