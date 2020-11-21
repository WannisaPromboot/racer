<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Store;
use App\Customer;
use App\StoreAccount;
use App\StoreStaff;
use App\Store_admin;
use App\Store_review;
use App\StoreBusiness;
use App\Store_gallery;
use App\Service;
use App\StoreitemBusiness;
use App\Store_datetime;
use App\Employer;
use App\Keyword;
use App\KeywordItem;
use App\StoreComission;
use Crypt;
use Storage;
use DB;

class CustomerController extends Controller
{

    public function Findphone($value){
        $customer = Customer::where('telephone',$value)->first();
        if(!empty($customer)){
            return '1';
        }else{
            return '0';
        }
    }

    public function Findemail($value){
        $customer = Customer::where('email',$value)->first();
        if(!empty($customer)){
            return '1';
        }else{
            return '0';
        }
    }


    public function managemembercontent(Request $request,$type){
        if($type=='customer'){
            $customer = Customer::all();

            return view('Admin.store_customer.store_customer-content',['type'=>'customer','customer'=>$customer]);
        }else{
            $store = Store_admin::all();
            return view('Admin.store_customer.store_customer-content',['type'=>'store','storeall'=>$store]);
        }
      
    }
   
    public function editmanagemember(Request $request,$type,$id){
        if($type=='customer'){
                $customer = Customer::where('customer_id',$id)->first();
               
            return view('Admin.store_customer.edit-customer',['type'=>'customer','customer'=>$customer]);
        }else{
           // dd( DB::Table('weekend')->get());
            $data = array(  
                'id'        => $id,
                'account'  =>  StoreAccount::where('id_store',$id)->first(),
                'business' =>  StoreBusiness::where('id_store',$id)->first(),
                'store'    =>  Store_admin::where('id_store',$id)->first(),
                'type'      => 'store',
                'review'=> Store_review::where('status',2)->where('id_store',$id)->get(),
                'img'=> Store_gallery::where('id_store','=',$id)->get(),
                'service'   =>   Service::where('id_store',$id)->get(),
                'datetime'  => \App\Store_datetime::where('id_store',$id)->get(),
                'file'      => StoreitemBusiness::where('store_id',$id)->get(),
                'day'       => Store_datetime::all(),
                "service"=>   Service::where('id_store',$id)->get(),
                "employer"=> Employer::where('id_store',$id)->get(),
                'weekend'=> DB::Table('weekend')->get(),
            );
            // dd($data['employer']);
            return view('Admin.store_customer.edit-store',$data);
        }
      
    }

    public function Savemember(Request $request){
        $random = mt_rand(1000000000, 9999999999);
        $customer = new Customer;
        $customer->customer_id = $random;
        if(isset($request->name)){
            $customer->name = $request->name;
        }
        if(isset($request->lastname)){
            $customer->lastname = $request->lastname;
        }
        if(isset($request->email)){
            $customer->email = $request->email;
        }
        if(isset($request->password)){
            $pws = Crypt::encryptString($request->password);
            $customer->password = $pws;
        }
        if(isset($request->phone)){
            $customer->telephone = $request->phone;
        }
        if(isset($request->birthday)){
            $customer->birthday =  $request->birthday;
        }
        if(isset($request->line)){
            $customer->line =  $request->line;
        }
        $customer->save();
        return redirect('managemembercontent/customer')->with('Save','เพิ่มลูกค้าเรียบร้อยแล้ว');
    }

    public function updatecustomer_admin(Request $request){
        // dd($request->all());
        $customer =  Customer::where('customer_id',$request->customer_id)->first();
        if(isset($request->name)){
            $customer->name = $request->name;
        }
        if(isset($request->lastname)){
            $customer->lastname = $request->lastname;
        }
        if(isset($request->email)){
            $customer->email = $request->email;
        }
        if(isset($request->password)){
            $pws = Crypt::encryptString($request->password);
            $customer->password = $pws;
        }
        if(isset($request->telephonenew)){
            $customer->telephone = $request->telephonenew;
        }
        if(isset($request->birthday)){
            $customer->birthday =  $request->birthday;
        }
        $customer->save();
        return redirect()->back()->with('Update','แก้ไขเนื้อหาเรียบร้อยแล้ว');
    }

    public function addmember(Request $request,$type){
        if($type=='customer'){
            return view('Admin.store_customer.add-customer',['type'=>'customer']);
        }else{
            return view('Admin.store_customer.add-store',['type'=>'store']);
        }
    }

    
    public function Addextareview(Request $request,$store){

        $data = array(
            'id_store' =>$store
        );
        
            return view('Admin.store_customer.add-extrareview',$data);
    }

    public function extareview(Request $request,$id){
       $data= array(
        'review_edit'=> Store_review::where('id_store_review',$id)->first(),
       );
        return view('Admin.store_customer.extrareview',$data);
    }

    public function AdminSaveStore(Request $request){
       // $digits = 3;
       // $newstoreId = date('ymd').rand(pow(10, $digits-1), pow(10, $digits)-1);
        $StoreAccountContent = new StoreAccount;
        $StoreContent = new Store_admin;
        $StoreBusinessContent = new StoreBusiness;

        /////////store

        $StoreContent->id_store = $request->id_store;
        $StoreContent->store_name_th   = $request->store_name_th;
        $StoreContent->store_name_en   = $request->store_name_en;
        $StoreContent->store_name_ch   = $request->store_name_ch;
        $StoreContent->store_email   = $request->store_email;
        $StoreContent->store_phone   = $request->store_phone;
        $StoreContent->about_th   = $request->about_th;
        $StoreContent->about_en   = $request->about_en;
        $StoreContent->about_ch   = $request->about_ch;

        if($request->store_preview_image !== null){
            $newFilename = 'Store/'.time().$request->store_preview_image->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($request->store_preview_image ));
            $StoreContent->store_preview_image = $newFilename;
        }

