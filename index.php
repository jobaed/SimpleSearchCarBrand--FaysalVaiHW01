<?php
$carDetails = [
    "Volvo" => "Explore the world of Volvo, built on quality, safety and care for the environment. Find out more about how Volvo delivers innovations for the future.",
    "BMW" => "Dive into new worlds with BMW, get inspired, and experience the unknown, the unusual and some useful things, too.",
    "Toyota" => "Explore the newest Toyota trucks, cars, SUVs, hybrids and minivans. See photos, compare models, get tips, calculate payments, and more.",
    "Tata" => "The official website for the Tata group, India's only value-based corporation. A visionary, a pioneer, a leader, since 1868.",
    "Honda" => "Explore an innovative line of quality products from American Honda Motor Company. Find the latest news and information on Honda and Acura brand products.",
    "Mercedes" => "Mercedes-Benz AG uses cookies for various purposes. We want to ensure optimum use of our website for you, and also to continually improve our website.",
    "Jeep" => "Jeep® has been an iconic & legendary 4x4 sport utility vehicle for the past 70 years. Explore the Jeep® SUV & Crossover lineup. Go anywhere, do anything."
];

// $brand = (isset($_POST['brand']) ? $_POST['brand'] : '');

$result = '';
if (isset($_POST['search'])) {
    $brand = $_POST['brand'];
    if (array_key_exists($brand, $carDetails)) {

        foreach ($carDetails as $brandName => $details) {
            if ($brand == $brandName) {

                $result = $details;
            }
        }
    } else {
        echo "<script>alert('Brand Not Found')</script>";
    }
}

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="w-50 mx-auto mt-5">
            <div class="bg-dark w-100 p-5 rounded shadow">
                <h1 class="text-light">CAR BRAND</h1>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="text" name="brand" class="form-control my-3" placeholder="Enter Popular Car Brand">
                    <input type="submit" name="search" value="Search" class="btn btn-primary btn-sm">
                </form>

                <div class="text-light">
                    <h3 class="text-light mt-5 mb-3">DETAILS</h3>
                    <hr class="text-light">
                    <h6>You searched: <?php if (isset($brand)) echo $brand ?> </h6>
                    <?php
                    if ($result) {
                    ?>
                        <div class=" text-light my-3 ">
                            <h6 class="bg-primary px-3 py-2 text-justify rounded">Details: <?php echo $result ?></h6>
                        </div>
                    <?php
                    }else{
                        echo "<h6>Not Found</h6>";
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</body>



</html>