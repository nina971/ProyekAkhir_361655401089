<!DOCTYPE html>
<html>
<head>
	<title>Multpiple Upload</title>
</head>
<body>
		<h3>Multiple Upload</h3>
		<?php echo form_open_multipart('uploads/multiple_upload'); ?>
		<table border="1">
			<tr><td>File 1</td><td><?php echo form_upload('file1'); ?></td></tr>
			<tr><td>File 2</td><td><?php echo form_upload('file2'); ?></td></tr>
			<tr><td></td><td><?php echo form_submit('upload', 'upload file') ?></td></tr>
		</table>
		<?php echo form_close() ?>
</body>
</html>