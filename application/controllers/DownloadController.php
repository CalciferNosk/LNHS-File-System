<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadController extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function downloadPdf()
	{
        require FCPATH.'vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf(['margin_footer' => 0]);
        $html = '<h2>Hello</h2>';
        $mpdf->WriteHTML($html);
       
    
        $file= $_SESSION['lastName'].'_'.$_SESSION['firstname'].'_COE.pdf';
        $mpdf->OutputHttpDownload($file); #download
        // $mpdf->Output($file); #view pdf
	}
}
