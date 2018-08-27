<h3>Fruit</h3>
<?php
    // echo '<pre>';
    // print_r($this);
    // echo '</pre>';
?>
<div>
    <span class="d-inline-block id-col header-col">ID</span>
    <span class="d-inline-block weight-col header-col">Weight</span>
    <span class="d-inline-block color-col header-col">Color</span>
    <span class="d-inline-block cultivar-col header-col">Cultivar</span>
</div>
<?php
for($i = 0; $i<count($this->args['fruitList']); $i++){
    echo 
    '<div>
        <span class="d-inline-block id-col">'.$this->args['fruitList'][$i]['id'].'</span>
        <span class="d-inline-block weight-col">'.$this->args['fruitList'][$i]['weight'].'</span>
        <span class="d-inline-block color-col">'.$this->args['fruitList'][$i]['color'].'</span>
        <span class="d-inline-block cultivar-col">'.$this->args['fruitList'][$i]['cultivar'].'</span>
        <span class="d-inline-block delete-col">
            <form method="post" action="fruit/deleteFruit/'.$this->args['fruitList'][$i]['id'].'">
                <input type="submit" value="&#10006;">
            </form>
        </span>
        <span class="d-inline-block update-col">
            <form method="post" action="fruit/updateFruit/'.$this->args['fruitList'][$i]['id'].'">
                <input type="submit" value="&#8635;">
            </form>
        </span>
    <div>';
}
?>
    
<hr>
<h3>Insert fruit</h3>
<form action="fruit/addFruit" method="post">
    <label for="weight">Weight:</label>
    <input type="text" name="weight"><br>
    <label for="color">Color:</label>
    <input type="text" name="color"><br>
    <label for="cultivar">Cultivar:</label>
    <input type="text" name="cultivar"><br>
    <input type="submit" value="Save fruit">
</form>