<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>	
        {!! HTML::style('css/bootstrap.min.css') !!}
        <style type="text/css">
        .wf{ width:100%; margin-left:auto; margin-right:auto; }
        .br { border-right:1px solid #ECF0F1 }
        .ps { padding:15px 0 }
        .rc .text-muted { font-size:0.8em }
        .rc h4 { font-size:1.2em }
        .mb0 { margin:0 5px 1px 0 }
        </style>
    </head>
	<body>
		<div class="navbar navbar-default">
			<a class="navbar-brand">prime</a>
		</div>
		
		
		<div class="container">
		<div class="row-fluid">
			<div class="panel panel-default">
				<div class="panel-heading ps">
					<div class="row-fluid clearfix">
						<div class="col-xs-2">
							<img class="img-circle" src="https://graph.facebook.com/100001038273443/picture?width=42&height=42" />
						</div>
						<div class="col-xs-10 rc">
							<h4 class="mb0">Which Smartphone is better, I have budget of 30,000 INR.. Please suggest other than this also?</h4>
							<p class="text-info">#smartphone #mobile #under30k #budgetphone</p>
							<div class="text-muted">Asked 5 mintues ago</div>
						</div>
					</div>
				</div>
				<div class="panel-body ps">
					<div class="row-fluid">
						<div class="col-xs-6 br">
							<div>
								<img class="wf" src="{{ asset('img/iphone6s.jpg') }}" alt="iPhone 6s" />
								<p class="text-center">iPhone 6s</p>
							</div>
							<div class="hide text-center">
								<h1 class="text-danger">34%</h1>
								<p>3,342 users</p>
							</div>
						</div>
						<div class="col-xs-6">
							<div>
								<img class="wf" src="{{ asset('img/samsungs6.jpg') }}" alt="iPhone 6s" />
								<p class="text-center">Samsung Galaxy S6</p>
							</div>
							
							<div class="hide text-center">
								<h1 class="text-success">66%</h1>
								<p>23,872 users</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		</div>
	</body>
</html>
