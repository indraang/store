<div class="content-main">
		<div class="row">
			<div class="col-md-12">
				<h1><?= $title;?></h1>
			</div>
		</div>
		<hr>
		<div class="row">
		<div class="col-md-12">
		<div class="table-responsive">	
		<table id="idTable" class="table table-striped table-bordered mt-3 dt-responsive nowrap">
			<thead>
				<tr>
					<th>No</th>
					<th>Name Item</th>
					<th>Price Item</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1;?>
				<?php foreach($items->result() as $item):;?>
				<tr>
					<td><?= $i++;?></td>
					<td><?= $item->nama_produk;?></td>
					<td><?= number_format($item->harga_produk,0,',','.');?></td>
					<td><?= ;?></td>
					<td>
						<a href="<?= site_url();?>administrator/updateItem/<?= $item->id_produk;?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
						<a href="<?= site_url();?>administrator/updateItem/<?= $item->id_produk;?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
						<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
		</div>
		</div>
	</div>
</div>