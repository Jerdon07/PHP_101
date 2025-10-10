<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/PHP_101/notes" class="text-blue-500 underline">BACK</a>
    </p>

    <p>
      <?= $note['title'] ?>
    </p>
  </div>
</main>

<?php require 'partials/footer.php'; ?>