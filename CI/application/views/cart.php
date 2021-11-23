<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<?php 
    
    // echo "<pre>";

    // print_r($this->cart->contents());
    // die;

?>
<div class="container">
    <?php echo form_open('http://localhost/php-6pm/CI/shopping/update'); ?>

    <table class="table table-bordered mt-3">

    <tr>
            <th>QTY</th>
            <th>Item Description</th>
            <th style="text-align:right">Item Price</th>
            <th style="text-align:right">Sub-Total</th>
    </tr>

    <?php $i = 1; ?>

    <?php foreach ($this->cart->contents() as $items): ?>

            <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

            <tr>
                    <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                    <td>
                            <?php echo $items['name']; ?>

                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                    <p>
                                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                            <?php endforeach; ?>
                                    </p>

                            <?php endif; ?>

                    </td>
                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                    <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
            </tr>

    <?php $i++; ?>

    <?php endforeach; ?>

    <tr>
            <td colspan="2"> </td>
            <td class="right"><strong>Total</strong></td>
            <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
    </tr>

    </table>
    <p><?php echo form_submit('', 'Update your Cart'); ?></p>

</div>