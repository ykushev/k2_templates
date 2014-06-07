


k2 content:
<?php
if($params->get('itemExtraFields') && count($item->extra_fields)) {
	foreach ($item->extra_fields as $key=>$extraField) {
		$extraname[$extraField->alias] = $extraField->name;
		$extralabel[$extraField->alias] = $extraField->label;
		$extravalue[$extraField->alias] = $extraField->value;
	}
} 
?>