<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="basicCSS.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">


<!-- Fonts -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
  <script src="https://use.fontawesome.com/7778150638.js"></script>

    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <!-- Latest compiled and minified CSS -->
   
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  
  

   
  </head>

  <body>
  <script type="text/javascript">
    
if ('serviceWorker' in navigator) {
  console.log('Service Worker is supported');
  navigator.serviceWorker.register('sw.js').then(function() {
    return navigator.serviceWorker.ready;
  }).then(function(reg) {
    console.log('Service Worker is ready :^)', reg);
      // TODO
  }).catch(function(error) {
    console.log('Service Worker error :^(', error);
  });
}

  </script>

  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#ffffff; font: PT Sans;">Support Network</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div>
      </div>
    </nav>

     <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <div class="imageIcons">
              <a href="#chat">
              <i class="fa fa-comments"></i> 
              </a>
            </div>
            <div class="imageIcons">
              <a class="imageLinkCol" href="#groups">
              <i class="fa fa-heart"></i> 
              </a>
            </div>
            <div class="imageIcons">
              <a href="#events">
              <i class="fa fa-map-marker"></i> 
              </a>
            </div>
            <div class="imageIcons">
              <a href="#fundraising">
              <i class="fa fa-money"></i> 
              </a>
            </div>
          </ul>
        </div>


        <div class="col-xs-7">
    
          <div class="row">
            <div class="span4">
             <div class="form-group">
        </div><!--/span-->
        <div class="container">
   <div class="row">
        <div class="col-md-6">
         <h2>Custom search field</h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" name='var' class="form-control input-lg" placeholder="State"/>
                    <input type="button" name="test" id="test" value="Submit" /><br/>
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
   </div>
</div>
      
     </head>
<body>
<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('u.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } 
   $sql =<<<EOF
      SELECT firstname from users WHERE state = 'OH'
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "FIRSTNAME = ". $row['firstname'] . "\n";
      echo "LASTNAME = ". $row['lastname'] ."\n";
      echo "TYPE = ". $row['type'] ."\n";
      echo "STAGE =  ".$row['stage'] ."\n\n";
   }
   $db->close();
?>
</body>
</html>