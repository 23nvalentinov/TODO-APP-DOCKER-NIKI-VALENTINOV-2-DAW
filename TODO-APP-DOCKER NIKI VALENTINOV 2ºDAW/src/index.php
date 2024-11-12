<?php include 'tasks.php'; ?> <!-- Incluir archivo de gestión de tareas. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Tareas</title>
</head>
<body>
    <h1>Agenda de Tareas</h1>
    <form method="post" action="">
        <input type="text" name="task" placeholder="Nueva tarea">
        <input type="submit" value="Añadir">
    </form>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?php echo $task['description']; ?></li> <!-- Mostrar cada tarea en una lista. -->
        <?php endforeach; ?>
    </ul>
</body>
</html>
