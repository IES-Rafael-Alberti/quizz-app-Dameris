<!-- PART 2 -->

<?php
$server__name = getenv("DB_HOST");
$user__name = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$database = getenv("DB_DATABASE");

$connection = new mysqli($server__name, $user__name, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$script__sql = file_get_contents("tables__sql.sql");

if ($connection->multi_query($script__sql)) {
    do {
        if ($result = $connection->store_result()) {
            $result->free();
        }
    } while ($connection->more_results() && $connection->next_result());

    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $connection->error;
}

$connection->close();
