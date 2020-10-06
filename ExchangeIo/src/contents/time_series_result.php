<?php
if(isset($_POST['selectedCurrency']) && isset($_POST['selectedDate1']) && isset($_POST['selectedDate2'])):
    $selectedCurrency = $_POST['selectedCurrency'];
    $selectedDate1 = $_POST['selectedDate1'];
    $selectedDate2 = $_POST['selectedDate2'];

    $exchange->requestTimeSeries($selectedDate1, $selectedDate2,  $selectedCurrency);
    $data = $exchange->getResult();
?>

<h2>Search Results</h2>
<div class="row h-100">
    <div class="col-5">
        <a href="?page=historical_data" class="btn btn-block btn-secondary btn-sm rounded">Request Another Data</a>
    </div>
    <div class="col-5">
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

    foreach($data['rates'] as $time => $array):
?>


<table class="table table-striped">
<h4>Date : <?= $time ?></h4>
    <thead>
        <th>Currency</th>
        <th>Name</th>
        <th>Rates</th>
    </thead>
    <tbody>
<?php
    foreach($array as $curr => $rate):
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
<?php endforeach ?>

<?php endif ?>
<?php endif ?>
    
    </tbody>

</table>
