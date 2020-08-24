<div class="content content-narrow">
    <div class="col-md-12">

        <!-- Block Tabs Default Style -->
        <div class="block">
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li>
                    <a href="#btabs-static-upload">Upload</a>
                </li>
                <li class="active">
                    <a href="#btabs-static-image">Image</a>
                </li>

            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane " id="btabs-static-upload">
                    <div class="">
                        <!-- DropzoneJS Container -->
                        <form class="dropzone" action="<?=base_url()?>mypanel/media/upload" method="POST" enctype="multipart/form-data" id="fileupload"></form>
                    </div>
                </div>
                <div class="tab-pane active" id="btabs-static-image">

                    <!-- BEGIN -->
                    <div class="row items-push" id="show_data">
                        
                    </div>

                    <!-- END -->
                </div>
                <?php $this->load->view('admin/modal/media_edit_modal'); ?>

            </div>
        </div>
        <!-- END Block Tabs Default Style -->
    </div>

</div>