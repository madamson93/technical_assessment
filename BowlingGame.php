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
     * @var int
     * Number of players in a game
     */
    public $NumberOfPlayers = 0;

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
          if($this->NumberofPlayers > 6){
            Print("You can only have six players, please try again.");
            SavePlayers();
        } else {
            for ($i = 0; $i <= $this->NumberofPlayers; $i++){
                $this->Players[$i]["name"] = "";
            }
        }
    }


    /**
     * Function to calculate score and add bonus points
     */
    function Score(){

        //current shot that player is on
        $currentShot = 0;
        // score that player is on in a frame
        $score = 0;

        for ($i = 0; $i <= $this->NumberofPlayers; $i++) {
            for ($frame = 0; $frame <= $this->NumberofFrames; $frame++){
                if($this->Shots[$currentShot] + $this->Shots[$currentShot + 1 ] == 10){

                } else if ($this->Shots[$currentShot] == 10){

                } else {
                    
                }
            }
        }


    }

}