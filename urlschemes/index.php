<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste com URL Schemes para Android e iOS</title>
    <meta name="description" content="Testando o compartilhamento de URLs para apps no smartphone">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="page-header">
          <h1>URL Schemes <small>Android e iOS</small></h1>
        </div>

        <div class="share">
          Compartilhe:
          <a class="btn btn-default" href="javascript:window.location='fb://publish/profile/me?text='+encodeURIComponent(location.href);"><i class="fa fa-facebook"></i></a>
          <a class="btn btn-default" href="javascript:window.location='twitter://post?message='+encodeURIComponent(location.href);"><i class="fa fa-twitter"></i></a>
          <a class="btn btn-default" href="javascript:window.location='whatsapp://send?text='+encodeURIComponent(location.href);"><i class="fa fa-whatsapp"></i></a>
          <a class="btn btn-default" href="https://www.google.com/maps/place/Av.+Dr.+Chucri+Zaidan,+1550+-+Santo+Amaro,+S%C3%A3o+Paulo+-+SP,+Brasil/@-23.6256019,-46.7041367,17z/data=!3m1!4b1!4m2!3m1!1s0x94ce50dc5903a5d1:0x834b8225b4317ec8"><i class="fa fa-map-marker"></i></a>
          <a href="#"></a>
        </div>
      </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
</html>
