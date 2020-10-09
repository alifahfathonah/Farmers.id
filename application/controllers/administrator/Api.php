<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    function banner($action, $id = '') {

        header('Content-Type: application/json');

        $this->load->model('Content_management');

        if($action == 'insert') {

            $error = [];

            $config['upload_path']          = 'public/uploads/banner';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1200;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image'))
                $error['image'] = $this->upload->display_errors();
                
            if($this->input->post('href') == '')
                $error['href'] = 'This field is required';
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {
                $query = $this->Content_management->insert($this->upload->data()['file_name'], $this->input->post('href'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data inserted successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

            

        } elseif($action == 'update') {
            
            if(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {

                $config['upload_path']          = 'public/uploads/banner';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1200;
                $config['encrypt_name']         = true;
                
                $this->load->library('upload', $config);

                $filename = $this->input->post('image_before');
                if($this->upload->do_upload('image'))
                    $filename = $this->upload->data()['file_name'];
                    
                $query = $this->Content_management->update($this->input->post('id'), $filename, $this->input->post('href'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data updated successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'delete') {

            if(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));

            $query = $this->Content_management->delete($this->input->post('id'));
            $this->session->set_flashdata(['status' => 'success', 'message' => 'Data deleted successfuly !']);
            redirect($_SERVER['HTTP_REFERER']);

        } elseif($action == 'get') {

            $query = $this->Content_management->get($id);

        } elseif($action == 'get_admin') {

            $query = $this->Content_management->get_admin();
            die(json_encode(['data' => $query]));

        } elseif($action == 'get_public') {

            $query = $this->Content_management->get_admin();

        }

    }

    function product($action, $id = '') {

        header('Content-Type: application/json');

        $this->load->model('Product');

        if($action == 'insert') {

            $error = [];

            $config['upload_path']          = 'public/uploads/product';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1200;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image'))
                $error['image'] = $this->upload->display_errors();
                
            if($this->input->post('name') == '')
                $error['name'] = 'This field is required';
            if($this->input->post('category_id') == '')
                $error['category_id'] = 'This field is required';
            if($this->input->post('price') == '')
                $error['price'] = 'This field is required';
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {
                $query = $this->Product->insert($this->upload->data()['file_name'], $this->input->post('name'), $this->input->post('category_id'), $this->input->post('description'), $this->input->post('price'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data inserted successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'update') {

            $error = [];
            
            $config['upload_path']          = 'public/uploads/product';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1200;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image') && $this->input->post('image') != '')
                $error['image'] = $this->upload->display_errors();
                
            if($this->input->post('name') == '')
                $error['name'] = 'This field is required';
            if($this->input->post('price') == '')
                $error['price'] = 'This field is required';
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {

                $config['upload_path']          = 'public/uploads/product';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1200;
                $config['encrypt_name']         = true;
                
                $this->load->library('upload', $config);

                $filename = $this->input->post('image_before');
                if($this->upload->do_upload('image'))
                    $filename = $this->upload->data()['file_name'];
                    
                $query = $this->Product->update($this->input->post('id'), $filename, $this->input->post('name'), $this->input->post('category_id'), $this->input->post('description'), $this->input->post('price'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data updated successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'delete') {

            if(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));

            $query = $this->Product->delete($this->input->post('id'));
            $this->session->set_flashdata(['status' => 'success', 'message' => 'Data deleted successfuly !']);
            redirect($_SERVER['HTTP_REFERER']);

        } elseif($action == 'get') {

            $query = $this->Product->get($id);

        } elseif($action == 'get_admin') {

            $query = $this->Product->get_admin();
            die(json_encode(['data' => $query]));

        } elseif($action == 'get_by_category') {

            $query = $this->Product->get_by_category($id);

        }

    }

    function category($action, $id = '') {
        
        header('Content-Type: application/json');

        $this->load->model('Category');

        if($action == 'insert') {

            $error = [];

            $config['upload_path']          = 'public/uploads/category';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1200;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image'))
                $error['image'] = $this->upload->display_errors();
                
            if($this->input->post('name') == '')
                $error['name'] = 'This field is required';
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {
                $query = $this->Category->insert($this->upload->data()['file_name'], $this->input->post('name'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data inserted successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'update') {

            $error = [];
            
            $config['upload_path']          = 'public/uploads/category';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1200;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image'))
                $error['image'] = $this->upload->display_errors();
                
            if($this->input->post('name') == '')
                $error['name'] = 'This field is required';
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {

                $config['upload_path']          = 'public/uploads/category';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1200;
                $config['encrypt_name']         = true;
                
                $this->load->library('upload', $config);

                $filename = $this->input->post('image_before');
                if($this->upload->do_upload('image'))
                    $filename = $this->upload->data()['file_name'];
                    
                $query = $this->Category->update($this->input->post('id'), $filename, $this->input->post('name'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data updated successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'delete') {

            if(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));

            $query = $this->Category->delete($this->input->post('id'));
            $this->session->set_flashdata(['status' => 'success', 'message' => 'Data deleted successfuly !']);
            redirect($_SERVER['HTTP_REFERER']);

        } elseif($action == 'get') {

            $query = $this->Category->get($id);

        } elseif($action == 'get_admin') {

            $query = $this->Category->get_admin();
            die(json_encode(['data' => $query]));

        } elseif($action == 'get_public') {

            $query = $this->Category->get_admin();

        }

    }

    function wraping($action, $id = '') {
        
        header('Content-Type: application/json');

        $this->load->model('Wrapping_type');

        if($action == 'insert') {

            $error = [];

            $config['upload_path']          = 'public/uploads/wraping_type';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1200;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image'))
                $error['image'] = $this->upload->display_errors();
                
            if($this->input->post('name') == '')
                $error['name'] = 'This field is required';
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {
                $query = $this->Wrapping_type->insert($this->upload->data()['file_name'], $this->input->post('name'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data inserted successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'update') {
            
            $error = [];
            
            $config['upload_path']          = 'public/uploads/wraping_type';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1920;
            $config['max_height']           = 1200;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image'))
                $error['image'] = $this->upload->display_errors();
                
            if($this->input->post('name') == '')
                $error['name'] = 'This field is required';
            // if($this->input->post('price') == '')
            //     $error['price'] = 'This field is required';
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {

                $config['upload_path']          = 'public/uploads/wrapping_type';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1200;
                $config['encrypt_name']         = true;
                
                $this->load->library('upload', $config);

                $filename = $this->input->post('image_before');
                if($this->upload->do_upload('image'))
                    $filename = $this->upload->data()['file_name'];
                    
                $query = $this->Wrapping_type->update($this->input->post('id'), $filename, $this->input->post('name'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data updated successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'delete') {

            if(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));

            $query = $this->Wrapping_type->delete($this->input->post('id'));
            $this->session->set_flashdata(['status' => 'success', 'message' => 'Data deleted successfuly !']);
            redirect($_SERVER['HTTP_REFERER']);
            
        } elseif($action == 'get') {

            $query = $this->Wrapping_type->get($id);

        } elseif($action == 'get_admin') {

            $query = $this->Wrapping_type->get_admin();
            die(json_encode(['data' => $query]));

        } elseif($action == 'get_public') {

            $query = $this->Wrapping_type->get_admin();

        }

    }

    // function letter_card($action, $id = '') {
        
    //     header('Content-Type: application/json');

    //     $this->load->model('Letter_card');

    //     if($action == 'insert') {

    //         $error = [];

    //         $config['upload_path']          = 'public/uploads/letter_card';
    //         $config['allowed_types']        = 'gif|jpg|png';
    //         $config['max_size']             = 1000;
    //         $config['max_width']            = 1920;
    //         $config['max_height']           = 1200;
    //         $config['encrypt_name']         = true;
            
    //         $this->load->library('upload', $config);
    //         if(!$this->upload->do_upload('image'))
    //             $error['image'] = $this->upload->display_errors();
                
    //         if($this->input->post('name') == '')
    //             $error['name'] = 'This field is required';
                
    //         if(count($error) > 0) 
    //             die(json_encode(['status' => 'failed', 'input' => $error]));
    //         elseif(!$this->input->post('pass') == 'pass')
    //             die(json_encode(['status' => 'success']));
    //         else {
    //             $query = $this->Letter_card->insert($this->upload->data()['file_name'], $this->input->post('name'));
    //             $this->session->set_flashdata(['status' => 'success', 'message' => 'Data inserted successfuly !']);
    //             redirect($_SERVER['HTTP_REFERER']);
    //         }

    //     } elseif($action == 'update') {
            
    //         $error = [];
            
    //         $config['upload_path']          = 'public/uploads/letter_card';
    //         $config['allowed_types']        = 'gif|jpg|png';
    //         $config['max_size']             = 1000;
    //         $config['max_width']            = 1920;
    //         $config['max_height']           = 1200;
    //         $config['encrypt_name']         = true;
            
    //         $this->load->library('upload', $config);
    //         if(!$this->upload->do_upload('image') && $this->input->post('image') != '')
    //             $error['image'] = $this->upload->display_errors();
                
    //         if($this->input->post('name') == '')
    //             $error['name'] = 'This field is required';
    //         // if($this->input->post('price') == '')
    //         //     $error['price'] = 'This field is required';
                
    //         if(count($error) > 0) 
    //             die(json_encode(['status' => 'failed', 'input' => $error]));
    //         elseif(!$this->input->post('pass') == 'pass')
    //             die(json_encode(['status' => 'success']));
    //         else {

    //             $config['upload_path']          = 'public/uploads/letter_card';
    //             $config['allowed_types']        = 'gif|jpg|png';
    //             $config['max_size']             = 1000;
    //             $config['max_width']            = 1920;
    //             $config['max_height']           = 1200;
    //             $config['encrypt_name']         = true;
                
    //             $this->load->library('upload', $config);

    //             $filename = $this->input->post('image_before');
    //             if($this->upload->do_upload('image'))
    //                 $filename = $this->upload->data()['file_name'];
                    
    //             $query = $this->Letter_card->update($this->input->post('id'), $filename, $this->input->post('name'));
    //             $this->session->set_flashdata(['status' => 'success', 'message' => 'Data updated successfuly !']);
    //             redirect($_SERVER['HTTP_REFERER']);
    //         }

    //     } elseif($action == 'delete') {

    //         if(!$this->input->post('pass') == 'pass')
    //             die(json_encode(['status' => 'success']));

    //         $query = $this->Letter_card->delete($this->input->post('id'));
    //         $this->session->set_flashdata(['status' => 'success', 'message' => 'Data deleted successfuly !']);
    //         redirect($_SERVER['HTTP_REFERER']);
            
    //     } elseif($action == 'get') {

    //         $query = $this->Letter_card->get($id);

    //     } elseif($action == 'get_admin') {

    //         $query = $this->Letter_card->get_admin();
    //         die(json_encode(['data' => $query]));

    //     } elseif($action == 'get_public') {

    //         $query = $this->Letter_card->get_admin();

    //     }

    // }

    function users_customer($action, $id = '') {
        
        $this->load->model('Category');

        if($action == 'insert') {

            $query = $this->Category->insert($full_name, $phone_number, $full_address, $email, $password);

        } elseif($action == 'update') {

            $query = $this->Category->update($id, $full_name, $phone_number, $full_address, $email, $password);

        } elseif($action == 'delete') {

            $query = $this->Category->delete($id);

        } elseif($action == 'get') {

            $query = $this->Category->get($id);

        } elseif($action == 'get_admin') {

            $query = $this->Category->get_admin();

        }

    }

    function cart($action, $id = '') {
        
        $this->load->model('Cart');

        if($action == 'insert') {

            $query = $this->Cart->insert($product_id, $qty, $user_customer_id);

        } elseif($action == 'update') {

            $query = $this->Cart->update($product_id, $qty, $user_customer_id);

        } elseif($action == 'delete') {

            $query = $this->Cart->delete($user_customer_id);

        } elseif($action == 'get') {

            $query = $this->Cart->get($user_customer_id);

        }

    }

    function process_order($action, $id = '') {
        
        header('Content-Type: application/json');

        $this->load->model('Process_order');
        $this->load->model('Process_order_detail');

        if($action == 'insert') {

            $query = $this->Process_order->insert($code, $status, $wrapping_type_id, $letter_card_id, $message, $destination_address, $user_customer_id, $payment_image);

        } elseif($action == 'update_payment_image') {

            $error = [];

            $config['upload_path']          = 'public/uploads/process_order';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5000;
            $config['max_width']            = 5000;
            $config['max_height']           = 5000;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('payment_image'))
                $error['payment_image'] = $this->upload->display_errors();
                
            if(count($error) > 0) 
                die(json_encode(['status' => 'failed', 'input' => $error]));
            elseif(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {
                $query = $this->Process_order->update_payment_image($this->input->post('id'), $this->upload->data()['file_name']);
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Bukti Pembayaran Berhasil di Upload !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'update_status') {
            
            if(!$this->input->post('pass') == 'pass')
                die(json_encode(['status' => 'success']));
            else {
                
                $query = $this->Process_order->update_status($this->input->post('id'), $this->input->post('status'));
                $this->session->set_flashdata(['status' => 'success', 'message' => 'Data updated successfuly !']);
                redirect($_SERVER['HTTP_REFERER']);
            }

        } elseif($action == 'get') {

            $query = $this->Process_order->get($id);

        } elseif($action == 'get_admin') {

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

            die(json_encode(['data' => $query]));


        } elseif($action == 'get_by_user') {

            $query = $this->Process_order->get_by_user();

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

            die(json_encode(['data' => $query]));

        }

    }

    
    function process_order_detail($action, $id = '') {
        
        $this->load->model('Process_order');

        if($action == 'insert') {

            $query = $this->Process_order->insert($process_order_id, $product_id, $qty, $subtotal);

        } elseif($action == 'get') {

            $query = $this->Process_order->get($id);
            
        }

    }


}