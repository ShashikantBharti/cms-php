<?php require 'templates/header.php'; ?>
<h2><?php echo isset($article) ? 'Edit Article' : 'Create Article'; ?></h2>

<form action="article.php?action=<?php echo isset($article) ? 'edit&id='.$article->id : 'create'; ?>" method="POST">
  <div>
    <label for="title">Title: </label>
    <input type="text" name="title" id="title" value="<?php echo isset($article) ? $article->title : ''; ?>" required />
  </div>
  <div>
    <label for="body">Body</label>
    <textarea name="body" id="body" rows="10" cols="50" required>
      <?php echo isset($article) ? $article->body : ''; ?>
    </textarea>
  </div>
  <div>
    <button type='submit'><?php echo isset($article) ? 'Update' : 'Create'; ?></button>
  </div>
</form>
<?php require 'templates/footer.php' ?>