<?php

class Work
{
  public $work_id;
  public $task_id;
  public $team_id;
  public $start_date;
  public $stop_date;
  public $hours;
  public $completion_estimate;

  public function __construct($row){
$this->id = intval($row['id']);

$this->task_id = intval($row['task_id']);
$this->team_id = intval($row['team_id']);

$this->start = $row['start_date'];
$this->hours = floatval($row['hours']);

// calculate stop date



  }

  public function_construct($data) {

    // // TODO:
  }

  public static function findByTaskId($taskId) {

    // 1. Get db connection
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;

    // 2. Prepare Query

    //3. Execute Query
  }
}
