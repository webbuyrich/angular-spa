// adding new ng-App model
var wpApp = new angular.module( 'wpAngularTheme', ['ui.router', 'ngResource'] );


wpApp.factory( 'Posts', function( $resource ){
	return $resource( appInfo.api_url + 'posts/:ID', {
		ID: '@id'
	})
});

wpApp.controller('ListController', ['$scope', 'Posts', function($scope, Posts){
	console.log('ListController');
	$scope.page_title = 'Blog Listing';
	Posts.query(function(res)){
		$scope.posts = res;
	}
}])