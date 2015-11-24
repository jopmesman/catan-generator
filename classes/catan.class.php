<?php
/**
 * @author Jop Mesman
 * @package catan
 */
class catan {

  protected $settings = [];
  protected $board = [];
  protected $fichesstack = [];
  protected $portstack = [];
  protected $tilestack = [];

  /**
   * Get a random port from the port stack
   * @return string
   **/
  protected function randPort() {
    $array_rand = array_rand($this->portstack, 1);
    $return = $this->portstack[$array_rand];
    unset($this->portstack[$array_rand]);
    return $return;
  }

  /**
   * Get a random tile from the tile stack
   * @return string
   **/
  protected function randTile() {
    $array_rand = array_rand($this->tilestack, 1);
    $return = $this->tilestack[$array_rand];
    unset($this->tilestack[$array_rand]);
    return $return;
  }

  /**
   * Check if a number is red
   * @return boolean
   **/
  protected function isRed($number) {
    return in_array($number, array(6, 8));
  }

  /**
   * Get a random fiche from the fiche stack
   * @return a number
   **/
  private function randFiche() {
    $fiche_key = array_rand($this->fichesstack);
    $number = $this->fichesstack[$fiche_key];

    unset($this->fichesstack[$fiche_key]);

    return $number;
  }

  /**
   * Check, based on a given tileKey if it's neighbours are red
   * @param integer $tilekey
   * @return boolean
   */
  protected function neighboursAreRed($tilekey) {
    $tile = $this->settings[$tilekey];

    if (count($tile['red'])) {
      foreach ($tile['red'] as $tileNumber) {
        $tileRed = $this->board[$tileNumber];
        if ($this->isRed($tileRed['fiche'])) {
          return true;
        }
      }
    }
    return false;
  }

  /**
   * Find, based on a tileKey, the first occurence with no red neighbours.
   * @param integer $tileKey
   * @return integer
   */
  private function findNotRedNeighbours($tileKey) {
    foreach ($this->board as $key => $value) {
      if ($key != $tileKey && $value['type'] == 'tile' && $value['tile'] != 'desert' && $this->isRed($value['fiche']) == false) {
        if ($this->neighboursAreRed($key) == false) {
          return $key;
        }
      }
    }
    return null;
  }

  /**
   * Generate the board, based on the settings
   * @return type
   */
  private function generate() {
    $return = array();
    foreach ($this->settings as $key => $tile) {
      $temp = array(
        'type' => $tile['type'],
        'tile' => $tile['type'],
      );
      switch ($tile['type']) {
        case "port":
          $temp['tile'] = $this->randPort();
          $rand_direction = array_rand($tile['diropt']);
          $temp['dir'] = $tile['diropt'][$rand_direction];
          break;
        case 'sea':
          $temp['dir'] = rand(1, 6);
          break;
        case 'tile':
          $temp['tile'] = $this->randTile();
          if ($temp['tile'] != 'desert') {
            $temp['fiche_dir'] = rand(1, 4);
            $temp['fiche'] = $this->randFiche($key);
          }
          $temp['dir'] = rand(0, 5);
          break;
      }
      $this->board[$key] = $temp;
    }

    // All fiches and tiles are ready.
    // Now let's check if all red are on the right spot!
    foreach ($this->board as $key => $tile) {
      if ($tile['type'] == 'tile' && $tile['tile'] != 'desert' && $this->isRed($tile['fiche'])) {
        if ($this->neighboursAreRed($key)) {
          $tileKey = $this->findNotRedNeighbours($key);
          $tempTile = $this->board[$key];
          $this->board[$key] = $this->board[$tileKey];
          $this->board[$tileKey] = $tempTile;
        }
      }
    }
  }

  /**
   * Get the board
   **/
  public function get(){
    if(empty($this->board)){
      $this->generate();
    }
    return $this->board;
  }

}
