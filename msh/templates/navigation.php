    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">Material Science Handbook</a>
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
        </ul>     
        <form class="form-inline" action="/?s=search" method="post">
              <input name="searchinput" class="form-control" type="text" placeholder="{{NAV_SEARCH}}" aria-label="Search">
              <button class="btn aqua-gradient btn-rounded" type="submit">{{NAV_SEARCH}}</button>
        </form>
      </div>
    </nav>
