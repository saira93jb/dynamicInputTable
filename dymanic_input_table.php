<?php
if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Input Table HTML</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <h1>Dynamic Input Table HTML and jQuery</h1>
        <p>This form gets submitted in form of 2D array</p>
        <form action='' method="POST">
            <div class="outerdin">
                <div class="row">
                    <div class="col-md-3"><input type="text" name="text[0][]" class="form-control" /></div>
                    <div class="col-md-3"><input type="text" name="text[0][]" class="form-control" /></div>
                    <div class="col-md-3"><input type="text" name="text[0][]" class="form-control" /></div>
                    <div class="col-md-3"><input type="text" name="text[0][]" class="form-control" /></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <a href="javascript:void(0)" id="addRow" class="btn btn-success">
                        <span class='glyphicon glyphicon-plus'></span> Add Row
                    </a>
                </div>
                <div class="col-md-2">
                    <input type='submit' name='submit' value='Submit' class="btn btn-info"/>
                </div>
            </div>
        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

<script>
    var count = 1;
    $("#addRow").click(function () {
        var newrow = ' <div class="row">' +
        '<div class="col-md-3"><input type="text" name="text[' + count + '][]" class="form-control" /></div>' +
        '<div class="col-md-3"><input type="text" name="text[' + count + '][]" class="form-control" /></div>' +
        '<div class="col-md-3"><input type="text" name="text[' + count + '][]" class="form-control" /></div>' +
        '<div class="col-md-3"><input type="text" name="text[' + count + '][]" class="form-control" /></div>' +
        '</div>';
        $('.outerdin').append(newrow);
        
        count++;
    });

</script>

</html>
