<?php @session_start(); ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_SESSION['ALERT'])) : ?>
  <?php $alert = $_SESSION['ALERT'];  ?>

  <script>
    Swal.fire({
      title: `<?= $alert['message'] ?>`,
      icon: `<?= $alert['type']; ?>`
    });
  </script>
  <?php unset($_SESSION['ALERT']); ?>
<?php endif; ?>