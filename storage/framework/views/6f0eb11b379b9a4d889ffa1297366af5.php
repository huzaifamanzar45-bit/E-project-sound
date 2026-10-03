<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>

  <body>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="container my-6">
<h2 class="text-center">REGISTRATION FORM</h2>
<form action="/songadd" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($message)): ?>

<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Success Message</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
<?php echo e($message); ?>  </div>
</div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <input type="text" name="song" placeholder="Song" class="form-control" id="">
    <hr>
    <input type="text" name="artist" placeholder="Artist" class="form-control" id="">
    <hr>
    <input type="file" name="Audio" placeholder="Audio" class="form-control" id="">
    <hr>
    <input type="text" name="category" placeholder="Category" class="form-control" id="">
    <hr>
    <input type="file" name="userimg" placeholder="Enter Your Image" class="form-control" id="">
    <hr>
    <button class="btn btn-primary form-control" type="submit">Add</button>
</form>
</div>
<!-- 

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php /**PATH C:\Users\123\OneDrive\Desktop\E-project-sound\resources\views/User/songupload.blade.php ENDPATH**/ ?>