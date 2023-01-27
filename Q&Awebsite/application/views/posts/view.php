<h4><?php echo $post['title']; ?></h4>
 
<div >
    <small>Posted on :  <?php echo $post['created_at']; ?></small><br>
    <small class="post-by">Posted by : <?php echo $post['fname']; ?></small><br><br>
    <?php echo $post['body']; ?>
</div><hr>
 
<h4>Answers</h4>
<div >
<?php if($answers) : ?>
	<?php foreach($answers as $answers) : ?>
		<div class="well">
        <small><?php echo $answers['body']; ?> </small><br>
        <small>posed on: <?php echo $answers['created_at']; ?> </small>
            <hr>			
		</div>
	<?php endforeach; ?><br>
    <?php else : ?>
	<p>No answers To Display</p>
    <?php endif; ?>
</div><br>

<h4>Add Answer</h4>
<?php echo validation_errors(); ?>
<?php echo form_open('Answers/create/'.$post['id']); ?>
<div class="form-group">
    <textarea class="form-control" name="answer" ></textarea>
  </div>
  <input type="hidden" name="id" value="<?php echo $post['id']; ?>"><br>
  <button class= "btn btn-success" type="submit">Post Answer</button>
</form>





