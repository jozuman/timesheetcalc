<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="jozuman">
    <title>Timesheet Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Timesheet Calc</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Times</h1>
        <p class="lead">Paste.<br> Go.</p>
        <form method="post" action="index.php" class="form">
            <textarea class="form-control" rows="3" name="data"></textarea>
            <br>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      
      <?php
        $data = $_POST["data"];
        if(!empty($data)){
            echo $data;
            $times = expode(",", $data);
            echo "test2";
            var_dump($times);
            foreach ($times as $time){
                $startEnd = explode("-", $time);
                $start = trim($startEnd[0]);
                $end = trim($startEnd[1]);
                echo($start);
                echo($end);
                $startDateTime = new DateTime($start);
                $endDateTime = new DateTime($end);
                $interval = $startDateTime->diff($endDateTime);
                var_dump($interval);
                // echo $interval->format('%R%a days');
            }
            ?>
            <div class="well">
            </div>
            <?php
        }
      ?>

    </div><!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>