        $StoreContent->save();

        /** account*/

        $StoreAccountContent->id_store =   $request->id_store ;
        $StoreAccountContent->account_email = $request->account_email;
        $StoreAccountContent->account_phone = $request->account_phone;
        $StoreAccountContent->account_line = $request->account_line;
        $StoreAccountContent->manager_th = $request->manager_th;
        $StoreAccountContent->manager_en = $request->manager_en;
        $StoreAccountContent->manager_phone = $request->manager_phone;
        $StoreAccountContent->manager_email = $request->manager_email;
        $StoreAccountContent->book_th = $request->book_th;
        $StoreAccountContent->book_en = $request->book_en;
        $StoreAccountContent->book_phone = $request->book_phone;
        $StoreAccountContent->book_email = $request->book_email;
        $StoreAccountContent->status_store_account = $request->status_store_account;
          ////encrypassword
        $pws = Crypt::encryptString($request->password);
        $StoreAccountContent->password =  $pws;
        $StoreAccountContent->save();

/////////bank
        $StoreBusinessContent->id_store  = $request->id_store;
        $StoreBusinessContent->store_number = $request->store_number;
        $StoreBusinessContent->bank_th = $request->bank_th;
        $StoreBusinessContent->bank_en = $request->bank_en;
        $StoreBusinessContent->bank_person_th = $request->bank_person_th;
        $StoreBusinessContent->bank_person_en = $request->bank_person_en;
        $StoreBusinessContent->bank_id = $request->bank_id;
        $StoreBusinessContent->status_store_business = $request->status_store_business;
        $StoreBusinessContent->status_store_book = $request->status_store_book;
        $certificateFilename = 'StoreBusiness/'.time().$request->file('certificate')->getClientOriginalName();
        Storage::put($certificateFilename, file_get_contents($request->certificate));
        $StoreBusinessContent->certificate = $certificateFilename;
        $newFilename = 'StoreBusiness/'.time().$request->file('document')->getClientOriginalName();
        Storage::put($newFilename, file_get_contents($request->document));
        $StoreBusinessContent->document = $newFilename;
        $StoreBusinessContent->save();


        ////////////////staff admin
        $newStaffContent = new StoreStaff;

        $newStaffContent->staff_firstname_th = $request->manager_th;
        $newStaffContent->staff_firstname_en = $request->manager_en ;
        $newStaffContent->staff_lastname_th = NULL;
        $newStaffContent->staff_lastname_en = NULL;
        $newStaffContent->staff_email = $request->manager_email;
        $newStaffContent->staff_phone = $request->manager_phone;
        $newStaffContent->staff_privilege = 1;
        $newStaffContent->id_store = $request->id_store;

          ////encrypassword
        $pws = Crypt::encryptString($request->password);
        $newStaffContent->staff_password =  $pws;
        $newStaffContent->save();

        /////////storecommsion
        $newStore = new StoreComission;
        $newStore->id_store  = $request->id_store;
        $newStore->date_start = $request->date_start;
        $newStore->date_finish = $request->date_finish;
        $newStore->paynow = $request->paynow;
        $newStore->commision = $request->commision;

        $newStore->save();


        return redirect('managemembercontent/store')->with('Save','เพิ่มเนื้อหาเรียบร้อยแล้ว');
    }
