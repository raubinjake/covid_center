<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get_centers()
	{

		$pincode=$_GET['pincode'];
		$date=$_GET['date'];
		$date_format=date('d-m-Y',strtotime($date));
		$url='https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByPin?pincode='.$pincode.'&date='.$date_format.'';
		//echo $url;
		//die();
		$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Client-Service: frontend-client',
    'Auth-Key: ewarestapi',
    'Content-Type: application/json',
    'User-ID: 1',
    'Authorization: $1$Yw..Be/.$RPgyE7dwbVTCGV2REF6f41'
  ),
));

$response = curl_exec($curl);
$data = json_decode($response, TRUE);
curl_close($curl);
//print_r($data);
if(isset($data['centers']))
{


$page_data['data']=$data['centers'];
$page_data['pincode']=$pincode;
$page_data['date']=$date_format;

//print_r($data);


if(empty($page_data['data']))
{
	$this->load->view('no_data',$page_data);
}
else
{
	$this->load->view('covid_center',$page_data);
}

}
else
{
	$page_data['data']=$data;
	$this->load->view('error',$page_data);

}

//echo $response;

	}
}
