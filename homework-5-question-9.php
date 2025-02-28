
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $products = [
        ["name" => "Gaming Laptop", "price" => 799.99],
        ["name" => "Wireless Headphones", "price" => 49.99],
        ["name" => "Mechanical Keyboard", "price" => 99.99],
        ["name" => "iPhone 16", "price" => 699.99],
        ["name" => "Gaming Chair", "price" => 299.99]
    ];
    
    echo json_encode($products);
    exit();
}

http_response_code(404);
echo json_encode(["error" => "Not Found"]);
?>
