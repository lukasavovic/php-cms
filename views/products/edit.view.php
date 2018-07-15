<?php require "views/partials/header.view.php" ?>
<form action="/admin/products/update" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $product->title ?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $product->description ?></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="text" name="image" id="image" class="form-control" value="<?= $product->image ?>">
    </div>
    <input type="hidden" name="id" id="id" class="form-control" value="<?= $product->id ?>">

    <button class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>

</form>
<?php require "views/partials/footer.view.php" ?>
