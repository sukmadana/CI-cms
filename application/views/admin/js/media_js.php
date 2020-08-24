<script src="<?=base_url()?>assets_admin/js/plugins/dropzonejs/dropzone.min.js"></script>
<script>
    Dropzone.options.fileupload = {
        acceptedFiles: 'image/*',
        maxFilesize: 8 ,// MB
        success: function(file, response){
                show_image();
            }
    };
</script>

<script>
  //AJAX
  
    $(document).ready(function(){
        show_image();
        // Add restrictions
        
        
    });
    function show_image(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url('mypanel/media/getImage')?>',
            async : true,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<div class="col-lg-3 animated fadeIn">'+
                                '<div class="img-container fx-img-zoom-in">'+
                                    '<img class="img-responsive" src="'+data[i].image_url+'" alt="'+data[i].image_alt+'">'+
                                    '<div class="img-options">'+
                                        '<div class="img-options-content">'+
                                            '<h3 class="font-w400 text-white push-5">'+data[i].image_name+'</h3>'+
                                            '<a class="btn btn-sm btn-default" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Copy Link"><i class="fa fa-link"></i> </a>'+
                                            '<a class="btn btn-sm btn-default item_edit" href="javascript:void(0)" data-id="'+data[i].id+'" data-name="'+data[i].image_name+'" data-alt="'+data[i].image_alt+'" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </a>'+
                                            '<a class="btn btn-sm btn-default btn_delete" href="javascript:void(0)" onClick="return confirm(\'Are you sure to delete this image?\')" data-id="'+data[i].id+'" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i> </a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
                }
                $('#show_data').html(html);
                $('[data-toggle="tooltip"]').tooltip()
            }
        });
    }
    $('#show_data').on('click','.item_edit',function(){
        var image_id = $(this).data('id');
        var image_name = $(this).data('name');
        var image_alt = $(this).data('alt');
            
        $('#Modal_Edit').modal('show');
        $('[name="image_id"]').val(image_id);
        $('[name="image_name"]').val(image_name);
        $('[name="image_alt"]').val(image_alt);
    });

    //update record to database
    $('#btn_update').on('click',function(){
        var id = $('#image_id').val();
        var name = $('#image_name').val();
        var alt  = $('#image_alt').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('mypanel/media/update')?>",
            dataType : "JSON",
            data : {
                id:id ,
                image_name:name,
                image_alt:alt
            },
            success: function(data){
                $('[name="image_id"]').val("");
                $('[name="image_name"]').val("");
                $('[name="image_alt"]').val("");
                $('#Modal_Edit').modal('hide');
                show_image();
            }
        });
        return false;
    });

    $('#show_data').on('click', '.btn_delete',function(){
        var id = $('.btn_delete').data('id');
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('mypanel/media/delete')?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
                show_image();
            }
        });
        return false;
    });
</script>