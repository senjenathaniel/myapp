<h4><?= $title ?></h4>
<hr>

<div class="row">
  <div class="col"></div>
  <div class="col align-self-center">
    <form action="/users/insert" method="post">
      <?= csrf_field() ?>
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullname" name="fullname">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="role">User Role</label>
        <select class="form-select" id="role" name="role">
          <option selected>Role</option>
          <option value="1">Administator</option>
          <option value="2">Editor</option>
          <option value="3">Subscriber</option>
        </select>
      </div>
      <input class="btn btn-primary" type="submit" value="Create">
    </form>
  </div>
  <div class="col"></div>
</div>