<h2>Sign up using this form</h2>

<?php echo $this->tag->form("login/login"); ?>

<p>
    <label for="name">Name</label>
    <?php echo $this->tag->textField("name") ?>
</p>

<p>
    <label for="password">Password</label>
    <?php echo $this->tag->passwordField("password") ?>
</p>


<p>
    <?php echo $this->tag->submitButton("Register") ?>
</p>

</form>