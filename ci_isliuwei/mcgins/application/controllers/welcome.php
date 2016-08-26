<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this -> load -> model('admin_model');
	}


	public function index()
	{
		
     
		$this -> load -> view('index');

	}

	public function article()
	{
     
		$this -> load -> view('article');

	}

	public function contact()
	{
     
		$this -> load -> view('contact');

	}

	public function course()
	{
     
		$this -> load -> view('course');

	}

	public function intro()
	{
     
		$this -> load -> view('intro');

	}


	public function job()
	{
     
		$this -> load -> view('job');

	}


	public function news()
	{
     
		$this -> load -> view('news');

	}

	public function team()
	{
     
		$this -> load -> view('team');

	}

	public function question()
	{
     
		$this -> load -> view('question');

	}

	


    


}
