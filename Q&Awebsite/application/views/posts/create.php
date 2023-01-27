<?php  ?>

<div>
<div class='container'>
    <center><h3>Add Question</h3></center><br>  
  <?php echo validation_errors(); ?>
  <?php echo form_open('posts/create'); ?>
  <div class="form-group">
  <label>Title</label>
  <input type="title" class="form-control" id="title" name="title" ><br>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="body" class="form-control" name="body" ></textarea><br>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
 