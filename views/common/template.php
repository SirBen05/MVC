<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'views/common/headData.php';?>
</head>
<body class="bg-dark">
    <?php include 'views/common/header.php';?>
    <div id="content" class="container">
    <?php 
    if(isset($this->args['subPage'])){
        include 'views/'.$this->args['name'].$this->args['subPage'].'/index.php'; 
    } else {
        include 'views/'.$this->args['name'].'/index.php'; 
    }
    ?> 
    </div>
<?php 
    include 'views/common/footer.php';
    include 'views/common/scripts.php';
?>
</body>
</html>