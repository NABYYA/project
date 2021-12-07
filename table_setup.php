<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Set Up</title>
    <?php include 'connect.php'; ?>
    <style>
        body {
            background-color: #FA8334ff;
            width: 100%; 
        }
        a {
            text-align: center;
            height: 200px;
            padding: 50px;
        }
        .btn {
            padding: 60px;
            font-size: 50px;
        }
        .container {
            margin-top: 140px;
        }
        .col {
            margin: 50px;
        }

    </style>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-2">
                    <a href="customer_side1.php" class="btn btn-dark" onclick="assign(1)">Table 1</a>
                </div>
            </div>
            <div class="col">
                <div class="card mt-2">
                    <a href="customer_side2.php" class="btn btn-dark" onclick="assign(1)">Table 2</a>
                </div>
            </div>
            <div class="col">
                <div class="card mt-2">
                    <a href="customer_side3.php" class="btn btn-dark" onclick="assign(1)">Table 3</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card mt-2">
                    <a href="customer_side4.php" class="btn btn-dark" onclick="assign(1)">Table 4</a>
                </div>
            </div>
            <div class="col">
                <div class="card mt-2">
                    <a href="customer_side5.php" class="btn btn-dark" onclick="assign(1)">Table 5</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>