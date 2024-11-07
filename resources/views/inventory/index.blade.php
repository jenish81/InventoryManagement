<!-- resources/views/inventory/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Inventory List</h1>
        
        <a href="/inventory/create" class="btn btn-primary mb-3">Add New Item</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <!-- Hardcoded inventory items -->
                <tr>
                    <td>Sample Product 1</td>
                    <td>Category A</td>
                    <td>10</td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td>Sample Product 2</td>
                    <td>Category B</td>
                    <td>20</td>
                    <td>$200</td>
                </tr>
                <!-- Add more items as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
