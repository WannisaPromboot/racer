<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Artisan;

class GenerateController extends Controller
{
    //
    public function CreateBannerResource(Request $request){
        extract($request->all());
         
    }

    public function CreateResource(Request $request,$contenttype){
        extract($request->all());

        if($contenttype =='user'){
            return $this->CreateUserTable($tablename,$modelname,true);
        }

        if($contenttype =='banner'){
            return $this->CreateBannerTable($tablename,$modelname,true,true,true);
        }

        if($contenttype =='maincontent'){
            return $this->CreateMainContentTable($tablename,$modelname,true);
        }

        if($contenttype =='subcontent'){
            return $this->CreateSubContentTable($tablename,$modelname,$foreign,true);
        }

        if($contenttype =='gallery'){
            return $this->CreateGalleryTable($tablename,$modelname,true);
        }

        if($contenttype =='gallerypicture'){
            return $this->CreateGalleryImageTable($tablename,$modelname,true);
        }

        if($contenttype =='category'){
            return $this->CreateCategoryTable($tablename,$modelname,true);
        }

        if($contenttype =='categorycomposite'){
            return $this->CreateContentCategoryCompositeTable($tablename,$modelname,true);
        }

        if($contenttype =='sociallink'){
            return $this->CreateContentCategoryCompositeTable($tablename,$modelname,true);
        }

        if($contenttype =='iframe'){
            return $this->CreateIframeLinkTable($tablename,$modelname,false);
        }

        if($contenttype =='typewithproduct'){
            return $this->CreateTypeWithProductTable($tablename,$modelname,true);
        }

        if($contenttype =='type'){
            return $this->CreateTypeTable($tablename,$modelname,true);
        }

        if($contenttype =='subsubtype'){
            return $this->CreateSubSubTypeTable($tablename,$modelname,true);
        }

        if($contenttype =='subtype'){
            return $this->CreateSubTypeTable($tablename,$modelname,true);
        }

        if($contenttype =='product'){
            return $this->CreateProductTable($tablename,$modelname,true);
        }

        if($contenttype =='production'){
            return $this->CreateProductionTable($tablename,$modelname,true);
        }

        if($contenttype =='producttype'){
            return $this->CreateProductTypeTable($tablename,$modelname,true);
        }

        if($contenttype =='customer'){
            return $this->CreateCustomerTable($tablename,$modelname,true);
        }

        if($contenttype =='address'){
            return $this->CreateAddressTable($tablename,$modelname,true);
        }

        if($contenttype =='order'){
            return $this->CreateOrderTable($tablename,$modelname,true);
        }

        if($contenttype =='suborder'){
            return $this->CreateSubOrderTable($tablename,$modelname,true);
        }

        if($contenttype =='contact'){
            return $this->CreateContactTable($tablename,$modelname,true);
        }

        if($contenttype =='SEO'){
            return $this->CreateSEOTable($tablename,$modelname,true);
        }
    }

