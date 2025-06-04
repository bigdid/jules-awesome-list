<?php

// 1. Ensure ../src/database.php is included at the top.
// This will attempt to establish the database connection.
// Output (success/failure message) from database.php will be shown before any view.
require_once __DIR__ . '/../src/database.php';

// 2. Basic Routing
$action = $_GET['action'] ?? 'list'; // Default to 'list' if no action is specified

switch ($action) {
    case 'create':
        include __DIR__ . '/../views/tasks/create.php';
        break;

    case 'store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';

            // Placeholder for DB interaction
            echo "Attempting to store task: Title - " . htmlspecialchars($title) . ", Description - " . htmlspecialchars($description);
            echo "<br>This is a placeholder. Actual database insertion will be implemented later.<br>";
            echo '<a href="index.php">Go back to list</a>';
            // After actual processing, you would redirect:
            // header('Location: index.php');
            // exit;
        } else {
            // If not POST, redirect to the create form or show an error
            header('Location: index.php?action=create');
            exit;
        }
        break;

    case 'edit':
        // Placeholder for fetching task data and showing edit form
        // For now, just show a message or include a basic edit view if it exists
        $taskId = $_GET['id'] ?? null;
        if ($taskId) {
            // In a real app, you would fetch task data from DB using $taskId
            // For now, we'll simulate loading the edit view.
            // We expect $task to be populated before including edit.php
            // $task = ['id' => $taskId, 'title' => 'Sample Task', 'description' => 'Sample Description'];
            echo "DEBUG: Attempting to load edit page for task ID: " . htmlspecialchars($taskId) . "<br>";
            include __DIR__ . '/../views/tasks/edit.php';
        } else {
            echo "Error: Task ID not provided for editing.";
            echo '<br><a href="index.php">Go back to list</a>';
        }
        break;

    case 'update':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';

            if ($id) {
                // Placeholder for DB interaction
                echo "Attempting to update task ID: " . htmlspecialchars($id) . " with Title - " . htmlspecialchars($title) . ", Description - " . htmlspecialchars($description);
                echo "<br>This is a placeholder. Actual database update will be implemented later.<br>";
                echo '<a href="index.php">Go back to list</a>';
                // After actual processing, you would redirect:
                // header('Location: index.php');
                // exit;
            } else {
                echo "Error: Task ID not provided for update.";
                echo '<br><a href="index.php">Go back to list</a>';
            }
        } else {
            // If not POST, redirect or show an error
            header('Location: index.php'); // Or redirect to an appropriate edit page if ID was part of GET
            exit;
        }
        break;

    case 'delete':
        // Placeholder for delete logic
        $id = $_GET['id'] ?? null;
        if ($id) {
            echo "Attempting to delete task ID: " . htmlspecialchars($id);
            echo "<br>This is a placeholder. Actual database deletion will be implemented later.<br>";
            echo '<a href="index.php">Go back to list</a>';
            // After actual processing, you would redirect:
            // header('Location: index.php');
            // exit;
        } else {
            echo "Error: Task ID not provided for deletion.";
            echo '<br><a href="index.php">Go back to list</a>';
        }
        break;

    case 'list':
    default:
        // The "Welcome to the CRUD App!" message is implicitly replaced by the task list view.
        include __DIR__ . '/../views/tasks/index.php';
        break;
}

?>
