The solution involves migrating to either the `mysqli_*` functions or using PDO (PHP Data Objects) for database interaction.  Here's an example using `mysqli_*`:

```php
$link = new mysqli('localhost', 'user', 'password', 'database');
if ($link->connect_error) {
die('Connect Error: ' . $link->connect_error);
}

$result = $link->query("SELECT * FROM table");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
    $result->free_result();
} else {
die('Query Error: ' . $link->error);
}

$link->close();
```

Remember to replace placeholders like 'localhost', 'user', 'password', and 'database' with your actual database credentials.