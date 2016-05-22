<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
  <div class="container">

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="./">Software House Lampung</a>
        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li class="active"><a href="./"><i class="icon-home"></i> Home</a></li>
            <li class="dropdown">
              <a title="Home" href="#" class="dropdown-toggle" data-toggle="dropdown">SHL <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?ur=home>about_shl"><i class="icon-bookmark"></i> What is SHL ?</a></li>
                <li class="divider"></li>
                <li class="nav-header">Category</li>
                <li><a href="?ur=home>article"><i class="icon-globe"></i> Feed and article</a></li>
              </ul>
            </li>
            <li><a href="?ur=home>order">Order</a></li>
            <li><a href="?ur=home>top_product">Top product</a></li>
            <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
            <li><a href="?ur=home>help">Need Help ?</b></a></li>
            <li>
                <form class="navbar-search pull-left" style="padding-top:2%">
                  <input type="text" class="search-query" placeholder="Cari sesuatu ?">
                </form>			
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->

  </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->
