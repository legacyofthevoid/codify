<?php
	class ThreadsApiController extends BaseController{
		public function getAll(){
			$scope = array(array('id','!=','0'));
			return ThreadApi::pull($scope, e(Input::get('skip')), e(Input::get('take')));
		}
		public function missingMethod($parameters)
		{
		    //
		}
	}
