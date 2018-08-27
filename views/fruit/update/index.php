<h3>Update fruit</h3>
<form action="<?php echo URL.'fruit/saveFruit/'.$this->args['data']['id'];?>" method="post">
    <label for="weight">Weight:</label>
    <input type="text" name="weight" value="<?php echo $this->args['data']['weight']?>"><br>
    <label for="color">Color:</label>
    <input type="text" name="color" value="<?php echo $this->args['data']['color']?>"><br>
    <label for="cultivar">Cultivar:</label>
    <input type="text" name="cultivar" value="<?php echo $this->args['data']['cultivar']?>"><br>
    <input type="submit" value="Save fruit">
</form>