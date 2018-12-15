<!-- Developed by Khoa Bui (kwabee@gmail.com | 0415 689 777) -->
<html>
    <head>
        <title>Deputy : Users Hierarchy</title>
        
        <!-- Bootstrap CDN for Mobile Responsive Elements and Cool Styles -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="css/styles.css">
        
    </head>
    <body style="margin: 10px 10px 10px 10px">
        
        <div style="width: 100%; background-color: #00a1dd; text-align: center;">
            <img src="images/deputylogo-banner.png" />
        </div>
        
        <h1>Users Hierarchy</h1>
        <h3>Select A User</h3>
        <a href="?userid=1">Adam Admin</a><br/>
        <a href="?userid=2">Emily Employee</a><br/>
        <a href="?userid=3">Sam Supervisor</a><br/>
        <a href="?userid=4">Mary Manager</a><br/>
        <a href="?userid=5">Steve Trainer</a><br/>
        
        <!-- 1. Import User & Roles and Setup Variables -->
        
        <?php
            // Import Databases
            include ('inc_db_roles.php');
            include ('inc_db_users.php');
            // Setup Global Vars
            $search_userid = $_GET["userid"];
            if ($search_userid == NULL){
                $search_userid = "1"; // Default 
            }
            $userdb_key = array_search($search_userid, array_column($userdb, 'ID'));
            $userdb_role = $userdb[$userdb_key]["Role"];
        ?>
        
        <br/>
        
        <!-- 2. Display User Panel -->
                
        <div class="panel panel-default">
            <div class="panel-heading">User Details</div>
            <div class="panel-body">
                
                <div class="row">
                    <div class="col-sm-3" align="left" style="max-width: 200px"><?php echo "<img src=\"images/" . $search_userid . ".png\" /><br/>";?></div>
                    <div class="col-sm-6" align="left">
                        <?php
                            echo "<h3>" . $userdb[$userdb_key]["Name"] . "</h3>";
                            $role_key = array_search($userdb_role, array_column($roledb, 'ID'));            
                            echo "<h5>" . $roledb[$role_key]["Name"] . "</h5>";
                            echo "User ID: " . $userdb[$userdb_key]["ID"] . "<br/>";
                            echo "Role ID: " . $userdb[$userdb_key]["Role"] . "<br/>";
                        ?>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!--  3. Display Subordinates Panel -->
            
        <div class="panel panel-default">
            <div class="panel-heading">Subordinates</div>
            <div class="panel-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>User ID</th>
                        <th>Role ID</th>
                        <th>Parent ID</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    $selecteduserrole = $userdb[$key]["Role"];
                    $i = 0;
                    foreach ($roledb as $value) {
                        $currentparent = $roledb[$i]["Parent"];
                        if ($currentparent >= $userdb_role) {
                            echo "<tr>";
                            $roledb_id = $roledb[$i]["ID"];
                            $user_key = array_search($roledb_id, array_column($userdb, 'Role'));            
                            echo "<td>" . $userdb[$user_key]["Name"] . "</td>";
                            echo "<td>" . $roledb[$i]["Name"] . "</td>";
                            echo "<td>" . $userdb[$user_key]["ID"] . "</td>";
                            echo "<td>" . $roledb[$i]["ID"] . "</td>";
                            echo "<td>" . $roledb[$i]["Parent"] . "</td>";
                            echo "<tr/>";
                        }
                        $i++;
                    }
                ?>

                </tbody>
                </table>
                
            </div>
        </div>
        
    </body>
</html>

