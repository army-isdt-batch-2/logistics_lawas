
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL::route('home') }}">
          <b class="text-warning">Logistics</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link @if($active == 'return') active @endif" aria-current="page" href="{{ URL::route('return') }}">Return</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'delivery') active @endif" href="{{ URL::route('delivery') }}">Delivery</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link @if($active == 'transportation') active @endif" href="{{ URL::route('transportation') }}" tabindex="-1" aria-disabled="true">Transportation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'distribution') active @endif" href="{{ URL::route('distribution') }}" tabindex="-1" aria-disabled="true">Distribution</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'asset') active @endif" href="{{ URL::route('asset') }}" tabindex="-1" aria-disabled="true">Asset</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'storage') active @endif" href="{{ URL::route('storage') }}" tabindex="-1" aria-disabled="true">Storage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'supplier') active @endif" href="{{ URL::route('supplier') }}" tabindex="-1" aria-disabled="true">Supplier</a>
            </li>
          </ul>
          <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
