<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {
   
    function get_remote_ip_address()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
        else
        $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }//ENd FUnction
    function getAddress(){
        $api_key = "AIzaSyA08Cf5J2bVYZHLuD1VmJJ_iB_Ml2GghNw";
        $ip_addr = $this->get_remote_ip_address();
        //$location = file_get_contents('http://freegeoip.net/json/'. $ip_addr);
        $url ='http://freegeoip.net/json/'. $ip_addr;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $location =json_decode($response,true);
       // echo "<pre>";
       /// print_r($location);die;
        $add = (isset($location['city']) ? $location['city']:"").",".(isset($location['region_name']) ? $location['region_name']:"").",".(isset($location['country_name']) ? $location['country_name']:"").",".(isset($location['zip_code']) ? $location['zip_code']:"");
       $address=array('address'=>$add,
        'latitude' => isset($location['latitude']) ?$location['latitude']:"",
        'longitude' => isset($location['longitude']) ?$location['longitude']:"",
        'street_address' =>"",
        'street_address1' =>"",
        'city' =>isset($location['city']) ?$location['city']:"",
        'state' =>isset($location['region_code']) ?$location['region_code']:"",
        'zipcode' =>isset($location['zip_code']) ?$location['zip_code']:"",
        'country' =>isset($location['country_name']) ?$location['country_name']:"",'ip' =>TRUE); 
        return $address;
    }//ENd FUnction
    function getsessiondata(){
        $response = array();
        $session                    = $this->session->userdata('address');
        $response['address']         = !empty($session['address']) ? trim($session['address']) :'';
        $response['latitude']        = !empty($session['latitude']) ? trim($session['latitude']) :'';
        $response['longitude']       = !empty($session['longitude']) ? trim($session['longitude']) :'';
        $response['street_address']  = !empty($session['street_address1']) ? ($session['street_address']."-".$session['street_address1']) :'';
        $response['city']            = !empty($session['city']) ? trim($session['city']) :'';
        $response['state']           = !empty($session['state']) ? trim($session['state']) :'';
        $response['zipcode']         = !empty($session['zipcode']) ? trim($session['zipcode']) :'';
        $response['country']         = !empty($session['country']) ? trim($session['country']) :'';
        return $response;
    }//End FUnction
    public function searchProducts($latitude,$longitude,$address,$proId)
   {
        $search_responce = array();
        if(!empty($latitude) && !empty($longitude)):
            /* Check Delivery Area*/ 
            $area = $this->getDeliveryArea($latitude,$longitude);
            /* End  Delivery Area*/
            if(!empty($area)):
                /*echo "<pre>";
                print_r($area);die;*/
                if(isset($area->areaId) && $area->areaId!=null && isset($area->officeId) && $area->officeId!=null){
                    $officeId       = $area->officeId;
                    $areaId         = $area->areaId;
                    $availability   = $this->deliveryAvailability($officeId,$areaId);
                    $associatedPits = $area->associatedPitsId;
                    $maxDisance     = $area->maxDisance; 
                    $officeManager  = $area->officeManager; 
                    $areaName       = $area->areaName; 
                    $officeName     = $area->locationName; 
                    if(!empty($associatedPits)){
                        $pits       = explode(",",$associatedPits);
                        //$pits         = implode("|",$cat);
                        $nearstPit = $this->nearstPit($longitude,$latitude,$pits,$maxDisance,$officeId);
                        /*check nearest pit */
                        if(!empty($nearstPit)){
                            /*echo "<pre>";
                                print_r($nearstPit);
                            echo "</pre>";die;*/
                            foreach ($nearstPit as $k => $res) {
                                $pitId              = $res->pitId;
                                $distance           = $res->distance;
                                $assignPitStatus    = $res->assignPitStatus;
                                $pitName            = $res->pitName;
                                $assignProductId    = $res->assignProductId;
                                $products           = $this->products($assignProductId,$pitId,$officeId,$proId); 

                                foreach ($products as $key => $value) {
                                    $products[$key]->officeId       = $officeId;
                                    $products[$key]->officeName     = $officeName;
                                    $products[$key]->areaName       = $areaName;
                                    $products[$key]->areaId         = $areaId;
                                    $products[$key]->pitId          = $pitId;
                                    $products[$key]->distance       = $distance;
                                    $products[$key]->companyName    = $pitName;
                                    $products[$key]->pitName        = $pitName;
                                    $products[$key]->deliveryAval   = $availability;
                                    $products[$key]->coupon         = 0;
                                }
                                $search_responce =  array_merge($search_responce,$products);
                               
                            }
                        }else{
                            $user = $this->db->get_where('users',array('id'=>$officeManager))->row();
                            $this->load->model('email_model'); 
                            $subject = "When no delivery area found";
                            $message    = "Hello ".$user->fullName.",<br><br>Customer search product for delivery address : <b>".$address."</b> . This delivery address is outside the delivery area or not belongs to any delivery area. Please expand you delivery area for delivery<br><br><br>";
                            $path               = 'emails/mailsend.php';
                            $data['link']= "";
                            
                            $send =$this->email_model->mailSend($user->email,$message,$subject,$data,$path,false);
                          
                        }
                        /*check nearest pit */
                    
                    }//end if associatrd pit
                }//area check

            endif;//area check
        endif;// lat long  check
     return $search_responce;
   }//End function
   function getDeliveryArea($latitude,$longitude){
    $responce = new stdClass();
     $this->db->select("deliveryArea.id as areaId,deliveryArea.maximumDeliveryDistance as maxDisance, deliveryArea.officeId,deliveryArea.title as areaName,offices.associatedPitsId,offices.email,offices.officeManager,offices.locationName,assignOffice.status as asssignStatus")->from("deliveryArea");
             $this->db->join("offices","offices.id = deliveryArea.officeId");
             $this->db->join("assignOffice","assignOffice.officeId=offices.id");
             $this->db->where("ST_CONTAINS(deliveryArea.boundary, Point($longitude,$latitude))");
             $this->db->where(array('deliveryArea.status' => 1,'offices.status' => 1,'assignOffice.status' => 1,'assignOffice.trash' => 0,'assignOffice.isDeleted' => 0));
             $this->db->order_by('deliveryArea.maximumDeliveryDistance','DESC');
             $this->db->limit(1);
            $area = $this->db->get(); 
            if($area->num_rows()):
                $responce = $area->row();
            endif;//End area
        return  $responce;
   }//ENd FUnction
   function deliveryAvailability($officeId,$areaId){
        $deliveryAval = 0;
        $delAval =  $this->db->select('truckClassId')->from('deliveryManage')->where(array('officeId'=>$officeId,'areaId'=>$areaId,'approval'=>1,'status'=>1))->get();
                     
        if($delAval->num_rows()){
            $deliveryAval = 0;$dclass=array();
            foreach ($delAval->result() as $y => $tv) {
                    $dclass[] = $tv->truckClassId;
            }
            $this->db->select('id')->from('trucks')->where(array('officeId'=>$officeId,'status'=>1));
            $this->db->where_in('truckClassId',$dclass);
            $trucksa = $this->db->get();
            if($trucksa->num_rows()){
            $deliveryAval = $trucksa->num_rows();
            }
        }//Check Avalble
        return $deliveryAval;
   }//End Function 
   function nearstPit($longitude,$latitude,$pits,$maxDisance,$officeId){
        $array = array();
        $this->db->select("pits.id as pitId,pits.companyName as pitName,pits.latitude as dlat,pits.longitude as dlong,(((acos(sin(('$latitude'*pi()/180)) * sin((`latitude`*pi()/180))+cos(('$latitude'*pi()/180))* cos((`latitude`*pi()/180)) * cos((('$longitude'- `longitude`)*pi()/180))))*180/pi())*60*1.85334)  AS distance,assignPitOffice.status as assignPitStatus");
        $this->db->from("pits");
        $this->db->join("assignPitOffice","assignPitOffice.pitId = pits.id");
        //$this->db->where("pits.id  REGEXP '(^|,)($pits)(,|$)'");
        $this->db->where_in("pits.id",$pits);
        $this->db->where(array("assignPitOffice.status"=>1,"assignPitOffice.officeId"=>$officeId,"assignPitOffice.trash"=>0,"assignPitOffice.isDeleted"=>0,'pits.status'=>1));
        $this->db->having("distance < $maxDisance");
        $this->db->order_by('distance','asc');
        $this->db->limit(1);
        $sql =$this->db->get();

     // echo $this->db->last_query()."<br>";
        if($sql->num_rows()){
			  foreach ($sql->result() as $k => $nearpit) {
            	
            	$pitId      = $nearpit->pitId;
            	$assignProductId   = $this->assignProductId($pitId,$officeId);
            	if(!empty($assignProductId)):
					$res = new stdClass(); 
					$pitName   	= $nearpit->pitName;
					$lat   		= $nearpit->dlat;
					$long   	= $nearpit->dlong;
					$assignPitStatus   = $nearpit->assignPitStatus;
					
					$distance   = $this->roadRouteDistance($latitude,$longitude,$lat,$long);
					$distance =  !empty($distance) ? $distance : round($nearpit->distance,2);
				
					$res->pitId 			= $pitId;
					$res->distance 			= $distance;
					$res->assignPitStatus 	= $assignPitStatus;
					$res->pitName 			= $pitName;
					$res->assignProductId 	= $assignProductId;
					$array[] = $res;
				endif;
				
            }
            
            //~ foreach ($sql->result() as $k => $nearpit) {
                //~ $res = new stdClass(); 
                //~ $pitId      = $nearpit->pitId;
                //~ $pitName    = $nearpit->pitName;
                //~ $lat        = $nearpit->dlat;
                //~ $long       = $nearpit->dlong;
                //~ $assignPitStatus   = $nearpit->assignPitStatus;
                //~ $assignProductId   = $this->assignProductId($pitId,$officeId);
                //~ $distance   = $this->roadRouteDistance($latitude,$longitude,$lat,$long);
                //~ $distance =  !empty($distance) ? $distance : round($nearpit->distance,2);
            
                //~ $res->pitId             = $pitId;
                //~ $res->distance          = $distance;
                //~ $res->assignPitStatus   = $assignPitStatus;
                //~ $res->pitName           = $pitName;
                //~ $res->assignProductId   = $assignProductId;
                //~ $array[] = $res;
            //~ }
        }//
        // echo "<pre>";
        // print_r($array);
        // echo "<br>";
        return $array;
    }//ENd FUnction
    function assignProductId($pitId,$officeId){
        $productId=array();
        $sql =  $this->db->select('*')->where(array('pitId'=>$pitId,'officeId'=>$officeId,'status'=>1,'trash'=>0,'productId !='=>0))->get('assignProductPit');
        if($sql->num_rows()):
            foreach ($sql->result() as $p => $v) {
                $productId[] =$v->productId;
            }
        endif;
        return $productId;
    }//End Function
    function roadRouteDistance($lat1,$long1,$lat2,$long2){
        $origins = $lat1.','.$long1;
        $destinations =  $lat2.','.$long2;
        //~ echo '$origins: '.$origins;
        //~ echo '<br>$destinations: '.$destinations;
        //~ echo "<br>";
        $mile =  0;
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?key=AIzaSyA2Iwg8s9KBP6Q59OLHlF_Em1GjJ87ZWMk&origins=".$origins."&destinations=".$destinations."&mode=driving&mode=driving&language=pl-PL";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $response_a = json_decode($response, true);
        ///print_r($response_a);die('fdfd');
        $distance = (isset($response_a['rows'][0]['elements'][0]['distance']['text']) && !empty($response_a['rows'][0]['elements'][0]['distance']['text'])) ?$response_a['rows'][0]['elements'][0]['distance']['text'] :0;
        if(!empty($distance)){
            $dis =  trim(str_replace(array(",","km"),array(".",""),$distance));
            
            //$mile = ceil($dis* 0.62137);
             $mile= $dis*0.62137;
            $mile = round($mile,2);
        }
        return $mile;
        
    }//ENd FUnction
    function products($assignProductId,$pitId,$officeId,$proId){
        $array = array();
        $this->db->select("product.name as productName ,product.id as productId ,product.productImage,product.productImage2,product.productImage3,product.productImage4,product.specification,product.application,product.yd3weight,assignProductPit.cost,assignProductPit.resale,assignProductPit.unitTypeId,assignProductPit.status as asStatusPro,category.name as category,unitType.unitType")->from("assignProductPit");
        $this->db->join('product','product.id= assignProductPit.productId');
        $this->db->join('category','category.id = product.categoryId');
        $this->db->join('unitType','unitType.id = assignProductPit.unitTypeId');
        $this->db->where(array('product.status'=>1,'assignProductPit.status'=>1,'assignProductPit.trash'=>0,'assignProductPit.pitId'=>$pitId,'assignProductPit.officeId'=>$officeId));
        $this->db->where_in('assignProductPit.productId',$assignProductId);
        $this->db->where('assignProductPit.productId',$proId);
        $this->db->order_by('assignProductPit.id','asc');
        $sql = $this->db->get();
        if($sql->num_rows()):
            $array = $sql->result();
        endif;
        return $array;
    }//End Function 
    
}//End Class
