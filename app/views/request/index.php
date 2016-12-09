<div class="container">
	<div class="row">
		<div class="col-md-8">
			<img src="/assets/img/photo2.png" alt=" ">
		</div>
		<div class="col-md-4">
		<h1 style="color: #FFFFFF"> ご要望をどうぞ </h1>
		<p style="color: #FFFFFF">
		ここは、担当者向けのリクエストサイトです。
		なくなりそうなお茶の葉、つかなくなった蛍光灯、その他、細々とした要望があれば投稿してください。
		</p>
		<form action=" " method="post">
				<div class="col-md-12">
					<?php echo Html::anchor('request/create', 'Add new Request', array('class'=>'btn btn-success'));?>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="well text-center">
				どんな些細な事でもどうぞ。
			</div>
		</div>
	</div>
	<div class="row">
<?php foreach($requests as $item):?>
<div class="col-md-4" >
	<h3><?php echo substr($item->body,0,36); ?></h3>
	<p>【投稿日時】
		<?php echo date("Y-m-d H:i",$item->created_at); ?></p>
	<p>【IP】<?php echo $item->ip; ?></p>
	<p><?php echo substr($item->body,0,240); ?></p>
	<?php echo Html::anchor('request/edit/'.$item->id, '<i class="icon-wrench"></i>Edit', array('class' => 'btn btn-default btn-sm')); ?>
	<?php echo Html::anchor('request/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class'=>'btn btn-sm btn-danger','onclick'=>"return confirn('このデータを削除しますよろしいですか？')")); ?>
	</div>
	<?php endforeach;?>
      </div>
<!--/.row-->
</div>	
	
	
	
	
	
	
	