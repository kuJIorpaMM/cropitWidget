<?phpnamespace kujiorpamm\cropit\asset;use yii\web\AssetBundle;class CropitAsset extends AssetBundle{      	public $sourcePath = '@bower/cropit/dist/';        public $js = [        'jquery.cropit.js',    ];        public $depends = [        'yii\web\JqueryAsset',    ];}