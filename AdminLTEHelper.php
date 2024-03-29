<?php
namespace miguelhatrick\YiiToolbox;

class AdminLTEHelper
{
    public static function startBox($title = '', $collapsed = true, $class = 'success', $closable = false, $collapsable = true) {
        
        /*
         * Class types:
         * success
         * info
         * danger
         * primary
         * warning
         */
        
        $html = <<< EOT_MY_CODE
<div class="box box-CLASS COLLAPSED">
    <div class="box-header">
        TITLEPOSITION
        <div class="box-tools pull-right">
            COLLAPSABLE
            CLOSABLE
        </div>
    </div>
<div class="box-body">
EOT_MY_CODE;
        $titlehtml = '<h3 class="box-title">TITLE</h3>';
        $closablehtml = '<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>';
        $collapsablehtml = '<button type="button" class="btn btn-box-tool" data-widget="collapse"> <i class="fa fa-SIGN"></i> </button>';
        
        
        $html = preg_replace("(COLLAPSABLE)", $collapsable ? $collapsablehtml : '', $html); // this goes first
        $html = preg_replace("(TITLEPOSITION)", !empty($title) ? $titlehtml : '', $html); // this goes first
        $html = preg_replace("(TITLE)", $title, $html);
        $html = preg_replace("(COLLAPSED)", $collapsed ? 'collapsed-box' : '', $html);
        $html = preg_replace("(SIGN)", $collapsed ? 'plus' : 'minus', $html);
        $html = preg_replace("(CLASS)", $class, $html);
        $html = preg_replace("(CLOSABLE)", $closable ? $closablehtml : '', $html);
        
        return $html; // return the generated password
    }
    
    
    public static function endBox() {
        return '</div>
                </div>';
    }
}