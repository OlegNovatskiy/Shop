<?php
/*fsdfdsfd*/
/*asdasdasdasddas*/
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['header_title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="views/shop/style/style.css" rel="stylesheet" type="text/css" >

    <!--Type code here-->

<style type="text/css">
	p{	margin-left: 4px;
	margin-right: 4px;
		
	}
	img{
		margin-left: 4px;
	margin-right: 4px;
	}
	#mainbutton{
		width: 50%;
	}
	#secondbutton{
		width: 25%;
	}
	#thirdbutton{
		width: 20%;
	}
	.sizelist{
		width: 80%;
	}
	.row{
		width: 145%;
	}
	#secondbutton{
		width: 48%;
	}
</style>
<div class="sizelist">
    <div class="col-sm-4">
		<div class="list-group">
    <a href="#" class="list-group-item active">
        <span class="glyphicon glyphicon-star"></span> Комп'ютерна техніка <span class="badge">9</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-th-list"></span> Ноутбуки <span class="badge">24</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-th-list"></span> Планшети <span class="badge">411</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-th-list"></span> Складові ПК <span class="badge">25</span>
    </a>
</div>
	</div>
</div>
<div class="col-sm-8">

	<div class="filter">
	<div class="col-sm-6">
		<div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search</button>
      </span>
      <input type="text" class="form-control" placeholder="Search for...">
    </div>
    </div>
    <!-- /input-group -->
    <div class="row">
    <div class="col-lg-4">
     
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Sort by...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Sort</button>
      </span>
    </div><!-- /input-group -->

</div>
 
  </div>
<br>
</div>
	<?php foreach($data['products'] as $product){?>
	<div class="col-sm-4" id="product-<?php echo $product['id_product'];?>">
		
			<div class="picturebox">
			<a href="lorem.html"><img src="/../views/products/foto.png"
  			width="196" height="200" alt="lorem"></a>
			</div>
			<div class="textbox">
				<p><?php
					foreach($data['producer'] as $producer){
						if($producer['id_producer'] == $product['producer']){
							echo $producer['name'];
							break;
						}
					}
					echo " ".$product['version'];?></p>
			</div>
			<div class="price">
				<p><?php echo $product['price'];?></p>
			</div>
			<div class="buttons">
				<p><span class="btn btn-primary" id="mainbutton" role="button">Добавити</span>
					<span class="btn btn-default" id="secondbutton" role="button" onclick="addLike(<?php echo $product['id_product'];?>)">Like</span>
				</p>
			</div>
	</div>
	<?php } ?>
	<div align="center"><?= \yii\widgets\LinkPager::widget(['pagination' => $data['page']]) ?></div>
</div>
<script>
	function addLike(id_product) {
		$.ajax({
			url: 'gdk/web/index.php?r=products/addLike',
			type: 'post',
			data: {id_product: id_product},
			dataType: 'json',
			success: function() {
				$('#secondbutton').css({"background-color":"green"});
				alert("Like добавлено!!!");
			},
			error: function() {
				alert("Like не поставився!!!");
			}
		});
	}
</script>