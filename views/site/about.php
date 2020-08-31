<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">


    <button id="button" type="button">Запрос</button>

</div>

<?php
$js = <<<JS
 document.getElementById('button').addEventListener('click',function() {
     var data1 = [
     
         {
         name : 'Victor',
         last : 'Sergeev'
        },
        {
         name : 'Elena',
         last : 'Odeva'
        }
     ]
 
   axios.post('/about', JSON.stringify(data1) )
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.log(error);
  });
 })
JS;
$this->registerJsFile('https://unpkg.com/axios/dist/axios.min.js');
$this->registerJs($js);
?>
