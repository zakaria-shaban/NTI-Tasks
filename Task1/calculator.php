
<?php
// super global
if (isset($_POST["calc"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];

    if($number3=='+'){
        $calc_num=$number1+$number2;
      $msg =  "<div class='alert alert-primary'>$calc_num</div>";
    }
    else if($number3=='-'){
        $calc_num=$number1-$number2;
        $msg =  "<div class='alert alert-primary'>$calc_num </div>";
      }
      else if($number3=='*'){
        $calc_num=$number1*$number2;
        $msg =  "<div class='alert alert-primary'>$calc_num </div>";
      } 
      else if($number3=='/'){
        $calc_num=$number1/$number2;
        $msg =  "<div class='alert alert-primary'>$calc_num</div>";
      }
      else if($number3=='%'){
        $calc_num=$number1 % $number2;
        $msg =  "<div class='alert alert-primary'>$calc_num</div>";
      }

 
  }


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12  mt-5">
                <h1 class="h1 text-danger text-center">Calaulator </h1>
            </div>
            <div class="col-4 offset-4 mt-2">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">enter numer one</label>
                        <input type="number" name="number1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">enter numer two</label>
                        <input type="number" name="number2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">

                        <label for="" >Select Operation</label>
                        <select name="number3">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="/">/</option>
                            <option value="*">*</option>
                            <option value="%">%</option>
                        </select>

                    </div>
                    <div>
                    <?php  
                   if (isset($_POST["calc"])){
                        echo $msg;
                    } 
                    ?>
                    </div>
                    <br>
                    <div class="form-group m-auto text-center">
                        <button name="calc" class="btn btn-danger form-control rounded">calculate</button>
                    </div>
                    <br>

                </form>
            </div>
       
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>