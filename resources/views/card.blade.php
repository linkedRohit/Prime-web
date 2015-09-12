<div class="panel panel-default" ng-animate="'animate'" ng-repeat="post in feed">
	<div class="panel-heading ps">
		<div class="row-fluid clearfix">
			<div class="col-xs-2">
				<img class="img-circle" src="https://graph.facebook.com/<% post.user.fbid %>/picture?width=42&height=42" />
			</div>
			<div class="col-xs-10 rc mt5">
				<h5 class="mb0"><% post.user.name %></h5>
				<div class="text-muted">Asked <% post.postedOn | fromNow %></div>
			</div>
			<div class="col-xs-12">
				<h5><% post.title %></h5>
				<!--<p class="text-info">#smartphone #mobile #under30k #budgetphone</p>-->
			</div>
		</div>
	</div>
	<div class="panel-body ps">
		<div class="row-fluid clearfix">
			<div class="col-xs-6 br" id="ips">
				<div>
					<img class="wf" src="{{ asset('img/<% post.items[0].url %>.jpg') }}" alt="<% post.items[0].title %>" />
					<p class="mt5 text-center"><% post.items[0].title %></p>
				</div>
			</div>
			<div class="col-xs-6 br" id="ips">
				<div>
					<img class="wf" src="{{ asset('img/<% post.items[1].url %>.jpg') }}" alt="<% post.items[1].title %>" />
					<p class="mt5 text-center"><% post.items[1].title %></p>
				</div>
			</div>
		</div>
		<div class="row-fluid clearfix">
		<!--	<div class="col-xs-6">
				<div class="progress mb0 p0">
					<div class="pull-right progress-bar progress-bar-<% post.items[0].progress %>" role="progressbar" aria-valuenow="<% post.items[0].percent %>"
						 aria-valuemin="0" aria-valuemax="100" style="width:<% post.items[0].percent %>%">

					</div>
				</div>
				<span class="pull-right f08 clearfix"><% post.items[0].votes %> votes</span>	</div>
			<div class="col-xs-6">
				<div class="progress mb0 p0">
					<div class="progress-bar progress-bar-<% post.items[1].progress %>" role="progressbar" aria-valuenow="<% post.items[1].percent %>"
						 aria-valuemin="0" aria-valuemax="100" style="width:<% post.items[1].percent %>%">
					</div>
				</div>
				<span class="pull-left f08 clearfix"><% post.items[1].votes %> votes</span>
			</div> -->
		</div>
	</div>
	<div class="panel-footer">
		<div class="row f09">
			<div class="col-xs-6"><i class="fa fa-comments"></i>&nbsp; 0 Comments</div>					
			<div class="col-xs-6 text-right"><i class="fa fa-share-square"></i>&nbsp; Share</div>
		</div>
	</div>
</div>

