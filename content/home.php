<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Qur'an KU</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <!--  <link href="css/load.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!--<script src="js/ajaxnya.js"></script>-->
    <script src="js/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
       <!--   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand" href="#">Project name</a>
          <audio id="myAudio" controls>
                <source src="audio/alfatiha.mp3" type="audio/mpeg">
          </audio>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
       
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
       
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <center bottom: 10px;>
           <form>
            <input type="text" class="form-control" placeholder="Search Surah...">
            </form>
          </center>
          <ul id="tabs" class="nav nav-sidebar">
            <li><a href="#content1/1" class="list-group-item">Nav item</a></li>
            <li><a href="#content1/2" class="list-group-item">Nav item again</a></li>
            <li><a href="" class="list-group-item">One more nav</a></li>
            <li><a href="" class="list-group-item">Another nav item</a></li>
            <li><a href="" class="list-group-item">More navigation</a></li>          
            <li><a href="" class="list-group-item">Nav item again</a></li>
            <li><a href="" class="list-group-item">One more nav</a></li>
            <li><a href="" class="list-group-item">Another nav item</a></li>       
            <li><a href="" class="list-group-item">Nav item</a></li>
            <li><a href="" class="list-group-item">Nav item again</a></li>
            <li><a href="" class="list-group-item">One more nav</a></li>
            <li><a href="" class="list-group-item">Another nav item</a></li>
            <li><a href="" class="list-group-item">More navigation</a></li>          
            <li><a href="" class="list-group-item">Nav item</a></li>
            <li><a href="" class="list-group-item">Nav item again</a></li>
            <li><a href="" class="list-group-item">One more nav</a></li>
            <li><a href="" class="list-group-item">Another nav item</a></li>
            <li><a href="" class="list-group-item">More navigation</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="content">

          </div>

        </div>
      <!--  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center>
          <h1 class="page-header">Nama Surat</h1>
          </center>
          <div class="media">
          <div class="media-left media-middle">
           <!-- <a href="#">
            <img class="media-object" src="..." alt="...">
            </a> 
            <a href="">
              <audio id="myAudio" controls>
                <source src="audio/alfatiha.mp3" type="audio/mpeg">
              </audio>
            </a>
            </div>
            <div class="media-body">
            <h4 class="media-heading">Nama</h4>
                 <p>فغعبترترترانلاتالانلاتتتلا</p>
            </div>
            </div>
          <center>  
          <h2 class="sub-header">footer</h2>
          </center>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script>
    $(function() {
          $("#tabs a").click(function(){
            var page = this.hash.substr(1);
            $("content").html("");
            $.get(page+".php", function(gotHtml){
            $(".content").html(gotHtml);
            });
            return false;
      });
    });
    </script>

    <script type="text/javascript">
      var aud = document.getElementById('myAudio');
      aud.onvolumechang = function() {
      alert('blaaaaaaaaaaaaaaaaaaaaaaaa');
      }
    </script>


    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
