
     <?php
    
        include_once 'connection.php';
        // Assuming you have established a database connection using PDO or MySQLi
        // Retrieve the submitted form data
        $empId = $_POST['agentCode'];
        $password = $_POST['password'];

        // Query the database to check if the submitted credentials are valid
        // If the credentials are valid, retrieve the user role from the database
        // For example:
        $role = '';
        $managerData='';
        $response="";
        $query = "SELECT empRole FROM employee WHERE empId = ? AND empPassword= ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$empId, $password]);
        $user = $stmt->fetch();

        if ($user) {
            $role = $user['empRole'];
        }
        else {
            echo 'Invalid credentials';
        }
        header('Content-type: application/json');
        echo json_encode($role);
       
        ?>