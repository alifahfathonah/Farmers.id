
<div class="container mb-4" style="width: 100%; max-width: 100%; padding: 0px; min-height: 600px">
    <div class="row mb-4">
        
        <div class="col-md-12 mt-4">
            <h2 class="pa-lc-5">Administrator</h2>
            <h5 class="mb-2 mt-2 pa-lc-5">
                <b>Report</b></h5>
            <hr/>
        </div>
        <div class="col-md-12 mb-2">
            <h3>Report Order</h3>
            <a class="btn btn-primary mb-2" href="<?php echo base_url('administrator/report/export/process_order'); ?>" >Download As Excel</a>
            <table class="table table-striped cms-data-table" data-source-api="<?php echo base_url('administrator/api/process_order/get_admin'); ?>">
                <thead>
                    <th>Code</th>
                    <th>User Name</th>
                    <th class="text-right">Grand Total</th>
                    <th>Status</th>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
</div>


<script>
    $('.cms-data-table').dataTable({
        ajax : $('.cms-data-table').data('source-api'),
        columns : [
            { data: 'code' },
            { data: 'user_customer_name' },
            { data: null, className: 'text-right', render: function(data, type, row){
                return 'Rp ' + data.grand_total;
            }},
            { data: null, className: 'text-center', render: function(data, type, row){
                return '<b>' + data.status_name + '</b>';
            }},
        ],

    });
</script>