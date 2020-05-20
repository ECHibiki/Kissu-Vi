<?php

class Scoring{
  static function get($id, $board){
    $query = prepare("SELECT count(*) AS count FROM ``scorers`` WHERE score_id=:id AND board=:board");
    $query->bindValue(':id', $id);
    $query->bindValue(':board', $board);
    $query->execute() or error(db_error($query));
    $all_responses = $query->fetch(PDO::FETCH_ASSOC);
    return $all_responses;
  }
  static function post($id, $board, $ip){
    			// check if ip already voted
          $query = prepare("SELECT ip FROM ``scorers`` WHERE score_id=:id AND board=:board AND ip=:ip");
          $query->bindValue(':id', $id);
          $query->bindValue(':board', $board);
          $query->bindValue(':ip', $_SERVER['REMOTE_ADDR']);
          $query->execute() or error(db_error($query));
          $all_responses = $query->fetchAll(PDO::FETCH_ASSOC);
    			if(empty($all_responses)){
      			$query = prepare("INSERT INTO ``scorers`` VALUES (:id, :board, :ip)");
            $query->bindValue(':id', $id);
            $query->bindValue(':board', $board);
            $query->bindValue(':ip', $_SERVER['REMOTE_ADDR']);
            $query->execute() or error(db_error($query));
  		    }
  }
  static function delete($id){
    global $board;
    $query = prepare("DELETE FROM ``score`` WHERE id=:id AND board=:board");
    $query->bindValue(':id', $id);
    $query->bindValue(':board', $board['uri']);
    $query->execute() or error(db_error($query));
  }
  static function create($id){
			global $board;
  		$query = prepare("INSERT INTO ``score``(id, board) VALUES (:id, :board)");
  		$query->bindValue(':id', $id);
  		$query->bindValue(':board', $board['uri']);
   		$query->execute() or error(db_error($query));
  }
}
