<?php if(!empty($users) && is_array($users)): ?>
  <?php foreach ($users as $user): ?>
    <h4><a href="/users/<?= $user['id'];?>"><?= $user['fullname'] ?></a></h4><hr>
    <p>Username: <?= $user['username'] ?></p>
    <p>Email: <?= $user['email'] ?></p>
    <?php endforeach; ?>
  <?php endif; ?>