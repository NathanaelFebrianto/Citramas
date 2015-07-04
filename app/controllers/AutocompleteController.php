<?php

class AutocompleteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function getArea(){
		$areas = Area::all();
		
		$ret = array();
		$ret["incomplete_results"] = false;
		$items = array();
		foreach($areas as $area){
			if(strpos(strtolower($area->areaName), strtolower($_GET['q'])) !== false){
				$row = array();
				$row["id"] = $area->areaID;
				$row["label"] = $area->areaName;
				array_push($items,$row);
			}
		}
		$ret["items"] = $items;
		$ret["total_count"] = count($items);
		
		echo json_encode($ret);
	}
	
	public function getRegion(){
		$regions = Region::all();
		
		$ret = array();
		$ret["incomplete_results"] = false;
		$items = array();
		foreach($regions as $region){
			if(strpos(strtolower($region->regionName), strtolower($_GET['q'])) !== false){
				$row = array();
				$row["id"] = $region->regionID;
				$row["label"] = $region->regionName;
				array_push($items,$row);
			}
		}
		$ret["items"] = $items;
		$ret["total_count"] = count($items);
		
		echo json_encode($ret);
	}
	
}
