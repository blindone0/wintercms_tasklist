<?php

namespace Ihorr\Tasks\Components;

use Cms\Classes\ComponentBase;
use Ihorr\Tasks\Models\Tasklist;


class Tasks extends ComponentBase
{
		public function componentDetails(){
			return [
				'name' => 'Tasks',
				'descr' => "Tasks for users"
			
			];		
		}
		
		public function load(){
			return Tasklist::all()->toArray();
		}
	
}