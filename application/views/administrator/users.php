
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row mb-4">
        
        <div class="col-md-12 mt-4">
            <h2 class="pa-lc-5">Administrator</h2>
            <h5 class="mb-2 mt-2 pa-lc-5">
                <b>Users Admin</b></h5>
            <hr/>
        </div>
        <div class="col-md-12 mb-2">
            <h3>Users Admin</h3>
            <table class="table table-striped">
                <thead>
                    <th>No.</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th class="text-center">Option</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                           RISKI FITRIAWAN
                        </td>
                        <td>
                            +62 812 1987 6152
                        </td>
                        <td>
                            rizkijklmn@gmail.com
                        </td>
                        <td class="text-center">
                            <a class="btn btn-info mb-2" href="#" data-toggle="modal" data-target="#modalEdit">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>