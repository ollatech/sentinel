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
	
}