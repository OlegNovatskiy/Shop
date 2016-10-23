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
    
    <table>
        <thead>
        <th>
            <td>Назва</td>
            <td>Ціна</td>
            <td>ата створення</td>
        </th>
        </thead>
        <tbody>


    <?php
        foreach($data['products'] as $product){
            ?>
            <tr>
                <td><?php
                    foreach($data['producer'] as $producer){
                        if($producer['id_producer']==$product['maker']){
                            echo $producer['name'];
                            break;
                        }
                    }
                    echo " ".$product['version'];
                    ?></td>
                <td><?php echo $product['price'];?></td>
                <td><?php echo date("dd mm yy",$product['price']);?></td>
            </tr>
    <?php
        }
    ?>
        </tbody>
    </table>
    Index
</>