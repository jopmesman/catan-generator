<?php

$root = dirname(__FILE__);
require_once($root . '/catan.class.php');

class catan_basic_game extends catan {

  function __construct() {
    /**
     * this array contains the default configuration for a basic game
     */
    $this->settings = array(
      // First row
      1 => array(
        'type' => 'port',
        'diropt' => array(
          0,
        ),
        'column' => 1,
      ),
      2 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 1,
      ),
      3 => array(
        'type' => 'port',
        'diropt' => array(
          5,
          0,
        ),
        'column' => 1,
      ),
      4 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 1,
      ),
      // Second row
      5 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 2,
      ),
      6 => array(
        'type' => 'tile',
        'red' => array(
          11,
          12,
          7
        ),
        'column' => 2,
      ),
      7 => array(
        'type' => 'tile',
        'red' => array(
          6,
          8,
          12,
          13
        ),
        'column' => 2,
      ),
      8 => array(
        'type' => 'tile',
        'red' => array(
          7,
          13,
          14
        ),
        'column' => 2,
      ),
      9 => array(
        'type' => 'port',
        'diropt' => array(
          4,
          5,
        ),
        'column' => 2,
      ),
      // Third row
      10 => array(
        'type' => 'port',
        'diropt' => array(
          1,
          0,
        ),
        'column' => 3,
      ),
      11 => array(
        'type' => 'tile',
        'red' => array(
          6,
          12,
          17,
          18,
        ),
        'column' => 3,
      ),
      12 => array(
        'type' => 'tile',
        'red' => array(
          6,
          7,
          11,
          13,
          18,
          19
        ),
        'column' => 3,
      ),
      13 => array(
        'type' => 'tile',
        'red' => array(
          7,
          8,
          12,
          14,
          19,
          20,
        ),
        'column' => 3,
      ),
      14 => array(
        'type' => 'tile',
        'red' => array(
          8,
          13,
          20,
          21,
        ),
        'column' => 3,
      ),
      15 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 3,
      ),
      // fourth row
      16 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 4,
      ),
      17 => array(
        'type' => 'tile',
        'red' => array(
          11,
          18,
          24,
        ),
        'column' => 4,
      ),
      18 => array(
        'type' => 'tile',
        'red' => array(
          11,
          12,
          17,
          19,
          24,
          25
        ),
        'column' => 4,
      ),
      19 => array(
        'type' => 'tile',
        'red' => array(
          12,
          13,
          18,
          20,
          25,
          26,
        ),
        'column' => 4,
      ),
      20 => array(
        'type' => 'tile',
        'red' => array(
          13,
          14,
          19,
          21,
          26,
          27,
        ),
        'column' => 4,
      ),
      21 => array(
        'type' => 'tile',
        'red' => array(
          14,
          20,
          27,
        ),
        'column' => 4,
      ),
      22 => array(
        'type' => 'port',
        'diropt' => array(
          4,
        ),
        'column' => 4,
      ),
      // fifth row
      23 => array(
        'type' => 'port',
        'diropt' => array(
          1,
          2,
        ),
        'column' => 5,
      ),
      24 => array(
        'type' => 'tile',
        'red' => array(
          17,
          18,
          25,
          30,
        ),
        'column' => 5,
      ),
      25 => array(
        'type' => 'tile',
        'red' => array(
          18,
          19,
          24,
          26,
          30,
          31,
        ),
        'column' => 5,
      ),
      26 => array(
        'type' => 'tile',
        'red' => array(
          19,
          20,
          25,
          27,
          31,
          32,
        ),
        'column' => 5,
      ),
      27 => array(
        'type' => 'tile',
        'red' => array(
          20,
          21,
          26,
          32,
        ),
        'column' => 5,
      ),
      28 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 5,
      ),
      // sixth row
      29 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 6,
      ),
      30 => array(
        'type' => 'tile',
        'red' => array(
          24,
          25,
          31,
        ),
        'column' => 6,
      ),
      31 => array(
        'type' => 'tile',
        'red' => array(
          25,
          26,
          30,
          32,
        ),
        'column' => 6,
      ),
      32 => array(
        'type' => 'tile',
        'red' => array(
          26,
          27,
          31,
        ),
        'column' => 6,
      ),
      33 => array(
        'type' => 'port',
        'diropt' => array(
          3,
          4,
        ),
        'column' => 6,
      ),
      // Seventh row
      34 => array(
        'type' => 'port',
        'diropt' => array(
          2,
        ),
        'column' => 7,
      ),
      35 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 7,
      ),
      36 => array(
        'type' => 'port',
        'diropt' => array(
          3,
          2,
        ),
        'column' => 7,
      ),
      37 => array(
        'type' => 'sea',
        'tile' => 'sea',
        'column' => 7,
      ),
    );
    $this->fichesstack = array(
      2,
      3,
      3,
      4,
      4,
      5,
      5,
      6,
      6,
      8,
      8,
      9,
      9,
      10,
      10,
      11,
      11,
      12,
    );
    $this->portstack = array(
      '3_1',
      '3_1',
      '3_1',
      '3_1',
      'corn',
      'wood',
      'stone',
      'ore',
      'sheep',
    );
    $this->tilestack = array(
      'corn',
      'corn',
      'corn',
      'corn',
      'wood',
      'wood',
      'wood',
      'wood',
      'stone',
      'stone',
      'stone',
      'ore',
      'ore',
      'ore',
      'sheep',
      'sheep',
      'sheep',
      'sheep',
      'desert',
    );
  }

}
