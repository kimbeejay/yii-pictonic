yii-pictonic
============

Extension for Yii Framework

Requirements
------------

* A Yii Application

Installation
------------

1. Download and extract extension to directory protected/extensions
2. Modify your config file

##### config file
      .....
      'preload' => array(
        .....
        'pictonic',
      ),
      .....
      'components' => array(
        .....
        'pictonic' => array(
          'class' => 'ext.pictonic.components.Pictonic',
          'tag' => 'span', // optional param : html tag (span, div etc)
          'method' => 'print', // optional param : output method (print|return)
        )
      ),
