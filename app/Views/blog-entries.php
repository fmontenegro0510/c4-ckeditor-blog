<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">

    <title>View Entries</title>
</head>
<body>
    <h2>View Entries</h2>

    <?php if (!empty($entries)): ?>
        <ul>
            <?php foreach ($entries as $entry): ?>
                <li>
                <a href="<?= base_url('viewEntry/' . $entry['id']) ?>"><strong>Title:</strong> <?= $entry['title'] ?>
                   </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No entries available.</p>
    <?php endif; ?>
    
    <br>
    <a href="<?= base_url('blog') ?>">Back to Form</a>
</body>
</html>