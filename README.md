# test

In active form

<pre>
echo $form->field($model, 'image')->widget(\kujiorpamm\test\widgets\TestWidget::className(), [
			'pluginOptions' => [
				'width' => 200,
				'height' => 100,
				'smallImage' => 'allow',
				'onImageError' => new JsExpression('function(e) {
					alert(e.message);	
				}')
			]
			
			]);
			
</pre>
			

Then in controller after model loaded

<pre>

use kujiorpamm\test\widgets\TestWidget;

TestWidget::saveAs($model->image, "images/{$model->name}.png");

</pre>