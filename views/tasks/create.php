<?php include __DIR__ . '/../../layouts/header.php'; ?>

<h2>Create New Task</h2>

<form method="POST" action="index.php?action=store">
    <div>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required>
    </div>
    <br>
    <div>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea>
    </div>
    <br>
    <div>
        <button type="submit">Save Task</button>
    </div>
</form>

<p><a href="index.php">Back to list</a></p>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