    public function CreateUserTable($tablename,$modelname,$timestamps=true){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->double('id');
                $table->text('firstname')->nullable();
                $table->text('lastname')->nullable();
                $table->text('email')->nullable();
                $table->text('password')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateBannerTable($tablename,$modelname,$timestamps=false,$bannertext=false,$bannerlink=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps,$bannertext) {
                $table->increments('id');
                $table->text('filepath')->nullable();
                $table->integer('priority')->default('1');
                $table->text('url_link')->nullable();
                $table->text('page')->nullable();
                $table->text('video')->nullable();
                $table->text('onoff')->nullable();

                if($bannertext == true){
                    $table->text('description')->nullable();
                }
                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateGalleryTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->string('title_th',200);
                $table->string('title_en',200)->nullable();
                $table->text('description_th')->nullable();
                $table->text('description_en')->nullable();
                $table->text('filepath');
                $table->timestamps();  
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateGalleryImageTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('filepath');
                $table->integer('priority');  
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateMainContentTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->string('title_th',200);
                $table->string('title_en',200)->nullable();
                $table->text('description_th')->nullable();
                $table->text('description_en')->nullable();
                $table->text('preview_image');
                $table->timestamps(); 
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateSubContentTable($tablename,$modelname,$foreign,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps,$foreign) {
                $table->increments('id');
                $table->string('title_th',200);
                $table->string('title_en',200)->nullable();
                $table->text('description_th')->nullable();
                $table->text('description_en')->nullable();
                $table->text('preview_image');
                if($foreign != null){
                    $table->integer($foreign);
                }else{
                    $table->integer('maincontent_id');
                }
                $table->timestamps(); 
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateCategoryTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->string('category_name_th',200);
                $table->string('category_name_en',200);
                 
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateContentCategoryCompositeTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->integer('category_id');
                $table->integer('content_id');
                 
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateSocialLinkTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->string('facebook',200);
                $table->string('youtube',200);
                $table->string('instagram',200);
                $table->enum('type', ['person', 'company']);
                 
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateIframeLinkTable($tablename,$modelname,$timestamps=false,$foreign='content_id'){

        if(!Schema::hasTable($tablename)){
            
            Schema::create($tablename, function (Blueprint $table) use($timestamps,$foreign) {
                $table->increments('id');
                $table->string('url_link',200);
                $table->integer($foreign);                 
            });
            Artisan::call('make:model '.$modelname);
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateTypeTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('type_th')->nullable();
                $table->text('type_en')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateTypeWithProductTable($tablename,$modelname,$timestamps=true){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('product_id')->nullable();
                $table->text('type')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateSubTypeTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->integer('type_id');
                $table->text('type_th')->nullable();
                $table->text('type_en')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateSubSubTypeTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->integer('subtype_id');
                $table->text('type_th')->nullable();
                $table->text('type_en')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateProductTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->string('id');
                $table->text('productname_th')->nullable();
                $table->text('productname_en')->nullable();
                $table->text('count')->nullable();
                $table->integer('price')->nullable();
                $table->integer('price_promotion')->nullable();
                $table->integer('type')->nullable();
                $table->text('preview_image')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }

    }

    public function CreateProductionTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('productname')->nullable();
                $table->text('product_id')->nullable();
                $table->text('type')->nullable();
                $table->integer('count')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateProductTypeTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->integer('type_id');
                $table->integer('subtype_id');
                $table->text('type')->nullable();
                $table->text('product_id')->nullable();


                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateCustomerTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->double('id');
                $table->text('firstname')->nullable();
                $table->text('lastname')->nullable();
                $table->text('telephone')->nullable();
                $table->text('email')->nullable();
                $table->text('password')->nullable();
                $table->text('check')->nullable();
                $table->integer('count')->nullable()->default(0);;
                $table->integer('status')->nullable();
                $table->text('provider')->nullable();
                $table->double('provider_id')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
        

    }

    public function CreateAddressTable($tablename,$modelname,$timestamps=false){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('customer_id')->nullable();
                $table->text('name')->nullable();
                $table->text('telephone')->nullable();
                $table->text('address')->nullable();
                $table->text('province')->nullable();
                $table->text('district')->nullable();
                $table->text('sub_district')->nullable();
                $table->text('code')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    
    public function CreateOrderTable($tablename,$modelname,$timestamps=true){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->text('order_id');
                $table->double('customer_id');
                $table->text('shipping')->nullable();
                $table->text('address')->nullable();
                $table->text('payment')->nullable();
                $table->text('status')->nullable();
                $table->date('date')->nullable();
                $table->text('preview_image');

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateSubOrderTable($tablename,$modelname,$timestamps=true){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('order_id');
                $table->double('customer_id');
                $table->text('product_name')->nullable();
                $table->integer('count')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateContactTable($tablename,$modelname,$timestamps=true){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('address');
                $table->text('telephone');
                $table->text('email');
                $table->text('instagram')->nullable();
                $table->text('facebook')->nullable();
                $table->text('twitter')->nullable();
                $table->text('line')->nullable();

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    public function CreateSEOTable($tablename,$modelname,$timestamps=true){

        if(!Schema::hasTable($tablename)){
            Artisan::call('make:model '.$modelname);
            Schema::create($tablename, function (Blueprint $table) use($timestamps) {
                $table->increments('id');
                $table->text('keyword_th');
                $table->text('keyword_en');
                $table->text('description_th');
                $table->text('description_en');

                if($timestamps == true){
                    $table->timestamps();
                }
                
            });
            return 'Table '.$tablename.' has been created with Model '.$modelname.'<br> If Have Any Problem Please Config Model File About Table Reference';
        }else{
            echo 'Table exist!';
        }
    }

    
}
