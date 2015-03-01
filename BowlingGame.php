<?php
/**
 * Created by PhpStorm.
 * User: moniqueadamson
 * Date: 18/02/15
 * Time: 14:28
 */

class BowlingGame {

    /**
     * @var int
     * Ultimate number of frames per bowling game
     */
    public $NumberofFrames = 10;

    /**
     * @var array
     * two dimensional array to save players and scores
     */
    public $Players = array(
        "name" => array (
            "score" => array(
            )
        )
    );


    /**
     * @var array
     * Array to store what a player has rolled
     */
    public $Shots = array();

}