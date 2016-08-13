<?php
/**
 * Created by Bane.Shi.
 * Copyright MoenSun
 * User: Bane.Shi
 * Date: 2016/8/13
 * Time: 9:46
 */

namespace MoenSun\MSLaravelDB;

class MSEloquentPage
{
	public $count;
	public $list;
	public $pageNum;
	public $pageSize;
	public $startRow;

	public function page( $sql,$page = 1,$pageSize) {
		$this->count = $sql->count();
		$this->startRow = ($page-1)*$pageSize;
		if( $this->startRow>=0 && $pageSize ){
			$this->list = $sql->skip($this->startRow)->limit($pageSize)->get();
		}else {
			$this->list = $sql->get();
		}
		return $this;
	}
}