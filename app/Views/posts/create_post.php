<!-- <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
</head>

<body>

<form action="insert" method="POST">
  <textarea name="body" id="myEditor"></textarea>
  <button>Submit</button>
</form>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
</script>
<script>
  new FroalaEditor('#myEditor', {
    toolbarInline: false,
    saveMethod: 'POST',
    saveParams: {
      id: 'myEditor'
    },
  })
</script>
</body>
</html> -->

<h4><?= $title ?></h4>
<hr>

<div class="row">
  <div class="col"></div>
  <div class="col align-self-center">
    <form action="/posts/insert" method="post">
      <?= csrf_field() ?>
      <div class="mb-3">
        <label for="body" class="form-label">body</label>
        <textarea type="text" class="form-control" id="body" name="body"></textarea>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Writer</label>
        <input type="text" class="form-control" id="author" name="author">
      </div>
      <div class="mb-3">
        <label for="img_url" class="form-label">Img url</label>
        <input type="text" class="form-control" id="img_url" name="img_url">
      </div>
      <div class="mb-3">
        <label for="is_published" class="form-label">publish</label>
        <input type="number" class="form-control" id="is_published" name="is_published">
</div>
      
      <input class="btn btn-primary" type="submit" value="Create">
    </form>
  </div>
  <div class="col"></div>
</div>