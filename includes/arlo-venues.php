<?php

namespace Arlo;

require_once 'arlo-singleton.php';

use Arlo\Singleton;

class Venues extends Singleton {
	static function get($conditions = array(), $order = array(), $limit = null, $active = null) {
		global $wpdb;
	
		$query = "SELECT v.* FROM {$wpdb->prefix}arlo_venues AS v";
		
		$where = array("active = " . $active);
	
		// conditions
		foreach($conditions as $key => $value) {
			// what to do?
			switch($key) {
				case 'id':
					if(is_array($value)) {
						$where[] = "v.v_arlo_id IN (" . implode(',', $value) . ")";
					} else {
						$where[] = "v.v_arlo_id = $value";
						$limit = 1;
					}
				break;
			}
		}
		
		// where
		if(!empty($where)) {
			$query .= ' WHERE ' . implode(' AND ', $where);
		}
		
		// order
		if(!empty($order)) {
			$query .= ' ORDER BY ' . implode(', ', $order);
		}
		
		$result = ($limit != 1) ? $wpdb->get_results($query) : $wpdb->get_row($query);
		
		return $result;
	}
}