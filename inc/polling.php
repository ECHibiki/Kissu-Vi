<?php 
	class Polling{
		//remove certain id from poll sql table
		static function removePoll($id){
		}
		//return nothing but add poll to sql table
		static function addPoll($poll_json){
		
		}
		//return json format of post form poll data
		static function formatFields($post){
			if(isset($post['pollopt1'])){
			$poll_obj = new stdClass();
			$poll_obj->multisel = $post['multisel'];
			$poll_obj->postthresh = $post['postthresh'];
			$poll_obj->lifespan = $post['lifespan'];
			$poll_obj->options = array();
	                foreach($post as $key => $value){
        	                if(preg_match('/^pollopt\d+/', $key)){
                	        	array_push($poll_obj->options, $value);
                        	}
               		 }
			return json_encode($poll_obj);
			}
			else 
				return null;
		}
		static function bodyAddablePoll($poll_json){
			if(isset($post['pollopt1'])){
			$poll_obj = json_decode($poll_json, true);
			$time = time();
			$input_selection = "";
			$type = "";
			if($poll_obj['multisel'] == "on")
				$type = "checkbox";
			else
				$type = "radio";
			foreach($poll_obj['options'] as $index=>$option)
				$input_selection .= "<label><input type='$type' name='pollopt' value='$index'/>$option</label><br/>";
			$form = "<div data-lifespan='$poll_obj[lifespan]' data-creationtime='$time' class='lolyoucantnestforms'>$input_selection<input type='submit' class='pollsubmit' onclick='return false' value='Make Response'><a href='javscript:void(0)' onclick='return false'><br/>[View Responses]</a></div>";

			return $form;
			}
			else 
				return "";
		}
	}

?>
