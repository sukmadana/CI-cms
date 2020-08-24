<div class="col-md-8">
    <div class="block">
        <div class="block-content">
            <form action="" class="form-horizontal js-validation-bootstrap" method="post">
                <div class="form-group">
                    <label class="col-xs-3" for="site_name">Site Name</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="site_name" name="site_name" value="<?=get_setting('site_name')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="site_slogan">Site Slogan</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="site_slogan" name="site_slogan" value="<?=get_setting('site_slogan')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="company_name">Company Name</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="company_name" name="company_name" value="<?=get_setting('company_name')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="company_address">Company Address</label>
                    <div class="col-xs-9">
                        <textarea name="company_address" id="company_address" class="form-control" cols="30" rows="5"><?=get_setting('company_address')?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="company_city">Company City</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="company_city" name="company_city" value="<?=get_setting('company_city')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="company_state">Company State</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="company_state" name="company_state" value="<?=get_setting('company_state')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="company_phone">Company Phone</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="company_phone" name="company_phone" value="<?=get_setting('company_phone')?>" placeholder="ex: 03613334444">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="company_email">Company Email</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="company_email" name="company_email" value="<?=get_setting('company_email')?>" placeholder="ex: mail@mail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3" for="company_logo_url">Company Logo</label>
                    <div class="col-xs-9">
                        <input class="form-control" type="text" id="company_logo_url" name="company_logo_url" value="<?=get_setting('company_logo_url')?>" placeholder="ex: http://example.com">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn pull-right btn-success" type="submit"><i class="fa fa-save push-5-r"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>