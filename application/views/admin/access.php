<div class="access-container">
  <div class="access-card">
    <div class="access-header">
      <h1>Admin Access</h1>
      <p>Baladhika Majapahit</p>
    </div>

    <?php if (isset($error)): ?>
      <div class="alert alert-danger">
        <?= $error; ?>
      </div>
    <?php endif; ?>

    <?php echo form_open('admin'); ?>
      <div class="form-group">
        <label for="password" class="form-label">Masukkan Password</label>
        <input 
          type="password" 
          class="form-control" 
          id="password" 
          name="password" 
          placeholder="masukkan password"
          required
          autofocus>
      </div>

      <button type="submit" class="btn-access">Akses Admin Panel</button>
    <?php echo form_close(); ?>
  </div>
</div>