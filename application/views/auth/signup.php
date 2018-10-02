<div class="row my-5">
    <div class="offset-4 col-4">
        <div class="card">
            <h3 class="card-header">Register</h3>
            <div class="card-block">
                <?php echo form_open('signup',['class' => 'form-horizontal']); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" id="password2" name="password2" class="form-control"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="card-footer">
                Already have an account? <a href="<?php echo site_url('signin') ?>">Login</a>
            </div>
        </div>
    </div>
</div>