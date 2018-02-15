
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">Creation of files successfully completed.</h4>
</div>
<div class="modal-body">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Data</th>
				<th>Link</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Excel File</td>
				<td><?php echo $filename_xls; ?></td>
			</tr>
			<tr>
				<td>Encrypted Text File</td>
				<td><?php echo $filename; ?></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

