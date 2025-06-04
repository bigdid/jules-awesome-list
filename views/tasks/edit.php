<?php include __DIR__ . '/../../layouts/header.php'; ?>

<h2>Edit Task</h2>

<form method="POST" action="index.php?action=update">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($task['id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

    <div>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($task['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
    </div>
    <br>
    <div>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo htmlspecialchars($task['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <br>
    <div>
        <button type="submit">Update Task</button>
    </div>
</form>

<p><a href="index.php">Back to list</a></p>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
