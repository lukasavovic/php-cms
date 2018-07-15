<?php require "views/partials/header.view.php" ?>

    <form action="/admin/products" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" >
        </div>

        <button class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>

    </form>

<?php require "views/partials/footer.view.php" ?>