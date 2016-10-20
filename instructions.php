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
                <h1>3. Add new Angular Module</h1>
                <p>In the angular-theme.js, create an angular module as a variable, give the module a name,
                    and add the ui.router dependency.</p>
            </div>
            <div class="panel">
                <h1>4. Add ngResource FACTORY</h1>
                <p>add ngResource next to ui.router, add the ng-resource cdn script to functions.php 
                    change the version in the link, and add ('angular-core') array with syntax like above script.</p>
            </div>
            <div class="panel">
                <h1>5. Add ListCtrl CONTROLLER</h1>
                <p>Create a controller named 'ListController' and add Posts next to $scope before and after the function.
                    Add a scope page title and add Posts.query funciton that uses res as the input set $scope.posts equal 
                    to the res input from the function.</p>
            </div>
            <div class="panel">
                <h1>6. Add Template</h1>
                <p>Create a new folder named templates. Add a file named list.html inside templates folder. Use h1 tag 
                    to display page title that was defined in the controller. use pre and code to view all posts code
                    and using {posts | json}</p>
            </div>
            <div class="panel">
                <h1>7. Add Route</h1>
                <p>Create a new wpApp.config function using $stateProvider and $urlRouterProvider. View the stateprovider
                    syntax to set the name, url, controller, and templateUrl. Also add urlRouterProvider.otherwise and set it
                    to '/' to go to the homepage if an error occurs</p>
            </div>
            <div class="panel">
                <h1>8. Use ng-repeat to display posts</h1>
                <p>create an article div on list.html. inside the article display post.title.rendered and post.conent.rendered.
                    add a filter in angular-theme.js that uses $sce and create a function that returns the text with
                    the syntax return $sce.trustAsHtml( text );</p>
            </div>
            <div class="panel">
                <h1>9. Create single post view</h1>
                <p>Create new state similar to list and name it detail, set template url to a new detail.html file you need to
                    create. Create a new controller named detailcontroller. Add scope stateparams and posts to the controller.
                    Use stateparams to get id of post.</p>
            </div>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>