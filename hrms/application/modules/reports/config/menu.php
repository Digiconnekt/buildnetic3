<?php

// module name
$HmvcMenu["reports"] = array(
    //set icon
    "icon"           => "<i class='fa fa-pie-chart' aria-hidden='true'></i>

", 
    

//     // Attendance reports
"attendance_report" => array(
      "daily_presents" => array(
            "controller" => "attendance_report",
            "method"     => "daily_presents",
            "permission" => "read"
        
    ),
       "monthly_presents" => array(
            "controller" => "attendance_report",
            "method"     => "monthly_presents",
            "permission" => "read"
        
    ),
     "daily_absent" => array(
            "controller" => "attendance_report",
            "method"     => "daily_absent",
            "permission" => "read"
        
    ),
     "monthly_absent" => array(
            "controller" => "attendance_report",
            "method"     => "monthly_absent",
            "permission" => "read"
        
    ),  
),


"leave_report" => array(
      "employee_on_leave" => array(
            "controller" => "leave_report",
            "method"     => "employee_on_leave",
            "permission" => "read"
        
    ),
    
 
),
 //group level name
    "employee_reports" => array(
        //menu name
       "demographic_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "demographic_list",
            "permission" => "read"
        
    ), 
      "posting_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "positional_list",
            "permission" => "read"
        
    ),  
    "asset" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "employee_assets",
            "permission" => "read"
        
    ),
    "benifit_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "benifit_list",
            "permission" => "read"
        
    ),  
    "custom_report" => array(
        //menu name
       
            "controller" => "employee_controller",
            "method"     => "custom_report",
            "permission" => "read"
        
    ),            
    ), 
   
    "adhoc_report" => array(
        //menu name
       
            "controller" => "Adhoc_controller",
            "method"     => "index",
            "permission" => "read"
        
    ),    
);
   

 