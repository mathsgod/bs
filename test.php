<?
error_reporting(E_ALL || ~E_NOTICE);
?>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">

        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div><!-- /btn-group -->
            <input type="text" class="form-control" aria-label="...">
        </div><!-- /input-group -->

        <?

        require_once(__DIR__ . "/vendor/autoload.php");
        use BS\InputSelect;
        use BS\ButtonDropdown;
        use BS\Panel;

        $i = new InputSelect();
        $i->ds(["A", "B", "C"]);
        echo $i;


        $bdd = new ButtonDropdown('test1');

        echo $bdd;


        $p=new Panel();
        $p->heading("head");

        echo $p;
        ?>
    </div>

</body>

</html> 