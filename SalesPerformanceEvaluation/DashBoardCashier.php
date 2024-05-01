<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Cashier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <?php include "navBar.php"; ?>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"> Cashier Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col">
                            <div>
                                <form id="cashierForm">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="productName">Branch Code</label>
                                                <select class="form-select" id="branchCode">
                                                    <option>Select payment frequency</option>
                                                    <option value="1">Hikkaduwa</option>
                                                    <option value="1">Galle</option>
                                                    <option value="1">Jaffna</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="productPrice">Team Leader code</label>
                                                <select  class="form-select" id="teamLeaderCode">
                                                    <option>Select Team LeaderCode</option>
                                                    <option value="10001">10001</option>
                                                    <option value="10002">10002</option>
                                                    <option value="10003">10003</option>
                                                </select>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="productName">Invoice Date</label>
                                                <input type="date" class="form-control" id="invoiceDate">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="productPrice">Premium Amount</label>
                                            </div>
                                            <input type="number" class="form-control" id="premiumAmount" placeholder="Enter PremiumAmount">
                                            <div class="form-group mb-3">
                                                <label for="productName">Agent Signature</label>
                                                <input type="text" class="form-control" id="agentSignature" placeholder="Agent Signature">
                                            </div>


                                        </div>
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="productQuantity">Supervisor Code</label>
                                                <select class="form-select" id="supervisorCode">
                                                    <option>Select SupervisorCode</option>
                                                    <option value="10001">10001</option>
                                                    <option value="10002">10002</option>
                                                    <option value="10006">10006</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="productName">Sales Agent Code</label>
                                                <select class="form-select" id="salesAgentCode">
                                                    <option>Select Sales Agent</option>
                                                    <option value="10001">10001</option>
                                                    <option value="10002">10002</option>
                                                    <option value="10006">10006</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="productQuantity">Policy Number</label>
                                                <input type="text" class="form-control" id="policyNumber" placeholder="Enter policyNumber">
                                            </div>
                                            <div class="form-group mb-3">Payment Frequent</label>
                                                <select class="form-select" id="paymentFrequent">
                                                    <option>Select Payment Frequent</option>
                                                    <option value="monthly">monthly</option>
                                                    <option value="weekly">weekly</option>
                                                    <option value="daily">daily</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">Cash Handed Over Date</label>
                                                <input type="date" class="form-control" id="cashHandOverDate" placeholder="Enter Cash Handed OverDate">
                                            </div>
                                            <!-- Other form fields... -->
                                            <div class="d-flex align-items-end">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        $(document).ready(function() {
            $("#cashierForm").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'cashierData.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log('Cashier data is', data);
                        if (data == 'success') {
                            //console.log(data);
                            $('#cashierForm').load('cashier-dashboard.php');
                        } else {
                            alert('Error in fetching da ta');
                        }
                    },
                    error: function() {
                        alert('Error occurred while processing your request.');
                    }
                });
            });
        });
    </script>

</body>

</html>