<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?=\TestProject\Engine\Config::SITE_NAME?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link media="all" type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/bootstrap.css">
        <link media="all" type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/style.css">
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Carlos Guzman</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a class="active" href="<?=ROOT_URL?>">Home</a></li>
              <li><a class="disabled" href="<?=ROOT_URL?>?p=user&amp;a=login">Admin</a></li>
              <li><a class="active" href="<?=ROOT_URL?>?p=user&amp;a=logout">Logout</a></li>

            </ul>

          </div>
        </div>
      </nav>
      <div class="container">
         <div class="row">
           <div class="col-xs-10 col-md-offset-1">
             <div class="center">
