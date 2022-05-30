<?php
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', 'stdout'); 
	require_once ('https://don360.ru/wp-content/themes/frog/bitrix24/crest.php');
	require_once 'https://don360.ru/wp-content/themes/frog/bitrix24/crest.php';
	
    $ref = $_SERVER['HTTP_REFERER'];
    $ip = $_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_CLIENT_IP']:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);
    $toEmail = 'karpenko.p.s@gmail.com';
    
	/** * Write data to log file. * * @param mixed $data * @param string $title * * @return bool */ 
	function writeToLog($data, $title = '') { 
		$log = "\n------------------------\n"; 
		$log .= date("Y.m.d G:i:s") . "\n"; 
		$log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n"; 
		$log .= print_r($data, 1); 
		$log .= "\n------------------------\n"; 
		file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND); 
		return true; 
	} 
    /*
	// проверяем условия совпадения с полями формы:
	// 1. Имя менеджера (select ID менеджера) (nameM)
	
	// 2. Выбрать услуги [type="checkbox"] ID услуги (getUslugi)
	
	// 3. Фактическое наименовение объекта [type="text"] (factName)
	// 4. Фактический адрес объекта [type="text"] (factAddress)
	// 5. Вид деятельности [type="text"] (vid)
	// 6. График работы [type="checkbox"] (1-days) Время работы [type="time"] (start / finish)
	// 7. Контактное лицо [type="text"] (contactName)
	// 8. Контактный телефон [type="tel"] (contactPhone)
	// 9. Рабочий телефон [type="tel"] (workPhone)
	// 10. Ваш email [type="email"] (contactEmail)
	// 11. Ваш Google аккаунт (@gmail.com) [type="email"] (contactGoogleEmail)
	// 12. Ваш Яндекс аккаунт (@yandex.ru) [type="email"] (contactYandexEmail)
	// 13. WEB-сайт [type="url"] (contactWeb)
	
	// 14. Наименование Заказчика [type="text"] (urName)
	// 15. Юридический адрес Заказчика [type="text"] (urAddress)
	// 16. ИНН [type="number"] (urInn)
	// 17. ОГРН/ОГРНИП [type="number"] (urOgrn)
	// 18. КПП [type="number"] (urKpp)
	// 19. р/с [type="number"] (urRs)
	// 20. к/с [type="number"] (urKs)
	// 21. Название Банка [type="text"] (urNameBank)
	// 22. БИК [type="text"] (urBikBank)
*/    
    /*if((isset($_POST['nameM']) && $_POST['nameM']!="") && (isset($_POST['getUslugi']) && $_POST['getUslugi']!="") && (isset($_POST['factName']) && $_POST['factName']!="") && (isset($_POST['factAddress']) && $_POST['factAddress']!="") && (isset($_POST['vid']) && $_POST['vid']!="") && (isset($_POST['1-days']) && $_POST['1-days']!="") && (isset($_POST['start']) && $_POST['start']!="") && (isset($_POST['finish']) && $_POST['finish']!="") && (isset($_POST['contactName']) && $_POST['contactName']!="") && (isset($_POST['contactPhone']) && $_POST['contactPhone']!="") && (isset($_POST['contactWorkPhone']) && $_POST['contactWorkPhone']!="") && (isset($_POST['contactEmail']) && $_POST['contactEmail']!="") && (isset($_POST['contactGoogleEmail']) && $_POST['contactGoogleEmail']!="") && (isset($_POST['contactYandexEmail']) && $_POST['contactYandexEmail']!="") && (isset($_POST['contactWeb']) && $_POST['contactWeb']!="") && (isset($_POST['urName']) && $_POST['urName']!="") && (isset($_POST['urAddress']) && $_POST['urAddress']!="") && (isset($_POST['urInn']) && $_POST['urInn']!="") && (isset($_POST['urOgrn']) && $_POST['urOgrn']!="") && (isset($_POST['urKpp']) && $_POST['urKpp']!="") && (isset($_POST['urRs']) && $_POST['urRs']!="") && (isset($_POST['urKs']) && $_POST['urKs']!="") && (isset($_POST['urNameBank']) && $_POST['urNameBank']!="") && (isset($_POST['urBikBank']) && $_POST['urBikBank']!="")) {*/
        
        $nameM = str_replace('ID','',$_POST["nameM"]);
		echo 'ID менеджера:' . $nameM . '<br>';
		$getUslugi = $_POST["getUslugi"];
		
        $factName = $_POST["factName"];
        $factAddress = $_POST["factAddress"];
        $vid = $_POST["vid"];
        $days = $_POST["1-days"];
        $start = $_POST["start"];
        $finish = $_POST["finish"];
        $workPhone = trim(strip_tags($_POST["workPhone"]));
        $contactWeb = trim(strip_tags($_POST["contactWeb"]));
        $contactGoogleEmail = trim(strip_tags($_POST["contactGoogleEmail"]));
        $contactYandexEmail = trim(strip_tags($_POST["contactYandexEmail"]));
		
        $contactName = trim(strip_tags($_POST["contactName"]));
        $contactPhone = trim(strip_tags($_POST["contactPhone"]));
        $contactEmail = trim(strip_tags($_POST["contactEmail"]));
		
		$ur = [];
		foreach($_POST["ur"] as $key=>$val){
			$ur[$key] = htmlspecialchars($val);
			echo 'key' . $key;
			print_r ($ur[$key]);
		}
		$arAddress = [];
		$arProducts = [];
		
		$arPhone = (!empty($workPhone)) ? array(array('VALUE' => $workPhone, 'VALUE_TYPE' => 'WORK')) : array();
		$arContactPhone = (!empty($contactPhone)) ? array(array('VALUE' => $contactPhone, 'VALUE_TYPE' => 'MOBILE')) : array();
		$arEmail = (!empty($contactEmail)) ? array(array('VALUE' => $contactEmail, 'VALUE_TYPE' => 'WORK')) : array();
		
		if ( $ur[0] == 'Юр.лицо' ) {			
			$urId = 1;
			$arAddress['TYPE_ID'] = 6;
			$arAddress['ENTITY_TYPE_ID'] = 8;
			$arAddress['ADDRESS_1'] = $_POST["urAddress"];
			echo 'Юр.лицо';
		} elseif ( $ur[0] == 'ИП' ) {
			$urId = 3;
			$arAddress['TYPE_ID'] = 4;
			$arAddress['ENTITY_TYPE_ID'] = 8;
			$arAddress['ADDRESS_1'] = $_POST["urAddress"];
			echo 'ИП';
		}
		
        $urName = trim(strip_tags($_POST["urName"]));
        $urInn = trim(strip_tags($_POST["urInn"]));
        $urOgrn = trim(strip_tags($_POST["urOgrn"]));
        $urOgrnip = trim(strip_tags($_POST["urOgrnip"]));
        $urKpp = trim(strip_tags($_POST["urKpp"]));
        $urRs = trim(strip_tags($_POST["urRs"]));
        $urKs = trim(strip_tags($_POST["urKs"]));
        $urNameBank = trim(strip_tags($_POST["urNameBank"]));
        $urBikBank = trim(strip_tags($_POST["urBikBank"]));
        
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
			$leadData = $_POST['DATA']; 
			echo "DATA";
			print_r($leadData);
			$defaults = $_REQUEST; 
			writeToLog($_REQUEST, 'webform');		
		
			/*** СОЗДАЕМ КОМПАНИЮ С РЕКВИЗИТАМИ + СДЕЛКУ ***/
			$contact = 'https://don360.bitrix24.ru/rest/1/klt562cqohkrbpr4/crm.contact.add.json';
			$dataContact = http_build_query(array( 
				'fields' => array(
					'NAME' => $contactName,
					'EMAIL' => $arEmail,
					"ASSIGNED_BY_ID" => $nameM, 
					'PHONE' => $arContactPhone
				)
			));
			$cUrl_Contact = curl_init();
			curl_setopt_array($cUrl_Contact, array(
				CURLOPT_SSL_VERIFYPEER => 0,
				CURLOPT_POST => 1,
				CURLOPT_HEADER => 0,
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $contact,
				CURLOPT_POSTFIELDS => $dataContact
			));
			$resultContact = curl_exec($cUrl_Contact);
			curl_close($cUrl_Contact);
			$resultContact = json_decode($resultContact, 1);
			
			echo "<b>КОНТАКТ:</b><br><pre>";
			print_r($resultContact);
			echo "</pre><br>";
			
			$company = 'https://don360.bitrix24.ru/rest/1/klt562cqohkrbpr4/crm.company.add.json';
			$dataCompany = http_build_query(array( 
				'fields' => array(
					'TITLE' => $urName,
					'COMPANY_TYPE' => 'CUSTOMER',
					"ASSIGNED_BY_ID" => $nameM, 
					'PHONE' => $arPhone,
					"CONTACT_ID" => $resultContact['result']
				)
			));
			$cUrl_Company = curl_init();
			curl_setopt_array($cUrl_Company, array(
				CURLOPT_SSL_VERIFYPEER => 0,
				CURLOPT_POST => 1,
				CURLOPT_HEADER => 0,
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $company,
				CURLOPT_POSTFIELDS => $dataCompany
			));
			$resultCompany = curl_exec($cUrl_Company);
			curl_close($cUrl_Company);
			$resultCompany = json_decode($resultCompany, 1);
			
			echo "<b>КОМПАНИЯ:</b><br><pre>";
			print_r($resultCompany);
			echo "</pre><br>";
			
			if(!empty($resultCompany['result'])){
				$addContactToCompany = 'https://don360.bitrix24.ru/rest/1/klt562cqohkrbpr4/crm.company.contact.add.json';
				$addContactToCompany_data = http_build_query(array( 
					'id' => $resultCompany['result'],
					'fields' => array(
						'CONTACT_ID' => $resultContact['result']
					)
				));
				$cUrl_addContactToCompany = curl_init();
				curl_setopt_array($cUrl_addContactToCompany, array(
					CURLOPT_SSL_VERIFYPEER => 0,
					CURLOPT_POST => 1,
					CURLOPT_HEADER => 0,
					CURLOPT_RETURNTRANSFER => 1,
					CURLOPT_URL => $addContactToCompany,
					CURLOPT_POSTFIELDS => $addContactToCompany_data
				));
				$resultcUrl_addContactToCompany = curl_exec($cUrl_addContactToCompany);
				curl_close($cUrl_addContactToCompany);
				$resultcUrl_addContactToCompany = json_decode($resultcUrl_addContactToCompany, 1);
			}
			
			if(!empty($resultCompany['result'])){
				$requisite = 'https://don360.bitrix24.ru/rest/1/klt562cqohkrbpr4/crm.requisite.add.json';
				if($urId == 1) {
					$dataRequisite = http_build_query(array( 
						'fields' => array(
							'ENTITY_TYPE_ID' => 4, //4 - is company in CRest::call('crm.enum.ownertype');
							'ENTITY_ID' => $resultCompany['result'],//company id
							'PRESET_ID' => intval($urId),
							'TITLE' => $urName,
							'ACTIVE' => 'Y',
							'NAME' => $urName,
							'RQ_INN' => $urInn,
							'RQ_COMPANY_NAME' => $urName,
							'RQ_OGRN' => $urOgrn,
							'RQ_KPP' => $urKpp
						)
					));
				} elseif ($urId == 3){
					$dataRequisite = http_build_query(array( 
						'fields' => array(
							'ENTITY_TYPE_ID' => 4, //4 - is company in CRest::call('crm.enum.ownertype');
							'ENTITY_ID' => $resultCompany['result'],//company id
							'PRESET_ID' => intval($urId),
							'TITLE' => $urName,
							'ACTIVE' => 'Y',
							'NAME' => $urName,
							'RQ_NAME' => $contactName,
							'RQ_INN' => $urInn,
							'RQ_OGRNIP' => $urOgrnip
						)
					));
				}
				
				$cUrl_Requisite = curl_init();
				curl_setopt_array($cUrl_Requisite, array(
					CURLOPT_SSL_VERIFYPEER => 0,
					CURLOPT_POST => 1,
					CURLOPT_HEADER => 0,
					CURLOPT_RETURNTRANSFER => 1,
					CURLOPT_URL => $requisite,
					CURLOPT_POSTFIELDS => $dataRequisite
				));
				$resultRequisite = curl_exec($cUrl_Requisite);
				curl_close($cUrl_Requisite);
				$resultRequisite = json_decode($resultRequisite, 1);
				
				echo "<b>Реквизиты:</b><br><pre>";
				print_r($resultRequisite);
				echo "</pre><br>";
				
				if(!empty($resultRequisite['result'])){
					$arAddress['ENTITY_ID'] = $resultRequisite['result'];//id requisite
					
					$address = 'https://don360.bitrix24.ru/rest/1/klt562cqohkrbpr4/crm.address.add.json';
					$dataAddress = http_build_query(array( 
						'fields' => $arAddress
					));
					echo "<b>dataAdress:</b><br><pre>";
						print_r($arAddress);
					echo "</pre><br>";
					$cUrl_Address = curl_init();
					curl_setopt_array($cUrl_Address, array(
						CURLOPT_SSL_VERIFYPEER => 0,
						CURLOPT_POST => 1,
						CURLOPT_HEADER => 0,
						CURLOPT_RETURNTRANSFER => 1,
						CURLOPT_URL => $address,
						CURLOPT_POSTFIELDS => $dataAddress
					));
					$resultAddress = curl_exec($cUrl_Address);
					curl_close($cUrl_Address);
					$resultAddress = json_decode($resultAddress, 1);
					
					echo "<b>Адрес:</b><br><pre>";
					print_r($resultAddress);
					echo "</pre><br>";
				}
				
				if(!empty($resultRequisite['result'])){
					
					$bank = 'https://don360.bitrix24.ru/rest/1/klt562cqohkrbpr4/crm.requisite.bankdetail.add.json';
					$dataBank = http_build_query(array( 
						'fields' => array(
							'ENTITY_TYPE_ID' => 8,
							'ENTITY_ID' => $resultRequisite['result'],
							'NAME' => $urNameBank,
							'RQ_BANK_NAME' => $urNameBank,
							'ACTIVE' => 'Y',
							'RQ_BIK' => $urBikBank,
							'RQ_ACC_CURRENCY' => 'RUB',
							'RQ_COR_ACC_NUM' => $urKs,
							'RQ_ACC_NUM' => $urRs
						)
					));
					$cUrl_Bank = curl_init();
					curl_setopt_array($cUrl_Bank, array(
						CURLOPT_SSL_VERIFYPEER => 0,
						CURLOPT_POST => 1,
						CURLOPT_HEADER => 0,
						CURLOPT_RETURNTRANSFER => 1,
						CURLOPT_URL => $bank,
						CURLOPT_POSTFIELDS => $dataBank
					));
					$resultBank = curl_exec($cUrl_Bank);
					curl_close($cUrl_Bank);
					$resultBank = json_decode($resultBank, 1);
					
					echo "<b>Банковские реквизиты:</b><br><pre>";
					print_r($resultBank);
					echo "</pre><br>";
				}
				
				echo json_encode(['message' => 'Company add']);
				
			} elseif(!empty($resultCompanyAdd['error_description'])) {
				
				echo json_encode(['message' => 'Company not added: '.$resultCompany['error_description']]);
			
			} else {
				
				echo json_encode(['message' => 'Company not added']);
				
			}			
			
			if(!empty($resultCompany['result'])){
				$deal = 'https://don360.bitrix24.ru/rest/1/klt562cqohkrbpr4/crm.deal.add.json';
				$dataDeal = http_build_query(array( 
					'fields' => array(
						"TITLE" => $factName, 
						"TYPE_ID" => "SALE", 
						"STAGE_ID" => "C6:1", 					
						"COMPANY_ID" => $resultCompany['result'],
						"CONTACT_ID" => $resultContact['result'],
						"OPENED" => "Y", 
						"ASSIGNED_BY_ID" => $nameM,
						"CATEGORY_ID" => 6				
					),
					'params' => array("REGISTER_SONET_EVENT" => "Y")	
				));
				
				$cUrl_Deal = curl_init();
				curl_setopt_array($cUrl_Deal, array(
					CURLOPT_SSL_VERIFYPEER => 0,
					CURLOPT_POST => 1,
					CURLOPT_HEADER => 0,
					CURLOPT_RETURNTRANSFER => 1,
					CURLOPT_URL => $deal,
					CURLOPT_POSTFIELDS => $dataDeal
				));

				$resultDeal = curl_exec($cUrl_Deal);
				curl_close($cUrl_Deal);
				$resultDealAdd = json_decode($resultDeal, 1);
				
				echo "<b>Сделка:</b><br><pre>";
				print_r($resultDeal);
				echo "</pre><br>";
				/*$queryData = http_build_query(array(
					'id'=>$deal,//ид-сделки
					'rows' => array(
						array('PRODUCT_ID'=>18), //просто продукт без цены и колличества
						array('PRODUCT_ID'=>20, "PRICE" => 100.00, "QUANTITY" => 4)//продукт цена и колличество задается в сделке вне зависимости от цены в самом товаре
					),
				));*/
			}
		}
		
		
        $to = 'karpenko.p.s@gmail.com';
    	// тема письма
    	$subject = 'Тест смс';
    	// текст письма
    	$message = '<html><body><p>';
    	$message .= 'Форма отправлена со страницы: ' . $ref . '<br>';
    	$message .= 'IP-адрес: ' . $ip . '<br>';
		
		$message .= 'Имя менеджера (select ID менеджера) ' .$nameM. '<br>';
		$message .= 'Пакет услуг [type="checkbox"] ID услуги:<br>';
		if(empty($getUslugi)) {
			$message .= 'Ничего не выбрали<br>';
		} else { 
			$N = count($getUslugi); 
			$message .= '<ul>';
			for($i=0; $i < $N; $i++) { 
				$message .= '<li>'.$getUslugi[$i] . '</li>'; 
			} 
			$message .= '</ul><br>';
		}
		$message .= 'Фактическое наименовение объекта [type="text"]' .$factName. '<br>';
		$message .= 'Фактический адрес объекта [type="text"]' .$factAddress. '<br>';
		$message .= 'Вид деятельности [type="text"]' .$vid. '<br>';
		$message .= 'График работы [type="checkbox"]: ';
		if(empty($days)) {
			$message .= 'Ничего не выбрали<br>';
		} else { 
			$N = count($days); 
			$message .= '<ul>';
			for($i=0; $i < $N; $i++) { 
				$message .= '<li>'.$days[$i] . '</li>'; 
			} 
			$message .= '</ul><br>';
		}
		$message .= 'Время работы [type="time"]: ' .$start.' / '.$finish. '<br>';
		$message .= 'Контактное лицо [type="text"]' .$contactName. '<br>';
		$message .= 'Контактный телефон [type="tel"]' .$contactPhone. '<br>';
		$message .= 'Рабочий телефон [type="tel"]' .$workPhone. '<br>';
		$message .= 'Ваш email [type="email"]' .$contactEmail. '<br>';
		$message .= 'Ваш Google аккаунт (@gmail.com) [type="email"] ' .$contactGoogleEmail. '<br>';
		$message .= 'Ваш Яндекс аккаунт (@yandex.ru) [type="email"] ' .$contactYandexEmail. '<br>';
		$message .= 'WEB-сайт [type="url"] ' .$contactWeb. '<br>';

		$message .= 'Наименование Заказчика [type="text"]' .$urName. '<br>';
		$message .= 'Юридический адрес Заказчика [type="text"] ' .$urAddress. '<br>';
		$message .= 'ИНН [type="number"]' .$urInn. '<br>';
		$message .= 'ОГРН/ОГРНИП [type="number"]' .$urOgrn. '<br>';
		$message .= 'КПП [type="number"]' .$urKpp. '<br>';
		$message .= 'р/с [type="number"]' .$urRs. '<br>';
		$message .= 'к/с [type="number"]' .$urKs. '<br>';
		$message .= 'Название Банка [type="text"]' .$urNameBank. '<br>';
		$message .= 'БИК [type="number"]' .$urBikBank. '<br>';
    	$message .= '</p></body></html>';
    
    	// Для отправки HTML-письма должен быть установлен заголовок Content-type
    	$from = 'Don360. 3D туры на Google';
    	$from = '=?utf-8?B?'.base64_encode($from).'?=';
    	$headers = "MIME-Version: 1.0" . "\r\n";
    	$headers .= "Content-type: text/html; charset=UTF-8 \r\n"; 
    	$headers .= "From: " . $from . " <no-reply@don360.ru>\r\n"; 
    	$headers .= "Reply-To: no-reply@don360.ru\r\n";
    	$message .= '</p></body></html>';
    
    	mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers);
    //}
?>