
<header>
  <nav class="navbar navbar-default navbar-fixed-top" id="main-navigation">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">
          <img alt="Brand" src="{{ asset('asset/images/hot-biscuit-logo.png') }}">
        </a>
        
      </div>
      <div id="nav-menu-holder" onclick='show_modal()'>
            <img src="{{ asset('asset/images/menu bar.png') }}">
      </div>
    </div>
  </nav>
  <div class="modal-menu-holder hide-modal">
    <div class="modal-menu">
      <div class="logo-holder">
        <img src="{{ asset('asset/images/hot-biscuit-logo.png') }}">
      </div>
      <div class="menu-links">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="registration.html">Registration Page</a></li>
          <li><a href="test-page.html">test-page</a></li>
          <li><a href="male-users-page.html">male-users-page</a></li>
          <li><a href="female-users-page.html">female-users-page</a></li>
        </ul>
    </div>
    </div>
    <div class="modal-left" onclick="close_modal()"></div>
  </div>
</header>