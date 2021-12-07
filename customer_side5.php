<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="customer_side_style.css">
    <title>Customer Side</title>
    <script>
        // for alert
        function myFunction() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            }

        //setting default attribute to disabled of minus button
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        //taking value to increment decrement input value
        var valueCount

        //taking price value in variable
        var price = document.getElementById("price").innerText;

        //price calculation function
        function priceTotal() {
            var total = valueCount * price;
            document.getElementById("price").innerText = total
        }

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementById("quantity").value = valueCount;

            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }

            //calling price function
            priceTotal()
        })

        //plus button
        document.querySelector(".minus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount--;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }

            //calling price function
            priceTotal()
        })
    </script>
</head>
<body>
    
    <!-- Div for picture caroussle -->
    <div class="container-fluid mt-2">
        <div class="row">
            <!-- Carousel -->
            <div class="col-xl-10 col-xl-10">
                <!-- Carousel -->
                <div class="card shadow p-1 mb-3 bg-white rounded">
                    <div id="demo" class="carousel slide carousel-dark carousel-fade" data-bs-ride="carousel">
                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <div class="tblnum">Table 5</div>
                                <img src="mainpage.jpg" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="picMain.jpg" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="pic2.jpg" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="pic3.jpg" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="pic4.jpg" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="pic5.jpg" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="pic6.jpg" class="d-block" style="width:100%">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="pic1.jpg" class="d-block" style="width:100%">
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>    
            </div>

            <!-- for info -->
            <div class="col-xl-2 col-xxl-2">
                <div class="card">
                    <img src="logoMain.png" alt="logo.png" class="logo">
                    <div class="info p-3">
                        <p>UNLIMITED WINGS with 12 Flavors.</br>
                            FLAVORS:</br>
                            *Sweet Chili</br>
                            *Salted Egg</br>
                            *Honey Mustard</br>
                            *Spicy Buffalo</br>
                            *Signature Plain</br>
                            *Signature Spicy</br>
                            *Buttered Wings</br>
                            *Cheesy Milk</br>
                            *Korean Soy</br>
                            *Original</br>
                            *Garlic Parmesan</br>
                            *Barbeque</br>
                        </p>
                    </div>
                </div>
                
                <div class="text order-btn">
                    <a type="button" href="customer_ordering5.php" class="btn btn-secondary ord-btn block p-auto w-100">Order Now</a>
                </div>

            </div>
        </div>
        
    </div>
</body>
</html>