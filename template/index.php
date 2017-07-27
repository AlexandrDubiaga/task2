<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>task2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<table class="table table-striped" style="text-align: center">
    <tr style="background-color: #999999; color: blue; font-size: 25px;">
        <td>Number А</td>
        <td>action</td>
        <td>Number B</td>
        <td>Mathematical Operations</td>
        <td>Result</td>
    </tr>
    <tr>
        <td><?php echo $a; ?></td>
        <td width="100px">+</td>
        <td><?php echo $b; ?></td>
        <td>summation</td>
        <td><?php echo $summation; ?></td>
    </tr>
    <tr>
        <td><?php echo $a; ?></td>
        <td width="100px">-</td>
        <td><?php echo $b; ?></td>
        <td>subtraction</td>
        <td><?php echo $subtraction; ?></td>
    </tr>
    <tr>
        <td><?php echo $a; ?></td>
        <td width="100px">*</td>
        <td><?php echo $b; ?></td>
        <td>multiplication</td>
        <td><?php echo $multiplication; ?></td>
    </tr>
    <tr>
        <td><?php echo $a; ?></td>
        <td width="100px">/</td>
        <td><?php echo $b; ?></td>
        <td>division</td>
        <td><?php echo $division; ?></td>
    </tr>
    <tr>
        <td colspan="3"><?php echo "SQRT(A) ".$a; ?></td>
        <td>rootOfNumberA</td>
        <td><?php echo $rootOfNumberA; ?></td>
    </tr>
    <tr>
        <td colspan="3"><?php echo "SQRT(B) ".$b; ?></td>
        <td>rootOfNumberB</td>
        <td><?php echo $rootOfNumberB; ?></td>
    </tr>
    <tr>
        <td colspan="2" style="background-color: #2aabd2; color: blue; font-size: 25px;">Operations</td>
        <td colspan="2" style="background-color: #2aabd2; color: blue; font-size: 25px;">Function</td>
        <td  style="background-color: #2aabd2; color: blue; font-size: 25px;">Result</td>
    </tr>
    <tr>
    <td colspan="5" style="background-color: #afd9ee; color: blue; font-size: 25px;">MS</td>
    </tr>
    <tr>
        <td colspan="1"><?php echo "Save: ".$a.' + '.$b;   ?></td>
        <td colspan="3">storingTheSummationResultInMemory</td>
        <td><?php echo $storingTheSummationResultInMemory; ?></td>
    </tr>
    <tr>
        <td colspan="5" style="background-color: #afd9ee; color: blue; font-size: 25px;">MR</td>
    </tr>
    <tr>
        <td colspan="1"><?php echo "From memory: ".$summoningTheSummationResultFromMemory;   ?></td>
        <td colspan="3">summoningTheSummationResultFromMemory</td>
        <td><?php echo $summoningTheSummationResultFromMemory; ?></td>
    </tr>
    <tr>
        <td colspan="5" style="background-color: #afd9ee; color: blue; font-size: 25px;">MC</td>
    </tr>
    <tr>
        <td colspan="1"><?php echo "Clearing memory: ".$clearingMemory;   ?></td>
        <td colspan="3">clearingMemory</td>
        <td><?php echo $clearingMemory; ?></td>
    </tr>
    <tr>
        <td colspan="5" style="background-color: #afd9ee; color: blue; font-size: 25px;">M+</td>
    </tr>
    <tr>
        <td colspan="1"><?php echo "Add a + b in memory: ".$summoningTheSummationResultFromMemory;   ?></td>
        <td colspan="3">addingNewDataToTheOldMemory</td>
        <td><?php echo $addingNewDataToTheOldMemory; ?></td>
    </tr>
    <tr>
        <td colspan="5" style="background-color: #afd9ee; color: blue; font-size: 25px;">M-</td>
    </tr>
    <tr>
        <td colspan="1"><?php echo "Digit in memory: ".$summoningTheSummationResultFromMemory.' - '.' Digit A '.$a;   ?></td>
        <td colspan="3">subtractionOfMemoryNumber</td>
        <td><?php echo $subtractionOfMemoryNumber; ?></td>
    </tr>
    <tr>
        <td colspan="5" style="background-color: #afd9ee; color: blue; font-size: 25px;">%</td>
    </tr>
    <tr>
        <td colspan="1"><?php echo "Get percentage : ".$a.' '." of ".$b;  ?></td>
        <td colspan="3">percentageOfTheNumber</td>
        <td><?php echo $percentageOfTheNumber; ?></td>
    </tr>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


