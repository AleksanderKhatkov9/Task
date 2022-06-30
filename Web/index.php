<?php
?>

<link href="../resources/CSS/lib/bootstrap.min.css" rel="stylesheet">
<script src="../resources/JS/lib/bootstrap.bundle.min.js"></script>
<script src="../resources/JS/lib/jquery.min.js"></script>

<h1 style="text-align: center">Видите числа Х1 и Х2</h1>

<form method="post" action="" >
    <div class="container mt-3" style="padding-block: 40px">
        <div class="card" style="width: 400px; border: solid;">
            <div class="mb-3" style="padding: 20px">

            <div class="mb-3" style="margin-left: 20px; width: 250px;">
                <input type="number" class="form-control" name="x1" id="x1" placeholder="Input X1=?">
            </div>

                <div class="mb-3" style="margin-left: 20px; width: 250px;">
                    <input type="number" class="form-control" name="x2" id="x2" placeholder="Input X2=?">
                </div>

                <div class="mb-3" style="margin-left: 20px; width: 100px;">
                    <input type="number" class="form-control" name="size_array" id="size_array" placeholder="Array Size">
                </div>

            <div class="mb-3" style="margin-left: 20px">
                <button type="submit" class="btn btn-success" name="submit" id="submit">Отправить</button>
            </div>
        </div>
    </div>
</form>
<br>

<?php
echo "<h1>Ответ полученной в программе :) <br></h1>";
include_once "../../Video/Model/Collection.php";

?>
