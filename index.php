<?php
$message = "Hello, World!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Page</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($message); ?></h1>
    <p>This is dummy PHP code.</p>
</body>
</html>
