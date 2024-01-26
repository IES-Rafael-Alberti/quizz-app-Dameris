<!-- PART 3 -->
<!-- CRUD OPERATIONS -->

<?PHP

// 1. CREATE
function create__question($questions__type, $questions__details)
{
    global $pdo;

    if (empty($questions__type) || empty($questions__details)) {
        return false;
    }

    $sql = "INSERT INTO QUESTIONS (questions__type, questions__details)
            VALUES (:questions__type, :questions__details)";


    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':questions__type', $questions__type);
        $stmt->bindParam(':questions__details', $questions__details);
        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        error_log("Error in create__question: " . $e->getMessage());
        return false;
    }
}

// 2. READ
function get__questions()
{
    global $pdo;
    $sql = "SELECT * FROM QUESTIONS";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// 3. UPDATE
function update__question($id__question, $questions__type, $questions__details)
{
    global $pdo;
    $sql = "UPDATE QUESTIONS
            SET questions__type = :questions__type, questions__details = :questions__details
            WHERE id__question = :id__question";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':questions__type', $questions__type);
    $stmt->bindParam(':questions__details', $questions__details);
    $stmt->bindParam(':id__question', $id__question);
    return $stmt->execute();
}

// 4. DELETE
function delete__question($id__question)
{
    global $pdo;
    $sql = "DELETE FROM QUESTIONS WHERE id__question = :id__question";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id__question', $id__question);
    return $stmt->execute();
}
