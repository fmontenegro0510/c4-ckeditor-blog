<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <?php if (session()->getFlashdata('success')) { ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php } ?>

                <h4 class="text-center">CodeIgniter 4 Integrate Ckeditor Example Tutorial</h4><br>
                <form method="post" action="<?php echo site_url('submit-data') ?>" class="form form-horizontal">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description-ckeditor" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Author Name</label>
                        <input type="text" name="author_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('description-ckeditor');
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</body>

</html>