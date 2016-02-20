    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                 <a class="navbar-brand" id="logo-font" href="index.html">FavoRoutes</a>
                
            </div>

            <div id="navbar" class="navbar-collapse collapse">
              <form method="post" action="ui/checklogin.php" class="navbar-form navbar-right">
                <div class="form-group">
                  <input name="user_login" type="text" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                  <input name="password_login" type="password" placeholder="Password" class="form-control">
                </div>
                <button id="btn_login" type="submit" class="btn btn-theme">Log in</button>
              </form>
            </div><!--/.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>


