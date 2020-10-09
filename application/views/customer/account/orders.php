
<h4 class="mt-4 mb-4">My Orders</h4>

<div class="card">
    <div class="card-body">
    
        <table class="table table-striped cms-data-table" data-source-api="<?php echo base_url('administrator/api/process_order/get_by_user'); ?>">
            <thead>
                <th>Code</th>
                <th>Status</th>
                <th class="text-right">Order Date</th>
                <th class="text-right">Grand Total</th>
                <th class="text-center">Option</th>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="code"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Package Type :</label>
                            <p id="wrapping_type"></p>
                        </div>
                        <div class="form-group">
                            <label>Message :</label>
                            <p id="message"></p>
                        </div>
                        <div class="form-group">
                            <label>Destination Address :</label>
                            <p id="destination_address"></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="payment-image mb-3" style="max-width: 300px; display: none;"/><br/>
                        <h6>Upload Bukti Pembayaran : </h6>
                        <form method="post" action="<?php echo base_url('administrator/api/process_order/update_payment_image'); ?>" class="ajax-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" class="form-control" name="payment_image"/>
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="" name="id"/>
                                <input type="submit" class="btn btn-primary" value="Upload file"/>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col" class="text-right">Price</th>
                                    <th scope="col" class="text-right">Subtotal</th>
                                </tr>
                            </thead>
                              <tbody id="process_order_detail_table">
                              
                            </tbody>
                        </table>
                        <h5 class="text-right">Total : <span id="total"></span></h5>
                        <h5 class="text-right">Ongkos Kirim : Rp 10,000.00</h5>
                        <hr/>
                        <h3 class="text-right">Grand Total : <span id="Grand_total"></span></h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('.cms-data-table').dataTable({
    ajax : $('.cms-data-table').data('source-api'),
    columns : [
        { data: 'code' },
        { data: null, className: 'text-center', render: function(data, type, row){
            html = '<b>' + data.status_name + '</b>';
            if(data.payment_image != null && data.status == 0)
                html += '<br/><b class="text-success">(verification in progress)</b>';
            return html;
        }},
        { data: 'created_at', className: 'text-center' },
        { data: null, className: 'text-right', render: function(data, type, row){
            return 'Rp ' + data.grand_total;
        }},
        { data: null, className: 'text-center', render: function(data, type, row){
            html = '';
            html += '<a class="btn btn-info mb-2 cms-btn-edit" href="#" data-toggle="modal" data-target="#modalEdit" data-id="' + data.id + '" data-code="' + data.code + '" data-wrapping-type="' + data.wrapping_type_name + '" data-message="' + data.message + '" data-destination-address="' + data.destination_address + '" data-status="' + data.status + '" data-total="' + data.total + '" data-grand-total="' + data.grand_total + '" data-process-order-detail="' + data.process_order_detail + '" data-payment-image="' + data.payment_image + '">View</a> &nbsp;';
            return html;
        }},
    ],
    initComplete: function(settings, json) {
        $('.cms-btn-edit').click(function(e){
            $('#modalEdit form input[name=id]').val($(this).data('id'));
            $('#modalEdit #code').text($(this).data('code'));
            $('#modalEdit #wrapping_type').text($(this).data('wrapping-type'));
            $('#modalEdit #message').text($(this).data('message'));
            $('#modalEdit #destination_address').text($(this).data('destination-address'))
            $('#modalEdit #total').text('Rp ' + $(this).data('total'))
            $('#modalEdit #grand_total').text('Rp ' + $(this).data('grand-total'))
            $('#modalEdit .payment-image').hide();
            if($(this).data('payment-image') != null) {
                $('#modalEdit .payment-image').show();
            }
            $('#modalEdit .payment-image').attr('src', '<?php echo base_url('public/uploads/process_order/'); ?>' + $(this).data('payment-image'));
            var html_table = '',
                pod = $(this).data('process-order-detail');
            $.each(pod, function(k,v){
                console.log(v);
                html_table += '<tr>'
                                + '<td>'
                                + '<img src="<?php echo base_url('public/uploads/product/'); ?>' + v.image + '" style="width: 110px !important;"/>'
                                + '</td>'
                                + '<td>' + v.product_name + '</td>'
                                + '<td>' + v.qty + '</td>'
                                + '<td class="text-right">Rp ' + v.subtotal + '</td>'
                                + '<td class="text-right">Rp ' + v.subtotal + '</td>'
                            + '</tr>';
            });
            $('#process_order_detail_table').html(html_table);
        });
        $('.cms-btn-delete').click(function(e){
            $('#modalDelete form input[name=id]').val($(this).data('id'));
        });
    },

});
</script>