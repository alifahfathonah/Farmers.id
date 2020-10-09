
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row mb-4">
        <div class="col-md-12 mt-4">
            <h2 class="pa-lc-5">Administrator</h2>
            <h5 class="mb-2 mt-2 pa-lc-5">
                <b>Content Management</b></h5>
            <hr/>
        </div>
        <div class="col-md-6 mb-2">
            <h3>Banner</h3>
            <button class="btn btn-primary mb-2" href="#" data-toggle="modal" data-target="#modalAdd">Add</button>
            <table class="table table-striped cms-data-table" data-source-api="<?php echo base_url('administrator/api/banner/get_admin'); ?>">
                <thead>
                    <th>Image</th>
                    <th class="text-center">Url</th>
                    <th class="text-center">Option</th>
                </thead>
                <tbody>
                </tbody>
            </table>
            
            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url('administrator/api/banner/insert'); ?>" class="ajax-form" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                                <div class="form-group">
                                    <label>Href</label>
                                    <input type="href" class="form-control" name="href"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url('administrator/api/banner/insert'); ?>" class="ajax-form" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                                <div class="form-group">
                                    <label>Href</label>
                                    <input type="text" class="form-control" name="href"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url('administrator/api/banner/update'); ?>" class="ajax-form" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <img class="image-preview" style="max-width: 300px"/><br/>
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                                <div class="form-group">
                                    <label>Href</label>
                                    <input type="text" class="form-control" name="href"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id"/>
                                <input type="hidden" name="image_before"/>
                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url('administrator/api/banner/delete'); ?>" class="ajax-form" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Delete Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Are You Sure To Delete This Item ?</h5>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id"/>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Keep Delete">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $('.cms-data-table').dataTable({
        ajax : $('.cms-data-table').data('source-api'),
        columns : [
            { data: 'image', className: 'text-center', render: function(data, type, row){
                html = '';
                if(data != '')
                    html = '<img src="' + '<?php echo base_url('public/uploads/banner/'); ?>' + data + '"/>';
                return html;
            }},
            { data: 'url' },
            { data: null, className: 'text-center', render: function(data, type, row){
                html = '';
                html += '<a class="btn btn-info mb-2 cms-btn-edit" href="#" data-toggle="modal" data-target="#modalEdit" data-id="' + data.id + '" data-image="' + data.image + '" data-href="' + data.url + '">Edit</a> &nbsp;';
                html += '<a class="btn btn-danger mb-2 cms-btn-delete" href="#" data-toggle="modal" data-target="#modalDelete" data-id="' + data.id + '" >Delete</a>';
                return html;
            }},
        ],
        initComplete: function(settings, json) {
            $('.cms-btn-edit').click(function(e){
                $('#modalEdit form input[name=id]').val($(this).data('id'));
                $('#modalEdit form .image-preview').attr('src', '<?php echo base_url('public/uploads/banner/'); ?>' + $(this).data('image'));
                $('#modalEdit form input[name=image_before]').val($(this).data('image'));
                $('#modalEdit form input[name=href]').val($(this).data('href'));
            });
            $('.cms-btn-delete').click(function(e){
                $('#modalDelete form input[name=id]').val($(this).data('id'));
            });
        },

    });
</script>