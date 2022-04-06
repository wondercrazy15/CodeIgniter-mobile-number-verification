<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
// use App\Models\Product_model;

class Phonenumber extends Controller{
    public function get_country(){
        $curl = \Config\Services::curlrequest();
        $response = $curl->request('GET','https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-calling-code.json');
        $countrylist = $response->getBody();

        $country['name'] = json_decode($countrylist,true);
        // echo "4444 <pre>"; print_r($country['name']);
        echo view('userform_view',$country);
    }

    public function get_carrier(){
        
        $curl = \Config\Services::curlrequest();
        $mobile_no = $this->request->getPost("mno");
        $countryname = $this->request->getPost("countrylist");

        $mobilenumber = $countryname.$mobile_no;
        $apikey = '17b2d150-a9da-11ec-896c-d11e69d8bf45';

        $response = $curl->request('GET','https://numlookupapi.com/api/validate/'.$mobilenumber.'?apikey='.$apikey);
        $countrylist = $response->getBody();
        print_r($countrylist);
        die;
        
        if ($this->request->isAJAX()) {
            // return json_encode (['success'=> 'success', 'csrf' => csrf_hash(), 'mno' => $mobile_no, 'countryname'=>$countryname , 'mobilenumber'=>$mobilenumber]);
            return ($countrylist);

        }
    }

    public function newview(){
        echo view('newview');
    }
}
