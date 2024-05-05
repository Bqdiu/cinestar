<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
<div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          <div class="input-group input-group-outline">
            <label class="form-label">Search</label>
            <input type="text" class="form-control" >
          </div>
          
      </div>
      <ul class="navbar-nav justify-content-end">
        <div class="topbar-divider d-none d-sm-block"></div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle"></i>
                <span>{{Auth::user()->Name}}</span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="/admin/logout">Logout</a></li>
            </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid py-1 px-3">
      
