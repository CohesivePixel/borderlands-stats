<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">BorderStats Controlpanel</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li {{{ (Request::is('/')) ? 'class=active' : ''}}} >
                <a class="nav-link" href="/">Editor</a>
            </li>
            <li {{{ (Request::is('system')) ? 'class=active' : ''}}} >
                <a class="nav-link" href="/system">Add System</a>
            </li>
            <li {{{ (Request::is('faction')) ? 'class=active' : ''}}} >
                <a class="nav-link" href="/faction">Add Faction</a>
            </li>
            <li {{{ (Request::is('fsdata/show')) ? 'class=active' : '' }}} >
                <a class="nav-link" href="/fsdata/show">Show BGS</a>
            </li>
        </ul>
    </div>
</nav>