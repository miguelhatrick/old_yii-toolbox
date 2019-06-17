<?php
namespace miguelhatrick\YiiToolbox;

class AdminLTEHelper
{
    public static function startBox($title, $collapsed = true, $class = 'success') {
        
        /*
         * Class types:
         * success
         * info
         * danger
         * primary
         */
        
        $html = <<< EOT_MY_CODE
       <div class="box box-CLASS COLLAPSED">
        <div class="box-header">
        <h3 class="box-title">TITLE</h3>
        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool"
            data-widget="collapse">
            <i class="fa fa-SIGN"></i>
            </button>
            
            </div>
            </div>
            
            <div class="box-body">
EOT_MY_CODE;
        $html = preg_replace("(TITLE)", $title, $html);
        $html = preg_replace("(COLLAPSED)", $collapsed ? 'collapsed-box' : '', $html);
        $html = preg_replace("(SIGN)", $collapsed ? 'plus' : 'minux', $html);
        
        $html = preg_replace("(CLASS)", $class, $html);
        
        return $html; // return the generated password
    }
    
    
    public static function endBox() {
        

        
        return '</div>
                </div>';
    }
    
    
    
    
}

