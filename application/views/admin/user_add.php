<div class="block">
    <div class="block-content">
        <form action="<?=base_url()?>mypanel/user/store" class="form-horizontal push-5-t" method="post">
            <div class="form-group">
                <label class="col-xs-3" for="name">Full Name</label>
                <div class="col-xs-9">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name..">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3" for="username">Username</label>
                <div class="col-xs-9">
                    <input class="form-control" type="text" id="username" name="username" placeholder="Enter your username..">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3" for="email">Email</label>
                <div class="col-xs-9">
                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email..">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3" for="password">Password</label>
                <div class="col-xs-9">
                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password..">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3" for="password2">Confirm Password</label>
                <div class="col-xs-9">
                    <input class="form-control" type="password" id="password2" name="password_confirmation" placeholder="Confirm your password..">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3" for="role">Role</label>
                <div class="col-xs-9">
                    <select name="role" id="role" class="form-control">
                        <option value="">-- Select One --</option>
                        <option value="1">Administrator</option>
                        <option value="2">Author</option>
                        <option value="3">Editor</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-9 col-xs-offset-3">
                    <label class="css-input switch switch-sm switch-success">
                        <input type="checkbox" id="terms" name="terms" value="1"><span></span> Agree to terms?
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <a href="<?=base_url()?>mypanel/user" class="btn  btn-default">Cancel</a>
                    <button class="btn pull-right btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Register</button>
                </div>
            </div>
        </form>
    </div>
</div>