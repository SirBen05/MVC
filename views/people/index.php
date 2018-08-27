<h3>People</h3>
<?php
    // echo '<pre>';
    // print_r($this);
    // echo '</pre>';
?>
<div>
    <span class="d-inline-block id-col header-col">ID</span>
    <span class="d-inline-block name-col header-col">Name</span>
    <span class="d-inline-block surname-col header-col">Surname</span>
    <span class="d-inline-block age-col header-col">Age</span>
</div>
<?php
for($i = 0; $i<count($this->args['peopleList']); $i++){
    echo 
    '<div>
        <span class="d-inline-block id-col">'.$this->args['peopleList'][$i]['id'].'</span>
        <span class="d-inline-block name-col">'.$this->args['peopleList'][$i]['name'].'</span>
        <span class="d-inline-block surname-col">'.$this->args['peopleList'][$i]['surname'].'</span>
        <span class="d-inline-block age-col">'.$this->args['peopleList'][$i]['age'].'</span>
        <span class="d-inline-block delete-col">
            <form method="post" action="people/deletePerson/'.$this->args['peopleList'][$i]['id'].'">
                <input type="submit" value="&#10006;">
            </form>
        </span>
        <span class="d-inline-block update-col">
            <form method="post" action="people/updatePerson/'.$this->args['peopleList'][$i]['id'].'">
                <input type="submit" value="&#8635;">
            </form>
        </span>
    <div>';
}
?>
    
<hr>
<h3>Insert person</h3>
<form action="people/addPerson" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name"><br>
    <label for="surname">Surname:</label>
    <input type="text" name="surname"><br>
    <label for="age">Age:</label>
    <input type="text" name="age"><br>
    <input type="submit" value="Save person">
</form>