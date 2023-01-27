
<div>
<center><h3 ><?= $title ?> </h3><br></center>

<?php foreach($posts as $post) : ?>
   
	<h5><?php echo $post['title']; ?></h5>
    <?php echo $post['body']; ?><br>
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>

   <a type="button" class="btn btn-success" href="<?php echo site_url('posts/view/'.$post['id']); ?>">Read more</a></button><br><br>
   <hr>

    
<?php endforeach; ?>
</div>