///////////////บัญชีร้านค้า
    
    public function AdminUpdateStore(Request $request,$id){

        $StoreAccountContent = StoreAccount::where('id_store',$id)->first();
        
        $StoreAccountContent->account_email = $request->account_email;
        $StoreAccountContent->account_phone = $request->account_phone;
        $StoreAccountContent->account_line = $request->account_line;
        $StoreAccountContent->manager_th = $request->manager_th;
        $StoreAccountContent->manager_en = $request->manager_en;
        $StoreAccountContent->manager_phone = $request->manager_phone;
        $StoreAccountContent->manager_email = $request->manager_email;
        $StoreAccountContent->book_th = $request->book_th;
        $StoreAccountContent->book_en = $request->book_en;
        $StoreAccountContent->book_phone = $request->book_phone;
        $StoreAccountContent->book_email = $request->book_email;
        $StoreAccountContent->status_store_account = 0;
          ////encrypassword
        $pws = Crypt::encryptString($request->password);
        $StoreAccountContent->password =  $pws;
        $StoreAccountContent->save();

        $request = \App\RequestModel::where('id_store',$id)->where('status',1)->orderBy('request_id','desc')->first();
        if(!empty($request)){
            DB::table('request')->where('id_store',$id)->where('status',1)->orderBy('request_id','desc')->update(['status'=>'2']);
        }
        return redirect()->back()->with('Update','แก้ไขเนื้อหาเรียบร้อยแล้ว');
    }

    ////////////////ข้อมูลทางธุรกิจ

    public function AdminUpdateBusiness(Request $request,$id){

        $StoreBusinessContent =  StoreBusiness::where('id_store',$id)->first();
        $StoreBusinessContent->store_number = $request->store_number;
        $StoreBusinessContent->status_store_business = 0;
        ////////file
        if($request->certificate !== null){
        $newFilename = 'StoreBusiness/'.time().$request->certificate->getClientOriginalName();
        Storage::put($newFilename, file_get_contents($request->certificate));
        $StoreBusinessContent->certificate = $newFilename;
        }
        $StoreBusinessContent->save();

///////////////////////////////////////item///////////////////////////////////////////////////////////
       
        if(isset($request["deleteitem"])){
            foreach($request["deleteitem"] as $delete_id){ 
                StoreitemBusiness::where('store_business_id',$delete_id)->delete();
            }
        }


        if(isset($request['filepath'])){    
            foreach($request->file('filepath') as $key => $file){
                $updateSubcontent = StoreitemBusiness::where('store_business_id',$key)->first();
                if($updateSubcontent == NULL){
                    $newSubContent = new StoreitemBusiness;
                    $newSubContent->store_id = $id;
                    $newFilename = 'StoreitemBusiness/'.time().$file->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($file));
                    $newSubContent->filepath = $newFilename;
                    $newSubContent->name  = $request->name[$key];
                    $newSubContent->save();

                }else{
                    $newFilename = 'StoreitemBusiness/'.time().$file->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($file));
                    $updateSubcontent->filepath = $newFilename;
                    $updateSubcontent->name  = $request->name[$key];

                    $updateSubcontent->save();
                }
            }
        }

        if(isset($request['name'])){      
            foreach($request->name as $key => $name){
                $updateSubcontent = StoreitemBusiness::where('store_business_id',$key)->first();
                    $updateSubcontent->name  = $request->name[$key];
                    $updateSubcontent->save();
            }
        }

        $request = \App\RequestModel::where('id_store',$id)->where('status',1)->orderBy('request_id','desc')->first();
        if(!empty($request)){
            DB::table('request')->where('id_store',$id)->where('status',1)->orderBy('request_id','desc')->update(['status'=>'2']);
        }

        return redirect()->back()->with('Update','แก้ไขเนื้อหาเรียบร้อยแล้ว');
    }


    public function AdminUpdateBook(Request $request,$id){
        $StoreBusinessContent =  StoreBusiness::where('id_store',$id)->first();

        $StoreBusinessContent->bank_th = $request->bank_th;
        $StoreBusinessContent->bank_en = $request->bank_en;
        $StoreBusinessContent->bank_person_th = $request->bank_person_th;
        $StoreBusinessContent->bank_person_en = $request->bank_person_en;
        $StoreBusinessContent->bank_id = $request->bank_id;
        $StoreBusinessContent->status_store_book = 0;

        if($request->document !== null){
        $newFilename = 'StoreBusiness/'.time().$request->file('document')->getClientOriginalName();
        Storage::put($newFilename, file_get_contents($request->document));
        $StoreBusinessContent->document = $newFilename;
        }

        $StoreBusinessContent->save();

        $request = \App\RequestModel::where('id_store',$id)->where('status',1)->orderBy('request_id','desc')->first();
        if(!empty($request)){
            DB::table('request')->where('id_store',$id)->where('status',1)->orderBy('request_id','desc')->update(['status'=>'2']);
        }

        return redirect()->back()->with('Update','แก้ไขเนื้อหาเรียบร้อยแล้ว');
    }

    public function AdminViewService(Request $request,$id){

        $service = Service::where('id_service',$id)->first();

        return view('Admin.store_customer.edit-service',['service'=>$service]); 
     }

     
     public function AdminAddService (Request $request,$id){
        return view('Admin.store_customer.add-service',['id'=>$id]);
     }
     
     
     public function AdminStoreService(Request $request,$id){
            $service = new Service;
            $service->id_store = $id;   

            $service->category_id = $request->category_id;   
            $service->subcategory1_id = $request->subcategory1_id;   
            $service->subcategory2_id = $request->subcategory2_id;    
            $service->service_name_th = $request->service_name_th;
            $service->service_name_en = $request->service_name_en;      
            $service->service_name_ch = $request->service_name_ch;
            $service->service_time = $request->service_time;
            $service->service_price = $request->service_price;     
            $service->service_free = $request->service_free;
            $service->description_th = $request->description_th;
            $service->description_en = $request->description_en;      
            $service->description_ch = $request->description_ch;
        
        if($request->preview_image !== null){
            $newFilename = 'Service/'.time().$request->preview_image->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($request->preview_image));
            $service->service_image = $newFilename;
        }

        $service->save();
        return redirect('editmanagemember/store/'.$id)->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
    } 
    
    
    
    public function UpdateServiceByadmin(Request $request){   
        $newservice = Service::where('id_service',$request->id_service)->first();
    // dd($request->all());
        if(isset($request->category_id)){
            $newservice->category_id = $request->category_id;   
        }
        if(isset($request->subcategory1_id)){
            $newservice->subcategory1_id = $request->subcategory1_id;   
        }
        if(isset($request->subcategory2_id)){
            $newservice->subcategory2_id = $request->subcategory2_id;   
        }
        if(isset($request->service_name_th)){   
            $newservice->service_name_th = $request->service_name_th;
        }
        if(isset($request->service_name_en)){
            $newservice->service_name_en = $request->service_name_en;
        }
        if(isset($request->service_name_ch)){       
            $newservice->service_name_ch = $request->service_name_ch;
        }
        if(isset($request->service_time)){   
            $newservice->service_time = $request->service_time;
        }
        if(isset($request->service_price)){
            $newservice->service_price = $request->service_price;
        }
        if(isset($request->service_free)){       
            $newservice->service_free = $request->service_free;
        }
        if(isset($request->description_th)){   
            $newservice->description_th = $request->description_th;
        }
        if(isset($request->description_en)){
            $newservice->description_en = $request->description_en;
        }
        if(isset($request->description_ch)){       
            $newservice->description_ch = $request->description_ch;
        }

        if(isset($request->checkfree)){
            $newservice->status_free = $request->checkfree;
        }

        if($request->preview_image !== null){
            $newFilename = 'Service/'.time().$request->preview_image->getClientOriginalName();
            Storage::put($newFilename, file_get_contents($request->preview_image));
            $newservice->service_image = $newFilename;
        }
        $newservice->save();
        return redirect()->back()->with('Update','แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    public function RequestStatus(Request $request){
          StoreAccount::where('id_account',$request->id)->update(['status_store_account' => '1']);  
    }   

    public function ApproveStatus(Request $request){
        StoreAccount::where('id_account',$request->id)->update(['status_store_account' => '2']);  
    }   
  
  
    public function RequestBusiness(Request $request){
        StoreBusiness::where('id_store',$request->id)->update(['status_store_business' => '1']);  
    }   

    public function ApproveBusiness(Request $request){
    StoreBusiness::where('id_store',$request->id)->update(['status_store_business' => '2']);  
    }   

    public function RequestBook(Request $request){
        StoreBusiness::where('id_store',$request->id)->update(['status_store_book' => '1']);  
    }   

    public function ApproveBook(Request $request){
    StoreBusiness::where('id_store',$request->id)->update(['status_store_book' => '2']);  
    }   



//////////////////////////////Store///////////////////////////////////////////////////////////////

        public function UpdateStoreDetailByadmin(Request $request){

            $newdetail = Store::where('id_store',$request->id_store)->first();
            
            if(isset($request->store_name_th)){
                $newdetail->store_name_th = $request->store_name_th;  
            } 
            if(isset($request->store_name_en)){
                $newdetail->store_name_en = $request->store_name_en;   
            }
            if(isset($request->store_name_ch)){
                $newdetail->store_name_ch = $request->store_name_ch;   
            }
            if(isset($request->store_email)){   
                $newdetail->store_email = $request->store_email;
            }
            if(isset($request->store_phone)){
                $newdetail->store_phone = $request->store_phone;
            }
            if(isset($request->store_address)){   
                $newdetail->store_address = $request->store_address;
            }
            if(isset($request->store_web)){   
                $newdetail->store_web = $request->store_web;
            }
            if(isset($request->about_th)){       
                $newdetail->about_th = $request->about_th;
            }
            if(isset($request->about_en)){       
                $newdetail->about_en = $request->about_en;
            }
            if(isset($request->about_ch)){       
                $newdetail->about_ch = $request->about_ch;
            }

            if($request->paystore_status == 'on'){       
                $newdetail->paystore_status = 1;
            }else{
                $newdetail->paystore_status = 0;
            }

            if($request->paynow_status == 'on'){      

                $newdetail->paynow_status = 1;
            }else{
                $newdetail->paynow_status = 0;
            }

            
            if($request->booknow_status == 'on'){      

                $newdetail->booknow_status = 1;
            }else{
                $newdetail->booknow_status = 0;
            }

            $newdetail->Store_status = 2;


            if($request->preview_image !== null){
                $newFilename = 'Store/'.time().$request->preview_image->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->preview_image));
                $newdetail->store_preview_image = $newFilename;
            }

             $newdetail->save();

            if(isset($request["deleteimage"])){
                foreach($request["deleteimage"] as $delete_picture_id){ 
                    Store_gallery::where('id_store_gallery',$delete_picture_id)->delete();
                }
            }

            if(isset($request["sub_gallery"]) && $request["sub_sort"]){      
                foreach($request["sub_gallery"] as $key => $subgallery){
                    $updateSubcontent = Store_gallery::where('id_store_gallery',$key)->first();

                    if($updateSubcontent ==NULL){
                        $newSubContent = new Store_gallery;
                        $newSubContent->id_store = $newdetail->id_store;
                        $newFilename = 'Store_gallery/'.time().$subgallery->getClientOriginalName();
                        Storage::put($newFilename, file_get_contents($subgallery));
                        $newSubContent->filepath = $newFilename;
                        $newSubContent->sort  = $request->sub_sort[$key];
                        $newSubContent->save();
                    }else{
                        $newFilename = 'Store_gallery/'.time().$subgallery->getClientOriginalName();
                        Storage::put($newFilename, file_get_contents($subgallery));
                        $updateSubcontent->filepath = $newFilename;
                        //$updateSubcontent->sort  = $request->sub_sort[$key];
                        $updateSubcontent->save();
                    }

                }
            }

            ///////////////update sort
            if(isset($request["sub_sort"]) ){   
                foreach($request["sub_sort"] as $key => $subgallery){
                    $updateSubcontent = Store_gallery::where('id_store_gallery', $key)->first();
                    if(!empty( $updateSubcontent )){
                        $updateSubcontent->sort  = $request->sub_sort[$key];
                        $updateSubcontent->save();
                    }
                   


                }
            }

            //////keyword
            if(isset($request->deletekey)){

                // dd($request->deletekey);
                 foreach($request->deletekey  as $_keyword ){

                     $itemkey = KeywordItem::where('id',$_keyword)->first();
                     //dd($itemkey);
                     DB::table('keyword')->where('keyword_id',$itemkey->keyword_id)->delete();
                     DB::table('keyword_item')->where('id',$_keyword)->delete();
                 }
             }
             

             if(isset($request->addkey)){
                 foreach($request->addkey  as $_keyword ){
                    DB::table('keyword')->where('keyword_id',$_keyword)->update(['status'=> 1]);
                 }
             }

            return redirect('editmanagemember/store/'.$request->id_store.'')->with('Update','แก้ไขข้อมูลเรียบร้อยแล้ว');
  

    
        }

        /////save จากหน้า view
        public function ViewSaveStoreDetailByadmin($id){
                $store = \App\Store::where('id_store',$id)->first();

                $store->store_status = 2 ;
                $store->save();

                return redirect('editmanagemember/store/'.$id.'');
        }

        /////view store
        public function ViewStore($id){

            return view('Admin.store_customer.category_inside',['id' => $id]);
        }


        public function ViewUpdateStoreDetailByadmin(Request $request){
            if(isset($request["deletedkey"])){
                foreach($request["deletedkey"] as $delete_picture_id){ 
                    Store_gallery::where('id_store_gallery',$delete_picture_id)->delete();
                }
            }

            if(isset($request["sub_gallery"])){      
                foreach($request["sub_gallery"] as $key => $subgallery){
                    $updateSubcontent = Store_gallery::where('id_store_gallery',$key)->first();

                    if($updateSubcontent ==NULL){
                        $newSubContent = new Store_gallery;
                        $newSubContent->store_id = Session::get('store_id');
                        $newFilename = 'Store_gallery/'.time().$subgallery->getClientOriginalName();
                        Storage::put($newFilename, file_get_contents($subgallery));
                        $newSubContent->filepath = $newFilename;
                        $newSubContent->sort  = $request->sub_sort[$key];
                        $newSubContent->save();
                    }else{
                        $newFilename = 'Store_gallery/'.time().$subgallery->getClientOriginalName();
                        Storage::put($newFilename, file_get_contents($subgallery));
                        $updateSubcontent->filepath = $newFilename;
                        $updateSubcontent->sort  = $request->sub_sort[$key];
                        $updateSubcontent->save();
                    }

                }
            }

            $newdetail = Store::where('id_store',$request->id_store)->first();
            
                $newdetail->store_name_th = $request->store_name_th;  
                $newdetail->store_name_en = $request->store_name_en;   
                $newdetail->store_name_ch = $request->store_name_ch;    
                $newdetail->store_email = $request->store_email;
                $newdetail->store_phone = $request->store_phone; 
                $newdetail->store_address = $request->store_address;
                $newdetail->store_web = $request->store_web;     
                $newdetail->about_th = $request->about_th;      
                $newdetail->about_en = $request->about_en;    
                $newdetail->about_ch = $request->about_ch;
                $newdetail->about_ch = $request->about_ch;
                $newdetail->store_status = 1;

                $newdetail->save();

            return redirect('viewstore/'.$request->id_store.'');
    }


        public function SaveStoreReviewByadmin(Request $request){
            if(!empty($request->idreview)){
                $updatereview = \App\Store_review::where('id_store_review',$request->idreview)->first();

                ////video youtube
                $youtube =  str_replace("watch?v=", "embed/",$request->video);
                $updatereview->video = $youtube;

                $updatereview->title_th = $request->title_th;
                $updatereview->title_en = $request->title_en;    
                $updatereview->title_ch = $request->title_ch;
                $updatereview->review_th = $request->review_th;
                $updatereview->review_en = $request->review_en;    
                $updatereview->review_ch = $request->review_ch;
                $updatereview->id_store = Session::get('store_id');
                $updatereview->status = 2; /// 2 is save 
                $updatereview->created = 0;///////admin

                $updatereview->save();


            }else{
                $newstore_review = new Store_review;

                if(isset($request->title_th)){   
                    $newstore_review->title_th = $request->title_th;
                }
                if(isset($request->title_en)){
                    $newstore_review->title_en = $request->title_en;
                }
                if(isset($request->title_ch)){       
                    $newstore_review->title_ch = $request->title_ch;
                }
                if(isset($request->review_th)){   
                    $newstore_review->review_th = $request->review_th;
                }
                if(isset($request->review_en)){
                    $newstore_review->review_en = $request->review_en;
                }
                if(isset($request->review_ch)){       
                    $newstore_review->review_ch = $request->review_ch;
                }
    
                $newstore_review->status = 2;  /// 2 is save 
                $newstore_review->created = 0;///////admin
                ////video youtube
                $youtube =  str_replace("watch?v=", "embed/",$request->video);
                $newstore_review->video = $youtube;
    
                if($request->preview_image !== null){
                    $newFilename = 'Store_review/'.time().$request->preview_image->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($request->preview_image));
                    $newstore_review->image_review = $newFilename;
                }
                $newstore_review->save();

            }

            return redirect()->back()->with('Save','บันทึกข้อมูลเรียบร้อยแล้ว');
         
        }


        public function viewreviewascustomer($id){
            return view('Admin.store_customer.viewblog',['id' =>$id]); 
        }

        public function viewupdatereviewascustomer($id){
            return view('Admin.store_customer.viewblog_1',['id' =>$id]); 
        }

        public function viewsavereviewascustomer($id){
            $updatereview = \App\Store_review::where('id_store_review',$id)->first();
            $updatereview->status = 2;
            $updatereview->save(); 

            return redirect('editmanagemember/store/'.$updatereview->id_store.'');

        }


        public function ViewSaveStoreReviewByadmin(Request $request){


            if(!empty($request->idreview)){
                $updatereview = \App\Store_review::where('id_store_review',$request->idreview)->first();

                if($request->preview_image !== null){
                    $newFilename = 'Store_review/'.time().$request->preview_image->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($request->preview_image));
                    $updatereview->image_review = $newFilename;
                }

                                     ////video youtube
                $youtube =  str_replace("watch?v=", "embed/",$request->video);
                $updatereview->video = $youtube;

                $updatereview->title_th = $request->title_th;
                $updatereview->title_en = $request->title_en;    
                $updatereview->title_ch = $request->title_ch;
                $updatereview->review_th = $request->review_th;
                $updatereview->review_en = $request->review_en;    
                $updatereview->review_ch = $request->review_ch;
                $updatereview->id_store = Session::get('store_id');
                $updatereview->status = 1;
                $updatereview->created = 0;///////admin
                

                $updatereview->save();

                return redirect('viewreviewascustomer/'.$updatereview->id_store_review.'');

               // return view('Admin.store_customer.viewblog_1',['id' =>$updatereview->id_store_review]); 

            }else{
                
            $newstore_review = new Store_review;
            if(isset($request->title_th)){   
                $newstore_review->title_th = $request->title_th;
            }
            if(isset($request->title_en)){
                $newstore_review->title_en = $request->title_en;
            }
            if(isset($request->title_ch)){       
                $newstore_review->title_ch = $request->title_ch;
            }
            if(isset($request->review_th)){   
                $newstore_review->review_th = $request->review_th;
            }
            if(isset($request->review_en)){
                $newstore_review->review_en = $request->review_en;
            }
            if(isset($request->review_ch)){       
                $newstore_review->review_ch = $request->review_ch;
            }

                $newstore_review->id_store = $request->id_store;
                $newstore_review->status = 1;
                $newstore_review->created = 0;///////admin

                ////video youtube
                $youtube =  str_replace("watch?v=", "embed/",$request->video);
                $newstore_review->video = $youtube;
            

           

            if($request->preview_image !== null){
                $newFilename = 'Store_review/'.time().$request->preview_image->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->preview_image));
                $newstore_review->image_review = $newFilename;
            }

            $newstore_review->save();
            return redirect('viewreviewascustomer/'.$newstore_review->id_store_review.'');

           // return view('Admin.store_customer.viewblog_1',['id' =>$newstore_review->id_store_review]); 
            }
        }


        public function UpdateStoreReviewByadmin(Request $request){

            $newreview = \App\Store_review::where('id_store_review',$request->id_store_review)->first();
  
            if(isset($request->title_th)){   
                $newreview->title_th = $request->title_th;
            }
            if(isset($request->title_en)){
                $newreview->title_en = $request->title_en;
            }
            if(isset($request->title_ch)){       
                $newreview->title_ch = $request->title_ch;
            }
            if(isset($request->review_th)){   
                $newreview->review_th = $request->review_th;
            }
            if(isset($request->review_en)){
                $newreview->review_en = $request->review_en;
            }
            if(isset($request->review_ch)){       
                $newreview->review_ch = $request->review_ch;
            }

             
            $newreview->status = 2;  /// 1 is view
            $newreview->created = 0;///////admin

            ////video youtube
            $youtube =  str_replace("watch?v=", "embed/",$request->video);
            $newreview->video = $youtube;

            if($request->preview_image !== null){
                $newFilename = 'Store_review/'.time().$request->preview_image->getClientOriginalName();
                Storage::put($newFilename, file_get_contents($request->preview_image));
                $newreview->image_review = $newFilename;
            }
            $newreview->save();
            return redirect()->back()->with('Update','แก้ไขข้อมูลเรียบร้อยแล้ว');

        }

        public function ViewUpdateStoreReviewByadmin(Request $request){

            $newreview = \App\Store_review::where('id_store_review',$request->id_store_review)->first();

                $newreview->title_th = $request->title_th;
                $newreview->title_en = $request->title_en;   
                $newreview->title_ch = $request->title_ch;
                $newreview->review_th = $request->review_th;
                $newreview->review_en = $request->review_en;   
                $newreview->review_ch = $request->review_ch;

                
                $newreview->status = 1;  /// 1 is view
                $newreview->created = 0;///////admin

                ////video youtube
                $youtube =  str_replace("watch?v=", "embed/",$request->video);
                $newreview->video = $youtube;

                if($request->preview_image !== null){
                    $newFilename = 'Store_review/'.time().$request->preview_image->getClientOriginalName();
                    Storage::put($newFilename, file_get_contents($request->preview_image));
                    $newreview->image_review = $newFilename;
                }

                $newreview->save();

                return redirect('viewupdatereviewascustomer/'.$newreview->id_store_review.'');

           // return view('Admin.store_customer.viewblogedit_1',['id' => $newreview->id_store_review]); 
     
        }   

        public function backreview($id){
            return view('Admin.store_customer.add-extrareview',['id'=>$id]);
        }


