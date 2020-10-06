<?php
if(isset($_POST['selectedCurrency']) && isset($_POST['selectedDate'])):
    $selectedCurrency = $_POST['selectedCurrency'];
    $selectedDate = $_POST['selectedDate'];

    $exchange->requestHistoricalData($selectedDate,  $selectedCurrency);
    $data = $exchange->getResult();
?>

<h2>Search Results</h2>
<div class="row h-100">
    <div class="col-5">
        <a href="?page=historical_data" class="btn btn-block btn-secondary btn-sm rounded">Request Another Data</a>
    </div>
    <div class="col-3">
        <a href="?page=dashboard" class="btn btn-block btn-primary btn-sm rounded">Dashboard</a>
    </div>
</div>
<hr>
<?php
if($data == null):
?>
    <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">No Data Found</h4>
        <p class="mb-0">Unfortunately, we cant find the data you requested</p>
    </div>
<?php
else:
?>

<h4>Converted From : <?php echo $data['amount']." ".$data['base']?></?>
<h4>Date : <?php echo $data['date']?></h4>

<table class="table table-striped">
    <thead>
        <th>Currency</th>
        <th>Name</th>
        <th>Rates</th>
    </thead>
    <tbody>
<?php
    foreach($data['rates'] as $curr => $rate):
        foreach($nameData as $code => $name):
            if($curr == $code):
?>
        <tr>
            <td> <?php echo $curr?></td>
            <td> <?php echo $name ?></td>
            <td> <?php echo round($rate, 2) ?></td>
        </tr>
<?php endif ?>
<?php endforeach ?>
<?php endforeach ?>
    
    </tbody>

</table>
<?php endif?>
<?php 
else:
    echo 'Please input the data first';
endif;
?>