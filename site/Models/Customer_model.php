<?php

class Customer_model extends CI_Model {

    function addNewUser($userData) {
        $isExist = $this->db->where(array('login_id'=>$userData['username']))->count_all_results('users');
        if($isExist){
            return 'AE';
        } else {
            
            //user type : user (1)
            if($userData['user_type'] == 1){
               $loginKey = 1;
                if (!filter_var($userData['username'], FILTER_VALIDATE_EMAIL)) {
                    $loginKey = 2;
                } 
                
                $insertData['login_id'] = $userData['username'];
                $insertData['login_key'] = $loginKey;
                $insertData['user_type'] = 1; //user
                $insertData['full_name'] = $userData['fullname']; //user
            }
            
            //user type : seller (2)
            if($userData['user_type'] == 2){ 
                $insertData['login_id'] = $userData['username'];
                $insertData['login_key'] = $userData['login_key'];
                $insertData['user_type'] = 2; //user
                $insertData['address'] = $userData['address'];
                $insertData['contact_no'] = $userData['contact'];
            }
            $insertData['password'] = md5($userData['password']);
            
            // Save user
            $this->db->insert('users', $insertData);
            $userId = $this->db->insert_id();
            // Save seller record
            if($userData['user_type'] == 2){
                $sellerData['seller_id'] = $userId;
                $sellerData['category'] = implode(',',$userData['category']);
                $sellerData['shop_name'] = $userData['shop_name'];
                $sellerData['mall'] = $userData['mall'];
                
                $this->db->insert('seller', $sellerData);
            }
            
            $sessionData = array(
                'login_id'  => $userData['username'],
                'user_type'     => $userData['user_type'],
                'user_id'     => $userId,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($sessionData);
            
            return TRUE;
        }
        
    }
    
    function login($userData)
    {
        $isExist = $this->db->where(array('login_id'=>$userData['username'], 'password'=> md5($userData['password'])))->get('users');
        
        if($isExist->num_rows()){
            $user = $isExist->row();
            
            $sessionData = array(
                'login_id'  => $user->login_id,
                'user_type'     => $user->user_type,
                'user_id'     => $user->id,
                'logged_in' => TRUE,
            );

            $this->session->set_userdata($sessionData);
            
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    function getUserInfo()
    {
        $req = $this->db->where(array('id'=>$this->session->userdata('user_id')))->get('users');
        
        if($req->num_rows()){
            $user = $req->row();
            
            if(empty($user->profile_img)){
                $user->profile_img = base_url().'/assets/front/images/default.png';
            } else {
                $user->profile_img = base_url().'/upload/profile/user/'.$user->profile_img;
            }
            
            if(empty($user->gender)){
                $user->gender = 'Not selected';
            } else {
                $user->gender = $user->gender == 1 ? 'Male' : 'Female';
            }
            
            return $user;
        }
        
        return FALSE;
        
    }
    
    function updateProfile($userData)
    {
        $where = array('id'=>$this->session->userdata('user_id'));
        $this->db->update('users', $userData, $where);
    }

}