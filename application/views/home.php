<!DOCTYPE html>
<html ng-app="webApp">
    <head>
        <title>Home</title>
        
        <link rel=stylesheet href="http://slateproject.me/gryffindorjedi/assets/css/homeStyle.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="http://slateproject.me/gryffindorjedi/assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,200' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.min.js"></script>
        
        <script src="http://slateproject.me/gryffindorjedi/assets/js/angular.js"></script>
        
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="wrapper col-sm-12">
                    <div ng-view></div>
            </div>
        </div>
        

    </body>
</html>
