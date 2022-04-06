<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Hello extends Controller{
    public function index()
    {
        $abc['title'] = "This is 1st Demoss";

        
        echo view('hello_view', $abc);  
    }

    public function testdata()
    {
        echo "my test data controller";
    }
}

without signin user will can't access dashboard - https://prnt.sc/zVMnKiBSlawn
create page to create post https://prnt.sc/h6JSv4ty580W
