<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">

    <title>View Entry</title>
</head>
<body>
    <h2>View Entry</h2>

    <?php if (!empty($entry)): ?>
        <div>
            <strong>Title:</strong> <?= $entry['title'] ?><br>
            <strong>Author:</strong> <?= $entry['author_name'] ?><br>
            <strong>Description:</strong> <?= $entry['description'] ?>
        </div>

        <a href="<?= base_url('editEntry/' . $entry['id']) ?>">Edit Entry</a>

    <?php else: ?>
        <p>Entry not found.</p>
    <?php endif; ?>
    
    <br>
    <a href="<?= base_url('viewEntries') ?>">Back to Entries</a>
</body>
</html>
