<nav class="navbar navbar-expand-sm navbar-light bg-white pt-0 pb-0 mb-5">
  <div class="container">
    <a class="navbar-brand text-army-green font-weight-bolder" href="@yield('index_link')">Mahir Shahrier</a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item @yield('is_active')">
          <a class="nav-link" href="@yield('experience_link')">Experience</a>
        </li>
        <li class="nav-item @yield('is_active')">
          <a class="nav-link" href="@yield('skills_link')">Skills</a>
        </li>
        <li class="nav-item @yield('is_active')">
          <a class="nav-link" href="@yield('projects_link')">Projects</a>
        </li>
      </ul>
    </div>  
  </div>
</nav>