/////////////////////////////////////////////////////เวลา

///////////ตารางเปิดปิดบริการ
public function UpdateMangeDatetimeByAdmin(Request $request)
{
    $idstore = $request->idstore;
    if(isset($request["offpeak"])){    
        foreach($request["offpeak"] as $key => $offpeak){
            DB::Table('mange_datetimed')->where('id_store',$idstore)->where('id_mange_datetimed',$key)
                ->update(['offpeak_time' =>$offpeak]);
        }
            
    }
    if(isset($request["dealitem"])){    
        foreach($request["dealitem"] as $key => $deal){
            DB::Table('mange_datetimed')->where('id_store',$idstore)->where('id_mange_datetimed',$key)
                ->update(['deal_time' =>$deal]);
        }
            
    }

    DB::table('mange_employer')->where('id_store',$idstore)->where('id_day_datetime',$request->id_day_datetime)->where('id_service', '=', $request->service)->delete();
    if(isset($request["employer"])){    
        foreach($request["employer"] as $key => $employer){
            foreach($employer as $key1 => $employer1){
                DB::Table('mange_employer')->insert(
                    ['id_store' => $idstore,'id_day_datetime'=>$request->id_day_datetime,'id_mange_datetimed' => $key,'id_employer'=>$employer1,'id_service'=>$request->service]
                );
            }
        }
            
    }
    return redirect()->back()->with('success','อัพเดทข้อมูลเรียบร้อยแล้ว');
}


