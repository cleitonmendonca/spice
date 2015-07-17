<?php
namespace Spice\Models\Repositories\Repository;

use Spice\Models\Entities\User as EntityUser;

class User
{
	public function getLast()
	{
		return EntityUser::query()
			->order('datetime DESC')
			->execute();
	}
}
