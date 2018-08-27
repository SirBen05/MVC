<h3>Update person</h3>
<form action="<?php echo URL.'people/savePerson/'.$this->args['data']['id'];?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $this->args['data']['name']?>"><br>
    <label for="surname">Surname:</label>
    <input type="text" name="surname" value="<?php echo $this->args['data']['surname']?>"><br>
    <label for="age">Age:</label>
    <input type="text" name="age" value="<?php echo $this->args['data']['age']?>"><br>
    <input type="submit" value="Save person">
</form>