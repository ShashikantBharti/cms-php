<?php require 'template/header.php'; ?>
<h2>Search Articles</h2>

<form action="search.php" metho="GET">
  <input type="search" name="q" required>
  <button type="submit">Search</button>
</form>

<?php if(isset($articles)): ?>
  <h3>Search Result</h3>
  <ul>
    <?php foreach($articles as $article): ?>
      <li><?php echo $article->$title; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>


<?php require 'template/footer.php'; ?>