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

    // Available method list
    const METHOD_PRINT = 'print';
    const METHOD_RETURN = 'return';

    // Available icon list
    const ICON_3DXMAX = '_x33_dsmax';
    const ICON_ADB_ACROBAT = 'adb-acrobat';
    const ICON_ADB_AFTEEEREFFECTS = 'adb-aftereffects';
    const ICON_ADB_AUDITION = 'adb-audition';
    const ICON_ADB_BRIDGE = 'adb-bridge';
    const ICON_ADB_CAPTIVATE = 'adb-captivate';
    const ICON_ADB_CONTRIBUTE = 'adb-contribute';
    const ICON_ADB_DREAMWEAVER = 'adb-dreamweaver';
    const ICON_ADB_ENCORE = 'adb-encore';
    const ICON_ADB_FIREWORKS = 'adb-fireworks';
    const ICON_ADB_FLASH = 'adb-flash';
    const ICON_ADB_FLASHBLDR = 'adb-flashbldr';
    const ICON_ADB_FRAMEMAKER = 'adb-framemaker';
    const ICON_ADB_ILLUSTRATOR = 'adb-illustrator';
    const ICON_ADB_INDESIGN = 'adb-indesign';
    const ICON_ADB_LIGHTROOM = 'adb-lightroom';
    const ICON_ADB_ONLOCATION = 'adb-onlocation';
    const ICON_ADB_PHOTOSHOP = 'adb-photoshop';
    const ICON_ADB_PREMIERE = 'adb-premiere';
    const ICON_ADB_PRELUDE = 'adb-prelude';
    const ICON_ADB_ROBOHELP = 'adb-robohelp';
    const ICON_ADB_SPEEDGRADE = 'adb-speedgrade';
    const ICON_AIM = 'aim';
    const ICON_AMAZON = 'amazon';
    const ICON_ANDROID = 'android';
    const ICON_ANGULARJS = 'angularjs';
    const ICON_APPLE = 'apple';
    const ICON_AUTOCAD = 'autocad';
    const ICON_AUTOCAD_LT = 'autocad-lt';
    const ICON_BAIDU = 'baidu';
    const ICON_BANDCAMP = 'bandcamp';
    const ICON_BEBO = 'bebo';
    const ICON_BEHANCE = 'behance';
    const ICON_BLENDER = 'blender';
    const ICON_BLINKLIST = 'blinklist';
    const ICON_BLIP = 'blip';
    const ICON_BLOGGER = 'blogger';
    const ICON_BOOKMARK = 'bookmark';
    const ICON_BRW_CHROME = 'brw-chrome';
    const ICON_BRW_EXPLORER = 'brw-explorer';
    const ICON_BRW_FIREFOX = 'brw-firefox';
    const ICON_BRW_OPERA = 'brw-opera';
    const ICON_BRW_SAFARI_01 = 'brw-safari-01';
    const ICON_BRW_SAFARI_02 = 'brw-safari-02';
    const ICON_CAKEPHP = 'prog-cakephp';
    const ICON_CHERRYPY = 'prog-cherrypy';
    const ICON_CHN_RENREN = 'chn-renren';
    const ICON_CHN_TENCENT_01 = 'chn-tencent-01';
    const ICON_CHN_TENCENT_02 = 'chn-tencent-02';
    const ICON_CHN_TENCENT_03 = 'chn-tencent-03';
    const ICON_CHN_WECHAT = 'chn-wechat';
    const ICON_CHN_WEIBO = 'chn-weibo';
    const ICON_CINEMA4D = 'cinema4d';
    const ICON_CODEPEN_01 = 'codepen-01';
    const ICON_CODEPEN_02 = 'codepen-02';
    const ICON_COREL_DRAW = 'corel-draw';
    const ICON_COREL_PAINTER = 'corel-painter';
    const ICON_CREATIVESLOTH = 'creativesloth';
    const ICON_DBS_CASSANDRA = 'dbs-cassandra';
    const ICON_DBS_COUCHBASE_01 = 'dbs-couchbase-01';
    const ICON_DBS_COUCHBASE_02 = 'dbs-couchbase-02';
    const ICON_DBS_COUCHDB = 'dbs-couchdb';
    const ICON_DBS_HADOOP = 'dbs-hadoop';
    const ICON_DBS_HBASE = 'dbs-hbase';
    const ICON_DBS_MONGODB = 'dbs-mongodb';
    const ICON_DBS_MYSQL = 'dbs-mysql';
    const ICON_DBS_NEO4J = 'dbs-neo4j';
    const ICON_DBS_POSTGRESQL = 'dbs-postgresql';
    const ICON_DBS_REDIS = 'dbs-redis';
    const ICON_DBS_RIAK = 'dbs-riak';
    const ICON_DBS_SQLITE = 'dbs-sqlite';
    const ICON_DBS_SQLSERVER = 'dbs-sqlserver';
    const ICON_DELICIOUS = 'delicious';
    const ICON_DESIGN_FLOAT = 'design-float';
    const ICON_DEVIANTART = 'deviantart';
    const ICON_DIGG = 'digg';
    const ICON_DRIBBBLE = 'dribbble';
    const ICON_DROPBOX = 'dropbox';
    const ICON_EVERNOTE = 'evernote';
    const ICON_FACEBOOK = 'facebook';
    const ICON_FEEDBURNER = 'feedburner';
    const ICON_FLICKR = 'flickr';
    const ICON_FORMSPRING = 'formspring';
    const ICON_FORRST = 'forrst';
    const ICON_FOURSQUARE_1 = 'foursquare_1';
    const ICON_FOURSQUARE_2 = 'foursquare_2';
    const ICON_FRESQUI = 'fresqui';
    const ICON_FRIENDFEED = 'friendfeed';
    const ICON_GITHUB_01 = 'github-01';
    const ICON_GITHUB_02 = 'github-02';
    const ICON_GMAIL = 'gmail';
    const ICON_GOOGLE = 'google';
    const ICON_GOOGLE_CURRENTS = 'google-currents';
    const ICON_GOOGLE_DRIVE_01 = 'googledrive-01';
    const ICON_GOOGLE_DRIVE_02 = 'googledrive-02';
    const ICON_GOOGLE_PLUS = 'google__x2B_';
    const ICON_GROOVESHARK = 'grooveshark';
    const ICON_HI5 = 'hi5';
    const ICON_HOUDINI = 'houdini';
    const ICON_HYVES = 'hyves';
    const ICON_ICQ = 'icq';
    const ICON_IDENTI_CA = 'identi-ca';
    const ICON_IMGUR = 'imgur';
    const ICON_INSTAGRAM = 'instagram';
    const ICON_INSTAPAPER = 'instapaper';
    const ICON_KABOODLE = 'kaboodle';
    const ICON_LAST_FM = 'last_fm';
    const ICON_LIGHTWAVE = 'lightwave';
    const ICON_LINKEDIN = 'linkedin';
    const ICON_LIN_CENTOS = 'lin-centos';
    const ICON_LIN_DEBIAN = 'lin-debian';
    const ICON_LIN_FEDORA = 'lin-fedora';
    const ICON_LIN_REDHAT = 'lin-redhat';
    const ICON_LIN_UBUNTU = 'lin-ubuntu';
    const ICON_LIVEJOURNAL = 'livejournal';
    const ICON_MAIL = 'mail';
    const ICON_MAILRU = 'mailru';
    const ICON_MAYA = 'maya';
    const ICON_MODO = 'modo';
    const ICON_MYSPACE = 'myspace';
    const ICON_NETLOG = 'netlog';
    const ICON_NEWSVINE = 'newsvine';
    const ICON_NEWS_FOR_GAMERS = 'news_for_gamers';
    const ICON_ODNOKLASSNIKI = 'odnoklassniki';
    const ICON_ORKUT = 'orkut';
    const ICON_OS_APPLE = 'os-apple';
    const ICON_OS_APPLE_DARK = 'os-apple-dark';
    const ICON_OS_IOS = 'os-ios';
    const ICON_OS_IOS_DARK = 'os-ios-dark';
    const ICON_OS_LINUX = 'os-linux';
    const ICON_OS_LINUX_1 = 'os-linux_1_';
    const ICON_OS_OSX = 'os-osx_1_';
    const ICON_OS_OSX_DARK = 'os-osx-dark';
    const ICON_OS_WIN_01 = 'os-win-01';
    const ICON_OS_WIN_01_DARK = 'os-win-01-dark';
    const ICON_OS_WIN_02 = 'os-win-02';
    const ICON_OS_WIN_02_DARK = 'os-win-02-dark';
    const ICON_OS_WIN_03 = 'os-win-03';
    const ICON_OS_WIN_03_DARK = 'os-win-03-dark';
    const ICON_OS_WIN_04 = 'os-win-04';
    const ICON_OS_WIN_04_DARK = 'os-win-04-dark';
    const ICON_PAYPAL = 'paypal';
    const ICON_PICASA = 'picasa';
    const ICON_PINTEREST = 'pinterest';
    const ICON_PLAXO = 'plaxo';
    const ICON_PL_CLOJURE = 'pl-clojure';
    const ICON_PL_DART = 'pl-dart';
    const ICON_PL_GROOVY_01 = 'pl-groovy-01';
    const ICON_PL_GROOVY_02 = 'pl-groovy-02';
    const ICON_PROG_ACTIONSCRIPT = 'prog-actionscript';
    const ICON_PROG_AIR_01 = 'prog-air01';
    const ICON_PROG_AIR_02 = 'prog-air02';
    const ICON_PROG_ASPNET = 'prog-aspnet';
    const ICON_PROG_BACKBONEJS = 'prog-backbonejs';
    const ICON_PROG_BASIC = 'prog-basic';
    const ICON_PROG_BASH_01 = 'prog-bash01';
    const ICON_PROG_BASH_02 = 'prog-bash02';
    const ICON_PROG_C = 'prog-c';
    const ICON_PROG_CCPLUSPLUS = 'prog-ccplusplus';
    const ICON_PROG_CODEIGN = 'prog-codeign';
    const ICON_PROG_COFFEESCR = 'prog-coffeescr';
    const ICON_PROG_CPLUSPLUS = 'prog-cplusplus';
    const ICON_PROG_CSHARP = 'prog-csharp';
    const ICON_PROG_DELPHI_01 = 'prog-delphi01';
    const ICON_PROG_DELPHI_02 = 'prog-delphi02';
    const ICON_PROG_DJANGO = 'prog-django';
    const ICON_PROG_DOTNET = 'prog-dotnet';
    const ICON_PROG_DRUPAL = 'prog-drupal';
    const ICON_PROG_ERLANG = 'prog-erlang';
    const ICON_PROG_EXPRESSION = 'prog-expression';
    const ICON_PROG_FLASK = 'prog-flask';
    const ICON_PROG_FORTRAN = 'prog-fortran';
    const ICON_PROG_GOLANG_01 = 'prog-golang01';
    const ICON_PROG_GOLANG_02 = 'prog-golang02';
    const ICON_PROG_HASKELL = 'prog-haskell';
    const ICON_PROG_JAVA = 'prog-java';
    const ICON_PROG_JOOMLA = 'prog-joomla';
    const ICON_PROG_JS_01 = 'prog-js01';
    const ICON_PROG_JS_02 = 'prog-js02';
    const ICON_PROG_JQUERY = 'prog-jquery';
    const ICON_PROG_LISP = 'prog-lisp';
    const ICON_PROG_LUA_01 = 'prog-lua01';
    const ICON_PROG_LUA_02 = 'prog-lua02';
    const ICON_PROG_MAGENTO = 'prog-magento';
    const ICON_PROG_MATLAB = 'prog-matlab';
    const ICON_PROG_MOOTOOLS = 'prog-mootools';
    const ICON_PROG_NODEJS_01 = 'prog-nodejs01';
    const ICON_PROG_NODEJS_02 = 'prog-nodejs02';
    const ICON_PROG_OBJC = 'prog-objc';
    const ICON_PROG_PERL = 'prog-perl';
    const ICON_PROG_PHP_01 = 'prog-php01';
    const ICON_PROG_PHP_02 = 'prog-php02';
    const ICON_PROG_PYLONS = 'prog-pylons';
    const ICON_PROG_PYLONS_02 = 'prog-pylons-02';
    const ICON_PROG_PYTHON = 'prog-python';
    const ICON_PROG_RAILS = 'prog-rails';
    const ICON_PROG_RUBY = 'prog-ruby';
    const ICON_PROG_SCALA = 'prog-scala';
    const ICON_PROG_SYMFONY = 'prog-symfony';
    const ICON_PROG_VBNET = 'prog-vbnet';
    const ICON_PROG_VISUALSTUDIO = 'prog-visualstudio';
    const ICON_PROG_WORDPRESS = 'prog-wordpress';
    const ICON_PROG_YII = 'prog-yii';
    const ICON_PROG_ZENFFRM = 'prog-zendfrm';
    const ICON_RDIO = 'rdio';
    const ICON_REDDIT = 'reddit';
    const ICON_RSS = 'rss';
    const ICON_RUS_HABRAHABR = 'rus-habrahbr';
    const ICON_RUS_VK_01 = 'rus-vk-01';
    const ICON_RUS_VK_02 = 'rus-vk-02';
    const ICON_RUS_YANDEX_01 = 'rus-yandex-01';
    const ICON_RUS_YANDEX_02 = 'rus-yandex-02';
    const ICON_SHARE = 'share';
    const ICON_SHOPIFY = 'shopify';
    const ICON_SINA = 'sina';
    const ICON_SKETCHUP_01 = 'sketchup-01';
    const ICON_SKETCHUP_02 = 'sketchup-02';
    const ICON_SKYDRIVE = 'skydrive';
    const ICON_SKYPE = 'skype';
    const ICON_SLASH_DOT = 'slash_dot';
    const ICON_SOCIAL_BAKERS = 'social-bakers';
    const ICON_SOFTIMAGE = 'softimage';
    const ICON_SOLIDWORKS = 'solidworks';
    const ICON_SOUNDCLOUD = 'soundcloud';
    const ICON_SPOTIFY = 'spotify';
    const ICON_STUMBLE_UPON = 'stumble_upon';
    const ICON_SVPPLY_01 = 'svpply-01';
    const ICON_SVPPLY_02 = 'svpply-02';
    const ICON_TECHNORATI = 'technorati';
    const ICON_TUMBLR = 'tumblr';
    const ICON_TWITTER_1 = 'twitter-1';
    const ICON_TWITTER_2 = 'twitter-2';
    const ICON_TWITTER_3 = 'twitter-3';
    const ICON_TYPEPAD = 'typepad';
    const ICON_VC_BAZAAR = 'vc-bazaar';
    const ICON_VC_BITBUCKET_01 = 'vc-bitbucket-01';
    const ICON_VC_BITBUCKET_02 = 'vc-bitbucket-02';
    const ICON_VC_FOSSIL = 'vc-fossil';
    const ICON_VC_GIT = 'vc-git';
    const ICON_VC_MERCURIAL = 'vc-mercurial';
    const ICON_VC_SVN = 'vc-svn';
    const ICON_VIMEO = 'vimeo';
    const ICON_VOXOPOLIS = 'voxopolis';
    const ICON_VUE = 'vue';
    const ICON_WEBLINK_1 = 'weblink_1';
    const ICON_WEBLINK_2 = 'weblink_2';
    const ICON_WIKIPEDIA = 'wikipedia';
    const ICON_WINDOWS = 'windows';
    const ICON_WORDPRESS = 'wordpress';
    const ICON_XANGA = 'xanga';
    const ICON_XING = 'xing';
    const ICON_YAHOO = 'yahoo';
    const ICON_YAMMER = 'yammer';
    const ICON_YOUTUBE = 'youtube';
    const ICON_ZBRUSH = 'zbrush';
    const ICON_ZERPLY = 'zerply';
    
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