public function EditMangeDatetimeByAdmin(Request $request)
{

    // dd($request->all());
    $idstore = $request->idstore;
    // $sql = DB::Table('mange_employer')->where('id_day_datetime',$request->id_weekend)
    // ->where('id_service',$request->id_service)
    // ->get();

    if(isset($request["offpeak"])){    
        foreach($request["offpeak"] as $key => $offpeak){
            DB::Table('mange_datetimed')->where('id_store',$idstore)->where('id_mange_datetimed',$key)
                ->update(['offpeak_time' =>$offpeak]);
        }
            
    }
    if(isset($request["dealitem"])){    
        foreach($request["dealitem"] as $key => $deal){
            DB::Table('mange_datetimed')->where('id_store',$idstore)->where('id_mange_datetimed',$key)
                ->update(['deal_time' =>$deal]);
        }
            
    }

    DB::table('mange_employer')->where('id_store',$idstore)->where('id_day_datetime',$request->id_weekend)->where('id_service', '=', $request->id_service)->delete();
    if(isset($request["employer"])){    
        foreach($request["employer"] as $key => $employer){
            foreach($employer as $key1 => $employer1){
                DB::Table('mange_employer')->insert(
                    ['id_store' => $idstore,'id_day_datetime'=>$request->id_weekend,'id_mange_datetimed' => $key,'id_employer'=>$employer1,'id_service'=>$request->id_service]
                );
            }
        }
            
    }
    // if(count($sql)==0){
    //     if(isset($request["employer"])){    
    //         foreach($request["employer"] as $key => $employer){
    //             foreach($employer as $key1 => $employer1){
    //                 DB::Table('mange_employer')->insert(
    //                     ['id_store' => $idstore,'id_day_datetime'=>$request->id_weekend,'id_mange_datetimed' => $key,'id_employer'=>$employer1,'id_service'=>$request->id_service]
    //                 );
    //             }
    //         }
                
    //     }
    // }else{
    //     if(isset($request["employer"])){   
    //         // dd($request->all());
    //         foreach($request["employer"] as $key => $employer){
    //             foreach($employer as $key1 => $employer1){
    //                 DB::Table('mange_employer')->where('id_store',$idstore)
    //                     ->where('id_mange_datetimed',$key)
    //                     ->update(['id_employer' =>$employer1]);
                    
    //             }
    //         }
                
    //     }
    // }
    
    return redirect('editmanagemember/store/'.$idstore.'')->with('Update','อัพเดทข้อมูลเรียบร้อยแล้ว');
}



