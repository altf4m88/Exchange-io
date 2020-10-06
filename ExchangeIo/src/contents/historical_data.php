<h2 class="mt-2">Request Data By Specific Date</h2>
    <form action="?page=historical_data_result" method="POST">

        <div class="row h-100 mt-3">
            <div class="col-3">
                <label for="currencySelect">Currency</label>
                <select class="form-control-sm rounded" id="currencySelect" name="selectedCurrency">
                <?php foreach($nameData as $currencyCode => $currencyName):  ?>
                    <option value=<?php echo $currencyCode ?> > <?php echo $currencyName ?></option>
                 <?php endforeach ?>   
                </select>
            </div>
        </div>
        <div class="row h-100 mt-3">
            <div class="col-3">
                <label for="dateInput">Date</label>
                <input type="date" class="border rounded" id="dateInput" name="selectedDate"
                    min="2010-01-01" max=<?php echo date("Y-m-d")?>
                >
            </div>
        </div>
        <div class="row h-100 mt-3">
            <div class="col-3">
                <input id="searchButton"type="submit" class="btn btn-sm btn-primary rounded" value="Search"></input>
            </div>
        </div>
    </form>
<hr>

<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Please Note!</strong> Some requested data might return null due to unavailability of older data, the date input year is limited to 2010. 
</div>
