<div class="row my-5">
    <div class="offset-md-4 col-md-4 col-12">
        <div class="card">
            <h3 class="card-header">Login</h3>
            <div class="card-block">
                <?php echo form_open('signin/signin',['class' => 'form-horizontal']); ?>
                <?php if(isset($error)): ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required="" name="email" class="form-control"/>
                </div>
                <?php if(isset($errors->email)): ?>
                    <?php foreach ($errors->email as $key => $error): ?>
                    <div class="alert alert-danger">
                        <?php echo $error ?>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" required="" name="password" class="form-control"/>
                </div>
                <?php if(isset($errors->password)): ?>
                    <?php foreach ($errors->password as $key => $error): ?>
                    <div class="alert alert-danger">
                        <?php echo $error ?>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class="card-footer">
                not account yet? <a href="<?php echo site_url('signup') ?>">Register now </a>
            </div>
        </div>
    </div>
</div>