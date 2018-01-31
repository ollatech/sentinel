<?php

namespace Surface\Guard;

final class Basic {
	
	protected $resource;
	protected $user;
	protected $role;
	public function __construct(UserInterface $user, RoleInterface $role) {

	}
	public function check($resourceClass) {

	}

	public function privileges() {
		$base = [
			'read' => true,
			'create' => true,
			'update' => true,
			'delete' => true
		];
	}
	public function permissions() {
		$base = [
			'App\Entity\User' => [
				'resource' => ['create','update','delte'],
				'properties' => [
					'id' => ['create','update','delte']
				]
			]
		];
	}
	public function customPrivileges() {

	}

	public function rules() {
		return [
			'create_comment_limit' => 100,
			'create_user_limit' => 100
		];
	}
}