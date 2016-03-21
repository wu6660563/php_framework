<div class="row">
	<div class="col-xs-12">
		<div class="space-4"></div>

		<div class="row">
			<div class="col-xs-12">
				<form class="form-inline" method="post"
					action="<?=URL('order/index')?>">
					<div class="input-group input-group-sm">
						<input type="text" id="start_date" name="start_date"
							value="<?=$start_date?>" class="form-control" />
						<span class="input-group-addon"> <i
							class="ace-icon fa fa-calendar"></i>
						</span>
					</div>
					<div class="input-group input-group-sm">
						<input type="text" id="end_date" name="end_date"
							value="<?=$end_date?>" class="form-control" />
						<span class="input-group-addon"> <i
							class="ace-icon fa fa-calendar"></i>
						</span>
					</div>
					<div class="input-group input-group-sm">
						<select name="state" id="state">
							<option value='0'>所有</option>
							<option value='2' <?=$state == 2 ? 'selected' : ''?>>待支付</option>
							<option value='3' <?=$state == 3 ? 'selected' : ''?>>支付待确认</option>
							<option value='4' <?=$state == 4 ? 'selected' : ''?>>过期</option>
							<option value='5' <?=$state == 5 ? 'selected' : ''?>>支付成功</option>
							<option value='6' <?=$state == 6 ? 'selected' : ''?>>退款</option>
							<option value='7' <?=$state == 7 ? 'selected' : ''?>>异常</option>
						</select>
					</div>
					<div class="input-group input-group-sm">
						<button type="submit" class="btn">查询</button>
					</div>
					<div class="input-group input-group-sm">
						<a href="" class="btn">重置</a>
					</div>
					<div class="input-group input-group-sm">
						<button type="button" name="export" class="btn">导出</button>
					</div>
				</form>
			</div>
		</div>
		<div class="space-4"></div>

		<div class="row">
			<div class="col-xs-12">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>交易ID</th>
							<th>业务订单号(OC订单号)</th>
							<th>状态</th>
							<th>ReferenCode</th>
							<th>Payu流水号</th>
							<th>订单创建时间</th>
							<th>订单修改时间</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(isset($orders) && count($orders)) : ?>
					<?php foreach ($orders as $key => $val) :?>
						<tr>
							<td><?=isset($val['id']) ? $val['id'] : ''?></td>
							<td><?=isset($val['bussiness_id']) ? $val['bussiness_id'] : ''?></td>
							<td>
							<?php 
							if(isset($val['state'])) {
								if($val['state'] == 2) {
									echo '待支付';
								} else if($val['state'] == 3) {
									echo '支付待确认';
								} else if($val['state'] == 4) {
									echo '过期';
								} else if($val['state'] == 5) {
									echo '支付成功';
								} else if($val['state'] == 6) {
									echo '退款';
								} else if($val['state'] == 7) {
									echo '异常';
								}
							}
							?>
							</td>
							<td><?=isset($val['reference_code']) ? $val['reference_code'] : ''?></td>
							<td><?=isset($val['payu_order_id']) ? $val['payu_order_id'] : ''?></td>
							<td><?=isset($val['create_time']) ? $val['create_time'] : ''?></td>
							<td><?=isset($val['modify_time']) ? $val['modify_time'] : ''?></td>
							<td><a href="<?=URL('order/edit', ['id'=>$val['id']])?>">编辑</a></td>
						</tr>
					<?php endforeach;?>
					<?php endif;?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12"></div>
		</div>
	</div>
</div>