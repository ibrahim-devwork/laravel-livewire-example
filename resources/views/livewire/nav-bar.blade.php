<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @auth
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" wire:navigate href="/customers">Customers</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-secondary" aria-current="page" wire:click="logout">Logout</button>
                </li>
            @endauth

            @guest
                <li class="nav-item">
                    <a class="nav-link"  wire:navigate href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  wire:navigate href="/register">Register</a>
                </li>
            @endguest
        </ul>

      </div>
    </div>
  </nav>