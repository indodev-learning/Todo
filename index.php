<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>To Do List</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
		.link{
			background: #222;
			background: -moz-linear-gradient(#252525, #0A0A0A) ;
			background: -o-linear-gradient(#252525, #0A0A0A);
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#252525), to(#0A0A0A));
			background: -webkit-linear-gradient(#252525, #0A0A0A);
			-webkit-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			-moz-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			color:#fff;
			padding: 8px 10px;
			text-decoration: none;
			font-weight: normal;
			font-size: 18px;
			font-family: Arial,Verdana;
			word-spacing: 1px;
			border-radius: 4px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			-o-border-radius: 4px;
			-ms-border-radius: 4px;
		}
		.link:hover{
			text-decoration: none;
			color: #fff;
			background:#62ABD8 !important;
			background: -moz-linear-gradient(#80BADE, #62ABD8) ;
			background: -o-linear-gradient(#80BADE, #62ABD8);
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#80BADE), to(#62ABD8));
			background: -webkit-linear-gradient(#80BADE, #62ABD8);
			-webkit-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			-moz-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
		}
		.link:active{
			background:#62ABD8 !important;
			background: -moz-linear-gradient(#80BADE, #62ABD8) ;
			background: -o-linear-gradient(#80BADE, #62ABD8);
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#80BADE), to(#62ABD8));
			background: -webkit-linear-gradient(#80BADE, #62ABD8);
			-webkit-box-shadow: inset rgba(0, 0, 0, 0.4) 0px 1px 2px;
			-moz-box-shadow: inset rgba(0, 0, 0, 0.4) 0px 1px 2px;
			box-shadow: inset rgba(0, 0, 0, 0.4) 0px 1px 2px;
		}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
<body ng-app="toDoApp">
<div style="width:100%;text-align:center;margin:0 auto;">
	<div>
		<center><h1>Project & Tugas Kuliah</h1>
		</center>
	</div>
	<hr>
	<br>
</div>
	<div class="container" ng-controller="ToDoController">
		<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-5 col-lg-offset-3 col-lg-5">
			<h2>List</h2>
			<!-- Form Starts Here -->
			<div class="form">
				<div class="input-group">
					<input type="text" class="form-control" ng-model="task">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" ng-click="addTask()"><span
							class="glyphicon glyphicon-plus"></span> Add Task</button>
					</span>
				</div><!-- /input-group -->
			</div>
			<hr/>
			<!-- Form Ends Here -->

			<!-- Task List Starts Here -->
			<ul class="list-group" ng-show="tasks.length > 0">
				<li class="list-group-item clearfix task" ng-repeat="todo in tasks" ng-class="{disabled: todo.done}"> 
					<p class="lead">{{todo.task}}</p>
					<div>
						<span class="pull-right">
							<button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" 
								ng-click="editTask($index)"></span></button>
							<button class="btn btn-primary btn-xs" ng-show="!todo.done"><span class="glyphicon glyphicon-ok" 
								ng-click="doneTask($index)"></span></button>
							<button class="btn btn-primary btn-xs" ng-show="todo.done"><span class="glyphicon glyphicon-repeat" 
								ng-click="unDoneTask($index)"></span></button>
							<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" 
								ng-click="deleteTask($index)"></span></button>
						</span>
					</div>
				</li>
			</ul>
			<!-- Task List Ends Here -->
		</div>
	</div>
	<br/>
	<center><iframe src="http://time2hack.com/ads.php" width="100%" frameborder="0" style="max-width: 740px;"></iframe></center>
	<script src="js/angular.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>