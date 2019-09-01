<!DOCTYPE html>

<html>
	<head>
		<title>ToDo List</title>
		
		<meta charset="utf-8">
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet"> 
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
		<link type="text/css" rel="stylesheet" href="assets/util/colors.css">
		<link type="text/css" rel="stylesheet" href="assets/css/style_todo_list.css">
        <link type="text/css" rel="stylesheet" href="assets/css/style_frame_add.css">

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://kit.fontawesome.com/d3420f7f4c.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
	</head>
	<body>
		<h1 id="title">ToDo-List</h1>
		<div id="todo_list">
			<div id="head">
				<div id="btn_add" class="hvr-grow">
					<i class="fas fa-plus fa-2x"></i>
				</div>
				<div id="box_search">
					<input type="date" name="input_date" id="input_date_id">
					<button name="input_date_search" class="hvr-forward"><i class="fas fa-search"></i></button>
				</div>
			</div>
			<div id="body">
				<div id="task_1" class="task">
					<div class="task_main_content">
						<h2 class="task_title">Go shopping</h2>
						<p class="task_description"><i class="fas fa-dot-circle fa-xs"></i> Buy apples, pears, bread, ham, noodels and sauce</p>
						<p class="task_description"><i class="fas fa-dot-circle fa-xs"></i> Buy apples, pears, bread, ham, noodels and sauce</p>
						<p class="task_description"><i class="fas fa-dot-circle fa-xs"></i> Buy apples, pears, bread, ham, noodels and sauce</p>
						<p class="task_description"><i class="fas fa-dot-circle fa-xs"></i> Buy apples, pears, bread, ham, noodels and sauce</p>
						<p class="task_description"><i class="fas fa-dot-circle fa-xs"></i> Buy apples, pears, bread, ham, noodels and sauce</p>
						<p class="expiry">Expires at 4:00 PM [02:16:25]</p>
					</div>
					<div class="task_done">
						<p>Done</p>
						<input type="checkbox" class="task_done_checkbox">
					</div>
				</div>
				<div id="task_2" class="task">
					<div class="task_main_content">
						<h2 class="task_title">Medical appointment</h2>
						<p class="task_description"><i class="fas fa-dot-circle fa-xs"></i> Lung function test at Dr. Hauser</p>
						<p class="expiry">Expires at 5:30 PM [01:59:11]</p>
					</div>
					<div class="task_done">
						<p>Done</p>
						<input type="checkbox" class="task_done_checkbox">
					</div>
				</div>
				<div id="task_3" class="task">
					<div class="task_main_content">
						<h2 class="task_title">Pub</h2>
						<p class="task_description"><i class="fas fa-dot-circle fa-xs"></i> Meet for a beer with Jimmy</p>
						<p class="expiry">Expires at 9:00 PM [03:24:56]</p>
					</div>
					<div class="task_done">
						<p>Done</p>
						<input type="checkbox" class="task_done_checkbox">
					</div>
				</div>
			</div>
			<div id="footer">
				<input type="button" name="btn_delete" id="btn_delete_id" value="Delete selected">
			</div>
		</div>
		<div id="item_add">
			<h2>Add a task</h2>
			<i id="btn_hide" class="far fa-times-circle fa-2x"></i>
			<input type="text" name="add_title" id="add_title_id" placeholder="Title">
			<br>
			<input type="text" name="add_description" class="add_description_c" placeholder="Description">
			<br>
			<input type="text" name="add_description_2" class="add_description_c" placeholder="Description 2">
			<br>
			<button id="add_desc_add">Add description</button>
			<br>
			<label for="add_expire_date_id">Expires at</label>
			<br>
			<input type="date" name="add_expire_date" id="add_expire_date_id">
			<br>
			<input type="time" name="add_expire_time" id="add_expire_time_id">
			<br>
			<span id="sperator"></span>
			<button id="add_final">Add task</button>
		</div>
	</body>
</html>