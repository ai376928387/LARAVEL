<?php
class a extends BaseControllser {

	public function Create() {
		return 'create';
	}

	public function getCreate() {
		return View::make('account.create');
	}

	public function postCreate() {
		return 'hello';
	}
}
