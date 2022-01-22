<nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
         <a class="navbar-brand" href="{{ URL::to('/') }}">
            <img src="/themes/novena/images/logo.png" alt="" class="img-fluid">
          </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarmain">
        @menu('main')
      </div>
    </div>
</nav>
