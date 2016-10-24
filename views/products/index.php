<?php
/*fsdfdsfd*/
/*asdasdasdasddas*/
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['header_title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="/../views/products/style/style.css" rel="stylesheet" type="text/css" >
<div class="site-about">
    <!--Type code here-->

<!--    <table>-->
<!--        <thead>-->
<!--        <th>-->
<!--            <td>Назва</td>-->
<!--            <td>Ціна</td>-->
<!--            <td>Дата створення</td>-->
<!--        </th>-->
<!--        </thead>-->
<!--        <tbody>-->
<!---->
<!---->
<!--    --><?php
//        foreach($data['products'] as $product){
//            ?>
<!--            <tr>-->
<!--                <td>--><?php
//                    foreach($data['producer'] as $producer){
//                        if($producer['id_producer']==$product['maker']){
//                            echo $producer['name'];
//                            break;
//                        }
//                    }
//                    echo " ".$product['version'];
//                    ?><!--</td>-->
<!--                <td>--><?php //echo $product['price'];?><!--</td>-->
<!--                <td>--><?php //echo date("dd mm yy",$product['price']);?><!--</td>-->
<!--            </tr>-->
<!--    --><?php
//        }
//    ?>
<!--        </tbody>-->
<!--    </table>-->

<h3>FEATURED</h3>
    <style type="text/css">
        p{	margin-left: 4px;
            margin-right: 4px;

        }
        img{
            margin-left: 4px;
            margin-right: 4px;
        }
        #mainbutton{
            width: 38%;
        }
        #secondbutton{
            width: 20%;
        }
        #thirdbutton{
            width: 35%;
        }
    </style>


    <div class="col-xs-6 col-sm-8 col-lg-12">
        <div class="col-sm-6 col-lg-3">
                <div class="picturebox">
                    <a href="lorem.html"><img src=".." width="196" height="200" alt="lorem"></a>
                </div>
                <div class="textbox">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="buttons">
                    <p><a href="#" class="btn btn-primary" id="mainbutton" role="button">Add to cart</a> <a href="#" class="btn btn-default" id="secondbutton" role="button">Like!</a><a href="#" class="btn btn-default" id="thirdbutton" role="button">Compare</a>
                </div>
        </div>
        <div class="col-sm-6 col-lg-3">
                <div class="picturebox">
                    <a href="lorem.html"><img src=".." width="196" height="200" alt="lorem"></a>
                </div>
                <div class="textbox">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="buttons">
                    <p><a href="#" class="btn btn-primary" id="mainbutton" role="button">Button</a> <a href="#" class="btn btn-default" id="secondbutton" role="button">Like!</a><a href="#" class="btn btn-default" id="thirdbutton" role="button">IN</a>
                </div>
        </div>
        <div class="col-sm-6 col-lg-3">
                <div class="picturebox">
                    <a href="lorem.html"><img src=".." width="196" height="200" alt="lorem"></a>
                </div>
                <div class="textbox">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="buttons">
                    <p><a href="#" class="btn btn-primary" id="mainbutton" role="button">Button</a> <a href="#" class="btn btn-default" id="secondbutton" role="button">Like!</a><a href="#" class="btn btn-default" id="thirdbutton" role="button">IN</a>
                </div>
        </div>
        <div class="col-sm-6 col-lg-3">
                <div class="picturebox">
                    <a href="lorem.html"><img src=".." width="196" height="200" alt="lorem"></a>
                </div>
                <div class="textbox">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="buttons">
                    <p><a href="#" class="btn btn-primary" id="mainbutton" role="button">Button</a> <a href="#" class="btn btn-default" id="secondbutton" role="button">Like!</a><a href="#" class="btn btn-default" id="thirdbutton" role="button">IN</a>
                </div>
        </div>
    </div>




</>