<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
		
		if(!$this->session->userdata('user'))
			redirect('administrator/login');
		
		$this->load->view('app_administrator', ['data'=>['page' => 'administrator/report']]);
	}

	public function export($table = '')
	{

		$this->load->library("excel");
		$object = new PHPExcel();

        $this->load->model('Process_order');
        $this->load->model('Process_order_detail');

		if($table == 'process_order') {

			$object->setActiveSheetIndex(0);
			$table_columns = array("Code", "Customer Name", "Destination Address", "Status", "Wrapping Type", "Message", "Total");
			$column = 0;
			foreach($table_columns as $field) {
				$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
				$column++;
			}
			
            $query = $this->Process_order->get_admin();
            $arr = [];
            if(count($query) > 0) 
                foreach($query as $key => $temp) {
                    $arr = $temp;
                    
                    $process_order_detail = $this->Process_order_detail->get($temp->id);
                    $total = 0;
                    foreach($process_order_detail as $keys => $temps) {
                        $total += $temps->subtotal;
                    }
                    
                    $arr->total = number_format($total);
                    $arr->grand_total = number_format($total + 10000);
                    $arr->status_name = $this->Process_order->status[$temp->status];
                    $arr->process_order_detail = htmlspecialchars(json_encode($process_order_detail));
                    $query[$key] = $arr;
                }

			$excel_row = 2;
	  
			foreach($query as $row){
				
				$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->code);
				$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->user_customer_name);
				$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->destination_address);
				$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->status_name);
				$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->wrapping_type_name);
				$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->message);
				$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->grand_total);
				$excel_row++;
	  
			}
	  
			$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
	  
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="Report_process_order.xls"');
			$object_writer->save('php://output');
	  
	  
		}

	}

}
