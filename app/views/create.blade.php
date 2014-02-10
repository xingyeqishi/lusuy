@extends('layout')

@section('title')
<title>新建文章</title>
@stop

@section('content')
<div class="container">
<form class="form-horizontal create-form" action="/create/save" method="POST"  role="form">
	<div class="form-group">
		<label class="control-label col-sm-2">标题</label>
		<div class="col-sm-10">
			<input type="text" class="form-control title" name="title"/>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">内容</label>
		<div class="col-sm-10">
			<textarea class="form-control content" rows="4" name="content"></textarea>
		</div>
	</div>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
    	  <button type="submit" class="btn btn-default">提交</button>
    	</div>
 	 </div>
</form>
</div>
@stop

@section('script')
	seajs.use("create", function(create) {
		create.init();
	});
@stop