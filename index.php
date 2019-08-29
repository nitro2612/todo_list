<!DOCTYPE html>

<html>
	<head>
		<title>ToDo List</title>
		
		<meta charset="utf-8">
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="assets/css/style.css">
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
		<script src="https://kit.fontawesome.com/d3420f7f4c.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
	</head>
	<body>
		<h1 id="title">ToDo-List</h1>
		<div id="todo_list">
			<div id="head">
				<div id="btn_add">
					<i class="fas fa-plus fa-2x"></i>
				</div>
				<div id="box_search">
					<input type="date" name="input_date" id="input_date_id">
					<button name="input_date_search"><i class="fas fa-search fa-2x"></i></button>
				</div>
			</div>
			<div id="body">
				<div id="task_1">
					<div class="task_main_content">
						<h2 class="task_title">Go shopping</h2>
						<p class="task_description">Buy apples, pears, bread, ham, noodels and sauce</p>
						<p class="expiry">Expires at 4:00 PM [02:16:25]</p>
					</div>
					<div class="task_done">
						<input type="checkbox" class="task_done_checkbox">
					</div>
				</div>
				<div id="task_2">
					<div class="task_main_content">
						<h2 class="task_title">Medical appointment</h2>
						<p class="task_description">Lung function test at Dr. Hauser</p>
						<p class="expiry">Expires at 5:30 PM [01:59:11]</p>
					</div>
					<div class="task_done">
						<input type="checkbox" class="task_done_checkbox">
					</div>
				</div>
				<div id="task_3">
					<div class="task_main_content">
						<h2 class="task_title">Pub</h2>
						<p class="task_description">Meet for a beer with Jimmy</p>
						<p class="expiry">Expires at 9:00 PM [03:24:56]</p>
					</div>
					<div class="task_done">
						<input type="checkbox" class="task_done_checkbox">
					</div>
				</div>
			</div>
			<div id="footer">
				<input type="button" name="btn_delete" id="btn_delete_id" value="Delete selected">
			</div>
		</div>
	</body>
</html>