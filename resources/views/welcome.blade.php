<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
        {!! HTML::style('css/bootstrap.min.css') !!}
        <style type="text/css">
        .wf{ width:100%; margin-left:auto; margin-right:auto; }
        .br { border-right:1px solid #ECF0F1 }
        .ps { padding:15px 0 }
	.p0 { padding:0; border-radius:0 }
	.p0 .progress-bar, .p0 { height: 14px }
	.f08 { font-size: 0.8em; color: #777 }	
	#ips:target {
    -webkit-transition: opacity 2.0s ease-in;
       -moz-transition: opacity 2.0s ease-in;
         -o-transition: opacity 2.0s ease-in;
                                  opacity: 1;}
        .rc .text-muted { font-size:0.8em }
        .rc h4 { font-size:1.2em }
        .mb0 { margin:0 5px 1px 0 }


/*	.card {
  position: relative;
  float: left;
  padding-bottom: 25%;
  width: 25%;
  text-align: center;
}

.card__front,
.card__back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.card__front,
.card__back {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.3s;
          transition: transform 0.3s;
}

.card__front {
  background-color: #ff5078;
}

.card__back {
  background-color: #1e1e1e;
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card.effect__click.flipped .card__front {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card.effect__click.flipped .card__back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}*/
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
							<h5 class="mb0">Mayank Mishra</h5>
							<div class="text-muted">Asked 5 mintues ago</div>
						</div>
						<div class="col-xs-12">
							<h5>Which Smartphone is better, I have budget of 30,000 INR.. Please suggest other than this?</h5>
							<!--<p class="text-info">#smartphone #mobile #under30k #budgetphone</p>-->
						</div>
					</div>
				</div>
				<div class="panel-body ps">
					<div class="row-fluid clearfix">
						<div class="col-xs-6 br" id="ips">
							<div>
								<img class="wf" src="{{ asset('img/iphone6s.jpg') }}" alt="iPhone 6s" />
								<p class="text-center">iPhone 6s</p>
							</div>
						</div>
						<div class="col-xs-6" id="ips">
							<div>
								<img class="wf" src="{{ asset('img/samsungs6.jpg') }}" alt="iPhone 6s" />
								<p class="text-center">Samsung Galaxy S6</p>
							</div>
						</div>
					</div>
					<div class="row-fluid clearfix">
<div class="col-xs-6">
					  <div class="progress mb0 p0">
					    <div class="pull-right progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
					  aria-valuemin="0" aria-valuemax="100" style="width:70%">
									
					</div>
					</div>
<span class="pull-right f08 clearfix">340 votes</span>	</div>
<div class="col-xs-6">
					<div class="progress mb0 p0">
					  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30"
					  aria-valuemin="0" aria-valuemax="100" style="width:30%">
					  </div>
					</div>
<span class="pull-left f08 clearfix">95 votes</span>
					</div>
				</div>
				</div>
				<div class="panel-footer">
					+ 36 Comments
				</div>
			</div>
		</div>

<!-- FLIP function 
		<div class="card effect__click">
  <div class="card__front">
    <span class="card__text">front</span>
  </div>
  <div class="card__back">
    <span class="card__text">back</span>
  </div>
</div>-->		


		</div>
	</body>
	<script>
/* FLIP function 
(function() {
  var cards = document.querySelectorAll(".card.effect__click");
  for ( var i  = 0, len = cards.length; i < len; i++ ) {
    var card = cards[i];
    clickListener( card );
  }

  function clickListener(card) {
    card.addEventListener( "click", function() {
      var c = this.classList;
      c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
    });
  }
})(); */
	</script>
</html>
