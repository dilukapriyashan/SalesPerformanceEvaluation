<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <form id="loginForm">
            <h1 class="text-center">Login Form</h1>
            <div class="form-group">
                <label for="agentCode">Agent Code:</label>
                <input type="text" class="form-control" id="agentCode" name="agentCode">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="response"></div>
        <div id="content"></div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>



<script>
    $(document).ready(function() {
        $("#loginForm").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: 'login.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    console.log('data is', data);
                    if (data == 'admin') {
                        // Load the content of admin.php into the #content div
                        $('#loginForm').load('admin-dashboard.php');
                    } else if (data == 'manager') {
                        // Load the content of user.php into the #content div
                        $('#loginForm').load('manager-dashboard.php');
                    } else if (data == 'cashier') {
                        // Load the content of user.php into the #content div
                        $('#loginForm').load('cashier-dashboard.php');
                    } else if (data == 'salesAgent') {
                        // Load the content of user.php into the #content div
                        $('#loginForm').load('salesAgent-dashboard.php');

                    } else if (data == 'insurance') {
                        // Load the content of user.php into the #content div
                        $('#loginForm').load('lifeInsurence-dashboard.php');
                    } else if (data == 'tleader' || data == 'supervisor') {
                        // Load the content of user.php into the #content div
                        $('#loginForm').load('team-dashboard.php');
                    } else {
                        $("#response").html(data);
                    }
                },
                error: function() {
                    alert('Error occurred while processing your request.');
                }
            });
        });
    });
</script>

</html>