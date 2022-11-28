<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto row">
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->
        {{-- <li class="nav-item">
            <div class="dark-mode-switch">
                <input type="checkbox" class="material-symbols-rounded" id="theme-toggle" />
              </div>
        </li> --}}
        <li class="nav-item">
            <div class="theme-switch-wrapper nav-link">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <span class="slider round"></span>
                </label>
            </div>
        </li>
        <form action="{{ route('logout') }}" class="m-2" method="post">
            @csrf
            <button type="submit" class="fa fa-sign-out-alt" id="logout-btn" style="color: white;background-color:#343A40;border:0px"></button>

        </form>
        <!-- <li class="nav-item">
        <em class="nav-link">Enable Dark Mode!</em>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-check-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
</nav>
