<link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>/plugins/datepicker/datepicker3.css"> 
<link href="<?php echo base_url('assets/admin/plugins/toastr') ?>/toastr.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/admin/plugins/responsivetabs/responsive-tabs.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/admin/plugins/responsivetabs/style.css') ?>" rel="stylesheet" type="text/css" />
<style>
    @media print{
        body{font-size:12px !important} 
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 3px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }
        a{display:none !important}
    }
</style>

<section class="content-header">
    <h1>
        <?php echo $page_title; ?> #<?php echo $booking->order_no ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> <?php echo lang('dashboard') ?></a></li>
        <li><a href="<?php echo site_url('admin/bookings') ?>"> <?php echo lang('bookings') ?> </a></li>
        <li class="active"><?php echo lang('view'); ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="invoice">
    <!-- title row -->
    <div id="responsiveTabsDemo">

        <div id="tab-1">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <img src="<?php echo base_url('assets/admin/uploads/images/' . $this->setting->logo) ?>" height="35" width="60" /></i> <?php echo $this->setting->name ?>                        
                    </h2>
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <?php echo lang('hotel_details') ?>
                    <address>
                        <strong><?php echo $this->setting->name ?></strong><br>
                        <?php echo wordwrap($this->setting->address, 50, "<br>\n"); ?><br>
                        <?php echo lang('phone') ?>: <?php echo $this->setting->phone ?><br/>
                        <?php echo lang('email') ?>: <?php echo $this->setting->email ?>
                    </address>
                </div><!-- /.col -->                               
            </div><!-- /.row -->
            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo lang('date'); ?></th>
                                <th><?php echo lang('title'); ?></th>
                                <th><?php echo lang('expenses_category'); ?></th>
                                <th><?php echo lang('amount'); ?></th>
                                <th><?php echo lang('remark'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $expenseData->id; ?></td>
                                <td><?php echo date_convert($expenseData->date); ?></td>
                                <td><?php echo $expenseData->title; ?></td>
                                <td><?php echo $expenseData->ecategory; ?></td>
                                <td><?php echo $expenseData->amount; ?></td>
                                <td><?php echo $expenseData->remarks; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td align=""><b><?php echo lang('total_price'); ?></b></td>
                                <td align=""><b><?php echo $expenseData->amount; ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="#" class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</a>
                    <button class="btn btn-success pull-right hide"><i class="fa fa-credit-card"></i> Submit Payment</button>
                    <button class="btn btn-primary pull-right hide" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                </div>
            </div>
        </div>     
    </div>
</section><!-- /.content -->
<!-- Add Payment-->
<?php if (isset($payments)): ?>
    <script>
        function printData<?php echo $new->id ?>()
        {
            var divToPrint = document.getElementById("print_inv<?php echo $new->id ?>");
            newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }
    </script>
<?php endif; ?>
<script src="<?php echo base_url('assets/admin/') ?>/plugins/datepicker/bootstrap-datepicker.js"></script>		
<script src="<?php echo base_url('assets/admin/plugins/toastr') ?>/toastr.min.js"></script>			
<script src="<?php echo base_url('assets/admin/plugins/responsivetabs/jquery.responsiveTabs.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.js') ?>" type="text/javascript"></script>