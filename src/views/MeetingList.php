<?php
    include 'connection.php';
    $connection = new Connection();
    
    include 'meeting.php';
    $meeting = new Meeting();

    $result = $meeting->getMeeting();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Lista</title>
</head>
<body>

<div style="display=block">
    <table>
        <tr>
            <th>Coder</th>
            <th>Topic</th>
            <th>Mytime</th>
        </tr>
        <tr>
            <?php foreach($result as $data): ?>
                <td>
                    <?php echo $data['coder'] ?>
                </td>
                
                <td>
                    <?php echo $data['topic'] ?>
                </td>
            
                <td>
                    <?php echo $data['mytime'] ?>

                </td>
            

            <?php endforeach ?>
        </tr>

    </table>

</div>
</body>
</html>