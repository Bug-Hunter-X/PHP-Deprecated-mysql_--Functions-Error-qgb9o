# PHP Deprecated mysql_* Functions

This repository demonstrates a common error in older PHP code: the use of deprecated `mysql_*` functions.  These functions are no longer supported in PHP 8.0 and later, resulting in fatal errors.

The `bug.php` file contains the problematic code. The `bugSolution.php` file shows the corrected code using the recommended `mysqli_*` or PDO extensions.

This example highlights the importance of keeping your PHP code updated and using modern database interaction methods to avoid compatibility issues and security vulnerabilities.