<p><center><a class="btn btn-large btn-primary" href="<?BASE_URL?>tests/add">Lisa uus test</a></center>
</p>
<table id="tests-table" class="table table-bordered table striped" style="opacity: 0.6">

	<thead>
	<th>Testi nimi</th>
	<th>Koostaja</th>
	<th>Aeg</th>
	<th>Tegevused</th>
	</thead>
	<tbody style="opacity: 0.6">

	<? if (! empty($tests)):foreach ($tests as $test): ?>
		<tr id="test<?= $test['test_id'] ?>">
			<td><?= $test['name'] ?></td>
			<td><?= $test['username'] ?></td>
			<td><?= substr($test['date'], 0, 10) ?></td>
			<td>
				<a href="<?=BASE_URL?>tests/edit/<?=$test['test_id']?>">
				<i class="icon-pencil"></i>
				</a>

				<a href="#" onclick="if(!confirm('Oled kindel?') )return false;
					remove_test_ajax(<?= $test['test_id'] ?>);return false">
					<i class="icon-trash"></i>Kustuta</a></td>

		</tr>
	<? endforeach;endif ?>
	</tbody>

</table>