<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Entries</title>
</head>
<body>
    <h2>Blog Entries</h2>

    <?php if (!empty($entries)): ?>
        <ul>
            <?php foreach ($entries as $entry): ?>
                <li>
                    <strong>Title:</strong> <?= $entry['title'] ?><br>
                    <strong>Author:</strong> <?= $entry['author_name'] ?><br>
                    <strong>Description:</strong> <?= $entry['description'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No entries available.</p>
    <?php endif; ?>
</body>
</html>