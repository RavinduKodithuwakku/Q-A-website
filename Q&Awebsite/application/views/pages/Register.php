<?php  ?>

<div>
<div class='container' >

    <h2>Register</h2> <br>
    
    <?php if($this->session->flashdata('errormessage')){
        echo "<h4>".$this->session->flashdata('errormessage')."</h4>";
    }
    ?>

    <?php echo validation_errors(); ?>
    <?php echo form_open('Register/userRegister'); ?>
 
        <div class="form-group">
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" id="exampleInputFirstName" placeholder="First Name" name="fname">
        </div><br>
        <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputLastName" placeholder="Last Name" name="lname">
        </div><br>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div><br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div><br><br>

        <center> Have already an account ? <a class="nav-link" href="<?php echo base_url(); ?>Login"><b>Login here</b></a></center>
</form>

</div>
</div>
