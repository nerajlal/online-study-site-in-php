<?php
// Assuming $id contains the desired testname value
$id = 'php';

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'careerplus');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the query with a parameter placeholder
$sql = "SELECT * FROM uploadqn WHERE testname='php'";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error in preparing statement: " . $conn->error);
}

// Bind the parameter
$stmt->bind_param("s", $id);

if ($stmt === false) {
    die("Error in binding parameters: " . $stmt->error);
}

// Execute the query
$stmt->execute();

if ($stmt === false) {
    die("Error in executing statement: " . $stmt->error);
}

// Get the result set
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Process and display the retrieved questions
    while ($row = $result->fetch_assoc()) {
        $question = $row['question'];
        $optionA = $row['optiona'];
        $optionB = $row['optionb'];
        $optionC = $row['optionc'];
        $optionD = $row['optiond'];

        // Display the question and options as needed
        echo "<h2>$question</h2>";
        echo "<ul>";
        echo "<li>$optionA</li>";
        echo "<li>$optionB</li>";
        echo "<li>$optionC</li>";
        echo "<li>$optionD</li>";
        echo "</ul>";
    }
} else {
    echo "No questions found for testname: $id";
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
