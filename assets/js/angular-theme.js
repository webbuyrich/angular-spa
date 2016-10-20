var wpApp = new angular.module( 'wpAngularTheme', ['ui.router', 'ngResource'] );

wpApp.factory( 'Posts', function( $resource ) {
	return $resource( appInfo.api_url + 'posts/:ID', {
		ID: '@id'
	})
});

wpApp.controller( 'ListController', ['$scope', 'Posts', function( $scope, Posts ) {
	console.log('ListController');
	$scope.page_title = 'Blog Listing Page';

	Posts.query(function( res ) {
		$scope.posts = res;
	});
	
}]);

wpApp.config( function( $stateProvider, $urlRouterProvider){
	$urlRouterProvider.otherwise('/');
	$stateProvider
		.state( 'list', {
			url: '/',
			controller: 'ListController',
			templateUrl: appInfo.template_directory + 'templates/list.html'
		});
});

wpApp.filter('to_trusted', ['$sce', function($sce){
	return function( text ){
		return $sce.trustAsHtml( text );
	}
}]);