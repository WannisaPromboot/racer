<?php

class OrangeV1
{
    public static function TextInputFormControl($label,$inputname,$inputid,$customcss){
        return '<div class="form-group col-lg-2" style="'.$customcss.'">
                    <label for="name">'.$label.'</label>
                    <input type="text" id="'.$inputid.'" name="'.$inputname.'" class="form-control"/>
                </div>';
    }
}