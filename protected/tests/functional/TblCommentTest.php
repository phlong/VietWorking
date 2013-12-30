<?php

class TblCommentTest extends WebTestCase
{
	public $fixtures=array(
		'tblComments'=>'TblComment',
	);

	public function testShow()
	{
		$this->open('?r=tblComment/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tblComment/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tblComment/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tblComment/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tblComment/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tblComment/admin');
	}
}
