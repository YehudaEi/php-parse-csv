# php-parse-csv
Parse CSV function in php

## Use:
````php
<?php
require('parseCSV.php');

$withTitles = true;
$data = parseCsv("myfile.csv", $withTitles);
print_r($data);
````
### Result:
````
Array
(
    [0] => Array
        (
            [name] => John Doe
            [email] => test@example.com
            [phone] => +972501234567
            [course] => Array
                (
                    [0] => course 3
                    [1] => course 4
                )

        )

    [1] => Array
        (
            [name] => John Doe 2
            [email] => test2@example.com
            [phone] => +972501234568
            [course] => Array
                (
                    [0] => course 2
                    [1] => course 6
                )

        )
)
````

## Example 
parse with titles:
````php
$data = parseCsv("myfile.csv");
print_r($data);
````
### Result:
````
Array
(
    [0] => Array
        (
            [name] => John Doe
            [email] => test@example.com
            [phone] => +972501234567
            [course] => Array
                (
                    [0] => course 3
                    [1] => course 4
                )

        )

    [1] => Array
        (
            [name] => John Doe 2
            [email] => test2@example.com
            [phone] => +972501234568
            [course] => Array
                (
                    [0] => course 2
                    [1] => course 6
                )

        )
)
````

parse without titles:
````php
$data = parseCsv("myfile.csv", false);
print_r($data);
````
### Result:
````
Array
(
    [0] => Array
        (
            [0] => name
            [1] => email
            [2] => phone
            [3] => course

        )
     [1] => Array
        (
            [0] => John Doe
            [1] => test@example.com
            [2] => +972501234567
            [3] => course 3
            [4] => course 4

        )

    [2] => Array
        (
            [0] => John Doe 2
            [1] => test2@example.com
            [2] => +972501234568
            [3] => course 2
            [4] => course 6

        )
)
````

## Contact
[parsecsv@yehudae.net](mailto:parsecsv@yehudae.net)

## License
MIT
