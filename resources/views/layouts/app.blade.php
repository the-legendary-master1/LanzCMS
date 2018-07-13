<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">     
        <nav class="navbar is-dark  is-fixed-top">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item" href="/">
                  <img src="https://bulma.io/images/bulma-logo-white.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                  <a class="navbar-item" href="/">
                    Learn
                  </a>
                  <a class="navbar-item" href="/">
                    Discuss
                  </a>
                  <a class="navbar-item" href="/">
                    Share
                  </a>
                </div>
                
                <div class="navbar-end">
                    @if (Auth::guest())
                      <div class="navbar-item">
                        <div class="field is-grouped">
                          <p class="control">
                            <a class="bd-tw-button button is-small" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
                              <span class="icon">
                                <i class="fab fa-twitter"></i>
                              </span>
                              <span>
                                Log In
                              </span>
                            </a>
                          </p>
                          <p class="control">
                            <a class="button is-small is-primary" href="https://github.com/jgthms/bulma/releases/download/0.7.1/bulma-0.7.1.zip">
                              <span class="icon">
                                <i class="fas fa-download"></i>
                              </span>
                              <span>Join Us</span>
                            </a>
                          </p>
                        </div>
                      </div>
                    @else
                      <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="/documentation/overview/start/">
                          Enofre O. Lanzarrote
                        </a>
                        <div class="navbar-dropdown is-boxed">
                          <a class="navbar-item" href="/documentation/overview/start/">
                            <span class="icon">
                              <i class="fas fa-download"></i>
                            </span>
                            <span>Profile</span>
                          </a>
                          <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                            Notification
                          </a>
                          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                            Settings
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item" href="https://bulma.io/documentation/components/breadcrumb/">
                            Logout
                          </a>
                        </div>
                      </div>
                    @endif
                </div>

              </div>
            </div>
        </nav>
        
        <div class="container m-t-50">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
