<!DOCTYPE html>
<html>
    <head>
        <title>Multiple Upload File Codeigniter</title>
    </head>
    <body>
        <h3>Multiple Upload File Codeigniter</h3>
        <form action="<?php echo base_url().'multiple/multiple_upload'?>" method="post" enctype="multipart/form-data">
        <?php for ($i=1; $i <=5 ; $i++) :?>
            <input type="file" name="filefoto<?php echo $i;?>"><br/>
        <?php endfor;?>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    </body>
</html>