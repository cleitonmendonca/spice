<?php
namespace Spice\Models\Services\Service;

use Spice\Models\Repositories\Repositories;

class User
{
	public function getLast()
	{
		return Repositories::getRepository('User')->getLast();
	}
}
