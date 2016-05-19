<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('partials.link_css')
  </head>
    <body>
        <div class="container">
            <header>
                <div class="row">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--a class="navbar-brand alonews-brand" href="#"><i class="glyphicon glyphicon-home"></i><span class="sr-only">(current)</span></a-->
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> <span class="sr-only">(current)</span></a></li>
                                <li><a href="/about">Champion League</a></li>
                                <li><a href="/contact">Premier League</a></li>
                                <li><a href="#">Liga BBVA</a></li>
                                <li><a href="#">Serie A</a></li>
                                <li><a href="#">Bundesliga</a></li>
                                <li><a href="#">Ligue One</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div><!-- /.container-fluid -->
            </header>
            <!-- content -->
            <div class="section group">
                <div class="col span_12_of_12 ha"></div>
                @yield('content')
                </div>
                <div class="row ha_text_align">
                    @yield('page')
                </div>

        </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="css/bootstrap-3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
