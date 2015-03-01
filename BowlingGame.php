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

    /**
     * Ask for user input to loop through and ask the names of players playing a bowling game
     */
    function SavePlayers() {
        Print("Please write in the number of players");
        /** @var int $NumberofPlayers
        Local variable to save the number of players playing the game */
        $NumberofPlayers = "";

        if($NumberofPlayers > 6){
            Print("You can only have six players, please try again.");
            SavePlayers();
        } else {
            for ($i = 0; $i <= $this->$NumberofPlayers; $i++){
                $this->Players[$i]["name"] = "";
            }
        }
    }

}