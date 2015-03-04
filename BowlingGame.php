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
     * Maximum number of frames per bowling game
     */
    public $NumberofFrames = 10;

    /**
     * @var int
     * Number of players in a game
     */
    public $NumberOfPlayers = 0;

    /**
     * @var array
     * multi dimensional array to save players and scores
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
     * @param int $pins
     * Row in the bowled array will be the number of pins bowled over by a player
     */
    function Bowl(int $pins){
        $Shots[] = $pins;
    }

    /**
     * Function to calculate score and add bonus points
     */
    function Score(){
        //current shot that player is on
        $currentShot = 0;
        // score that player is on in a frame
        $score = 0;

        //for each frame, for each player work out what they've bowled
        //apply the bonus shots and work out score
        for ($frame = 0; $frame <= $this->NumberofFrames; $frame++){
            for ($i = 0; $i <= count($this->Players[$i]); $i++) {
                if($this->Shots[$currentShot] + $this->Shots[$currentShot + 1 ] == 10){
                    $score = $score + 10 + $this->SpareBonusShots($currentShot);
                    $currentShot += 2;
                } elseif ($this->Shots[$currentShot] == 10){
                    $score = $score + 10 + $this->StrikeBonusShots($currentShot);
                    $currentShot += 1;
                } else {
                    $score = $score + $this->DefaultShots($currentShot);
                    $currentShot += 2;
                }
                    return $score;
                    $Players[$i]["name"]["score"] = $score;
            }

        }

    }

    function SpareBonusShots($currentShot){
        //record the current shot plus two
        //two shots as it's a spare then the one after
        return $this->Shots[$currentShot + 2];
    }

    function StrikeBonusShots($currentShot){
        //record the current shot plus one and plus two
        //both as a strike is just one shot
        return $this->Shots[$currentShot + 1] + $this->Shots[$currentShot + 2];
    }

    function DefaultShots($currentShot){
        //function for regular shots (anything that is not a strike or spare)
        return $this->Shots[$currentShot] + $this->Shots[$currentShot + 1];
    }

    function DisplayScoreBoard(){
        for ($i = 0; $i <= count($this->Players[$i]); $i++){
            Print("Player: " . $this->Players[$i]["name"] . "has scored " . $this->Players[$i]["name"]["score"]);
        }
    }
}