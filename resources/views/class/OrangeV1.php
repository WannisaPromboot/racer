<?php

class OrangeV1
{
    public static function ContentTitle($title,$title_th='',$title_en=''){
        return '<div class="form-group">
                    <label for="name">'.$title.' (ภาษาไทย) :</label>
                    <input type="text" id="title_th" name="title_th" value="'.$title_th.'"class="form-control"/>
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$title.' (ภาษาอังกฤษ) :</label>
                    <input type="text" id="title_en" name="title_en"  value="'.$title_en.'" class="form-control"/>
                </div>'
                ;
    }

    public static function ContentTitleAndDesc($title,$description){
        return '<div class="form-group">
                    <label for="name">'.$title.' (ภาษาไทย) :</label>
                    <input type="text" id="title_th" name="title_th" class="form-control"/>
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$title.' (ภาษาอังกฤษ) :</label>
                    <input type="text" id="title_en" name="title_en" class="form-control"/>
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$description.' (ภาษาไทย) :</label>
                    <input type="text" id="description_th" name="description_th" class="form-control"/>
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$description.' (ภาษาอังกฤษ) :</label>
                    <input type="text" id="description_en" name="description_en" class="form-control"/>
                </div>';
    }
    public static function ContentTitleAndDescEditor($title,$description){
        return '<div class="form-group">
                    <label for="name">'.$title.' (ภาษาไทย) :</label>
                    <input type="text" id="title_th" name="title_th" class="form-control"/>
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$title.' (ภาษาอังกฤษ) :</label>
                    <input type="text" id="title_en" name="title_en" class="form-control"/>
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$description.' (ภาษาไทย) : </label>
                    <textarea name="description_th" id="description_th" class="editor"></textarea>
                    
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$description.' (ภาษาอังกฤษ) : </label>
                    <textarea name="description_en" id="description_en" class="editor"></textarea>
                </div>';
    }

    public static function ShowContentTitle($labelname,$title_th,$title_en){
        return '<div class="form-group">
                    <label for="name">'.$labelname.' (ภาษาไทย) : <h4>'.$title_th.'</h4></label>
                    
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$labelname.' (ภาษาอังกฤษ) : <h4>'.$title_en.'</h4></label>
                    
                </div>'
                ;
    }

    public static function DescriptionEditor($labelname,$desc_th,$desc_en){
        return '<div class="form-group">
                    <label for="name">'.$labelname.' (ภาษาไทย) : </label>
                    <textarea name="description_th" id="description_th" class="editor">'.$desc_th.'</textarea>
                    
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$labelname.' (ภาษาอังกฤษ) : </label>
                    <textarea name="description_en" id="description_en" class="editor">'.$desc_en.'</textarea>
                </div>';
    }

    public static function ShowCustomEditor($labelname,$inputname,$description){
        return '<div class="form-group">
                    <label for="name">'.$labelname.': </label>
                    <textarea name="'.$inputname.'" id="'.$inputname.'" class="editor">'.$description.'</textarea>
                    
                </div>'
                ;
    }

    public static function ContentPreviewImage($lablename,$inputname,$id,$src=""){
        return '<div class="form-group">
                    <label for="resume">'.$lablename.'</label>
                    <input type="file" name="'.$inputname.'" class="form-control" id="'.$id.'" onchange="readImage(this,\''.$id.'\');">
                    <img src="'.$src.'" id="imgpreview_'.$id.'" style="max-height:300px;">
                </div>';
    }