//////////////////กำหนดวลาเปิดปิด
public function UpdateStoreDetetimeByAdmin(Request $request){
    // dd($request->all());
    foreach($request["id_day_datetime"] as $key => $data){
        $sql = Store_datetime::where('id_store',$request->id_store)->where('id_day_datetime','=',$data)->first();
        if(!empty($sql)){
            if(isset($request["open"][$key])){
                DB::Table('store_datetime')->where('id_store',$request->id_store)->where('id_day_datetime','=',$data)->update(['open' => $request["open"][$key]]);
            }    
            // ->where('date',$request["date"][$key])
            if(isset($request["close"][$key])){
                DB::Table('store_datetime')->where('id_store',$request->id_store)->where('id_day_datetime','=',$data)->update(['close' => $request["close"][$key]]);
            }
        }else{
            
            if(isset($request["open"][$key])){
                DB::Table('store_datetime')->insert(['id_store'=>$request->id_store,'id_day_datetime' => $data,'open' => $request["open"][$key]]);
            }    
            if(isset($request["close"][$key])){
                DB::Table('store_datetime')->where('id_store',$request->id_store)->where('id_day_datetime','=',$data)->update(['close' => $request["close"][$key]]);

            }
            
        }
        if(isset($request["chk"])){
            DB::Table('store_datetime')->where('id_store',$request->id_store)->whereIn('id_day_datetime',$request["chk"])->update(['status_datetime' => '1']);
            DB::Table('store_datetime')->where('id_store',$request->id_store)->whereNotIn('id_day_datetime',$request["chk"])->update(['status_datetime' => NULL]);

        }
       
            
    }
    return redirect()->back()->with('Update','อัพเดทข้อมูลเรียบร้อยแล้ว');
}


