<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?></title>
    <link href="/css/public.css" rel="stylesheet">
</head>
<body>
    <div class="page-header">
        <?php echo $this->title; ?>
    </div>
    <table id="ads-table">
        <thead>
            <tr>
                <th>Ad title</th>
                <th>User name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($this->ads as $ad) {
                    echo "<tr><td>".$ad->get_title()."</td><td>".$ad->get_user_name()."</td></tr>";
                }
            ?>
        </tbody>        
    </table>
</body>
</html>