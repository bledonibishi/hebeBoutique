<form  action="" class="form-group" method="post">
    <h2>EDIT POST</h2>
    <div class="form-group">
    <label for="post_category_id">Category:
    <input type="text" class="form-control" name="post_category_id">
    </label>
    </div>
    <div class="form-group">
    <label for="post_title">Title:
    <input type="text" class="form-control" name="post_title">
    </label>
    </div>
    <div class="form-group">
    <label for="post_price">Price:
    <input type="text" class="form-control" name="post_price">
    </label>
    </div>
    <div class="form-group">
    <label for="post_size">Size:
    <select name="post_size" class="form-control" id="">
        <option value="">XS</option>
        <option value="">S</option>
        <option value="">M</option>
        <option value="">L</option>
        <option value="">XL</option>
        <option value="">XXL</option>
    </select>
    </label>
    </div>
    <div class="form-group">
    <label for="post_color">Color:
        <select name="post_color" class="form-control" id="">
        <option value="">Black</option>
        <option value="">White</option>
        <option value="">Brown</option>
        <option value="">Green</option>
        <option value="">Blue</option>
        <option value="">Other...</option>
    </select>
    </label>
    </div>
    <div class="form-group">
    <label for="post_image">Image:
    <input type="file" class="form-control" name="post_image">
    </label>
    </div>
    <div class="form-group">
    <label for="post_content">Content
    <textarea name="post_content" class="form-control" id="" cols="20" rows="5"></textarea>
    </label>
    </div>

    <div class="form-group">
    <label for="post_date">Date:
    <input type="date" class="form-control" name="post_date">
    </label>
    </div>

    <div class="form-group">
    <label for="post_stock">Stock:
    <input type="text" class="form-control" name="post_stock">
    </label>
    </div>
</form>