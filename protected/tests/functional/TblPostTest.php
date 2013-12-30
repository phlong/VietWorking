<?php

class TblPostTest extends WebTestCase
{
	public $fixtures=array(
		'tblPosts'=>'TblPost',
	);

	public function testShow()
	{
		$this->open('?r=tblPost/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tblPost/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tblPost/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tblPost/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tblPost/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tblPost/admin');
	}
}
