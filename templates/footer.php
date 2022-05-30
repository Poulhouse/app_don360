		
<?php echo "footer.php"; ?> 
        </div>
		<div class="Footer__footer">
			<div class="Footer__footer_elements">
				<p>Стоимость пакета услуг составляет:</p>
				<div class="priceText"><span id="sumPrice">0</span> <span class="rub">₽</span></div>				
			</div>
			<div id="changeStep" class="Button__button turn_off" data-id="sendsms">Далее</div>
			<p class="Footer__footer_infotext">Мы отправим sms-код на контактный номер, для подписания данного Соглашения.</p>
		</div>
		
		
		<script>
			$(function() {
				$('select[name="nameM"]').on('change', function(){
					var ele = $(this);
					var selectedValue = ele.children("option:selected").text();
					
					$('div.SelectedOption__value').parent().addClass('Checkbox__checked')
					$('div.SelectedOption__value').addClass('SelectedOption__changed').text(selectedValue);										
					$('div.SelectedOption__label').addClass('SelectedOption__changed').text('Менеджер');
				});
				
				var price = 0;
				var numPano = 0;
				var priceOld = 0;
				var priceNewPano = 0;		
				var pricePano = 0;
				var priceUsluga = 0;
				var $sum = $('span#sumPrice');
				
				console.log('sum= '+ $sum.text());
				console.log('priceNewPano = '+ priceNewPano);
				
				function triplets(str) {
					// \u202f — неразрывный узкий пробел
					return str.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1\u202f');
				};
				function clearlets(str) {
					return str.toString().replace(/\s+/g,'');
				}
				
				function panoramas(numPano) {
					if(numPano >= 3 && numPano < 5) {	
						
						pricePano = numPano*1000;
						$('input[id="getCountPanoramas"]').attr('data-price', pricePano.toString());
						
					} else if(numPano >= 5 && numPano < 8) {
						
						pricePano = numPano*1000;
						$('input[id="getCountPanoramas"]').attr('data-price', pricePano.toString());
						
					} else if(numPano >= 8 && numPano < 12) {
					
						pricePano = numPano*1000;
						$('input[id="getCountPanoramas"]').attr('data-price', pricePano.toString());
						
					} else if(numPano >= 12 && numPano < 30) {
					
						pricePano = numPano*1000;
						$('input[id="getCountPanoramas"]').attr('data-price', pricePano.toString());
						
					} else if(numPano >= 30) {			
					
						pricePano = numPano*1000;	
						$('input[id="getCountPanoramas"]').attr('data-price', pricePano.toString());
						
					}
					return pricePano;
				};
										
				/*$('.changePanos').on('click', function(){
					$(this).hide();
					$('.selectCountsPano').css('display','flex');						
				});*/
				
				$('.plusCount').click(function () {
					$('.minusCount svg').css({
						'fill':'#25D366'
					});
					$(this).parent().find('#editTextPano').val( +$(this).parent().find('#editTextPano').val() + 1);
					$(this).parent().find('#editTextPano').attr('value', +$(this).parent().find('#editTextPano').val());
					
					var count = $(this).parent().find('#editTextPano').val();
					$('#HMPanos').text(count);
					$('#applyPano').css('background-color','#25D366');
				});
				
				$('.minusCount svg').css('fill','#d9d9d9');
				
				$('.minusCount').click(function () {
					if ($(this).parent().find('#editTextPano').val() >= 3) {
						if ($(this).parent().find('#editTextPano').val() > 3) {
							$(this).parent().find('#editTextPano').val(+$(this).parent().find('#editTextPano').val() - 1); 
							$(this).parent().find('#editTextPano').attr('value', +$(this).parent().find('#editTextPano').val());
						} 
						if ($(this).parent().find('#editTextPano').val() == 3) {
							$(this).find('svg').css('fill','#d9d9d9');
						}
					}
					
					var count = $(this).parent().find('#editTextPano').val();
					$('#HMPanos').text(count);
					$('#applyPano').css('background-color','#25D366');
				});
				
				$('#editTextPano').on('input', function(){
					var count = $(this).val();
					$('#HMPanos').text(count);
					$('#applyPano').css('background-color','#25D366');
				});
				
				$('div._13mgZ').blur(function(){
					if($(this).hasClass('focused')) {
						$(this).removeClass('focused');
						if (contents != $('.copyable-text').html()){
						  contents = $('.copyable-text').html();
						  //$('.wjdTm').css('visibility','hidden');
						} else if($('.copyable-text').text() == '') {  	
						  //$('.wjdTm').css('visibility','visible');
						}
					} else {
						$(this).addClass('focused');
						//$('.wjdTm').css('visibility','hidden');
					}							
				});
				
				
				$('input[name="getUslugi[]"]').on('change', function(){
					
					var ele = $(this);
					
					console.log('************************getUslugi CHANGE*****************************');
					
					if( ele.attr('id') == 'getCountPanoramas') {
											
						console.log('************************getCountPanoramas CHANGE*****************************');
						
						var ele = $(this);
						var $edit = $('#editTextPano');								
						var count = $edit.val();	
						numPano = count;
						
						var priceOld = price;// - (pricePano + priceUsluga);							
						
						console.log('text = '+ count);							
						console.log('numPano = '+ numPano);
						console.log('priceOld = ' + priceOld);							
						
						if(ele.is(':checked')) {
							ele.parent().parent().addClass('CheckboxBlock__wrapper_checked');		//$('div.CheckboxBlock__wrapper')								
							ele.parent().parent().parent().addClass('Checkbox__checked');	//$('div.CheckboxBlock__checkboxWrapper ')
							ele.parent().find('.Checkbox__fallfor_2line').show();
							//$('.changePanos').show();
							$('.selectCountsPano').css('display','flex');
							
							pricePano = panoramas(numPano);
							
							$('a#applyPano').on('click', function(){						
								console.log('************************ applyPano CLICK *****************************');
														
								numPano = parseInt($('#editTextPano').val());									
								console.log('numPano = '+ numPano);	
								$('.selectCountsPano').find('span').hide();			
								pricePano = panoramas(numPano);							
								$('input[id="getCountPanoramas"]').change();
								$('#applyPano').css('background-color','rgb(212, 212, 212)'); 
							});
							
							console.log('pricePano = '+ pricePano);	
							price = pricePano + priceUsluga; //сумма панорам + услуг
							//price = priceOld + price; //сумма старой стоимости и суммы панорам + услуг
							$('input[id="getCountPanoramas"]').val('Количество панорам: ' + numPano).attr('value','Количество панорам: ' + numPano);
							
						} else {
						
							ele.parent().parent().removeClass('CheckboxBlock__wrapper_checked');								
							ele.parent().parent().parent().removeClass('Checkbox__checked');
							ele.parent().find('.Checkbox__fallfor_2line').hide();
							$('.selectCountsPano').css('display','none');
							//$('.changePanos').hide();
							
							pricePano = 0; //стоимость панорам
							
							price = pricePano + priceUsluga; //сумма панорам + услуг
							//price = priceOld - price; //разница старой стоимости и суммы панорам + услуг
							console.log('pricePano = '+ pricePano);	
							
						}
						
						$sum.text(triplets(price));
						console.log('*********** sum = '+ $sum.text());
						
					} else {
					
						var priceOld = priceUsluga;
						console.log('priceOld = ' + priceOld);
						if(ele.is(':checked')) {
						
							ele.parent().parent().addClass('CheckboxBlock__wrapper_checked');		//$('div.CheckboxBlock__wrapper')								
							ele.parent().parent().parent().addClass('Checkbox__checked');	//$('div.CheckboxBlock__checkboxWrapper ')
							ele.parent().find('.Checkbox__fallfor_2line').show();
							
							priceUsluga = ele.attr('data-price');
							console.log('Стоимость услуги = +'+ priceUsluga);
							
							ele.parent().find('.Checkbox__fallfor_2line').find('.PriceList').text(triplets(priceUsluga));	
							
							priceUsluga = priceOld + parseInt(priceUsluga,10);
							
							console.log('priceUsluga = '+ priceUsluga);
							
						} else {
						
							ele.parent().parent().removeClass('CheckboxBlock__wrapper_checked');		//$('div.CheckboxBlock__wrapper')								
							ele.parent().parent().parent().removeClass('Checkbox__checked');	//$('div.CheckboxBlock__checkboxWrapper ')
							ele.parent().find('.Checkbox__fallfor_2line').hide();	
							
							priceUsluga = ele.attr('data-price');
							console.log('Стоимость услуги = -'+ priceUsluga);
								
							ele.parent().find('.Checkbox__fallfor_2line').find('.PriceList').text('');	
							
							priceUsluga = priceOld - parseInt(priceUsluga,10);
							
							console.log('priceUsluga = '+ priceUsluga);
						}
						price = pricePano + priceUsluga;
						$sum.text(triplets(price));
						console.log('*********** sum = '+ $sum.text());	
					}
				});
			});
		</script>
		<script>
			$(function(){
				$('.button_togglable_check').click(function() {
					$( this ).toggleClass( "button_checked");
					var checkBoxes = $(this).parent().find('input');
					checkBoxes.prop("checked", !checkBoxes.prop("checked"));
					
					if ($(this).parent().is('.checkbox_checked')) {
						$(this).parent().removeClass('checkbox_checked');
						$(this).attr('checked',false);
					} else {
						$(this).parent().addClass('checkbox_checked');
						$(this).attr('checked',true);
					};									
				});
				
				$('input[name="ur[]"]').change(function() {
				
					if (this.value == 'ИП') {
						$('input[value="ИП"]').parent('label').addClass('radiochecked');
						$('input[value="Юр.лицо"]').parent('label').removeClass('radiochecked');
						$('input[id="urAddress"]').attr('aria-label','Адрес регистрации');
						$('input[id="urAddress"]').parent().find('.Input__label_secondary').text('Адрес регистрации');
						
						$('input[name="urOgrn"]').attr('maxlength','15');						
						$('input[name="urOgrn"]').attr('aria-label','ОГРНИП');
						$('input[name="urOgrn"]').parent().find('.Input__label_secondary').text('ОГРНИП');
						$('input[aria-label="ОГРНИП"]').attr('name','urOgrnip');
						$('input[aria-label="ОГРНИП"]').attr('id','urOgrnip');
						
						$('input[name="urKpp"]').parent().find('.Input__label_secondary').removeClass('Input__label_isRequired');
					}
					else if (this.value == 'Юр.лицо') {
						$('input[value="ИП"]').parent('label').removeClass('radiochecked');
						$('input[value="Юр.лицо"]').parent('label').addClass('radiochecked');
						
						$('input[id="urAddress"]').attr('aria-label','Юридический адрес');
						$('input[id="urAddress"]').parent().find('.Input__label_secondary').text('Юридический адрес');
						
						$('input[name="urOgrnip"]').attr('aria-label','ОГРН');
						$('input[name="urOgrnip"]').attr('maxlength','13');
						$('input[name="urOgrnip"]').parent().find('.Input__label_secondary').text('ОГРН');
						$('input[aria-label="ОГРН"]').attr('name','urOgrn');
						$('input[aria-label="ОГРН"]').attr('id','urOgrn');
						
						
						$('input[name="urKpp"]').parent().find('.Input__label_secondary').addClass('Input__label_isRequired');
					}
				});
			});
		</script>
	
		<!-- ВАЛИДАЦИЯ -->
		<script>
		
			function success(input){
				var check = input.parent().parent().find('.Check__container');
				console.log(check);
				
				var close = input.parent().parent().find('.Close__container');
				
				if(check.css('display') == 'none') {
					check.css('display','inline-flex');
					close.hide();
				}
				if(close.css('display') == 'inline-flex') {
					check.css('display','inline-flex');
					close.hide();
				}
				
				input.parents('.FormField__field').find('.Error__errorMessage').text('');
				input.parents('.FormField__field').find('.difficult').show();		
				
				input.parent().parent().addClass('Input__layout_background_success').addClass('Input__layout_border_success');
				input.parent().parent().removeClass('Input__layout_border_error');
				input.parent().parent().find('.ValidationMark__hint').removeClass('ValidationMark__cursorDefault');
				input.parent().find('.Input__label').css('color','#128C7E');				
			}
			function errors(input) {
				var check = input.parent().parent().find('.Check__container');
				var close = input.parent().parent().find('.Close__container');
				
				input.parent().parent().addClass('Input__layout_border_error');
				input.parent().parent().find('.ValidationMark__hint').addClass('ValidationMark__cursorDefault');
				input.parent().find('.Input__label').css('color','#dd5656');
				input.parent().parent().removeClass('Input__layout_background_success').removeClass('Input__layout_border_success');
				
				if(close.css('display') == 'none') {
					close.css('display','inline-flex');
					check.hide();
				}
				if(check.css('display') == 'inline-flex') {
					close.css('display','inline-flex');
					check.hide();
				}
			}
			function urBikBank(ele, val) {
				var result = false;						
				if (typeof val === 'number') {
					val = val.toString();
				} else if (typeof val !== 'string') {
					val = '';
				}
				if (!val.length) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('БИК пуст');
				} else if (/[^0-9]/.test(val)) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('БИК может состоять только из цифр');
				} else if (val.length !== 9) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('БИК может состоять только из 9 цифр');
				} else {
					result = true;
				}
				if(!result){
					errors(ele);
				} else {
					success(ele);
				};			
			};
			function urKs(ele, val) {
				var result = false;
				//if (urBikBank(ele, val)) {
					if (typeof val === 'number') {
						val = val.toString();
					} else if (typeof val !== 'string') {
						val = '';
					}
					if (!val.length) {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('К/С пуст');
					} else if (/[^0-9]/.test(val)) {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('К/С может состоять только из цифр');
					} else if (val.length !== 20) {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('К/С может состоять только из 20 цифр');
					} else {
						var bikKs = '0' + $('input[name="urBikBank"]').val().toString().slice(4, 6) + val;
						var checksum = 0;
						var coefficients = [7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1];
						for (var i in coefficients) {
							checksum += coefficients[i] * (bikKs[i] % 10);
						}
						if (checksum % 10 === 0) {
							result = true;
						} else {
							ele.parents('.FormField__field').find('.Error__errorMessage').text('Неправильное контрольное число');
						}
					}
				//};					
				
				if(!result){
					errors(ele);
				} else {
					success(ele);
				};			
			};
			function urRs(ele, val) {
				var result = false;
				//if (urBikBank(ele, val)) {
					if (typeof val === 'number') {
						val = val.toString();
					} else if (typeof val !== 'string') {
						val = '';
					}
					if (!val.length) {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('Р/С пуст');
					} else if (/[^0-9]/.test(val)) {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('Р/С может состоять только из цифр');
					} else if (val.length !== 20) {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('Р/С может состоять только из 20 цифр');
					} else {
						var bikRs = $('input[name="urBikBank"]').val().toString().slice(-3) + val;
						var checksum = 0;
						var coefficients = [7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1];
						for (var i in coefficients) {
							checksum += coefficients[i] * (bikRs[i] % 10);
						}
						if (checksum % 10 === 0) {
							result = true;
						} else {
							ele.parents('.FormField__field').find('.Error__errorMessage').text('Неправильное контрольное число');
						}
					}
				//};					
				
				if(!result){
					errors(ele);
				} else {
					success(ele);
				};		
			};
			function urOgrn(ele, val) {
				var result = false;
				if (typeof val === 'number') {
					val = val.toString();
				} else if (typeof val !== 'string') {
					val = '';
				}
				if (!val.length) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ОГРН пуст');
				} else if (/[^0-9]/.test(val)) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ОГРН может состоять только из цифр');
				} else if (val.length !== 13) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ОГРН может состоять только из 13 цифр');
				} else {
					var n13 = parseInt((parseInt(val.slice(0, -1)) % 11).toString().slice(-1));
					if (n13 === parseInt(val[12])) {
						result = true;
					} else {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('Неправильное контрольное число');
					}
				}
				
				if(!result){
					errors(ele);
				} else {
					success(ele);
				};		
			};
			function urOgrnip(ele, val) {
				var result = false;
				if (typeof val === 'number') {
					val = val.toString();
				} else if (typeof val !== 'string') {
					val = '';
				}
				if (!val.length) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ОГРНИП пуст');
				} else if (/[^0-9]/.test(val)) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ОГРНИП может состоять только из цифр');
				} else if (val.length !== 15) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ОГРНИП может состоять только из 15 цифр');
				} else {
					var n15 = parseInt((parseInt(val.slice(0, -1)) % 13).toString().slice(-1));
					if (n15 === parseInt(val[14])) {
						result = true;
					} else {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('Неправильное контрольное число');
					}
				}					
				
				if(!result){
					errors(ele);
				} else {
					success(ele);
				};		
			};
			function urKpp(ele, val) {
				var result = false;
				if (typeof val === 'number') {
					val = val.toString();
				} else if (typeof val !== 'string') {
					val = '';
				}
				if (!val.length) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('КПП пуст');
				} else if (val.length !== 9) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('КПП может состоять только из 9 знаков (цифр или заглавных букв латинского алфавита от A до Z)');
				} else if (!/^[0-9]{4}[0-9A-Z]{2}[0-9]{3}$/.test(val)) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Неправильный формат КПП');
				} else {
					result = true;
				}
				
				if(!result){
					errors(ele);
				} else {
					success(ele);
				};		
			};
			function urInn(ele, val) {
				var result = false;
				if (typeof val === 'number') {
					val = val.toString();
				} else if (typeof val !== 'string') {
					val = '';
				}
				if (!val.length) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ИНН пуст');
				} else if (/[^0-9]/.test(val)) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ИНН может состоять только из цифр');
				} else if ([10, 12].indexOf(val.length) === -1) {
					ele.parents('.FormField__field').find('.Error__errorMessage').text('ИНН может состоять только из 10 или 12 цифр');
				} else {
					var checkDigit = function (val, coefficients) {
						var n = 0;
						for (var i in coefficients) {
							n += coefficients[i] * val[i];
						}
						return parseInt(n % 11 % 10);
					};
					switch (val.length) {
						case 10:
							var n10 = checkDigit(val, [2, 4, 10, 3, 5, 9, 4, 6, 8]);
							if (n10 === parseInt(val[9])) {
								result = true;
							}
							break;
						case 12:
							var n11 = checkDigit(val, [7, 2, 4, 10, 3, 5, 9, 4, 6, 8]);
							var n12 = checkDigit(val, [3, 7, 2, 4, 10, 3, 5, 9, 4, 6, 8]);
							if ((n11 === parseInt(val[10])) && (n12 === parseInt(val[11]))) {
								result = true;
							}
							break;
					}
					if (!result) {
						ele.parents('.FormField__field').find('.Error__errorMessage').text('Неправильное контрольное число');
					}
				};
				
				if(!result){
					errors(ele);
				} else {
					success(ele);
				};								
			};
			function urAddress(ele, val) {
				var regExp = /[\.|\,|\-|\_|\'|\"|\@|\?|\!|\:|\$ 0-9А-Яа-я()]/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите адрес на русском языке.');
					errors(ele);
				} else {
					success(ele);
				};
			};
			function urNameBank(ele, val) {
				var regExp = /([A-Za-zА-Яа-я0-9])/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Введите название банка на русском языке.');
					errors(ele);
				} else {
					success(ele);
				};
			};
			function urName(ele, val) {
				var regExp = /([A-Za-zА-Яа-я0-9])/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите наименование организации (Например: ООО "ПРИМЕР" или ИП Иванов Иван Иванович)');
					errors(ele);
				} else {
					success(ele);
				};
			};
			function contactName(ele, val) {
				var regExp = /^([А-ЯA-Z]|[А-ЯA-Z][\x27а-яa-z]{1,}|[А-ЯA-Z][\x27а-яa-z]{1,}\-([А-ЯA-Z][\x27а-яa-z]{1,}|(оглы)|(кызы)))\040[А-ЯA-Z][\x27а-яa-z]{1,}(\040[А-ЯA-Z][\x27а-яa-z]{1,})?$/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите фамилию, имя и отчество через пробел (Например: Иванов Иван Алексеевич)');
					errors(ele);
				} else {
					success(ele);
				}
			};
			function contactEmail(ele, val) {
				var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите Ваш Email (Например: example@example.ru)');
					errors(ele);
				} else {
					success(ele);
				}
			};
			function phone(ele, val) {
				var regExp = /[0-9()#&+*-=.]+/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите номер телефона.');
					errors(ele);
				} else {
					success(ele);
				}
			};
			function factName(ele, val) {
				var regExp = /([A-Za-zА-Яа-я0-9])/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите наименование объекта');
					errors(ele);
				} else {
					success(ele);
				}
			};
			function factAddress(ele, val) {
				var regExp = /[\.|\,|\-|\_|\'|\"|\@|\?|\!|\:|\$ 0-9А-Яа-я()]/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите адрес на русском');
					errors(ele);
				} else {
					success(ele);
				};
			};
			function vid(ele, val) {
				var regExp = /([А-Яа-я\Ёё])/
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите вид деятельности (Например: Магазин одежды)');
					errors(ele);
				} else {
					success(ele);
				}
			};
			function contactWeb(ele, val) {
				var regExp = /(https?:\/\/)?(www\.)?[-a-zа-яё0-9@:%._\+~#=]{2,256}\.[a-zа-яё]{1,4}(?::[0-9]+)?(\/?[-a-zа-яё0-9@:%_\+~#]+(\.[a-zа-яё0-9]+)?)+(\?[-а-яёa-z0-9@:%._\+~#]+(=[-a-zа-яё0-9@:%._\+~#]+)?((\&[-a-zа-яё0-9@:%._\+~#]+(=[-a-zа-яё0-9@:%._\+~#]+)?)+)?)?/gi
				var isValid = regExp.test(val);
				if(!isValid){
					ele.parents('.FormField__field').find('.difficult').hide();	
					ele.parents('.FormField__field').find('.Error__errorMessage').text('Недостаточно информации. Введите сайт Вашей компании');
					errors(ele);
				} else {
					success(ele);
				}
			};
			function validateForm(step) {
				if (step == 1) {
					var color = $('#applyPano').css('background-color');
					if ( ($('select[name="nameM"]').val() != '') && ($('input[name="getUslugi[]"]:checked').length > 0) && ($('#applyPano').css('background-color') == 'rgb(212, 212, 212)') ){ 
						$body.attr('data-step','2');	
						var $headingText = 'Сведения об объекте';
						
						$('.Header__centered').text($headingText);							
						$('body,html').animate({scrollTop: 0}, 400);
						$('.Error__errorMessage_Manager').text('');
						$('.Error__errorMessage_Usluga').text('');
					
					} else {
						
						if ( $('input[name="getUslugi[]"]:checked').length == 0 ) {
							$('.Error__errorMessage_Usluga').html('<p>Недостаточно информации. Выберите услугу.</p>');
							console.log('Выберите услугу');
							//errorBlock('Выберите услугу');
						} else { 
							$('.Error__errorMessage_Usluga').text('');
						};
						
						if ( ($('select[name="nameM"]').val() == '') ) {
							$('.Error__errorMessage_Manager').text('Недостаточно информации. Выберите менеджера.');
							console.log('Выберите менеджера');
							//errorBlock('Выберите менеджера');
						} else {
							$('.Error__errorMessage_Manager').text('');
						};				
						
						if(	color == 'rgb(37, 211, 102)' ) {
							$('#applyPano').css('background-color', 'rgb(221, 86, 86)');	
							$('.selectCountsPano').find('span').show();
						} else {							
							$('#applyPano').css('background-color', 'rgb(212, 212, 212)');	
							$('.selectCountsPano').find('span').hide();
						};
						
						$('body,html').animate({scrollTop: 0}, 400);
					}
				}
				if (step == 2) {
					if ( ($('input[name="factName"]').val() != '') && ($('input[name="factAddress"]').val() != '') && ($('input[name="vid"]').val() != '') && ($('input[name="contactName"]').val() != '') && ($('input[name="contactPhone"]').val() != '') && ($('input[name="workPhone"]').val() != '') && ($('input[name="contactEmail"]').val() != '') ){ 
						$body.attr('data-step','3');	
						var $headingText = 'Сведения о Заказчике';						
						$('.Header__centered').text($headingText);
						$('#changeStep').text('ПОЛУЧИТЬ SMS-КОД');
						$('body,html').animate({scrollTop: 0}, 400);
						
					} else {					
						
						if ($('input[name="contactName"]').val() == '') {
							var ele = $('input[name="contactName"]');
							var val = ele.val();
							contactName(ele, val);
						};
						
						if ($('input[name="contactEmail"]').val() == '') {
							var ele = $('input[name="contactEmail"]');							
							var val = ele.val();
							contactEmail(ele, val);
						};
						
						if ($('input[name="contactPhone"]').val() == '') {
							var ele = $('input[name="contactPhone"]');							
							var val = ele.val();
							phone(ele, val);
						};
						
						if ($('input[name="workPhone"]').val() == '') {
							var ele = $('input[name="workPhone"]');							
							var val = ele.val();
							phone(ele, val);
						};
						
						if ($('input[name="factName"]').val() == '') {
							var ele = $('input[name="factName"]');							
							var val = ele.val();
							factName(ele, val);
						};
						
						if ($('input[name="factAddress"]').val() == '') {
							var ele = $('input[name="factAddress"]');							
							var val = ele.val();
							factAddress(ele, val);
						};
						
						if ($('input[name="vid"]').val() == '') {
							var ele = $('input[name="vid"]');							
							var val = ele.val();
							vid(ele, val);
						};
						
						$('body,html').animate({scrollTop: 0}, 400);
					}
				}
				if (step == 3) {
					if($('input[name="ur[]"]:checked').val() == 'Юр.лицо') {
						if ( ($('input[name="urName"]').val() != '') && ($('input[id="urAddress"]').val() != '') && ($('input[name="urInn"]').val() != '') && ($('input[name="urKpp"]').val() != '') && ($('input[name="urOgrn"]').val() != '') && ($('input[name="urNameBank"]').val() != '') && ($('input[name="urRs"]').val() != '') && ($('input[name="urKs"]').val() != '') && ($('input[name="urBikBank"]').val() != '') ){		
						
							$('div[data-id="sendsms"]').removeClass('btn-disabled');
							$('div[data-id="sendsms"]').bind('click',function(){return true;}); 
							
						} else { 
						
							$('div[data-id="sendsms"]').addClass('btn-disabled');
							$('div[data-id="sendsms"]').bind('click',function(){return false;});
							$('body,html').animate({scrollTop: 0}, 400);
							
							if ($('input[name="urName"]').val() == '') {
								var ele = $('input[name="urName"]');							
								var val = ele.val();
								urName(ele, val);
							};
							
							if ($('input[id="urAddress"]').val() == '') {
								var ele = $('input[id="urAddress"]');							
								var val = ele.val();
								urAddress(ele, val);
							};
							
							if ($('input[name="urInn"]').val() == '') {
								var ele = $('input[name="urInn"]');							
								var val = ele.val();
								urInn(ele, val);
							};
								
							if ($('input[name="urKpp"]').val() == '') {
								var ele = $('input[name="urKpp"]');							
								var val = ele.val();
								urKpp(ele, val);
							};	
							
							if ($('input[name="urOgrn"]').val() == '') {
								var ele = $('input[name="urOgrn"]');							
								var val = ele.val();
								urOgrn(ele,val);
							};
							
							if ($('input[name="urNameBank"]').val() == '') {
								var ele = $('input[name="urNameBank"]');							
								var val = ele.val();
								urNameBank(ele, val);
							};
							
							if ($('input[name="urBikBank"]').val() == '') {	
								var ele = $('input[name="urBikBank"]');							
								var val = ele.val();
								urBikBank(ele, val);
							};
							
							if ($('input[name="urRs"]').val() == '') {
								var ele = $('input[name="urRs"]');							
								var val = ele.val();
								urRs(ele, val);
							};
							
							if ($('input[name="urKs"]').val() == '') {
								var ele = $('input[name="urKs"]');							
								var val = ele.val();
								urKs(ele, val);
							};
							
							
						};
					} else if($('input[name="ur[]"]:checked').val() == 'ИП') {
						if ( ($('input[name="urName"]').val() != '') && ($('input[id="urAddress"]').val() != '') && ($('input[name="urInn"]').val() != '') && ($('input[name="urOgrnip"]').val() != '') && ($('input[name="urNameBank"]').val() != '') && ($('input[name="urRs"]').val() != '') && ($('input[name="urKs"]').val() != '') && ($('input[name="urBikBank"]').val() != '') ){ 
							$('div[data-id="sendsms"]').removeClass('btn-disabled');
							$('div[data-id="sendsms"]').bind('click',function(){return true;}); 
						
						} else { 
							if ($('input[name="urName"]').val() == '') {
								var ele = $('input[name="urName"]');							
								var val = ele.val();
								urName(ele, val);
							};
							
							if ($('input[id="urAddress"]').val() == '') {
								var ele = $('input[id="urAddress"]');							
								var val = ele.val();
								urAddress(ele, val);
							};
							
							if ($('input[name="urInn"]').val() == '') {
								var ele = $('input[name="urInn"]');							
								var val = ele.val();
								urInn(ele, val);
							};
								
							if ($('input[name="urKpp"]').val() == '') {
								var ele = $('input[name="urKpp"]');							
								var val = ele.val();
								//urKpp(ele, val);
							};	
							
							if ($('input[name="urOgrnip"]').val() == '') {
								var ele = $('input[name="urOgrnip"]');							
								var val = ele.val();
								urOgrnip(ele,val);
							};
							
							if ($('input[name="urNameBank"]').val() == '') {
								var ele = $('input[name="urNameBank"]');							
								var val = ele.val();
								urNameBank(ele, val);
							};
							
							if ($('input[name="urBikBank"]').val() == '') {	
								var ele = $('input[name="urBikBank"]');							
								var val = ele.val();
								urBikBank(ele, val);
							};
							
							if ($('input[name="urRs"]').val() == '') {
								var ele = $('input[name="urRs"]');							
								var val = ele.val();
								urRs(ele, val);
							};
							
							if ($('input[name="urKs"]').val() == '') {
								var ele = $('input[name="urKs"]');							
								var val = ele.val();
								urKs(ele, val);
							};
							
							$('div[data-id="sendsms"]').addClass('btn-disabled');
							$('div[data-id="sendsms"]').bind('click',function(){return false;});
							$('body,html').animate({scrollTop: 0}, 400);
						
						};
					}
				}
				if (step == 4) {
					if( ($('input[name="dogovor"]:checked').length != 0) && ($('input[name="policy"]:checked').length != 0) && ($('input[name="copyCode"]').val().length == 4 ) ) { 					
						$('input[name="dogovor"], input[name="policy"]').css('border', '1px solid red');
						$('#ok').addClass('btn-disabled');
						$('#ok').bind('click',function(){return false;});										
					} else {			
						$('input[name="dogovor"], input[name="policy"]').css('border', '1px solid #000000');
						$('#ok').removeClass('btn-disabled');
						$('#ok').bind('click',function(){return true;});				
					}				
				}
			};
			
			$body = $('body');
			$('.finalstep').hide();	
			$('input[name="contactPhone"], input[name="workPhone"]').inputmask('+7(999)999-99-99');
			$('input[type="text"], input[type="tel"], input[type="number"], input[type="email"], input[type="url"], input[type="number"]').on('change', function(){
				var ele = $(this);
				var val = ele.val();
				ele.attr('value', val);	
				
				if (ele.attr('name') == 'contactName') {
					contactName(ele, val);						
				};
				
				if (ele.attr('name') == 'contactEmail') {
					contactEmail(ele, val);						
				};
				
				if (ele.attr('name') == 'contactGoogleEmail' || ele.attr('name') == 'contactYandexEmail') {
					contactEmail(ele, val);
				};
				
				if (ele.attr('name') == 'contactWeb') {
					contactWeb(ele, val);
				};
				
				if (ele.attr('name') == 'contactPhone') {
					phone(ele, val);
				};
				
				if (ele.attr('name') == 'workPhone') {
					phone(ele, val);
				};
				
				if (ele.attr('name') == 'factName') {
					factName(ele, val);
				};	
				
				if (ele.attr('name') == 'factAddress') {
					factAddress(ele, val);
				};
				
				if (ele.attr('name') == 'vid') {
					vid(ele, val);						
				};
				
				
				
				
				if (ele.attr('name') == 'urBikBank') {						
					urBikBank(ele, val);
				};
				
				if (ele.attr('name') == 'urKs') {
					urKs(ele, val);
				};
				
				if (ele.attr('name') == 'urRs') {
					urRs(ele, val);						
				};
				
				if (ele.attr('name') == 'urOgrnip') {
					urOgrnip(ele, val);
				};
				
				if (ele.attr('name') == 'urOgrn') {
					urOgrn(ele, val);
				};
								
				if (ele.attr('name') == 'urKpp') {
					urKpp(ele, val);
				};
				
				if (ele.attr('name') == 'urInn') {
					urInn(ele, val);
				};
				
				if (ele.attr('id') == 'urAddress') {
					urAddress(ele, val);
				};
				
				if (ele.attr('name') == 'urNameBank') {
					urNameBank(ele, val);
				};
				
				if (ele.attr('name') == 'urName') {
					urName(ele, val);
				};
				
			});
			$('input[type="text"], input[type="email"], input[type="url"], input[type="number"]').on('focusin', function(){
				var ele = $(this);
				ele.addClass('Input__value_changed');
				
				ele.parent().find('.Input__label').addClass('Input__label_changed');
				
				ele.parent().parent().removeClass('Input__layout_background_success').removeClass('Input__layout_border_success');
				ele.parent().parent().addClass('Input__layout_background_focused').addClass('Input__layout_border_focused');
			});
			$('input[type="text"], input[type="email"], input[type="url"], input[type="number"]').on('focusout', function(){ 
				var ele = $(this);
				if(ele.val() == ''){
					ele.removeClass('Input__value_changed');
					ele.parent().find('.Input__label').removeClass('Input__label_changed');
					ele.parent().parent().removeClass('Input__layout_background_focused').removeClass('Input__layout_border_focused');	
				}
				if(ele.val() != ''){
					ele.parent().parent().removeClass('Input__layout_background_focused').removeClass('Input__layout_border_focused');	
				}
			});
			$('input[name="vid"]').on('input', function(){
				var ele = $(this);
				var val = ele.val();
				$('input[name="factName"]').attr('value',val+' ');
			});
			
			// что должно происходить при нажатии на кнопку BACK
			$('div.ml-appbar--back').on('click', function(){
				if ($('#step2').is(':visible')) {
				
					$body.attr('data-step','1');
					
				    var $headingText = 'Сформируйте пакет услуг';
					
					$('.Header__centered').text($headingText);
					
					$('body,html').animate({scrollTop: 0}, 400);
					
				} else if ($('#step3').is(':visible')) { //если шаг 3
				
					$body.attr('data-step','2');
				    var $headingText = 'Сведения об объекте';
					
					$('#changeStep').text('Далее');
					
					$('.Header__centered').text($headingText);
					$('body,html').animate({scrollTop: 0}, 400);
					
				} else if ($('#step4').is(':visible')) { //если шаг 4
					$body.attr('data-step','3');
				    var $headingText = 'Сведения о Заказчике';
					$('#changeStep').text('ПОЛУЧИТЬ SMS-КОД');
					$('.Header__centered').text($headingText);
					$('body,html').animate({scrollTop: 0}, 400);
					
				};
			});
			
			// что должно происходить при двойном нажатии на ЗАГОЛОВОК этапа
			$('.Header__centered').dblclick(function(){
				
				if ($('#step3').is(':visible')) { //если шаг 3
					alert('Вы героически кликнули по элементу "Header__centered" дважды!');
					var $data_tel = {};						
					/*Массив данных*/
					$('form#verify').find('input[name="contactPhone"]').each( function() { 
						$data_tel[this.name] = $(this).val();	// берем введеный номер телефона
					});
					
					//$data_tel[contactPhone] = $('input[name="contactPhone"]').val()
					
					$.ajax({
						type: 'POST',	// используем методо POST
						url: '/wp-content/themes/frog/getsms.php',	// обработчик данных
						data: $data_tel,
						beforeSend: function(xhr) {
							//status.show();
							console.log('Запрос отправлен. Ждите ответа.');
						},
						error: function(req, text, error){ // отслеживание ошибок во время выполнения ajax-запроса
							//status.show();
							console.log('Ошибка! ' + text + ' | ' + error);
						},
						complete: function() {
							console.log('Запрос полностью завершен!');
						},
						success: function(data) {
							//status.show();
							console.log(data);
							$body.attr('data-step','4');
							var $headingText = 'Подписание соглашения';	
							$('#changeStep').text('ПОДПИСАТЬ СОГЛАШЕНИЕ');	
							var contactPhone = $('input[name="contactPhone"]').val().toString();						
							$('#phoneNumberVerify').text(contactPhone);
							$('.Header__centered').text($headingText);					
							$('body,html').animate({scrollTop: 0}, 400);
						}
					});
				}
			});
			
			// что должно происходить при нажатии на кнопку ДАЛЕЕ
			$('#changeStep').on('click', function(){
				if( $('#step1').is(':visible') ) {	//если шаг 1
					validateForm('1');					
				} else if ($('#step2').is(':visible')) { //если шаг 2				
					validateForm('2');					
				} else if ($('#step3').is(':visible')) { //если шаг 3					
					validateForm('3');
					$('div[data-id="sendsms"]').on('click', function(){
						var $data_tel = {};
						
						/*Массив данных*/
						$('form#verify').find('input[name="contactPhone"]').each( function() { 
							$data_tel[this.name] = $(this).val();	// берем введеный номер телефона
						});
						
						//$data_tel[contactPhone] = $('input[name="contactPhone"]').val()
						
						$.ajax({
							type: 'POST',	// используем методо POST
							url: '/wp-content/themes/frog/getsms.php',	// обработчик данных
							data: $data_tel,
							beforeSend: function(xhr) {
								//status.show();
								console.log('Запрос отправлен. Ждите ответа.');
							},
							error: function(req, text, error){ // отслеживание ошибок во время выполнения ajax-запроса
								//status.show();
								console.log('Ошибка! ' + text + ' | ' + error);
							},
							complete: function() {
								console.log('Запрос полностью завершен!');
							},
							success: function(data) {
								//status.show();
								console.log(data);
								$body.attr('data-step','4');
								var $headingText = 'Подписание соглашения';	
								$('#changeStep').text('ПОДПИСАТЬ СОГЛАШЕНИЕ');	
								var contactPhone = $('input[name="contactPhone"]').val().toString();						
								$('#phoneNumberVerify').text(contactPhone);
								$('.Header__centered').text($headingText);					
								$('body,html').animate({scrollTop: 0}, 400);
							}
						});
					});
				} else if ($('#step4').is(':visible')) {				
					validateForm('4');
				};
			});
	
		</script>
		
		<!--/******************** STEP 4 ********************/-->
		<script>			
			function prevJump(x) {
				var key = event.keyCode || event.charCode;
				if( key == 8 || key == 46 ){
					//$(x).css('border', '1px solid #ff0000');
					$('#ok').addClass('btn-disabled');
					$('#ok').bind('click',function(){return false;});
					$('input[name="copyCode"]').attr('value', '');
					if(x.value.length != 1){
						do{
							x = x.previousSibling;
						}
						while(x && !(/tel/.test(x.type)));
						if(x && /tel/.test(x.type)){
							x.select();
						}
					}
				}
			}
			function nextJump(x) {
				if(x.value.length == 1){
					do{
						x = x.nextSibling;
					}
					while(x && !(/tel/.test(x.type)));
					if(x && /tel/.test(x.type)){
						x.focus();					
					}
				}
			};
			$('input[name="pincode"]').on('input', function() {
				var pincode = '';
				if ( $('input[name="pincode"]').filter(function() {return $.trim($(this).val()).length == 0}).length == 0 ) {
					$('input[name="pincode"]').each(function(){
						pincode = pincode.concat(''+ $(this).val());			
					});
					$('input[name="copyCode"]').attr('value', pincode.toString());
					$('#ok').removeClass('btn-disabled');
					$('#ok').bind('click',function(){return true;});
				}
			});
			
			$('input[name="dogovor"]').on('change', function() {
							
				if ( ($('input[name="dogovor"]:checked').length != 0) ) {
					$('label[for="dogovor"]').css('color','#000000');
					
					if ( ($('input[name="policy"]:checked').length != 0) ) {
						$('label[for="policy"]').css('color','#000000');
						
						if(($('input[name="copyCode"]').val() != '')) {						
							$('#ok').removeClass('btn-disabled');
							$('#ok').bind('click',function(){return true;});
						}
					}
				} else {
					$('#ok').addClass('btn-disabled');
					$('#ok').bind('click',function(){return false;});					
				}
			});
			$('input[name="policy"]').on('change', function() {		
				if ( ($('input[name="policy"]:checked').length != 0) ) { 
					$('label[for="policy"]').css('color','#000000');
					
					if ( ($('input[name="dogovor"]:checked').length != 0) ) {
						$('label[for="dogovor"]').css('color','#000000');
						
						if(($('input[name="copyCode"]').val() != '')) {						
							$('#ok').removeClass('btn-disabled');
							$('#ok').bind('click',function(){return true;});
						}
					}
				} else {
					$('#ok').addClass('btn-disabled');
					$('#ok').bind('click',function(){return false;});					
				}
			});
		
			$('#ok').on('click', function(){
							
				var $data_verify = {};							
				var statusVerify = $('#statusVerify');
				
				$('form#verify').find('input[name="contactPhone"], input[name="copyCode"]').each(function() {
					$data_verify[this.name] = $(this).val();	// берем введеный смс-код
				});
				
				$.ajax({
					type: 'POST',	// используем методо POST
					url: '/wp-content/themes/frog/smsverify.php',	// обработчик данных
					data: $data_verify,
					beforeSend: function(xhr) {
						statusVerify.show();
						console.log('Запрос отправлен. Ждите ответа.');
					},
					error: function(req, text, error){ // отслеживание ошибок во время выполнения ajax-запроса
						statusVerify.show();
						console.log('Ошибка! ' + text + ' | ' + error);
					},
					complete: function() {
						console.log('Запрос полностью завершен!');
					},
					success: function(data) {
						console.log(data);
						if(data == 'Вы ввели неверный код подтверждения. Попробуйте снова.') {
							$('.ValidationText').text(data).show();
							$('input[name="pincode"]').addClass('shake').addClass('animated');
							setTimeout(function(){
								$('input[name="pincode"]').removeClass('shake').removeClass('animated');
							}, 300);							
							$('#ok').addClass('btn-disabled');
							$('#ok').bind('click',function(){return false;});
						} else {
							$('.ValidationText').text('').hide();
							statusVerify.show();
							//statusVerify.html(data);
							$('.finalstep').css('display','flex');	// показываем кнопку отправить документы
						}						
					}
				});
			});
		</script>
		<!--/******************** /STEP 4 ********************/-->
		
		<script>				
			function sendVerify() {
				var $data = {};
				var getUslugi = new Array();
				$('form#verify').find('input[name="getUslugi[]"]:checked').each(function() {
					getUslugi.push($(this).val());					
				});
				$data['getUslugi'] = getUslugi;
				
				var days = new Array();
				$('form#verify').find('input[name="1-days[]"]:checked').each(function() {
					days.push($(this).val());					
				});
				$data['1-days'] = days;
				
				var urArray = new Array();
				$('form#verify').find('input[name="ur[]"]:checked').each(function() {
					urArray.push($(this).val());					
				});
				$data['ur'] = urArray;
				
				
				$('form#verify').find('input[type="text"], input[type="time"], input[type="number"], input[type="tel"], input[type="email"], select').each(function() {
					$data[this.name] = $(this).val();
				});
				
				$.ajax({
					type: 'POST',
					url: '/wp-content/themes/frog/form.php',
					data: $data,
					beforeSend: function(xhr) {
						$('svg.success').hide();
						$('svg.reload').show();
					},
					error: function(xhr, str) {
						console.log('Возникла ошибка');
					},
					complete: function() {
					
						$('body').append('<div class="bg_screen"><div>Соглашение отправлено</div></div>');
						//$('#results').show();
						//$('form#verify').parent().find('#results-procent').click();
						//$('.ajax-loading').removeClass('active');
						console.log('Успешно');
						
					},					
					success: function(data) {
						console.log('Отлично');
						$('.finalstep .policy_form').hide();
						$('.relodPageTimer').show();
						$('svg.success').show();
						$('svg.reload').hide();
					}
				});
				//setTimeout(function() {window.location.reload();}, 5000);
			};
		</script>
		
	</body>
</html>