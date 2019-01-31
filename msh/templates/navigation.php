    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
<!--  <a class="navbar-brand" href="#"> Material Science Handbook </a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/?s=input_material">{{NAV_INPUT_MATERIAL}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/?s=list_all_dev">{{NAV_MATERIAL_LIST}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/?s=list_all">{{NAV_LIST_ALL}}</a>
          </li>
<!--          <li class="nav-item">
            <a class="nav-link" href="/?s=list_catergory">{{NAV_LIST_CATEGORY}}</a>
          </li>-->

          <li class="nav-item">
              <a class="nav-link" href="/templates/random_material.php">{{NAV_RANDOM_MATERIAL}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/?s=about">{{NAV_ABOUT}}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-flag"></i></a>
            <div class="dropdown-menu bg-dark">
                <button id="eng" class="dropbtn"><img src="/img/blank.gif" class="flag flag-gb" alt="English" /></button>
                <button id="fre" class="dropbtn"><img src="/img/blank.gif" class="flag flag-fr" alt="French" /></button>
                <button id="deu" class="dropbtn"><img src="/img/blank.gif" class="flag flag-de" alt="German" /></button>
            </div>
          </li>
        </ul>     
        <form class="form-inline" action="/?s=search" method="post">
            <input name="searchinput" class="border border-white rounded bg-dark form-control" type="text" placeholder="{{NAV_SEARCH}}" aria-label="Search">&nbsp;
              <button class="btn btn-outline-success" type="submit">{{NAV_SEARCH}}</button>
        </form>
      </div>
    </nav>
