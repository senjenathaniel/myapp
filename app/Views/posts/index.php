<h2><?= $title ?></h2>
<?php if(!empty($posts) && is_array($posts)): ?>
  <?php foreach ($posts as $post): ?>
    <p><?= $post['body'] ?></p>
    <p><em><?= $post['author'] ?></em></p>
    <a href="/posts/<?= $post['id']?>">View</a><hr>
    
    <?php endforeach; ?>
  <?php endif; ?>