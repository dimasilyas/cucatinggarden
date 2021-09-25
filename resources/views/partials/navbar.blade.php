<header role="banner" class="clearHeader">

    <nav id="navigation" class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="125" class="d-inline-block align-top" alt="" style="padding-bottom: 10px">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
          <ul class="nav navbar-nav navbar-nav ml-auto pl-lg-5 pl-0">
            <li class="nav-item">
              <a class="nav-link active" href="/">{{ __('general.beranda') }}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/rooms" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('general.fasilitas') }}</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" hef="/rooms">Billiard</a>
                <a class="dropdown-item" href="/rooms">Kolam Renang</a>
                <a class="dropdown-item" href="/rooms">Lorem </a>
                <a class="dropdown-item" href="/rooms">Lorem</a>
              </div>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#rooms">{{ __('general.kamar') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">{{ __('general.testimoni') }}</a>
              </li>s
            <li class="nav-item">
              <a class="nav-link" href="#contact">{{ __('general.kontak') }}</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/rooms" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-globe">&nbsp;
                {{strtoupper(Lang::locale())}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <li> <a class="dropdown-item" href="lang/id" class="p-3">ID</a></li>
                   <li> <a class="dropdown-item" href="lang/en" class="p-3">EN</a></li>

                </ul>
            </li>
             <li class="nav-item cta">
              <a class="nav-link" href="https://api.whatsapp.com/send?phone=6285770803713&text=Saya tertarik dengan Cucating Garden"><span>{{ __('general.pesan sekarang') }}</span></a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
