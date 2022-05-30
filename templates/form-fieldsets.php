<?php echo "form-fieldsets.php"; ?>           
<form id="verify" class="form-style" method="post" autocomplete="off" onsubmit="sendVerify()" action="javascript:void(0);">	
    
    <input type="hidden" id="nForm" name="nForm" value="Соглашение о присоединении">
    
    <!-- ШАГ 1. ВЫБРАТЬ МЕНЕДЖЕРА -->
    <fieldset id="step1" class="groupForm">
    
        <div class="Row__row">
            <div class="FormField__field">
                <div>
                    <div class="SelectWrap__root" role="listbox">
                    
                        <select class="NativeSelect__native" name="nameM">
                            <option></option>
                            <option data-value="ID88" value="ID88">Дмитрий</option>
                            <option data-value="ID96" value="ID96">Олег</option>
                            <option data-value="ID80" value="ID80">Янина</option>
                            <option data-value="ID82" value="ID82">Виктория</option>
                            <option data-value="ID92" value="ID92">Сергей</option>
                            <option data-value="ID90" value="ID90">Светлана</option>
                            <option data-value="ID56" value="ID56">Юрий</option>
                        </select>
                        
                        <div class="SelectedOption__selectContainer">
                            <div class="SelectedOption__selectedItemWrapper" tabindex="0">
                                <div class="SelectedOption__value "></div> <!-- if change .addClass('SelectedOption__changed') -->
                                <div class="SelectedOption__label SelectedOption__isRequired">Менеджер</div><!-- if change .addClass('SelectedOption__changed') -->
                                <div class="SelectedOption__iconContainer"></div>
                            </div>
                        </div>
                        
                        
                        <!--
                        <div class="OptionsWrap__optionsWrapper_zAgfp">
                            <div style="position: relative; overflow: hidden; width: 100%; height: 0px;">
                                <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: scroll; margin-right: 0px; margin-bottom: 0px;">
                                
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2 OptionsList__optionWrapper_active_3EWgI">
                                        <div class="SelectItem__contentWrapper_2ziS6">
                                            <div class="SelectItem__contentContainer_2B-oz">
                                                <div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Ремонт</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2">
                                        <div class="SelectItem__contentWrapper_2ziS6">
                                            <div class="SelectItem__contentContainer_2B-oz">
                                                <div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Дмитрий</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2">
                                        <div class="SelectItem__contentWrapper_2ziS6">
                                            <div class="SelectItem__contentContainer_2B-oz">
                                                <div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Янина</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2">
                                        <div class="SelectItem__contentWrapper_2ziS6">
                                            <div class="SelectItem__contentContainer_2B-oz">
                                                <div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Виктория</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2">
                                        <div class="SelectItem__contentWrapper_2ziS6">
                                            <div class="SelectItem__contentContainer_2B-oz">
                                                <div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Учеба</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2"><div class="SelectItem__contentWrapper_2ziS6"><div class="SelectItem__contentContainer_2B-oz"><div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Лечение</div></div></div></div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2"><div class="SelectItem__contentWrapper_2ziS6"><div class="SelectItem__contentContainer_2B-oz"><div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Погашение долгов (не кредиты)</div></div></div></div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2"><div class="SelectItem__contentWrapper_2ziS6"><div class="SelectItem__contentContainer_2B-oz"><div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Шоппинг</div></div></div></div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2"><div class="SelectItem__contentWrapper_2ziS6"><div class="SelectItem__contentContainer_2B-oz"><div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Путешествие</div></div></div></div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2"><div class="SelectItem__contentWrapper_2ziS6"><div class="SelectItem__contentContainer_2B-oz"><div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Торжество</div></div></div></div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2"><div class="SelectItem__contentWrapper_2ziS6"><div class="SelectItem__contentContainer_2B-oz"><div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Помощь близким</div></div></div></div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2"><div class="SelectItem__contentWrapper_2ziS6"><div class="SelectItem__contentContainer_2B-oz"><div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Иное</div></div></div></div>
                                    
                                    <div class="OptionsList__optionWrapper_3D8Q9 OptionsList__slim_2J6b2">
                                        <div class="SelectItem__contentWrapper_2ziS6">
                                            <div class="SelectItem__contentContainer_2B-oz">
                                                <div class="SelectItem__data_2pv91 SelectItem__noWrap_2M71u SelectItem__title_Bfyid">Пока не определился</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; height: 6px; display: none; right: 2px; bottom: 2px; left: 2px; border-radius: 3px;">
                                    <div style="position: relative; display: block; height: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2);"></div>
                                </div>
                                <div class="OptionsWrap__trackVertical_38eWo" style="position: absolute; width: 6px; display: none;">
                                    <div class="OptionsWrap__thumbVertical_3GCOx" style="position: relative; display: block; width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
                <div class="Error__errorMessage Error__errorMessage_Manager"></div>
            </div>
        </div>
        
        <!--
        <div class="Row__row">
            <div class="Divider__divider_ki-iW"></div>
        </div>
        -->
        
        <div class="Row__row">
            <div class="FormField__field Heading__text">
                <span>Пакет услуг</span>
                <!--<div class="Header__subtext">Нажмите на услугу, чтобы её выбрать</div>-->
            </div>
        </div>
        <div class="Error__errorMessage Error__errorMessage_Usluga"></div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="3000" id="getCountPanoramas" name="getUslugi[]" class="Checkbox__nativeElement">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Фотосъемка панорам</span></div>
                                        <div class="Checkbox__fallfor_2line"><span>Количество панорам: </span><span id="HMPanos">3</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                <div class="Error__errorMessage"></div>
                
                <div class="selectCountsPano" style="display:none;">
                    <div tabindex="0" class="_13mgZ">
                    
                        <button type="button" id="minusCount" class="minusCount">
                            <svg width="18" height="6" viewBox="0 0 18 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8824 0.857422H11.1429H6.85714H2.11757C0.953143 0.857422 0 1.83542 0 3.00028C0 4.16514 0.953143 5.14314 2.11757 5.14314H6.85714H11.1429H15.8824C17.0469 5.14314 18 4.16514 18 3.00028C18 1.83542 17.0469 0.857422 15.8824 0.857422Z"></path>
                            </svg>
                        </button>
                        
                        <div tabindex="0" class="_3FeAD _1PRhq">
                            <input type="number" id="editTextPano" value="3" min="3" class="_3u328 copyable-text selectable-text" />
                        </div>
                        
                        <button type="button" id="plusCount" class="plusCount">
                            <svg height="18px" viewBox="0 0 448 448" width="18px" xmlns="http://www.w3.org/2000/svg">
                                <path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0"></path>
                            </svg>
                        </button>
                        
                    </div>
                    <span style="display:none;">Проверьте, кол-во панорам</span>
                    <a href="javascript:void(0);" id="applyPano">ОК</a>
                </div>
                <a href="javascript:void(0);" class="changePanos" style="display:none;">Изменить количество панорам</a>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="2000" name="getUslugi[]" class="Checkbox__nativeElement" value="3dGoogle">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Создание 3D тура на Google</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="3000" name="getUslugi[]" class="Checkbox__nativeElement" value="3dYandex">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Создание 3D тура на Яндекс</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="2000" name="getUslugi[]" class="Checkbox__nativeElement" value="verifyGoogle">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Верификация организации на Google</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="2000" name="getUslugi[]" class="Checkbox__nativeElement" value="verifyYandex">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Верификация организации на Яндекс</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="2000" name="getUslugi[]" class="Checkbox__nativeElement" value="selectGoogle">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Наполнение карточки на Google</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="2000" name="getUslugi[]" class="Checkbox__nativeElement" value="selectYandex">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Наполнение карточки на Яндекс</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="1800" name="getUslugi[]" class="Checkbox__nativeElement" value="publishVK">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Размещение 3D тура в VK</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="1800" name="getUslugi[]" class="Checkbox__nativeElement" value="publishFB">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Размещение 3D тура в FB</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="900" name="getUslugi[]" class="Checkbox__nativeElement" value="publishSite">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Размещение 3D тура на сайт</span></div>
                                        <div class="Checkbox__fallfor_2line"><span class="PriceList"></span><span class="rub">₽</span></div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="900" name="getUslugi[]" class="Checkbox__nativeElement" value="publishInstagram">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Создание видео 360 в Инстаграм</span></div>
                                        <div class="Checkbox__fallfor_2line"><span>Количество видео-роликов: </span><span id="HMVideos">1</span> шт.</div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                
                <div class="selectCountsVideo" style="display:none;">
                    <div tabindex="0" class="_13mgZ">
                        <div tabindex="0" class="_3FeAD _1PRhq">
                            <div class="_3u328 copyable-text selectable-text" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true">1</div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" id="applyVideo">Применить</a>
                </div>
                <a href="javascript:void(0);" class="changeVideos" style="display:none;">Изменить количество роликов</a>
                
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field">
            
                <label class="LinkCheckbox__linkCheckbox">
                    <div class="LinkCheckbox__inner">
                        <div class="CheckboxBlock__checkboxWrapper">
                            <label class="CheckboxBlock__wrapper"> <!-- addClass('CheckboxBlock__wrapper_checked') -->
                                <div class="Checkbox__container Checkbox__large"> <!-- addClass('Checkbox__checked') -->
                                    <input type="checkbox" data-price="900" name="getUslugi[]" class="Checkbox__nativeElement" value="publishYoutube">
                                    <svg class="Checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path fill="#ffffff" d="M18.293 7.293L10 15.587l-4.293-4.294a1 1 0 0 0-1.414 1.414L8.587 17c.78.78 2.05.778 2.826 0l8.294-8.293a1 1 0 1 0-1.414-1.414z"></path></svg>
                                    <div class="LinkCheckbox__fallfor">
                                        <div class="Checkbox__fallfor_1line"><span>Создание видео 360 в YouTube</span></div>
                                        <div class="Checkbox__fallfor_2line"><span>Количество панорам в видео: </span><span id="HMYoutube">3</span> шт. по 10 сек.</div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="LinkCheckbox__error"></div>
                    </div>
                </label>
                <div class="selectCountsYoutube" style="display:none;">
                    <div tabindex="0" class="_13mgZ">
                        <div tabindex="0" class="_3FeAD _1PRhq">
                            <div class="_3u328 copyable-text selectable-text" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true">3</div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" id="applyYoutube">Применить</a>
                </div>
                <a href="javascript:void(0);" class="changeYoutube" style="display:none;">Изменить количество панорам</a>
            </div>
        </div>
    
    </fieldset>
    
    
    
    <!-- ШАГ 2. СВЕДЕНИЯ ОБ ОБЪЕКТЕ -->
    <fieldset id="step2" class="groupForm">
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest" data-qa="fio">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="text" prefix="" name="vid" aria-label="Категория" id="vid" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">Категория</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="difficult">(Например: Магазин одежды или ресторан и т.д.)</div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="text" prefix="" name="factName" aria-label="Название объекта" id="factName" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">Укажите название</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
            
        
        
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest" data-qa="fio">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="text" prefix="" name="factAddress" aria-label="Факт. адрес объекта" id="factAddress" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">Факт. адрес объекта</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                
                    <div class="Suggest__suggest" data-qa="fio">
                        <div class="InputGroup__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="InputGroup__layout InputGroup__layout_background">
                                
                                <label class="InputGroup__label">График работы</label>
                                
                                <div class="InputGroupCheckboxes__layout_label">
                                
                                    <label class="checkbox checkbox_type_button checkbox_checked">
                                        <button class="button button_togglable_check button__control button_checked" role="checkbox" type="button" checked="checked"> <!-- button_checked -->
                                            <span class="button__text">Пн</span>
                                        </button>
                                        <input class="checkbox__control" type="checkbox" autocomplete="off" name="1-days[]" value="Пн" checked="true"/>
                                    </label>
                                    
                                    <label class="checkbox checkbox_type_button checkbox_checked">
                                        <button class="button button_togglable_check button__control button_checked" role="checkbox" type="button" checked="checked"> <!-- button_checked -->
                                            <span class="button__text">Вт</span>
                                        </button>
                                        <input class="checkbox__control" type="checkbox" autocomplete="off" name="1-days[]" value="Вт" checked="true"/>
                                    </label>
                                    <label class="checkbox checkbox_type_button checkbox_checked">
                                        <button class="button button_togglable_check button__control button_checked" role="checkbox" type="button" checked="checked"> <!-- button_checked -->
                                            <span class="button__text">Ср</span>
                                        </button>
                                        <input class="checkbox__control" type="checkbox" autocomplete="off" name="1-days[]" value="Ср" checked="true"/>
                                    </label>
                                    <label class="checkbox checkbox_type_button checkbox_checked">
                                        <button class="button button_togglable_check button__control button_checked" role="checkbox" type="button" checked="checked"> <!-- button_checked -->
                                            <span class="button__text">Чт</span>
                                        </button>
                                        <input class="checkbox__control" type="checkbox" autocomplete="off" name="1-days[]" value="Чт" checked="true"/>
                                    </label>
                                    <label class="checkbox checkbox_type_button checkbox_checked">
                                        <button class="button button_togglable_check button__control button_checked" role="checkbox" type="button" checked="checked"> <!-- button_checked -->
                                            <span class="button__text">Пт</span>
                                        </button>
                                        <input class="checkbox__control" type="checkbox" autocomplete="off" name="1-days[]" value="Пт" checked="true"/>
                                    </label>
                                    <label class="checkbox checkbox_type_button">
                                        <button class="button button_togglable_check button__control" role="checkbox" type="button"> <!-- button_checked -->
                                            <span class="button__text">Сб</span>
                                        </button>
                                        <input class="checkbox__control" type="checkbox" autocomplete="off" name="1-days[]" value="Сб"/>
                                    </label>
                                    <label class="checkbox checkbox_type_button">
                                        <button class="button button_togglable_check button__control" role="checkbox" type="button"> <!-- button_checked -->
                                            <span class="button__text">Вс</span>
                                        </button>
                                        <input class="checkbox__control" type="checkbox" autocomplete="off" name="1-days[]" value="Вс"/>
                                    </label>
                                </div>
                                <div class="InputGroupText__layout_label">
                                    <label class="text text_type_input">
                                        <input class="text__timecontrol" type="time" autocomplete="off" name="start" value="09:00" pattern="[0-9]{2}:[0-9]{2}"/> - <input class="text__timecontrol" type="time" autocomplete="off" name="finish" value="18:00" pattern="[0-9]{2}:[0-9]{2}"/>
                                    </label>
                                </div>
                                
                            </div>
                                
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="text" prefix="" name="contactName" aria-label="ФИО контактного лица" id="contactName" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">ФИО контактного лица</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>					
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background Input__layout_background_focused Input__layout_border_focused">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="tel" prefix="" name="contactPhone" aria-label="Контактный телефон" id="contactPhone" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary Input__value_focused Input__value_changed" inputmode="text" placeholder="+7(___)___-__-__">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary Input__label_focused Input__label_changed">Контактный телефон</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background Input__layout_background_focused Input__layout_border_focused">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="tel" prefix="" name="workPhone" aria-label="Рабочий телефон" id="workPhone" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary Input__value_focused Input__value_changed" inputmode="text" placeholder="+7(___)___-__-__">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary Input__label_focused Input__label_changed">Рабочий телефон</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="email" prefix="" name="contactEmail" aria-label="Ваш Email" id="contactEmail" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">Ваш Email</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="email" prefix="" name="contactGoogleEmail" aria-label="Google аккаунт" id="contactGoogleEmail" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" placeholder="@gmail.com">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_secondary">Google аккаунт</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="email" prefix="" name="contactYandexEmail" aria-label="Яндекс аккаунт" id="contactYandexEmail" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" placeholder="@yandex.ru">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_secondary">Яндекс аккаунт</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="url" prefix="" name="contactWeb" aria-label="WEB-сайт" id="contactWeb" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_secondary">WEB-сайт</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
    
    </fieldset>
    
    
    
    <!-- ШАГ 3. СВЕДЕНИЯ О ЗАКАЗЧИКЕ -->
    <fieldset id="step3" class="groupForm">
    

        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                
                    <div class="Suggest__suggest">
                        <div class="Input__Radio">
                            
                            <div class="Input__layout Input__layout_background" style="height:56px">
                            
                                <label class="radio radio_type_button radiochecked" for="urlico">
                                    <span class="button__text">Юр.лицо</span>
                                    <input class="radio__control" type="radio" autocomplete="off" id="urlico" name="ur[]" value="Юр.лицо" checked="checked"/>
                                </label>
                                
                                <label class="radio radio_type_button" for="ip">
                                    <span class="button__text">ИП</span>
                                    <input class="radio__control" type="radio" autocomplete="off" id="ip" name="ur[]" value="ИП" />
                                </label>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <!-- ЮР ЛИЦ -->
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="text" prefix="" name="urName" aria-label="Наименование организации" id="urName" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">Наименование организации</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="text" prefix="" name="urAddress" aria-label="Юридический адрес" id="urAddress" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">Юридический адрес</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="number" prefix="" name="urInn" aria-label="ИНН" id="urInn" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" maxlength="12">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">ИНН</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="number" prefix="" name="urKpp" aria-label="КПП" id="urKpp" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" maxlength="9">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_secondary Input__label_isRequired">КПП</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="number" prefix="" name="urOgrn" aria-label="ОГРН" id="urOgrn" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" maxlength="13"> <!-- ОГРНИП 15 -->
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">ОГРН</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="text" prefix="" name="urNameBank" aria-label="Название банка" id="urNameBank" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">Название банка</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="number" prefix="" name="urBikBank" aria-label="БИК" id="urBikBank" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" maxlength="9">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">БИК</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="number" prefix="" name="urRs" aria-label="р/с" id="urRs" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" maxlength="20">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">р/с</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
        <div class="Row__row">
            <div class="FormField__field FormField__fieldWithFootnotes">
                <div>
                    
                    <div class="Suggest__suggest">
                        <div class="Input__input">
                            
                            <!-- если ошибка валидации то добавляем класс .Input__layout_border_error, а если в фокусе Input__layout_background_focused и Input__layout_border_focused-->
                            <div class="Input__layout Input__layout_background">
                                
                                <label class="Input__wrapper">
                                
                                    <!-- добавить класс Input__value_focused при фокусе и добавить класс Input__value_changed при изменении/заполнении -->
                                    <input type="number" prefix="" name="urKs" aria-label="к/с" id="urKs" tabindex="0" autocomplete="off" autocapitalize="false" value="" class="Input__value Input__value_primary" maxlength="20">
                                    
                                    <!-- добавить класс Input__label_focused при фокусе и добавить класс Input__label_changed при изменении/заполнении -->
                                    <div class="Input__label Input__label_isRequired Input__label_secondary">к/с</div>
                                    
                                </label>
                                
                                <!-- Валидация -->
                                <div class="Input__additional Input__additionalFade">
                                    <span class="ValidationMark__hint"> <!-- .ValidationMark__cursorDefault -->
                                        <div>
                                            <span class="Check__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="Check__checkIconSvg"><path d="M2.5 52.9S21 69.8 30.2 78.3c2.4 2.2 7.1 6.5 7.1 6.5l60.2-69.7"></path></svg>
                                            </span>
                                            <span class="Close__container" style="display:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Close__closeIconSvg Close__red"><path d="M1 1l12 12M1 13L13 1"></path></svg>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <!-- /Валидация -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Error__errorMessage"></div>
            </div>
        </div>
        
    </fieldset>
    
    
    
    <!-- ШАГ 4. ПОДПИСАНИЕ СОГЛАШЕНИЯ -->
    <fieldset id="step4" class="groupForm">
                
        <div class="step4__container">
            <p>Мы отправили<br>код подтверждения на номер</p>
            <span id="phoneNumberVerify">+7(999)999-99-99</span>
            <p class="step4__container_text">Код может быть использован только один раз</p>
            
            <input type="hidden" name="copyCode" value=""/>	
            <input type="hidden" name="reservCode" value=""/>	
            
            <div class="PinField">
                <input id="pin1" type="tel" size="1" minlength="1" maxlength="1" pattern="[0-9]{1}" autocomplete="off" class="PinField__input" onkeyup="nextJump(this); prevJump(this);" name="pincode">
                <input id="pin2" type="tel" size="1" minlength="1" maxlength="1" pattern="[0-9]{1}" autocomplete="off" class="PinField__input" onkeyup="nextJump(this); prevJump(this);" name="pincode">
                <input id="pin3" type="tel" size="1" minlength="1" maxlength="1" pattern="[0-9]{1}" autocomplete="off" class="PinField__input" onkeyup="nextJump(this); prevJump(this);" name="pincode">
                <input id="pin4" type="tel" size="1" minlength="1" maxlength="1" pattern="[0-9]{1}" autocomplete="off" class="PinField__input" name="pincode" onkeyup="prevJump(this);">
            </div>
            <span class="ValidationText Danger" style="display:none;"><span>Вы ввели неверный код подтверждения. Попробуйте снова.</span></span>
            <div id="ok" class="btn-form btn-disabled">Подписать соглашение</div>
        </div>
        <div class="doc_">
            <a class="doc_dogovor" href="https://don360.ru/wp-content/uploads/2020/02/dogovor-publichnoj-oferty-na-predostavlenie-uslug-red.16-02-20.pdf" target="_blank">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="79.936px" height="79.936px" viewBox="0 0 79.936 79.936" style="enable-background:new 0 0 79.936 79.936;" xml:space="preserve">
                    <path d="M68.127,3.677H56.699c-5.271-2.436-10.896-3.676-16.73-3.676s-11.463,1.24-16.734,3.676H11.809c-0.553,0-1,0.448-1,1 v7.985C3.839,20.099,0,29.777,0,39.968c0,10.191,3.839,19.869,10.809,27.307v7.984c0,0.552,0.447,1,1,1h11.426 c5.271,2.436,10.9,3.676,16.734,3.676s11.462-1.24,16.732-3.676h11.428c0.552,0,1-0.448,1-1v-7.984 c6.968-7.438,10.807-17.115,10.807-27.307c0-10.192-3.839-19.869-10.809-27.306V4.677C69.127,4.124,68.68,3.677,68.127,3.677z M51.152,3.677h-22.37C35.989,1.449,43.947,1.449,51.152,3.677z M12.809,5.677h10.634h33.051H67.13v7.372v16.557H12.81V13.049 L12.809,5.677L12.809,5.677z M1.999,39.968c0-8.948,3.11-17.482,8.809-24.302V64.27C5.111,57.45,1.999,48.915,1.999,39.968z M28.783,76.26h22.37C43.947,78.487,35.989,78.487,28.783,76.26z M67.127,74.26H56.492h-33.05H12.809v-7.372V31.606h54.318v35.282 V74.26z M77.936,39.968c0,8.947-3.107,17.482-8.809,24.302V15.666C74.824,22.486,77.936,31.02,77.936,39.968z"/>
                    <path d="M25.888,26.998c4.821,0,8.744-3.923,8.744-8.745c0-4.822-3.923-8.744-8.744-8.744c-4.822,0-8.744,3.922-8.744,8.744 C17.144,23.075,21.066,26.998,25.888,26.998z M25.888,11.51c3.719,0,6.744,3.025,6.744,6.744c0,3.719-3.024,6.745-6.744,6.745 c-3.72,0-6.744-3.025-6.744-6.745C19.144,14.535,22.168,11.51,25.888,11.51z"/>
                    <path d="M23.906,21.804c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l4.755-4.755 c0.391-0.391,0.391-1.023,0-1.414s-1.022-0.391-1.414,0l-4.048,4.048l-1.744-1.744c-0.391-0.391-1.022-0.391-1.414,0 c-0.391,0.39-0.391,1.023,0,1.414L23.906,21.804z"/>
                    <path d="M36.671,17.342h25.487c0.553,0,1-0.448,1-1s-0.447-1-1-1H36.671c-0.552,0-1,0.448-1,1S36.119,17.342,36.671,17.342z"/>
                    <path d="M36.671,21.607h25.487c0.553,0,1-0.448,1-1c0-0.552-0.447-1-1-1H36.671c-0.552,0-1,0.448-1,1
                    C35.671,21.159,36.119,21.607,36.671,21.607z"/>
                    <path d="M62.158,35.39H18.144c-0.553,0-1,0.448-1,1c0,0.552,0.447,1,1,1h44.019c0.551,0,1-0.448,1-1
                    C63.158,35.838,62.711,35.39,62.158,35.39z"/>
                    <path d="M62.158,38.331H18.144c-0.553,0-1,0.447-1,1c0,0.552,0.447,1,1,1h44.019c0.551,0,1-0.448,1-1
                    C63.158,38.779,62.711,38.331,62.158,38.331z"/>
                    <path d="M62.158,41.272H18.144c-0.553,0-1,0.447-1,1c0,0.551,0.447,1,1,1h44.019c0.551,0,1-0.449,1-1
                    C63.16,41.72,62.711,41.272,62.158,41.272z"/>
                    <path d="M62.158,44.213H18.144c-0.553,0-1,0.448-1,1s0.447,1,1,1h44.019c0.551,0,1-0.448,1-1S62.711,44.213,62.158,44.213z"/>
                    <path d="M62.158,47.153H18.144c-0.553,0-1,0.448-1,1c0,0.555,0.447,1,1,1h44.019c0.551,0,1-0.445,1-1
                    C63.158,47.602,62.711,47.153,62.158,47.153z"/>
                    <path d="M62.158,49.507H18.144c-0.553,0-1,0.447-1,1c0,0.552,0.447,1,1,1h44.019c0.551,0,1-0.448,1-1
                    C63.158,49.954,62.711,49.507,62.158,49.507z"/>
                    <path d="M33.632,53.231H18.535c-0.552,0-1,0.448-1,1v15.098c0,0.554,0.448,1,1,1h15.097c0.553,0,1-0.446,1-1V54.231
                    C34.632,53.679,34.185,53.231,33.632,53.231z M32.632,68.329H19.535V55.231h13.097V68.329z"/>
                    <path d="M62.158,53.231H36.671c-0.552,0-1,0.448-1,1c0,0.553,0.448,1,1,1h25.487c0.553,0,1-0.447,1-1
                    C63.158,53.68,62.711,53.231,62.158,53.231z"/>
                    <path d="M62.158,56.173H36.671c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h25.487c0.553,0,1-0.448,1-1
                    C63.158,56.62,62.711,56.173,62.158,56.173z"/>
                    <path d="M62.158,58.526H36.671c-0.552,0-1,0.447-1,1c0,0.551,0.448,1,1,1h25.487c0.553,0,1-0.449,1-1
                    C63.158,58.974,62.711,58.526,62.158,58.526z"/>
                </svg>
                <span>Договор публичной оферты</span>
            </a>
            <a class="doc_policy" href="https://don360.ru/privacy-policy/" target="_blank">
                <svg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.1106 37.4196H25.4621C25.7519 37.4194 26.0298 37.3042 26.2347 37.0993C26.4397 36.8944 26.5549 36.6165 26.555 36.3267V29.9777C26.5549 29.6879 26.4397 29.41 26.2347 29.2051C26.0298 29.0001 25.7519 28.8849 25.4621 28.8848H19.1106C18.8209 28.8849 18.543 29.0002 18.3382 29.2051C18.1334 29.41 18.0183 29.6879 18.0183 29.9777V36.3267C18.0183 36.6164 18.1334 36.8943 18.3382 37.0993C18.543 37.3042 18.8209 37.4194 19.1106 37.4196V37.4196ZM20.2035 31.0712H24.3692V35.2338H20.2035V31.0712Z" />
                    <path d="M19.1108 51.0557H25.4622C25.7521 51.0557 26.03 50.9407 26.2351 50.7359C26.4401 50.531 26.5555 50.2532 26.5558 49.9634V43.6144C26.5556 43.3246 26.4404 43.0467 26.2355 42.8418C26.0306 42.6369 25.7527 42.5216 25.4629 42.5215H19.1108C18.8209 42.5215 18.5429 42.6366 18.3379 42.8416C18.133 43.0466 18.0178 43.3246 18.0178 43.6144V49.9634C18.018 50.2532 18.1332 50.531 18.3382 50.7358C18.5431 50.9406 18.821 51.0557 19.1108 51.0557V51.0557ZM20.2037 44.7073H24.3693V48.8698H20.2037V44.7073Z" />
                    <path d="M19.1108 64.6898H25.4622C25.7521 64.6897 26.0299 64.5745 26.2349 64.3696C26.4398 64.1646 26.555 63.8867 26.5552 63.5969V57.2492C26.555 56.9594 26.4398 56.6815 26.2349 56.4765C26.0299 56.2716 25.7521 56.1564 25.4622 56.1562H19.1108C18.8209 56.1563 18.5429 56.2714 18.3379 56.4764C18.133 56.6813 18.0178 56.9593 18.0178 57.2492V63.5969C18.0178 63.8868 18.133 64.1648 18.3379 64.3697C18.5429 64.5747 18.8209 64.6898 19.1108 64.6898V64.6898ZM20.2037 58.3421H24.3693V62.504H20.2037V58.3421Z" />
                    <path d="M19.1108 23.7836H25.4622C25.7521 23.7834 26.0299 23.6682 26.2349 23.4633C26.4398 23.2584 26.555 22.9805 26.5552 22.6907V16.3429C26.555 16.0531 26.4398 15.7752 26.2349 15.5703C26.0299 15.3654 25.7521 15.2502 25.4622 15.25H19.1108C18.8209 15.25 18.5429 15.3651 18.3379 15.5701C18.133 15.7751 18.0178 16.0531 18.0178 16.3429V22.6907C18.0178 22.9805 18.133 23.2585 18.3379 23.4635C18.5429 23.6684 18.8209 23.7836 19.1108 23.7836V23.7836ZM20.2037 17.4359H24.3693V21.5977H20.2037V17.4359Z" />
                    <path d="M31.8136 19.8304H60.8293C61.1192 19.8304 61.3972 19.7152 61.6022 19.5103C61.8071 19.3053 61.9223 19.0273 61.9223 18.7375C61.9223 18.4476 61.8071 18.1696 61.6022 17.9646C61.3972 17.7597 61.1192 17.6445 60.8293 17.6445H31.8136C31.5238 17.6445 31.2458 17.7597 31.0408 17.9646C30.8359 18.1696 30.7207 18.4476 30.7207 18.7375C30.7207 19.0273 30.8359 19.3053 31.0408 19.5103C31.2458 19.7152 31.5238 19.8304 31.8136 19.8304V19.8304Z" />
                    <path d="M31.8136 34.2445H60.8293C61.1192 34.2445 61.3972 34.1293 61.6022 33.9243C61.8071 33.7194 61.9223 33.4414 61.9223 33.1515C61.9223 32.8617 61.8071 32.5837 61.6022 32.3787C61.3972 32.1737 61.1192 32.0586 60.8293 32.0586H31.8136C31.5238 32.0586 31.2458 32.1737 31.0408 32.3787C30.8359 32.5837 30.7207 32.8617 30.7207 33.1515C30.7207 33.4414 30.8359 33.7194 31.0408 33.9243C31.2458 34.1293 31.5238 34.2445 31.8136 34.2445V34.2445Z" />
                    <path d="M31.8136 48.6605H60.8293C61.1192 48.6605 61.3972 48.5453 61.6022 48.3404C61.8071 48.1354 61.9223 47.8574 61.9223 47.5675C61.9223 47.2777 61.8071 46.9997 61.6022 46.7947C61.3972 46.5898 61.1192 46.4746 60.8293 46.4746H31.8136C31.5238 46.4746 31.2458 46.5898 31.0408 46.7947C30.8359 46.9997 30.7207 47.2777 30.7207 47.5675C30.7207 47.8574 30.8359 48.1354 31.0408 48.3404C31.2458 48.5453 31.5238 48.6605 31.8136 48.6605V48.6605Z" />
                    <path d="M31.8136 63.0784H60.8293C61.1192 63.0784 61.3972 62.9633 61.6022 62.7583C61.8071 62.5534 61.9223 62.2754 61.9223 61.9855C61.9223 61.6956 61.8071 61.4177 61.6022 61.2127C61.3972 61.0077 61.1192 60.8926 60.8293 60.8926H31.8136C31.5238 60.8926 31.2458 61.0077 31.0408 61.2127C30.8359 61.4177 30.7207 61.6956 30.7207 61.9855C30.7207 62.2754 30.8359 62.5534 31.0408 62.7583C31.2458 62.9633 31.5238 63.0784 31.8136 63.0784V63.0784Z" />
                    <path d="M70.3566 2.9668H9.58346C9.29414 2.96763 9.01695 3.08314 8.81266 3.28801C8.60837 3.49289 8.49365 3.77041 8.49365 4.05973V75.8808C8.49365 76.1707 8.6088 76.4487 8.81376 76.6536C9.01873 76.8586 9.29672 76.9738 9.58658 76.9738H70.3597C70.6496 76.9738 70.9276 76.8586 71.1325 76.6536C71.3375 76.4487 71.4527 76.1707 71.4527 75.8808V4.05973C71.4527 3.91594 71.4243 3.77357 71.3692 3.64076C71.314 3.50796 71.2333 3.38734 71.1314 3.28581C71.0296 3.18428 70.9088 3.10384 70.7758 3.0491C70.6428 2.99436 70.5004 2.96639 70.3566 2.9668ZM69.2637 74.7879H10.6795V5.15266H69.2668L69.2637 74.7879Z" />
                </svg>
                <span>Соглашение на обработку данных</span>
            </a>
        </div>
        <div class="policy_form">
            <input type="checkbox" name="dogovor" id="dogovor" checked="checked">
            <label for="dogovor">Настоящим подтверждаю, что полностью ознакомлен и в соответствии со статьёй 428 ГК РФ полностью присоединяюсь к Договору публичной оферты на предоставление информационно-маркетинговых услуг, в рамках сформированного пакета и согласен на прибретение данного пакета.</label>
        </div>
        <div class="policy_form">
            <input type="checkbox" name="policy" id="policy" checked="checked">
            <label for="policy">Настоящим выражаю своё согласие на обработку персональных данных</label>
        </div>
    </fieldset>
    
    <div class="finalstep" style="display:none;">	
        <div class="flex-wrap">
            <svg class="success" width="133" height="133" viewBox="0 0 133 133" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="66.5" cy="66.5" r="61.5" fill="white" stroke="#25D366" stroke-width="10"/>
                <path d="M52.8508 94.0197L26.2008 67.3697C24.5997 65.7686 24.5997 63.1726 26.2008 61.5714L28.5533 59.2184C30.1544 57.6171 32.7506 57.6171 34.3516 59.2184L55.6133 80.8123L97.98 38.7183C99.5811 37.1173 102.177 37.1173 103.778 38.7183L105.799 41.0714C107.4 42.6725 107.4 45.2684 105.799 46.8697L58.6491 94.0199C57.0479 95.621 54.4519 95.621 52.8508 94.0197Z" fill="#25D366"/>
            </svg>
            <svg class="reload" style="display:none;" width="133" height="133" viewBox="0 0 133 133" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="66.5" cy="66.5" r="61.5" fill="white" stroke="#25D366" stroke-width="10"/>
                <path d="M113 49.3461L102.605 72.5522L79.3367 62.1844L90.2399 58.0261C86.8904 48.336 77.6614 41.3527 66.8221 41.3527C56.4181 41.3527 47.0535 47.9053 43.5196 57.658L30.9289 53.1201C36.3724 38.0951 50.7973 28 66.8225 28C83.3606 28 97.4721 38.5487 102.755 53.2531L113 49.3461ZM65.1779 104C81.2034 104 95.628 93.9049 101.071 78.8795L88.4804 74.342C84.9468 84.0947 75.5826 90.6473 65.1782 90.6473C54.339 90.6473 45.11 83.664 41.7604 73.9739L52.6636 69.8156L29.3951 59.4482L19 82.6542L29.2455 78.7469C34.5279 93.4513 48.6398 104 65.1779 104Z" fill="#25D366"/>
            </svg>
            
            <div class="relodPageTimer" style="display:none;">Документы успешно отправлены</div>
            
            <div class="policy_form">
                <div id="statusVerify">Соглашение подписано.<br>Код подтверждения верный</div>
                <button id="formSubmit" type="submit" name="sendform" class="Button__button">Отправить документы</button>
                <!--<input type="checkbox" id="emailDocument" name="emailDocument">
                <label for="emailDocument">Отправить соглашение на e-mail Заказчика</label>-->
            </div>
            
        </div>
    </div>

</form>	