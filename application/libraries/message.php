<?php

class Message{
    function __construct(){
        $CI =& get_instance();
        $this->instan = $CI;
    }
    
    public function message_error($content){
        $msg = 'Error';
        return $msg;
    }
    public function message_success($content){
        $msg = 'Sukses';
        return $msg;
    }
    public function dialog(){
        $dialog ='<div id="dialog-confirm" title="Are You Sure want to delete this?">
			<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
		</div>';
        return $dialog;
    }
}

