<h2 class="mt-2">Time Series</h2>
    <form action="?page=time_series_result" method="POST">
        <div class="row mt-3">
            <div class="col-4">
                <label for="currencySelect">Currency</label>
                <select class="form-control-sm rounded" id="currencySelect" name="selectedCurrency">
                <?php foreach($nameData as $currencyCode => $currencyName):  ?>
                    <option value=<?php echo $currencyCode ?> > <?php echo $currencyName ?></option>
                 <?php endforeach ?>   
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label for="dateInput">Start Date</label>
                <input type="date" class="border rounded" id="dateInput" name="selectedDate1"
                    min="2010-01-01" max=<?php echo date("Y-m-d")?>
                >
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label for="dateInput">End Date</label>
                <input type="date" class="border rounded" id="dateInput" name="selectedDate2"
                    min="2010-01-01" max=<?php echo date("Y-m-d")?>
                >
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <input id="searchButton"type="submit" class="btn btn-sm btn-primary rounded" value="Search"></input>
            </div>
        </div>
    </form>
<hr>


