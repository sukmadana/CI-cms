<div class="block">
    <div class="block-header">
        <ul class="block-options">
            <li>
                <a href="<?=base_url()?>mypanel/user/add" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add User</a>
            </li>
        </ul>
        <h3 class="block-title">User List</h3>
    </div>
    <div class="block-content">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th></th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Role</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td></td>
                        <td>
                            <?=$user->admin_name?>
                                <br>
                                <small>
                                <a href="<?=base_url()?>mypanel/user/edit/<?=$user->id?>">Edit</a> 
                                <?php if($user->admin_username != $this->session->userdata('adminuname')):?>
                                | 
                                <a href="<?=base_url()?>mypanel/user/delete/<?=$user->id?>" onclick="return confirm('Are you sure to delete this record?')">Delete</a> 
                                <?php endif;?>
                            </small>

                        </td>
                        <td>
                            <?=$user->admin_username?>
                        </td>
                        <td>
                            <?=$user->admin_email?>
                        </td>
                        <td><img src="<?=base_url()?>files/avatars/<?=$user->admin_foto?>" width="70px"></td>
                        <td>
                            <?=printRole($user->admin_role)?>
                        </td>
                        <td>
                            <?=printStatus($user->admin_status)?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>