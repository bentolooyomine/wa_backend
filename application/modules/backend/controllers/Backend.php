<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends MY_Controller {

	
	public function index()
	{

		$file = new CURLFILE(base_url('assets/').'Kegiatan.pdf');

		// print_r($file);
		$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://192.10.10.46:8011/send-message',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('message' => 'oke','number' => '085743741290','file_dikirim'=> $file),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
	}


	public function kirim($no_hp,$nama_file)
	{

		$file = new CURLFILE(base_url('assets/').$nama_file.'.pdf');

		// print_r($file);
		$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://192.10.10.46:8011/send-message',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('message' => 'oke','number' => $no_hp,'file_dikirim'=> $file),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
	}
}
