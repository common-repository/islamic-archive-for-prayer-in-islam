<?php
$opicpii_categories_lang = array();

$opicpii_lang_list = [
    "ara"=>[
            "title"=>"العربية",
            "link"=>"https://ar.prayerinislam.com",
        ],
    "eng"=>[
            "title"=>"English",
            "link"=>"https://www.prayerinislam.com",
        ],        
    ];

// ======================   Titles ==============================

											
$piicategories["prayer_in_islam"] 				= array(
													'title'=>"Prayer in Islam",
													'url'=>"https://www.prayerinislam.com",
													'logo'=>"prayer_in_islam.png",
												);
												
foreach($opicpii_lang_list as $key => $value){
    // =================== Define language list ===========================
    $opicpii_categories_lang[$key]['prayer_in_islam']['url'] 					= $value["link"];
    $opicpii_categories_lang[$key]['prayer_in_islam']['cat'] 					= $value["link"].'/api/get_category_index/' ;
    $opicpii_categories_lang[$key]['prayer_in_islam']['importurl'] 			    = $value["link"].'/api/get_category_posts/?slug='; 
    
}



?>