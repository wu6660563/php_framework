<div class="row">
	<div class="col-xs-12">

		<?php if ($success) :?>
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
			保存成功！
		</div>
		<script>$(".alert").fadeOut(2000);</script>
		<?php endif;?>

		<form class="form-horizontal" method="post" action="<?php echo URL(CUR_ROUTE)?>">
			<div class="form-group">
				<label class="col-sm-2 control-label">用户名</label>
				<div class="col-sm-10">
					<label class="control-label"><?php echo $profile['user_name']?></label>
				</div>
			</div>

			<div class="form-group">
				<label for="real_name" class="col-sm-2 control-label">真实姓名</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="real_name" name="real_name" value="<?php echo $profile['real_name']?>">
				</div>
			</div>

			<div class="form-group">
				<label for="sex" class="col-sm-2 control-label">性别</label>
				<div class="col-sm-3">
					<div class="radio-inline">
						<label>
							<input type="radio" name="sex" id="sex" value="1" <?php echo $profile['sex']!=2?'checked':''?>>
							男
						</label>
					</div>
					<div class="radio-inline">
						<label>
							<input type="radio" name="sex" id="sex" value="2" <?php echo $profile['sex']==2?'checked':''?>>
							女
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $profile['email']?>">
				</div>
			</div>
			<div class="form-group <?php echo !empty($error_password1) ? 'has-error' : ''?>">
				<label for="password1" class="col-sm-2 control-label">新密码</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1?>" />
				</div>
				<div class="help-block col-xs-12 col-sm-reset inline">
					<?php echo !empty($error_password1) ? $error_password1 : '不修改密码请留空'?>
				</div>
			</div>
			<div class="form-group <?php echo !empty($error_password2) ? 'has-error' : ''?>">
				<label for="password2" class="col-sm-2 control-label">确认密码</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" id="password2" name="password2">
				</div>
				<div class="help-block col-xs-12 col-sm-reset inline">
					<?php echo !empty($error_password2) ? $error_password2 : ''?>
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-2 control-label">权限列表</label>
				<div class="col-sm-10">
					<?php
					foreach ($powerList as $k => $group) {
						echo '<div><label class="control-label bolder blue">'.$group['name'].'</label></div>';
						foreach ($group['list'] as $kk => $row) {
							$id = "p_{$k}_{$kk}";
							if ($row['checked']) {
								$icon = '<i class="ace-icon fa fa-check green"></i>';
							} else {
								$icon = '<i class="ace-icon fa fa-times red"></i>';
							}
							echo '
							<div class="checkbox-inline">
							<label>
							'.$icon.'
							<span class="lbl">' . $row['name'] . '</span>
							</label>
							</div>';
						}
					}
					?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-info"><i class="ace-icon fa fa-check bigger-110"></i>提交</button>
					<button type="reset" class="btn btn-default"><i class="ace-icon fa fa-refresh bigger-110"></i>重置</button>
				</div>
			</div>
		</form>

	</div>
</div>