<table  class="table table-condensed  table-bordered" id="InformTable">
	<thead>
		<tr>
			<?php if($table_headers != null) {  foreach($table_headers as $header){  ?>
				<th><?php echo $header ?></th>
			<?php }} ?>
		</tr>
	</thead>
	<tbody style="text-align:center;">
		<?php foreach($rows as $row){  ?>
			<tr>
				<?php if($table_headers != null) {  foreach($table_headers as $header){  ?>
					<th><?php echo $row->$header;  ?></th>
				<?php }} ?>
			</tr>	
		<?php } ?>
	</tbody>
</table>