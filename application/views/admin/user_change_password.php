<div class="col-md-8">
    <div class="block">
        <div class="block-content">
            <form class="form-horizontal" action="<?=base_url()?>mypanel/user/changePassword" method="post">
                <div class="form-group <?=form_error('password')?'has-error':'';?>">
                    <label class="col-xs-5" for="password">Old Password</label>
                    <div class="col-xs-7">
                        <input class="form-control" type="password" id="password" name="password">
                        <div class="help-block">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group <?=form_error('new_password')? 'has-error': '';?>">
                    <label class="col-xs-5 " for="new_password ">New Password</label>
                    <div class="col-xs-7 ">
                        <input class="form-control " type="password" id="new_password" name="new_password">
                        <div class="help-block ">
                            <?php echo form_error('new_password'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group <?=form_error('new_password_confirm')?'has-error':'';?>">
                    <label class="col-xs-5" for="new_password_confirm">New Password Confirmation</label>
                    <div class="col-xs-7">
                        <input class="form-control" type="password" id="new_password_confirm" name="new_password_confirm" ">
                        <div class="help-block "><?php echo form_error('new_password_confirm'); ?></div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12 ">
                        <button class="btn pull-right btn-success " type="submit "><i class="fa fa-key push-5-r "></i> Change Password</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>