<?php
// super global
if (isset($_POST["marks"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    $number4 = $_POST["number4"];
    $number5 = $_POST["number5"];

    $total=NULL;
    $average=0;
    $Percentage=0;

    $total= $number1 + $number2 + $number3 + $number4 + $number5;
 
    $Percentage=($total/5.0);

    if($Percentage >= 90)
    {
        $msg = "<div class='alert alert-success'>Percentage >= 90%: Grade A</div>";
    }
    else if($Percentage >= 80)
    {
        $msg = "<div class='alert alert-success'>Percentage >= 80%: Grade B</div>";
    }
    else if($Percentage >= 70)
    {
        $msg = "<div class='alert alert-primary'>Percentage >= 70%: Grade C</div>";    }
    else if($Percentage >= 60)
    {
        $msg = "<div class='alert alert-info'>Percentage >= 60%: Grade D</div>";    }
    else if($Percentage >= 40)
    {
        $msg = "<div class='alert alert-warning'>Percentage >= 40%: Grade E</div>";    }
    else if($Percentage < 40)
    {
        $msg = "<div class='alert alert-danger'>Percentage < 40%: Grade F</div>";    }

   
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
                <h1 class="h1 text-danger text-center"> Calculator marks </h1>
            </div>
            <div class="col-4 offset-4 mt-2">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">enter subject one</label>
                        <input type="number" name="number1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">enter subject two</label>
                        <input type="number" name="number2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">enter subject third</label>
                        <input type="number" name="number3" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">enter subject four</label>
                        <input type="number" name="number4" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">enter subject five</label>
                        <input type="number" name="number5" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div>
                    <?php  
                   if (isset($_POST["marks"])){
                        echo $msg;
                    } 
                    ?>
                    </div>
                    <br>
                    <div class="form-group m-auto text-center">
                        <button name="marks" class="btn btn-danger form-control rounded">calculate marks</button>
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