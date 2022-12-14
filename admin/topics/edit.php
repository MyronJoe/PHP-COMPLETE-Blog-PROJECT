<?php
require_once '../../path.php';
include ROOT_PATH . '/admin/includes/adminheader.php';
include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly()
?>
<section style="display: flex;">
  <div class="lside">
    <?php include ROOT_PATH . '/admin/includes/adminsidbar.php'; ?>
  </div>

  <div class="rside">
    <div class="rside-top">
      <a href="<?php echo BASE_URL . '/admin/topics/create.php'; ?>" class="btn btn-primary mr-3">Add Topic</a>
      <a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>" class="btn btn-primary">Manage Topic</a>
    </div>

    <div class="adduser-sec">
      <h2>Edit Topic</h2>

      <form action="<?php echo BASE_URL . '/admin/topics/edit.php'; ?>" method="POST" class="form" novalidate>

        <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

        <input type="hidden" value="<?php echo $id ?>" class="form-control" id="id" name="id">

        <div class="form-group">
          <label for="topic">Name</label>
          <input type="text" class="form-control" value="<?php echo $name ?>" id="topic" name="name">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name="description"><?php echo $description ?></textarea>
        </div>

        <button type="submit" name="edit-topic" class="btn btn-primary my-2">Edit Topic</button>
      </form>
    </div>




  </div>
</section>

</body>

</html>