<?php

class filedownloadPlugin extends PluginBase {
    function __construct() {
        parent::__construct();
    }
    public function regist() {
        $this->hookRegist(array(
            'user.commonJs.insert' => 'filedownloadPlugin.echoJs'
        ));
    }
    public function echoJs() {
        $this->echoFile('static/main.js');

    }
    public function index() {
    	$fileinfo = [
    	    "name" => $this->in["name"],
    	    "ext" => $this->in["ext"],
    	    "url" => $this->filePathLinkOut($this->in['path'])
    	];
    	include($this->pluginPath.'static/page.html');
    }
}