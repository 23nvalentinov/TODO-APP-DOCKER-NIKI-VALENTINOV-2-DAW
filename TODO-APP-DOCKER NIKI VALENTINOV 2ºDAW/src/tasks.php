<?php
// Operaciones CRUD para las tareas

include 'db.php'; // Incluir archivo de conexión a la base de datos.

// Añadir una tarea
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task'])) {
    $task = $_POST['task'];
    $sql = "INSERT INTO tasks (description) VALUES ('$task')"; // Consulta SQL para insertar una tarea.
    if ($conn->query($sql) === TRUE) {
        echo "Nueva tarea añadida exitosamente"; // Mensaje de éxito.
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Mensaje de error.
    }
}

// Obtener todas las tareas
$sql = "SELECT * FROM tasks"; // Consulta SQL para seleccionar todas las tareas.
$result = $conn->query($sql);

$tasks = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row; // Añadir cada tarea al array $tasks.
    }
}
?>
