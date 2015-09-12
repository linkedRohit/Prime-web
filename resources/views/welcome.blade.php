<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>	
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! HTML::style('css/bootstrap.min.css') !!}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <style type="text/css">
            .wf{ width:100%; margin-left:auto; margin-right:auto; }
            .br { border-right:1px solid #ECF0F1 }
            .ps { padding:15px 0 }
            .p0 { padding:0; border-radius:0 }
            .p0 .progress-bar, .p0 { height: 14px }
            .f08 { font-size: 0.8em; color: #777 }	
			.f09 { font-size: 0.9em; color: #555 }
            .rc .text-muted { font-size:0.8em }
            .rc h4 { font-size:1.2em }
            .mb0 { margin:0 5px 1px 0 }
			.mt5 { margin-top: 5px }
			
			<!--angular js feed animation-->
			.animate-enter, 
			.animate-leave
			{ 
				-webkit-transition: 400ms cubic-bezier(0.000, 0.000, 0.580, 1.000) all;
				-moz-transition: 400ms cubic-bezier(0.000, 0.000, 0.580, 1.000) all;
				-ms-transition: 400ms cubic-bezier(0.000, 0.000, 0.580, 1.000) all;
				-o-transition: 400ms cubic-bezier(0.000, 0.000, 0.580, 1.000) all;
				transition: 400ms cubic-bezier(0.000, 0.000, 0.580, 1.000) all;
				position: relative;
				display: block;
			} 

			.animate-enter.animate-enter-active, 
			.animate-leave {
				opacity: 1;
				right: 0;
				height: 30px;
			}

			.animate-leave.animate-leave-active,
			.animate-enter {
				opacity: 0;
				right: -50px;
				height: 0px;
			}
        </style>
    </head>
    <body ng-app="primeApp">
        <div class="navbar navbar-default">
            <a class="navbar-brand">prime</a>
        </div>


        <div class="container">
            <div class="row-fluid" ng-controller="FeedController">
				@include('card')
            </div>
        </div>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script type="text/javascript">
     var primeApp = angular.module('primeApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }).filter('fromNow', function() {
			return function(date) {
				return moment(date).fromNow();
			}
	}).controller('FeedController', function($scope, $http) {
		$http.get("{{ url('/feed') }}")
		.success(function(response) {
			$scope.feed = response;
		});
	});
    </script>
</html>
