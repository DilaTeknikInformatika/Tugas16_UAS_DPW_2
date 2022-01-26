<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="{{url('home')}}">Home</a>
                  <a href="{{url('login')}}">Login</a>
                  <a href="{{url('products')}}">Products</a>
                  <a href="{{url('about')}}">About</a>
                  <a href="{{url('client')}}">Client</a>
                  <a href="{{url('contact')}}">Contact</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="{{url('public')}}/images/toggle-icon.png"></span>
               <a class="logo" href="index.php">Mine Shope<span class="sr-only">(current)</span></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>
                        <li><a href="/l"><img src="{{url('public')}}/images/user-icon.png"></a></li>
                        <li><a href="#"><img src="{{url('public')}}/images/bag-icon.png"></a></li>
                        <li><a href="#"><img src="{{url('public')}}/images/search-icon.png"></a></li>
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div>