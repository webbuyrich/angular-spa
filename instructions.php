<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SetUp Instructions</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <div class="container">
        	<div class="panel">
        		<h1>1. Install Wordpress REST API</h1>
        		<p>Install this plugin from within the admin area</p>
        	</div>
            <div class="panel">
                <h1>2. Add new Angular Module</h1>
                <p>In the angular-theme.js, create an angular module as a variable, give the module a name,
                    and add the ui.router dependency.</p>
            </div>
            <div class="panel">
                <h1>2. Add ngResource FACTORY</h1>
                <p>add ngResource next to ui.router, add the ng-resource cdn script to functions.php 
                    change the version in the link, and add ('angular-core') array with syntax like above script.</p>
            </div>
            <div class="panel">
                <h1>2. Add ListCtrl CONTROLLER</h1>
                <p>Create a controller named 'ListController' and add Posts next to $scope before and after the function.
                    Add a scope page title and add Posts.query funciton that uses res as the input set $scope.posts equal 
                    to the res input from the function.</p>
            </div>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>