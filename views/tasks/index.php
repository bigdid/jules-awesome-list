<?php include __DIR__ . '/../../layouts/header.php'; ?>

<h2>Tasks List</h2>

<p><a href="index.php?action=create">Add New Task</a></p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4">No tasks found.</td>
        </tr>
        <!-- Task rows will be added here by PHP -->
    </tbody>
</table>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