////////////////////////////////////////////////Display
   public function displaystore(Request $request){
       DB::table('store')->where('id_store',$request->id)->update(['display'=>$request->check]);
   }

   public function UpdateAddressstore(Request $request)
    {   
        DB::Table('store')->where('id_store',$request->store_id)->update(
            ['store_address' => $request->store_address,'store_long' => $request->store_long,'store_lat' => $request->store_lat]
        );
        return redirect('editmanagemember/store/'.$request->store_id.'')->with('success','อัพเดทข้อมูลเรียบร้อยแล้ว');
    }

    /////////////////////////show detail 
    public function ViewServiceByAdmin($id)
    {
        $service = Service::where('id_service',$id)->first();
        $menu_d = \App\Mainmenu::where('menu_id', $service->category_id)->first();
        $type_d = \App\Type::where('type_id', $service->subcategory1_id)->first();
        $subtype_d = \App\SubType::where('subtype_id', $service->subcategory2_id)->first();

        if(!empty($type_d->type_th)){
            $type = $type_d->type_th;
        }else{
            $type = '';
        }

        if(!empty($subtype_d->subtype_th)){
            $subtype = $subtype_d->subtype_th;
        }else{
            $subtype ='';
        }
        
        echo '
        <div class="row">
            <div class="col-sm text-center">
            <p><b>รูปภาพปก : </b></p>';
            if(!empty($service->service_image)){
                echo '<img src="'.url('storage/app/'.$service->service_image).'" width="320px" >';
            }
        echo '</div>
            <div class="col-sm pt-5">
                <div class="row">
                    <div class="col-4 mb-3"><b>ชื่อบริการ (ภาษาไทย) : </b></div>
                    <div class="col-6">'.$service->service_name_th.'</div>  
                    <div class="col-4 mb-3"><b>ชื่อบริการ (อังกฤษ) : </b></div>
                    <div class="col-6">'.$service->service_name_en.'</div>                                          
                    <div class="col-4 mb-3"><b>ชื่อบริการ (ภาษาจีน) : </b></div>
                    <div class="col-6">'.$service->service_name_ch.'</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4 mb-3"><b>เวลา (นาที) : </b></div>
                    <div class="col-6">'.$service->service_time.'</div>   <br>                                   
                    <div class="col-4 mb-3"><b>ราคาปกติ (บาท) : </b></div>
                    <div class="col-6">'.$service->service_price.'</div>    <br>
                    <div class="col-4 mb-3"><b>ราคาพิเศษ (บาท) : </b></div>
                    <div class="col-6">'.$service->service_free.' </div>    <br>
                </div>
            </div>
        </div>
        <div>
        <br>';
       echo  '</div>
        <div class="form-group row p-3">
            <div class="col-sm-5"><b>รายละเอียดของบริการ (ภาษาไทย) :</b></div>
            <div class="col-sm">
                '.strip_tags($service->description_th).'
            </div>
            
        </div>
        <div class="form-group row p-3">
            <div class="col-sm-5"><b>รายละเอียดของบริการ (อังกฤษ) :</b></div>
            <div class="col-sm">
            '.strip_tags($service->description_en).'
            </div>
        </div>
        <div class="form-group row p-3">
            <div class="col-sm-5"><b>รายละเอียดของบริการ (ภาษาจีน) :</b></div>
            <div class="col-sm">
            '.strip_tags($service->description_ch).'
            </div>
        </div>';
    }

    public function ViewReviewByAdmin($id){
   
        $review_edit =  Store_review::where('id_store_review',$id)->first();
        


        echo ' <div>
                    <p><b>รูปภาพปก / วิดิโอ: </b></p>';
        
              if(!empty($review_edit->image_review)){
                    echo '<div style="text-align:center;">
                                <img src="'.url('storage/app/'.$review_edit->image_review).'" width="500px" >
                        </div>';
                    }else{
                        echo '<div style="text-align:center;">
                            <iframe class="col-sm" src="'.$review_edit->video.'?autoplay=1&controls=0" style="width: 400px"  allowfullscreen allow="autoplay;"></iframe>
                        </div>';
                    }

        echo       '</div>
                <br>
                <div class="row pl-1">
                    <div class="col-2"><b>หัวข้อ (ภาษาไทย) : </b></div>
                    <div class="col-sm pl-0">'.$review_edit->title_th.'</div>
                    <div class="col-2"><b>หัวข้อ (อังกฤษ) :</b></div>
                    <div class="col-sm">'.$review_edit->title_en.'</div>                                           
                    <div class="col-2"><b>หัวข้อ (อังกฤษ) :</b></div>
                    <div class="col-sm">'.$review_edit->title_ch.'</div>                                                 
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3"><b>เนื้อหารีวิว (ภาษาไทย) :</b></div>
                    '.strip_tags($review_edit->review_th).'
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3"><b>เนื้อหารีวิว (อังกฤษ) :</b></div>
                    '.strip_tags($review_edit->review_en).'
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3"><b>เนื้อหารีวิว (ภาษาจีน) :</b></div>
                    '.strip_tags($review_edit->review_ch).'
                </div>';
    }

    public function ApproveReviewByAdmin(Request $request){
      
        $data = [
            'approve'=>$request->check,
            'description' => $request->not_description,
        ];

        DB::table('store_review')->where('id_store_review',$request->id)->update($data);

    }


}
