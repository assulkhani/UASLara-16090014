<!DOCTYPE html>
<html lang="en">
  
@include('templates.partials._head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>votingOnline</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('public/bootstrap/assets/images/img.jpeg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Administrator</span>
                <h2>AbuMuslihAssulkhani</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('templates.partials._sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
          </div>
        </div>

        <!-- top navigation -->
        @include('templates.partials._top-nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          @yield('main')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            votingOnline <a href="https://colorlib.com">AbuMuslih</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  @include('templates.partials._script')

  @yield('modal')
	
  </body>
</html>
