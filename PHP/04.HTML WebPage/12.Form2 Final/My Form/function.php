<?php
function selectOption($option,$selcetValue){
	foreach($option as $op){
		 $selected='';
		 if(in_array($op,$selcetValue)){
			$selected="selected";
		 }
	echo'<option value="'.strtolower($op).'"'.$selected.'>'.ucfirst($op).'</option>'."\n";
	
	}
}
?>