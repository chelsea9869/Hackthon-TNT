<?php
$csv_path = 'data/bookkeeping-category.csv';
$category = @fopen($csv_file,'r');

$type_dropdown= "<select id='bookkeeping-type' name='type'>";
$income_dropdown="<select id='bookkeeping-income' name='category'>";
$expense_dropdown="<select id='bookkeeping-expense' name='category'>";

foreach (($heading = fgetcsv($category))as $idx => $ty) {
    # code...
}



while (($data = fgetcsv($category)) !== FALSE) {

}



?>