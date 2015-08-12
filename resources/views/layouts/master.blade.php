<!DOCTYPE html>
<html>
    <head>
        <title>Cheap Computers</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <div id="wrapper" >
    <div id="sidebar-wrapper">





<ul class="nav nav-pills sidebar-nav nav-stacked">
      <li role="presentation" class="active sidebar-brand"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">About The Company</a></li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Products <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">PCs</a></li>
          <li><a href="#">Parts</a></li>
          <li><a href="#">Apple</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Other</a></li>
        </ul>
      </li>
    </ul>

        
    </div>
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- content of page -->
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
