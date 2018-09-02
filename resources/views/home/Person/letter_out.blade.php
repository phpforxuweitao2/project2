@extends('home.PersonPublic.index')
@section('title','站内信') 
@section('container') 
<div class="ab_right"> 
	<div class="shop-nav2">
		<a href="/ps_letter/in"><span>收件箱</span></a>
		<a href="/ps_letter/out" class="selected"><span>发件箱</span></a>
	</div> 
	<ul class="znx_list"> 
		<form action="" method="post" name="form1"> 
			<input type="hidden" name="dopost" value="del" />
			@foreach($data as $v)
			<li> 
				<div class="znx_info">
					<a><img src="{{$v->uface}}" /></a>
					<span> 
						<a class="znx_name" href="" target="_blank">{{$v->nickname}}</a>(收件人) {{date('Y-m-d H:i:s',$v->created_at)}} 
					</span> 
					<input type="checkbox" class="fxk" name="deleteid" value="1732" /> 
				</div> 
				<div style="clear:both"></div> 
				<div class="znx_other">
					{{$v->content}}
				</div> 
			</li> 
			@endforeach
			<div style=" margin-top:20px; float:right"> 
				<button type="button" onclick="DoSubmit('outbox')" class="editPassword-submit">删除选中</button> 
			</div> 
		</form> 
	</ul> 
	<div class="ar_bjPage"> 
		<span>共 1 页/15条记录</span> 
	</div> 
</div> 
@endsection
