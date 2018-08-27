<h3>Update student</h3>
<form action="<?php echo URL.'students/saveStudent/'.$this->args['data']['id'];?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $this->args['data']['name']?>"><br>
    <label for="surname">Surname:</label>
    <input type="text" name="surname" value="<?php echo $this->args['data']['surname']?>"><br>
    <label for="age">Age:</label>
    <input type="text" name="age" value="<?php echo $this->args['data']['age']?>"><br>
    <label for="form">Form:</label>
    <input type="text" name="form" value="<?php echo $this->args['data']['form']?>"><br>
    <label for="avg">Average:</label>
    <input type="text" name="avg" value="<?php echo $this->args['data']['avg']?>"><br>
    <input type="submit" value="Save student">
</form>