<!DOCTYPE html>
<?php session_start(); ?>
<?php if (isset($_SESSION['userid']) && $_SESSION['role'] == 'admin'): ?>
<?php
    if(isset($_POST['user_search']) && isset($_POST['search_for']))
    {
        require_once 'php/database.php';

        $search_for = $_POST['search_for'];
        $search_string = $_POST['user_search'];

        $db = new DB_connection();

        if($search_for == 'all')
        {
            $sql = "SELECT * FROM users";
            $length = mysqli_fetch_array($db->getConnection()->query("SELECT COUNT(*) FROM users"));
        }
        else
        {
            $sql = "SELECT * FROM users WHERE $search_for='$search_string'";
            $length = mysqli_fetch_array($db->getConnection()->query("SELECT COUNT(*) FROM users WHERE $search_for='$search_string'"));
        }
        $result = $db->getConnection()->query($sql);
    }
?>
    <html lang="de">
        <head>
            <title>ToDo-List | Management</title>

            <meta charset="utf-8" />

            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet" />
            <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
            <link type="text/css" rel="stylesheet" href="assets/util/colors.css" />
            <link type="text/css" rel="stylesheet" href="assets/css/style_util.css" />
            <link type="text/css" rel="stylesheet" href="assets/css/style_management.css" />

            <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
            <script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
            <script src="https://kit.fontawesome.com/d3420f7f4c.js"></script>
            <script type="text/javascript" src="assets/js/main.js"></script>
            <script type="text/javascript" src="assets/js/management.js"></script>
        </head>
        <body>
            <div id="header">
                <div id="user_new">
                    <i class="fas fa-user-plus fa-2x"></i>
                </div>
                <h1>ToDo-List | Management</h1>
                <button id="btn_man_back_home">Main page</button>
            </div>
            <div id="man_control">
                <form action="" method="post">
                    <input type="text" name="user_search" id="user_search_id" placeholder="Search" />
                    <select name="search_for" id="man_search_role">
                        <option value="id">ID</option>
                        <option value="first_name">First name</option>
                        <option value="last_name">Last name</option>
                        <option value="username">Username</option>
                        <option value="email">E-Mail</option>
                        <option value="date_of_birth">Date of birth</option>
                        <option value="created_at">Created at</option>
                        <option value="updated_at">Updated at</option>
                        <option value="authority">Role</option>
                        <option value="all">Everyone</option>
                    </select>
                    <button id="btn_man_search"><i class="fas fa-search fa-1x"></i></button>
                </form>
            </div>
            <div id="res_box">
                <p>
                    <?php
                        if(isset($length))
                        {
                            if($length[0] < 1)
                                echo '<p><b>Error:</b> No results found</p>';
                            else
                                echo '<p>Results: <b>' . $length[0] . '</b></p>';
                        }
                        else
                            echo '<p>Please <b>search</b> for something</p>';
                    ?>
                </p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Username</th>
                        <th>E-Mail</th>
                        <th>Date of birth</th>
                        <th>Creation Date</th>
                        <th>Last updated</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($result)): ?>
                        <?php while($row =  mysqli_fetch_array($result)): ?>
                            <tr>
                                <td><?php echo $row[0] ?></td>
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[2] ?></td>
                                <td><?php echo $row[3] ?></td>
                                <td><?php echo $row[4] ?></td>
                                <td><?php $bd = new DateTime($row[6]); echo $bd->format('m/d/Y') ?></td>
                                <td><?php $bd = new DateTime($row[7]); echo $bd->format('m/d/Y, h:i A') ?></td>
                                <td><?php $bd = new DateTime($row[8]); echo $bd->format('m/d/Y, h:i A') ?></td>
                                <td><?php echo $row[9] ?></td>
                                <td class="edit"><i class="fas fa-edit"></i></td>
                                <td class="delete"><i class="fas fa-trash-alt"></i></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <button id="table_download_csv">Download as .csv</button>
        </body>
    </html>
<?php else: ?>
    <?php header('location: index.php'); ?>
<?php endif; ?>
