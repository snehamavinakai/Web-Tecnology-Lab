<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 19</title>
</head>
<body>
    <h1>Calculate Electricity Billing</h1>
    <form action="" method="post">
        <h1>
            Enter no. of units:
            <input type="number" name="units" placeholder="Please enter no. of units"/>
            <input type="submit" name="submit1" value="Calculate Electricity Bill"/>
        </h1>
    </form>

    <?php 
        if(isset($_POST["submit1"]))
        {
            $units = $_POST['units'];
            $unit_cost_first = 3.50;
            $unit_cost_second = 4.00;
            $unit_cost_third = 5.20;
            $unit_cost_fourth = 6.50;

            if($units <= 50)
            {
                $bill = $units * $unit_cost_first;
            }
            else if($units > 50 && $units <= 100)
            {
                $temp = 50 * $unit_cost_first;
                $remaining_units = $units - 50;
                $bill = $temp + ($remaining_units * $unit_cost_second);
            }
            else if($units > 100 && $units <= 200)
            {
                $temp = (50 * 3.5) + (100 * $unit_cost_second);
                $remaining_units = $units - 150;
                $bill = $temp + ($remaining_units * $unit_cost_third);
            }
            else
            {
                $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
                $remaining_units = $units - 250;
                $bill = $temp + ($remaining_units * $unit_cost_fourth);
            }

            echo '<h1>Electricity bill : ' . $bill.'</h1>';
        }
    ?>
</body>
</html>