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
    <ul id="list">
        <?php
            foreach ($this->links as $link) {
                echo "<li><a href='".$link['route']."'>".$link['name']."</a></li>";
            }
        ?>
    </ul>
</body>
</html>