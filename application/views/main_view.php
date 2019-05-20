<html>

 <title> Form </title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class ="container">
<br/><br/><br/>
<h3 align="center">Insert Data using Codeigniter</h3></br>
<form method="post" action="<?php echo base_url()?>main/form_validation">
<?php
if($this->uri->segment(2)=="inserted")
{
    echo '<p class="text-success">Data Inserted</p>';
}


?>

<div class="form-group">
<label> Enter First Name</label>
<input type="text" name="first_name" class="form-control" />
<span class ="text-danger"><?php echo form_error("first_name"); ?></span>
</div>
<div class="form-group">
<label> Enter Last Name</label>
<input type="text" name="last_name" class="form-control" />
<span class ="text-danger"><?php echo form_error("last_name"); ?></span>
</div>
<div class="form-group">
<input type="submit" name="submit" class="btn btn-info" /></div>
</div>
</form>
<div>
</body>
</html>
