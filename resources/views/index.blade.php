<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->\
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap. -->
    <div class="masthead">
        <h3 class="text-muted">ANGGA BDT</h3>
        <nav>
            <ul class="nav nav-justified">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#">Lihat Data di master</a></li>
                <li><a href="#">Lihat Data di slave01</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron">
        @php($ip_num = $_SERVER['REMOTE_ADDR'])
        @php($host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']))
        <h1>Hi, Your {{$ip_num}} and Computer {{$host_name}} siap ane laporin polisi</h1>
        <p class="lead">WASPADALAH !!!</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Tambah Data</a></p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <table class="table table-hover table-responsive">
            <thead>
            <tr>
                <th>actor_id</th>
                <th>Firts Name</th>
                <th>Last Name</th>
                <th>Last Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $actors)
                <tr>
                    <td>{{$actors->actor_id}}</td>
                    <td>{{$actors->first_name}}</td>
                    <td>{{$actors->last_name}}</td>
                    <td>{{$actors->last_update}}</td>
                </tr>
            @endforeach
            {!! $data->render() !!}
            </tbody>
        </table>
    </div>

    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2017 Fakultas Ilmu Komputer Universitas Jember</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>