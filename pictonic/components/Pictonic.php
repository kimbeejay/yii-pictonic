<?php
/**
 * Pictonic
 * extension for YiiFramework
 *
 * @author BeeJay Kim <kim@beejay.ru>
 * @copyright (c) 2012, BeeJay Kim
 * @link http://beejay.ru/
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version 0.1a
 */
class Pictonic extends CApplicationComponent {

    const VERSION = '0.1a';

    const METHOD_PRINT = 'print';
    const METHOD_RETURN = 'return';

    /**
     * Default icon tag
     * @var string
     */
    public $tag = 'span';

    /**
     * Output method
     * Default: print
     * - print  Prints icon
     * - return Returns icon
     * @var string
     */
    public $method = 'print';

    /**
     * Assets path
     * @var string path
     */
    protected $_assetsURL;

    /**
     * Component init
     * @return void
     */
    public function init() {
        if (Yii::app() instanceof CConsoleApplication) {
            return;
        }

        // Register path alias 'pictonic'
        if (Yii::getPathOfAlias('pictonic') === false) {
            Yii::setPathOfAlias('pictonic', realpath(dirname(__FILE__).'/..'));
        }

        // Register pictonic base css file
        Yii::app()->clientScript->registerCssFile($this->getAssetsURL() . '/css/pictonic.css');

        parent::init();
    }

    /**
     * Get pictonic icon
     * @param string $name icon name
     * @param array $htmlOptions tag html options
     * @param string $tag tag name
     * @param string $method output method
     * @return string|void returns or prints pictonic icon
     */
    final public function getIcon($name, $htmlOptions = null, $tag = null, $method = null) {
        if (!$name || !is_string($name)) {
            return;
        }

        $name = 'icon-'. $name;

        /**
         * If tag was not specified
         * set default tag
         */
        if (is_null($tag)) {
            $tag = $this->tag;
        }

        /**
         * Set tag htmlOptions
         */
        if (is_null($htmlOptions)) {
            $htmlOptions = array('class' => $name);
        } else {
            $htmlOptions['class'] = (isset($htmlOptions['class']))
                ? $name .' '. $htmlOptions['class']
                : $name;
        }

        // OUTPUT
        $_output = CHtml::openTag($tag, $htmlOptions)
                  .CHtml::closeTag($tag);

        /**
         * If method was not specified
         * set default method
         */
        if (is_null($method)) {
            $method = $this->method;
        }

        if ($this->method == self::METHOD_PRINT) {
            echo $_output;
        } else {
            return $_output;
        }

        return;
    }

    /**
     * Returns published assets path
     * @return string assets path
     */
    protected function getAssetsURL() {
        if (!$this->_assetsURL) {
			$this->_assetsURL = Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('pictonic.assets'),
                false,
                -1,
                YII_DEBUG
            );
        }

        return $this->_assetsURL;
    }

    /**
     * Component version
     * @return string version number
     */
    public function getVersion() {
        return self::VERSION;
    }
}

?>