    public static function ImagePreview($targerid,$displayid){
        return '<script>
                    function readURL(input) {
                        
                        if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function(e) {
                            $("#imgpreview_'.$targerid.'").attr("src", e.target.result);
                        }
                        
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                        }
                    }
                    
                    
                </script>';
    }
    public static function ImagePreviewJs(){
        return '<script>
                    function readImage(input,id) {


                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                        
                            reader.onload = function(e) {
                                $("#imgpreview_"+id).attr("src", e.target.result);
                            }
                        
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    
                    
                </script>';
    }
    

    public static function SubDescription($descriptionlable){
        return 
                '<div class="form-group">
                    <label for="name">'.$descriptionlable.' (ภาษาไทย) :</label>
                    <input type="text" id="sub-description_th" name="sub-description_th" class="form-control"/>
                </div>'.
                '<div class="form-group">
                    <label for="name">'.$descriptionlable.' (ภาษาอังกฤษ) :</label>
                    <input type="text" id="sub-description_en" name="sub-description_en" class="form-control"/>
                </div>';
    }

    public static function CustomInputText($labeltext,$inputname){
        return 
                '<div class="form-group">
                    <label for="name">'.$labeltext.' :</label>
                    <input type="text" name="'.$inputname.'" class="form-control"/>
                </div>';
    }

    public static function ProductNameWithProductPrice($productname_th,$productname_en,$pricetitle,$counttitle){

        if(($productname_en == NULL) || ($productname_en == '') ){
            return 
            '<div class="row">
                <div class="form-group col-sm">
                    <label for="name">'.$productname_th.' :</label>
                    <input type="text" id="productname_th" name="productname_th" class="form-control" required/>
                </div>
               
                <div class="form-group col-6">
                    <label for="name">'.$pricetitle.' :</label>
                    <input type="text" id="price" name="price" class="form-control" required/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">'.$counttitle.' :</label>
                    <input type="number" name="count" class="form-control" required/>
                </div>
            </div>';

        }else if(($productname_th == NULL) || ($productname_th == '') ){
            return 
            '<div class="row">
                <div class="form-group col-sm">
                    <label for="name">'.$productname_en.' :</label>
                    <input type="text" id="productname_en" name="productname_en" class="form-control" required/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$pricetitle.' :</label>
                    <input type="text" id="price" name="price" class="form-control" required/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">'.$counttitle.' :</label>
                    <input type="number" name="count" class="form-control" required/>
                </div>
            </div>';

        }else if(!empty($productname_th) || !empty($productname_en) ){
            return 
                '<div class="row">
                    <div class="form-group col-sm">
                        <label for="name">'.$productname_th.' :</label>
                        <input type="text" id="productname_th" name="productname_th" class="form-control" required/>
                    </div>
                    <div class="form-group col-sm">
                        <label for="name">'.$productname_en.' :</label>
                        <input type="text" id="productname_en" name="productname_en" class="form-control" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">'.$pricetitle.' :</label>
                        <input type="text" id="price" name="price" class="form-control" required/>
                    </div>
                    <div class="form-group col-6">
                        <label for="name">'.$counttitle.' :</label>
                        <input type="number" name="count" class="form-control" required/>
                    </div>
                </div>';
        }
    }

    public static function ShowProductNameWithProductPrice($productname_th,$productname_en,$pricetitle,$counttitle,$input_th,$input_en,$input_price,$input_count,$id){

        if(($productname_en == NULL) || ($productname_en == '') ){
            return 
            '<div class="row">
                <div class="form-group col-sm">
                    <label for="name">'.$productname_th.' :</label>
                    <input type="text" id="productname_th" name="productname_th" value="'.$input_th.'" class="form-control"/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$pricetitle.' :</label>
                    <input type="text" id="price" name="price" value="'.$input_price.'" class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">'.$counttitle.' :</label>
                    <input type="number" name="count" class="form-control" value="'.$input_count.'"/>
                </div>
            </div>';

        }else if(($productname_th == NULL) || ($productname_th == '') ){
            return 
            '<div class="row">
                <div class="form-group col-sm">
                
                    <label for="name">'.$productname_en.' :</label>
                    <input type="text" id="productname_en" name="productname_en" value="'.$input_en.'" class="form-control"/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$pricetitle.' :</label>
                    <input type="text" id="price" name="price" value="'.$input_price.'" class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">'.$counttitle.' :</label>
                    <input type="number" name="count" class="form-control" value="'.$input_count.'"/>
                </div>
            </div>';

        }else if(!empty($productname_th) || !empty($productname_en) ){
            return 
                '<div class="row">
                    <div class="form-group col-sm">
                        
                        <label for="name">'.$productname_th.' :</label>
                        <input type="text" id="productname_th" name="productname_th" value="'.$input_th.'"  class="form-control"/>
                    </div>
                    <div class="form-group col-sm">
                        <label for="name">'.$productname_en.' :</label>
                        <input type="text" id="productname_en" name="productname_en" value="'.$input_en.'"  class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">'.$pricetitle.' :</label>
                        <input type="text" id="price" name="price" value="'.$input_price.'"  class="form-control"/>
                    </div>
                    <div class="form-group col-6">
                        <label for="name">'.$counttitle.' :</label>
                        <input type="number" name="count" class="form-control" value="'.$input_count.'"/>
                    </div>
                </div>';
        }
    }

//////with promotion price
    public static function ProductNameWithProductPriceWithPricePro($productname_th,$productname_en,$pricetitle,$priceprotitle,$counttitle){

        if(($productname_en == NULL) || ($productname_en == '') ){

            return 
            '<div class="row">
                <div class="form-group col-sm">
                    <label for="name">'.$productname_th.' :</label>
                    <input type="text" id="productname_th" name="productname_th" class="form-control" required/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$counttitle.' :</label>
                    <input type="number" name="count" class="form-control" required/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">'.$pricetitle.' :</label>
                    <input type="text" id="price" name="price" class="form-control" required/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$priceprotitle.' :</label>
                    <input type="text" id="price_pro" name="price_pro" class="form-control" />
                </div>
            </div>';

        }else if(($productname_th == NULL) || ($productname_th == '') ){
            return 
            '<div class="row">
                <div class="form-group col-sm">
                    <label for="name">'.$productname_en.' :</label>
                    <input type="text" id="productname_en" name="productname_en" class="form-control" required/>
                </div>
                <div class="form-group col-6">
                <label for="name">'.$counttitle.' :</label>
                <input type="number" name="count" class="form-control" required/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="name">'.$pricetitle.' :</label>
                <input type="text" id="price" name="price" class="form-control" required/>
            </div>
            <div class="form-group col-6">
                <label for="name">'.$priceprotitle.' :</label>
                <input type="text" id="price_pro" name="price_pro" class="form-control" />
            </div>
        </div>';

        }else if(!empty($productname_th) || !empty($productname_en) ){
            return 
                '<div class="row">
                    <div class="form-group col-sm">
                        <label for="name">'.$productname_th.' :</label>
                        <input type="text" id="productname_th" name="productname_th" class="form-control" required/>
                    </div>
                    <div class="form-group col-sm">
                        <label for="name">'.$productname_en.' :</label>
                        <input type="text" id="productname_en" name="productname_en" class="form-control" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">'.$pricetitle.' :</label>
                        <input type="text" id="price" name="price" class="form-control" required/>
                    </div>
                    <div class="form-group col-6">
                        <label for="name">'.$priceprotitle.' :</label>
                        <input type="text" id="price_pro" name="price_pro" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">'.$counttitle.' :</label>
                        <input type="number" name="count" class="form-control" required/>
                    </div>
                   
                </div>';
        }
    }

    public static function ShowProductNameWithProductPriceandPricePro($productname_th,$productname_en,$pricetitle,$priceprotitle,$counttitle,$input_th,$input_en,$input_price,$input_price_pro,$input_count,$id){

        if(($productname_en == NULL) || ($productname_en == '') ){
            return 
            '<div class="row">
                <div class="form-group col-sm">
                    <label for="name">'.$productname_th.' :</label>
                    <input type="text" id="productname_th" name="productname_th" value="'.$input_th.'" class="form-control"/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$counttitle.' :</label>
                    <input type="number" name="count" class="form-control" value="'.$input_count.'"/>
                </div>
                
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">'.$pricetitle.' :</label>
                    <input type="text" id="price" name="price" value="'.$input_price.'" class="form-control"/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$priceprotitle.' :</label>
                    <input type="text" id="price" name="price_pro" value="'.$input_price_pro.'" class="form-control"/>
                </div>
            
            </div>';

        }else if(($productname_th == NULL) || ($productname_th == '') ){
            return 
            '<div class="row">
                <div class="form-group col-sm">
                
                    <label for="name">'.$productname_en.' :</label>
                    <input type="text" id="productname_en" name="productname_en" value="'.$input_en.'" class="form-control"/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$pricetitle.' :</label>
                    <input type="text" id="price" name="price" value="'.$input_price.'" class="form-control"/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="name">'.$priceprotitle.' :</label>
                    <input type="text" id="price" name="price_pro" value="'.$input_price_pro.'" class="form-control"/>
                </div>
                <div class="form-group col-6">
                    <label for="name">'.$counttitle.' :</label>
                    <input type="number" name="count" class="form-control" value="'.$input_count.'"/>
                </div>
            </div>';

        }else if(!empty($productname_th) || !empty($productname_en) ){
            return 
                '<div class="row">
                    <div class="form-group col-sm">
                        
                        <label for="name">'.$productname_th.' :</label>
                        <input type="text" id="productname_th" name="productname_th" value="'.$input_th.'"  class="form-control"/>
                    </div>
                    <div class="form-group col-sm">
                        <label for="name">'.$productname_en.' :</label>
                        <input type="text" id="productname_en" name="productname_en" value="'.$input_en.'"  class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">'.$pricetitle.' :</label>
                        <input type="text" id="price" name="price" value="'.$input_price.'"  class="form-control"/>
                    </div>
                    <div class="form-group col-6">
                        <label for="name">'.$priceprotitle.' :</label>
                        <input type="text" id="price" name="price_pro" value="'.$input_price_pro.'" class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">'.$counttitle.' :</label>
                        <input type="number" name="count" class="form-control" value="'.$input_count.'"/>
                    </div>
                </div>';
        }
    }

    public static function TypeContent($typetitle_th,$typetitle_en){

        if(($typetitle_th == NULL) || ($typetitle_th == '') ){
            return '<div class="row">
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_en.' :</label>
                            <input type="text" id="type_en" name="type_en" class="form-control"/>
                        </div>
                    </div>';
        }else if(($typetitle_en == NULL) || ($typetitle_en == '') ){
            return '<div class="row">
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_th.' :</label>
                            <input type="text" id="type_th" name="type_th" class="form-control"/>
                        </div>
                    </div>';
        }else{
            return '<div class="row">
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_th.' :</label>
                            <input type="text" id="type_th" name="type_th" class="form-control"/>
                        </div>
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_en.' :</label>
                            <input type="text" id="type_en" name="type_en" class="form-control"/>
                        </div>
                    </div>';
        }
       
    }

    public static function ShowTypeContent($typetitle_th,$typetitle_en,$value_th,$value_en,$id){
        if(($typetitle_th == NULL) || ($typetitle_th == '') ){
            return '<div class="row">
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_en.' :</label>
                            <input type="text" id="type_en" name="type_en" value="'.$value_en.'" class="form-control"/>
                        </div>
                    </div>';
        }else if(($typetitle_en == NULL) || ($typetitle_en == '') ){
            return '<div class="row">
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_th.' :</label>
                            <input type="text" id="type_th" name="type_th" value="'.$value_th.'" class="form-control"/>
                        </div>
                    </div>';
        }else{
            return '<div class="row">
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_th.' :</label>
                            <input type="text" id="type_th" name="type_th" value="'.$value_th.'" class="form-control"/>
                        </div>
                        <div class="form-group col-sm">
                            <label for="name">'.$typetitle_en.' :</label>
                            <input type="text" id="type_en" name="type_en" value="'.$value_en.'" class="form-control"/>
                        </div>
                    </div>';
        }
    }

        public static function Date($var){
                $month_th['01'] = 'ม.ค.';
                $month_th['02'] = 'ก.พ.';
                $month_th['03'] = 'มี.ค.';
                $month_th['04'] = 'เม.ย.';
                $month_th['05'] = 'พ.ค.';
                $month_th['06'] = 'มิ.ย.';
                $month_th['07'] = 'ก.ค.';
                $month_th['08'] = 'ส.ค.';
                $month_th['09'] = 'ก.ย.';
                $month_th['10'] = 'ต.ค.';
                $month_th['11'] = 'พ.ย.';
                $month_th['12'] = 'ธ.ค.';
                $month_en['01'] = 'JAN';
                $month_en['02'] = 'FEB';
                $month_en['03'] = 'MAR';
                $month_en['04'] = 'APR';
                $month_en['05'] = 'MAY';
                $month_en['06'] = 'JUN';
                $month_en['07'] = 'JUL';
                $month_en['08'] = 'AUG';
                $month_en['09'] = 'SEP';
                $month_en['10'] = 'OCT';
                $month_en['11'] = 'NOV';
                $month_en['12'] = 'DEC';

                $day = explode('-',date_format($var, 'Y-m-d'));/////var is column name
                if(Config::get('app.locale') == 'en' ){
                    $year = $day[0]+543;
                }else{
                    $year = $day[0];
                }

                $date_text = $day[2].' '.(Config::get('app.locale') == 'en' ? $month_en[$day[1]] : $month_th[$day[1]] ).' '.$year;
                return ''.$date_text.'';

        }

        public static function checkExtension($filename){
            $file_parts = pathinfo($filename);
                switch($file_parts['extension'])
                {
                    case "jpg":
                        echo '<a href="'.$filename.'"><img src="'.asset('assets/images/b2b/icon/jpg.png').'" style="width:50px"></a>';
                    break;

                    case "png":
                        echo '<a href="'.$filename.'"><img src="'.asset('assets/images/b2b/icon/jpg.png').'" style="width:50px"></a>';
                    break;

                    case "xlsx":
                        echo '<a href="'.$filename.'"><img src="'.asset('assets/images/b2b/icon/xls.png').'" style="width:50px"></a>';
                    break;

                    case "xls":
                        echo '<a href="'.$filename.'"><img src="'.asset('assets/images/b2b/icon/xls.png').'" style="width:50px"></a>';
                    break;

                    case "doc":
                        echo '<a href="'.$filename.'"><img src="'.asset('assets/images/b2b/icon/doc.png').'" style="width:50px"></a>';
                    break;

                    case "pdf":
                        echo '<a href="'.$filename.'"><img src="'.asset('assets/images/b2b/icon/pdf.png').'" style="width:50px"></a>';
                    break;

                    case NULL: // Handle no file extension
                        echo '';
                    break;
                }
        }

        public static function AlertMessage($formname){
          
               return '<script>
                        function save('.$formname.'){

                            var inputs = document.getElementsByTagName("input");
                            for (var i = 0; i < inputs.length; i++) {
                                // only validate the inputs that have the required attribute
                                if(inputs[i].hasAttribute("required")){
                                    if(inputs[i].value == ""){
                                        // found an empty field that is required
                                        inputs[i].focus();
                                        // alert("Please fill all required fields");
                                        return false;
                                    }
                                }
                            }

                            Swal.fire({
                                text: "คุณต้องการบันทึกข้อมูลใช่หรือไม่",
                                type: "question",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "ใช่",
                                cancelButtonText: "ไม่ใช่",
                                }).then((result)=>{
                                    if (result.value) {
                                        $("#'.$formname.'").submit();
                                        }
                                });
                            }
                        </script>';
        }


        public static function AlertMessageCancle($view,$edit){
          
            return '<script>
                     function canclebtn('.$view.','.$edit.'){
                         Swal.fire({
                             text: "คุณต้องการยกเลิกการแก้ไขข้อมูลใช่หรือไม่",
                             type: "question",
                             showCancelButton: true,
                             confirmButtonColor: "#3085d6",
                             cancelButtonColor: "#d33",
                             confirmButtonText: "ใช่",
                             cancelButtonText: "ไม่ใช่",
                             }).then((result)=>{
                                 if (result.value) {
                                     $("#'.$view.'").show();
                                     $("#'.$edit.'").hide();
                                     }
                             });
                         }
                     </script>';
        }


       public static function ChangeCurrency($idCurrency,$amount)
        {
            // dd($idCurrency);
            $sql = DB::Table('currency')->leftJoin('currencycountries','currency.id_country','=','currencycountries.idCountry')
                    ->where('currency_id',$idCurrency)->first();
            // dd($sql);
            $total = $sql->currency_rate * $amount;
            if(Session::get('currency')=='THB'){
                echo  number_format($total).'  ฿';
            }elseif(Session::get('currency')=='USD'){
                echo  number_format($total, 2, '.', '').'  $';
            }else{
                echo  number_format($total).'  '.$sql->countryCode;
            }
            
            
        }

}