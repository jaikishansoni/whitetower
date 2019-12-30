<table class="table" border="1" id="printbooking" width="100%">
    <tr  class="success">
        <td colspan="4">
            <table width="100%" cellpadding="0" cellspacing="0" >
                <tr>
                    <td align="center">
                        <img src="<?php echo base_url('assets/admin/uploads/images/' . $this->setting->logo) ?>" height="60" width="102" />
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <b style="font-size:24px"><?php echo $this->setting->name; ?></b>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <b style="font-size:16px"><?php echo $this->setting->address; ?></b>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <th class="success"><?php echo lang('name') ?></th>
        <td class="table-active"><?php echo $order->firstname ?> <?php echo $name; ?></td>
        <th class="success"><?php echo lang('email') ?></th>
        <td class="table-active"><?php echo $email; ?></td>
    </tr>
    <tr>
        <th class="success"><?php echo lang('phone') ?></th>
        <td class="table-active"><?php echo $phone; ?></td>
        <th class="success"><?php echo lang('message'); ?></th>
        <td class="table-active"><?php echo $message; ?></td>
    </tr>
</table>
