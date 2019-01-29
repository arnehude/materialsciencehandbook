<?php 
    $site = @$_GET['s'];  
    $lang = @$_GET['lang'];
   
    require './php/session.php';
    include './php/functions.php';
    include './php/config.php';

    if($site == NULL || $site == 'start')
        $site = 'start';
    
    $url = './templates/'.$site.'.php';
    $input = @$_POST['searchinput'];
    if($site == 'search'){
        include './php/search.php'; 
    }
    $site_content = file_get_contents($url);    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet" />
    <link href="css/table.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script>
    function erase(form) {
      var txt;
      if (confirm("Are you sure to delete?")) {
        document.form.submit();
      }      
    }
    </script>

    <title>MSH - Exchange 2018</title>
  </head>
  <body>
     
    <?php 
    echo parse_language(file_get_contents('./templates/navigation.php'),$lang); ?>     
      
    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
    <?php if(isset($site_content)&& $site != "search"){echo parse_language($site_content,$lang);}//else{error_log(1, 404);}?>
    <?php if(isset($site_content)&& $site == "search"){echo parse_language($site_content,$lang,$fkt);}//else{error_log(1, 404);}?>
    </main>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    </body>
</html>
