<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Entry</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <h2>Edit Entry</h2>
    <form action="<?= base_url('blog/updateEntry') ?>" method="post">
        <input type="hidden" name="id" value="<?= $entry['id'] ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= $entry['title'] ?>"><br>
        <label for="author_name">Author:</label>
        <input type="text" name="author_name" value="<?= $entry['author_name'] ?>"><br>
        <label for="content">Description:</label>
        <textarea class="form-control" id="description-ckeditor" name="description"><?= $entry['description'] ?></textarea><br>

        <button type="submit">Update Entry</button>
    </form>
<script>
        CKEDITOR.replace('description-ckeditor');
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</body>
</html>
