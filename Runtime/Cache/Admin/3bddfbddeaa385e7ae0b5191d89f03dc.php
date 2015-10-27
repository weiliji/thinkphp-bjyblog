<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改分类</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/bjy.css">
</head>
<body>
<form class="form-gropu" action="<?php echo U('Admin/Category/edit');?>" method="post">
	<table class="table table-bordered table-hover">
		<input type="hidden" name="cid" value="<?php echo ($onedata['cid']); ?>">
		<tr>
			<th>分类名</th>
			<td><input class="form-control modal-sm" type="text" name="cname" value="<?php echo ($onedata['cname']); ?>"></td>
		</tr>
		<tr>
			<th>所属栏目</th>
			<td>
				<select class="form-control modal-sm" name="pid">
					<option value="0">顶级栏目</option>
					<?php if(is_array($data)): foreach($data as $k=>$v): ?><option value="<?php echo ($v['cid']); ?>" <?php if($onedata['pid'] == $v['cid']): ?>selected="selected"<?php endif; ?> <?php echo ($v['_html']); ?>><?php echo ($v['_name']); ?></option><?php endforeach; endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>排序</th>
			<td><input class="form-control modal-sm" type="text" name="sort" value="<?php echo ($onedata['sort']); ?>"></td>
		</tr>
		<tr>
			<th>关键词</th>
			<td><input class="form-control modal-sm" type="text" name="keywords" value="<?php echo ($onedata['keywords']); ?>"></td>
		</tr>
		<tr>
			<th>描述</th>
			<td>
				<textarea class="form-control modal-sm" name="description"><?php echo ($onedata['description']); ?></textarea>
			</td>
		</tr>
		<tr>
			<th></th>
			<td><input class="btn btn-default" type="submit" value="提交"></td>
		</tr>
	</table>
</form>
<script type="text/javascript" src="/Public/static/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="/Public/static/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/static/js/html5shiv.min.js"></script>
<script type="text/javascript" src="/Public/static/js/respond.min.js"></script>
<![endif]-->
</body>
</html>