<nav class="navbar navbar-light bg-light fixed-top border-bottom shadow-sm" style="background-color: #e3f2fd;">
    <div class="container-fluid">

      <a style="color:red;" class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-heart-fill"></i>&nbsp;{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <img
                    class="shadow rounded-circle" style="width: 50px; height:50px;"
                    src="https://scontent.fmnl5-1.fna.fbcdn.net/v/t1.6435-9/164801827_284515636377501_3430430753101099534_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeENKZLv0Y-j3_bv_6VH5tl20iVTdpNcHBfSJVN2k1wcF8XFgFQdn-s-dp4lBf2xeLQtCVqvtp5y66mCdzrZ7i6C&_nc_ohc=noV0r9WaFQ8AX8wlPlf&_nc_ht=scontent.fmnl5-1.fna&oh=57c2a8224c3d86f66195492fbf0c7572&oe=61BC7300" alt="" srcset="">
              <a class="text-muted" href="{{ route('profile') }}">Tom Cruise</a>
            </h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><i class="bi bi-person-bounding-box"></i>&nbsp;Browse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('likes') }}"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;Likes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('chat') }}"><i class="bi bi-chat-dots-fill"></i>&nbsp;Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('preference') }}"><i class="bi bi-sliders"></i>&nbsp;Preference</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }} "><i class="bi bi-question-circle-fill"></i>&nbsp;About {{ config('app.name') }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
