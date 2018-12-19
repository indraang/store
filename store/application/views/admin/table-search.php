<div class="content-main">
		<div class="row">
			<div class="col-md-12">
				<h1>Hello</h1>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-danger" href="<?= base_url();?>administrator">Back</a>
				<a href="" onclick="javascript:printLayer('print-table')" id="print" class="btn btn-success">Print</a>
				<form class="form-inline d-inline-block float-right" action="<?= site_url();?>administrator/search" method="post">
			      <input class="form-control" type="search" name="keyword" placeholder="Search" autocomplete="off" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit-search" value="Submit-search">Search</button>
			    </form>
			    <div id="print-table" class="container">
				<table class="table table-bordered mt-3">
					<thead>
						<tr>
							<th>No</th>
							<th>Name Item</th>
							<th>Price Item</th>
							<th>Description</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1;?>
						<?php foreach($items->result() as $item):;?>
						<tr>
							<td><?= $i++;?></td>
							<td><?= $item->name_item;?></td>
							<td><?= $item->price_item;?></td>
							<td><?= $item->desc_item;?></td>
							<td>
								<a href="<?= site_url();?>administrator/updateItem/<?= $item->id_item;?>" class="btn btn-warning">Update</a>
								<a href="" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>