<?php
namespace App\Controllers;
use App\Models\User as User;
use App\View;
class DefaultController
{
	public function home(): string
	{
		// implement
		return sprintf('DefaultController -> index (?fun=%s)', input('fun'));
	}

	public function contact(): string
	{
        return 'DefaultController -> contact';
	}

	public function news($slug = null): string
	{
        return 'DefaultController -> news -> slug: ' . $slug;
	}

  public function notFound(): string
  {
      return 'Page not found';
  }

	public function check(){
		return "Framework telah siap!";
	}


	public function login_page(){
		return View::present('login' , []);
	}

}
