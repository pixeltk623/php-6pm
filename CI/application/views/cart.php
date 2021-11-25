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
                    <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'type'=> 'number', 'class' => 'cart-change', 'data-id' => $items['rowid'])); ?></td>
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

    <div id="res">
        
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       $(document).on("change",".cart-change", function() {
            let qty = $(this).val();
            let rowId = $(this).data('id');
            let dataArray = {rowid: rowId, qty: qty}
            $.ajax({
                type: 'POST',
                url: 'http://localhost/php-6pm/CI/shopping/update',
                dataType: 'json',
                data: dataArray,
                success:function(data){
                    var table = '';
                    table += "<table class='table table-bordered mt-3'>";
                    table +=        "<tr>";
                    table +=            "<th>QTY</th>";
                    table +=            "<th>Item Description</th>";
                    table +=            "<th style='text-align:right'>Item Price</th>";
                    table +=            "<th style='text-align:right'>Sub-Total</th>";
                    table +=        "</tr>";
                   $.each( data, function( key, value ) {
                      // console.log( key + ": " + value );
                    table += "<tr>";
                         table += "<td>"+value.qty+"</td>";
                         table += "<td>"+value.name+"</td>";
                         table += "<td>"+value.price+"</td>";
                         table += "<td>"+value.subtotal+"</td>";
                    table += "</tr>";
                     // console.log(value);
                    });
                    table += "<table>";
                    console.table(table);

                    $("#res").html(table);
                }
            });
       });
    });
</script>