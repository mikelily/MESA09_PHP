<?php
    //%4 = 0 true
    //%100 = 0 false
    //%400 = 0 true
    $yearCheck =""; //讀入使用者輸入之年份
    $tOrF = ""; //判斷是否為閏年
    $outputAns = "";    //印出之結果
//    if(isset($_GET['yearCheck'])){
//        $yearCheck = $_GET['yearCheck'];
//    };
    if(isset($_GET['yearCheck'])) {
        $yearCheck = $_GET['yearCheck'];
        if ($yearCheck % 4)
            $tOrF = false;
        else
            $tOrF = true;

        if ($yearCheck % 100 == 0)
            $tOrF = false;

        if ($yearCheck % 400 == 0)
            $tOrF = true;
    };

?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    </head>
    <body>
        <form id="register_form" role="form" data-toggle="validator">
            <div class="form-group">
                <label for="inputName"
                       class="control-label col-sm-2">
                    <span class="glyphicon glyphicon-user"></span>
                    想查詢的年份為：
                </label>
                <div class="col-sm-10">
                    <input name="yearCheck" type="text" class="form-control" placeholder="請輸入年份"
                           pattern="^[0-9]+$" data-error="只能輸入數字" required="required"
                           value="<?php echo $yearCheck; ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button type="submit" name="checkBtn"
                            id="checkBtn"
                            class="btn btn-success">
                        <span class="glyphicon glyphicon-off"></span> 點我查詢是否為閏年
                    </button>
                </div>
            </div>
        </form>
        <div>
            <?php
            echo $tOrF;
            ?>
        </div>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <!--引用 Validator-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

        <!--執行 Validator-->
        <script>
            $('#register_form').validator();
        </script>
    </body>
</html>



