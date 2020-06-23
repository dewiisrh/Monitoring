<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	



	// coding untuk tbl_po

	public function DataPo()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nota=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_po','nota',$nota)->row();
			$data['detail']['nota']= $tampil->nota;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['tanggal']= $tampil->tanggal;
            		$data['detail']['motif']= $tampil->motif;
            		$data['detail']['warna']= $tampil->warna;
			$data['detail']['quantity']= $tampil->quantity;
            		$data['detail']['jumlah_total']= $tampil->jumlah_total;
            		$data['detail']['jumlah_dp']= $tampil->jumlah_dp;
			$data['detail']['sisa_pembayaran']= $tampil->sisa_pembayaran;
			$data['detail']['pengkrajin']= $tampil->pengkrajin;
			$data['detail']['dp_pengkrajin']= $tampil->dp_pengkrajin;
			$data['detail']['status']= $tampil->status;
			$data['detail']['keterangan']= $tampil->keterangan;

			$data['content']='VFormUpdatePo';
		}
		else
		{	
			$data['DataPo']=$this->MSudi->GetData('tbl_po');
			$data['content']='VPo';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPo()
	{
		$data['content']='VFormAddPo';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPo()
	{
			  $add['nota']=$this->input->post('nota');
         	 $add['nama']= $this->input->post('nama');
         	 $add['tanggal']= $this->input->post('tanggal');
         	 $add['motif']= $this->input->post('motif');
         	 $add['warna']= $this->input->post('warna');
		 $add['quantity']=$this->input->post('quantity');
         	 $add['jumlah_total']= $this->input->post('jumlah_total');
         	 $add['jumlah_dp']= $this->input->post('jumlah_dp');
		 $add['sisa_pembayaran']= $this->input->post('sisa_pembayaran');
		 $add['pengkrajin']= $this->input->post('pengkrajin');
         	 $add['dp_pengkrajin']= $this->input->post('dp_pengkrajin');
         	 $add['status']= $this->input->post('status');
         	 $add['keterangan']= $this->input->post('keterangan');


        	 $this->MSudi->AddData('tbl_po',$add);
        	 redirect(site_url('Welcome/DataPo'));
	}



	public function UpdateDataPo()
	{
		  $nota=$this->input->post('nota');
		 $update['nama']= $this->input->post('nama');
         	 $update['tanggal']= $this->input->post('tanggal');
         	 $update['motif']= $this->input->post('motif');
         	 $update['warna']= $this->input->post('warna');
		 $update['quantity']= $this->input->post('quantity');
         	 $update['jumlah_total']= $this->input->post('jumlah_total');
		 $update['jumlah_dp']= $this->input->post('jumlah_dp');
         	 $update['sisa_pembayaran']= $this->input->post('sisa_pembayaran');
         	 $update['pengkrajin']= $this->input->post('pengkrajin');
		 $update['dp_pengkrajin']= $this->input->post('dp_pengkrajin');
         	 $update['status']= $this->input->post('status');
         	 $update['keterangan']= $this->input->post('keterangan');

          	 $this->MSudi->UpdateData('tbl_po','nota',$nota,$update);
		 redirect(site_url('Welcome/DataPo'));
	}


	public function DeleteDataPo()
	{
		 $nota=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_po','nota',$nota);
        	 redirect(site_url('Welcome/DataPo'));
	}

	public function excel()
	{
		$data['DataPo']=$this->MSudi->GetData('tbl_po');

		include APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php';
		include APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';

		$object = new PHPExcel();
		$object->getProperties()->setCreator("Batik Organik");
		$object->getProperties()->setLastModifiedBy("Batik Organik");
		$object->getProperties()->setTitle("Daftar PO");

		$object->setActiveSheetIndex(0);

		$object->getAcitveSheet()->setCellValue('A1', 'No Nota');
		$object->getAcitveSheet()->setCellValue('B1', 'Nama');
		$object->getAcitveSheet()->setCellValue('C1', 'Tanggal');
		$object->getAcitveSheet()->setCellValue('D1', 'Motif');
		$object->getAcitveSheet()->setCellValue('E1', 'Warna');
		$object->getAcitveSheet()->setCellValue('F1', 'Quantity');
		$object->getAcitveSheet()->setCellValue('G1', 'Jumlah Total');
		$object->getAcitveSheet()->setCellValue('H1', 'Jumlah DP Pembeli');
		$object->getAcitveSheet()->setCellValue('I1', 'Sisa Pembayaran');
		$object->getAcitveSheet()->setCellValue('J1', 'Pengkrajin');
		$object->getAcitveSheet()->setCellValue('K1', 'DP ke Ppengkrajin');
		$object->getAcitveSheet()->setCellValue('L1', 'Status');
		$object->getAcitveSheet()->setCellValue('M1', 'Keterangan');

		$baris = 2;

		foreach($DataPo as $po){
		$object->getAcitveSheet()->setCellValue('A'.$baris, $po->nota);
		$object->getAcitveSheet()->setCellValue('B'.$baris, $po->nama);
		$object->getAcitveSheet()->setCellValue('C'.$baris, $po->tanggal);
		$object->getAcitveSheet()->setCellValue('D'.$baris, $po->motif);
		$object->getAcitveSheet()->setCellValue('E'.$baris, $po->warna);
		$object->getAcitveSheet()->setCellValue('F'.$baris, $po->quantity);
		$object->getAcitveSheet()->setCellValue('G'.$baris, $po->jumlah_total);
		$object->getAcitveSheet()->setCellValue('H'.$baris, $po->jumlah_dp);
		$object->getAcitveSheet()->setCellValue('I'.$baris, $po->sisa_pembayaran);
		$object->getAcitveSheet()->setCellValue('J'.$baris, $po->pengkrajin);
		$object->getAcitveSheet()->setCellValue('K'.$baris, $po->dp_pengkrajin);
		$object->getAcitveSheet()->setCellValue('L'.$baris, $po->status);
		$object->getAcitveSheet()->setCellValue('M'.$baris, $po->keterangan);

		$baris++;
		}

		$filename = "DataPO".'.xlsx';
		$object->getAcitveSheet()->setTitle("Data PO");

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename=' .$filename); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');

		exit;
	}


// coding untuk po
	
	

	// monitoring

	public function DataMonitoring()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$no_po=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_monitoring','no_po',$no_po)->row();
			$data['detail']['no_po']= $tampil->no_po;
			$data['detail']['FU_1']= $tampil->FU_1;
            		$data['detail']['FU_2']= $tampil->FU_2;
            		$data['detail']['FU_3']= $tampil->FU_3;
			$data['content']='VFormUpdateMonitoring';
		}
		else
		{	
			$data['DataMonitoring']=$this->MSudi->GetData('tbl_monitoring');
			$data['content']='VMonitoring';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddMonitoring()
	{
		$data['content']='VFormAddMonitoring';
		$this->load->view('VBackend',$data);
	}
	public function AddDataMonitoring()
	{
		 $add['no_po']=$this->input->post('no_po');
		  $add['FU_1']=$this->input->post('FU_1');
         	 $add['FU_2']= $this->input->post('FU_2'); 
        	 $add['FU_3']= $this->input->post('FU_3'); 
        	 $this->MSudi->AddData('tbl_monitoring',$add);
        	 redirect(site_url('Welcome/DataMonitoring'));
	}



	public function UpdateDataMonitoring()
	{
		 $no_po=$this->input->post('no_po');
		 $update['FU_1']= $this->input->post('FU_1');
		 $update['FU_2']= $this->input->post('FU_2');
		 $update['FU_3']= $this->input->post('FU_3');

          	 $this->MSudi->UpdateData('tbl_monitoring','no_po',$no_po,$update);
		 redirect(site_url('Welcome/DataMonitoring'));
	}


	public function DeleteDataMonitoring()
	{
		 $no_po=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_monitoring','no_po',$no_po);
        	 redirect(site_url('Welcome/DataMonitoring'));
	}

	// monitoring

	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}