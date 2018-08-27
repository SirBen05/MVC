<h3>Studnets</h3>

<div>
    <span class="d-inline-block id-col header-col">ID</span>
    <span class="d-inline-block name-col header-col">Name</span>
    <span class="d-inline-block surname-col header-col">Surname</span>
    <span class="d-inline-block age-col header-col">Age</span>
    <span class="d-inline-block form-col header-col">Form</span>
    <span class="d-inline-block average-col header-col">Average</span>
</div>
<?php
for($i = 0; $i<count($this->args['studentList']); $i++){
    echo 
    '<div>
        <span class="d-inline-block id-col">'.$this->args['studentList'][$i]['id'].'</span>
        <span class="d-inline-block name-col">'.$this->args['studentList'][$i]['name'].'</span>
        <span class="d-inline-block surname-col">'.$this->args['studentList'][$i]['surname'].'</span>
        <span class="d-inline-block age-col">'.$this->args['studentList'][$i]['age'].'</span>
        <span class="d-inline-block form-col">'.$this->args['studentList'][$i]['form'].'</span>
        <span class="d-inline-block average-col">'.$this->args['studentList'][$i]['avg'].'</span>
        <span class="d-inline-block delete-col">
            <form method="post" action="students/deleteStudent/'.$this->args['studentList'][$i]['id'].'">
                <input type="submit" value="&#10006;">
            </form>
        </span>
        <span class="d-inline-block delete-col">
            <form method="post" action="students/updateStudent/'.$this->args['studentList'][$i]['id'].'">
                <input type="submit" value="&#8635;">
            </form>
        </span>
       
    <div>';
}
?>

    
    <hr>
<h3>Insert student</h3>
<form action="students/addStudent" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name"><br>
    <label for="surname">Surname:</label>
    <input type="text" name="surname"><br>
    <label for="age">Age:</label>
    <input type="text" name="age"><br>
    <label for="form">Form:</label>
    <input type="text" name="form"><br>
    <label for="avg">Average:</label>
    <input type="text" name="avg"><br>
    <input type="submit" value="Save student">
</form>