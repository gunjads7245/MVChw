<?php include '../view/header.php'; ?>
<main>
    <h1>Add category</h1>
    <form action="index.php" method="post" id="add_category_form">
        <input type="hidden" name="action" value="add_category">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        

        <label>Name:</label>
        <input type="text" name="name" />
        <br>

        
        <label>&nbsp;</label>
        <input type="submit" value="Add category" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_categories">View category List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>