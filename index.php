<!DOCTYPE html>
<?php session_start(); ?>
<html lang="de">
	<head>
		<title>ToDo List</title>
		
		<meta charset="utf-8" />
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
		<link type="text/css" rel="stylesheet" href="assets/util/colors.css" />
		<link type="text/css" rel="stylesheet" href="assets/css/style_todo_list.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/style_frame_add.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/style_login.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/style_util.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/style_sidebar.css" />

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
		<script src="https://kit.fontawesome.com/d3420f7f4c.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
	</head>
	<body>
        <?php if(!isset($_SESSION['userid'])): ?>
            <button id="btn_login_land">Login</button>
            <div id="content_user_info">
                <div id="btn_settings_n_l_i">
                    <i class="fas fa-user fa-3x"></i>
                </div>
                <h2 id="name_msg">You are not logged in</h2>
            </div>
        <?php else: ?>
            <?php if($_SESSION['role'] == 'admin'): ?>
                <button id="btn_management">Management</button>
            <?php endif; ?>
            <form action="php/logout.php" method="POST">
                <button id="btn_logout">Logout</button>
            </form>
            <div id="content_user_info">
                <div id="btn_settings">
                    <i class="fas fa-user fa-3x"></i>
                </div>
                <h2 id="name_msg"><?php echo 'You are logged in as ' . $_SESSION['username']; ?></h2>
            </div>
        <?php endif; ?>
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
						<input type="checkbox" class="task_done_checkbox" />
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
				<input type="button" name="btn_delete" id="btn_delete_id" value="Delete selected" />
			</div>
		</div>
		<div id="item_add">
			<h2>Add a task</h2>
			<i id="btn_hide" class="far fa-times-circle fa-2x"></i>
            <form action="" method="POST">
                <input type="text" name="add_title" id="add_title_id" placeholder="Title" />
                <br>
                <div id="box_desc">
                    <input type="text" name="add_description" class="add_description_c" placeholder="Description" />
                    <br>
                    <input type="text" name="add_description_2" class="add_description_c" placeholder="Description 2" />
                    <br>
                </div>
                <center>
                    <a id="add_desc_add">Add description</a>
                </center>
                <br>
                <label for="add_expire_date_id">Expires at</label>
                <br>
                <input type="date" name="add_expire_date" id="add_expire_date_id" />
                <br>
                <input type="time" name="add_expire_time" id="add_expire_time_id" />
                <br>
                <span class="seperator"></span>
                <button id="add_final">Add task</button>
            </form>
		</div>
        <div id="login">
            <h2>Login</h2>
            <i id="btn_hide_login" class="far fa-times-circle fa-2x"></i>
            <form id="reg_log" action="php/login.php" method="post">
                <div id="login_input">
                    <input type="text" name="login_username" id="username_id" placeholder="Username"/>
                    <br>
                    <input type="password" name="login_password" id="password_id" placeholder="Password"/>
                </div>
                <p id="acc_create">Or rather <a>Create an account</a></p>
                <br>
                <span class="seperator"></span>
                <button id="btn_login">Login</button>
            </form>
        </div>
	</body>
</html>