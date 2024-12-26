This code uses the mysql_* functions, which are deprecated and have been removed from PHP 8.0.  Attempting to use them will result in a fatal error.

```php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}

mysql_select_db('database', $link);

$result = mysql_query("SELECT * FROM table", $link);

while ($row = mysql_fetch_assoc($result)) {
    print_r($row);
}

mysql_close($link);
```