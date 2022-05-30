<?php echo "header.php"; ?> 
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no"/>
		<link rel="stylesheet" href="assets/css/animate.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="assets/js/jquery-insert-text.js"></script>
		<script src="assets/js/jquery.inputmask.js"></script>
		<title>Соглашение о присоединении</title>
	</head>
	<body data-step="1">
		<style class="generalClass">		
			body, div, form, h1, h2, h3, h4, h5, h6, html, li, ol, p, pre, span, ul {
				margin: 0;
				padding: 0;
				outline: 0;
				font-family:pfhighway,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif;
			}
			html, body {
				height: 100%;
			}
			html, body, .application {
				font-display: swap;
				color: #333;
				-webkit-font-kerning: normal;
				font-kerning: normal;
				text-rendering: optimizeLegibility;
				font-feature-settings: "kern" 1,"liga" 0,"clig" 0;
				-moz-font-feature-settings: "kern" 1,"liga" 0,"clig" 0;
				-ms-font-feature-settings: "kern" 1,"liga" 0,"clig" 0;
				-o-font-feature-settings: "kern" 1,"liga" 0,"clig" 0;
				-webkit-font-feature-settings: "kern" 1,"liga" 0,"clig" 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				-webkit-overflow-scrolling: touch;
			}
			
			body[data-step="1"] #step1{
				display:block;
			}
			body[data-step="2"] #step2{
				display:block;
			}
			body[data-step="3"] #step3 {
				display: block;
			}
			body[data-step="4"] #step4 {
				display: block;
				margin: 0 -16px;
				margin-top: -17px;
			}
			fieldset { 
				display:none;
				border: 0;
				padding: 0;
				margin: 0;
			}
			form#verify {
				max-width: 600px;
				width: 100%;
				padding: 16px;
				margin: 0 auto 16px;
				border: 1px solid #d9d9d9;
			}
			@media only screen and (max-width: 600px) {
				form#verify {
					max-width: 600px;
					width: 100%;
					padding: 0;
					margin: 0 auto;
					border: 0;
				}
			}			
			svg:not(:root) {
				overflow: hidden;
			}
			/******/
			
			.Scene__wrapper {
				margin: 0 16px;
				padding: 28px 0;
				padding-bottom: 61px;
				padding-top: 72px;
			}
			
			/*[data-step='2'] .Scene__wrapper {
				padding-bottom: 0;
			}*/
			[data-step='3'] .Scene__wrapper {
				padding-bottom: 0;
			}
			[data-step='4'] .Scene__wrapper {
				padding-bottom: 0;
				padding-top: 56px;
			}
			/******/
			
			.Footer__footer {
				text-align: center;
				position: fixed;
				z-index: 9;
				bottom: 0;
				width: 100%;
				height: 60px;
				display: flex;
				align-items: center;
				justify-content: center;
				left: 0px;
				background: #128C7E;
			}
			
			[data-step="2"] .Footer__footer {
				/*position: relative;*/
				background: #ffffff;
				border-top: 1px solid #d9d9d9;
			}
			[data-step="3"] .Footer__footer {
				position: relative;
				background: #128C7E;
				border-top: 1px solid #d9d9d9;
				height: 240px;
				flex-direction: column;
			}
			[data-step="4"] .Footer__footer {
				display:none;
				position: relative;
				background: #ffffff;
				border-top: 1px solid #d9d9d9;
			}
			
			.Footer__footer_elements {
				flex-direction: column;
				display: flex;
				width: 100%;
				margin: 0 16px;
			}
			.Footer__footer_elements > p {
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 24px;
				align-items: center;
				text-align: center;
				width: 100%;
			}
			[data-step='1'] .Footer__footer_elements > p { display: none; }
			[data-step='2'] .Footer__footer_elements > p { display: none; }
			[data-step='3'] .Footer__footer_elements > p { color: #ffffff; }
			[data-step='4'] .Footer__footer_elements > p { display: none; }
			
			
			.Footer__footer_infotext {
				color: #ffffff;
				font-size: 14px;
				width: 288px;
				margin-top: 10px;
			}
			
			[data-step='1'] .Footer__footer_infotext{ display: none; }
			[data-step='2'] .Footer__footer_infotext{ display: none; }
			[data-step='3'] .Footer__footer_infotext{ display: block; }
			[data-step='4'] .Footer__footer_infotext{ display: none; }
			
			.Footer__footer .priceText {
				color: #ffffff;
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 28px;
				line-height: 27px;
				width: 100%;
			}
			[data-step='2'] .Footer__footer .priceText {
				color: #333333;
			}
			[data-step='3'] .Footer__footer .priceText {
				color: #ffffff;
			}
			[data-step='4'] .Footer__footer .priceText {
				color: #333333;
			}
			
			/******* ********/

			.Button__button {
				box-sizing: border-box;
				border-width: 0;
				outline: 0;
				word-wrap: break-word;
				word-break: break-word;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				cursor: pointer;
				width: 100%;
				height: 44px;
				background: #25D366;
				border-radius: 50px;
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 16px;
				line-height: 18px;
				display: flex;
				align-items: center;
				justify-content: center;
				text-transform: uppercase;
				color: #FFFFFF;
				margin: 0 16px;
			}
			
			[data-step="3"] .Footer__footer .Button__button {
				width: 288px;
				height: 56px;
				font-size: 18px;
				line-height: 20px;    
				margin-top: 23px;
			}
			.selectCountsPano > span {
				text-align: center;
				color: #dd5656;
				/* padding-right: 5px; */
				width: 90px;
				font-size: 16px;
				line-height: 14px;
			}
			svg.reload {
				-webkit-transform: rotate(360deg);  
				-moz-transform: rotate(360deg); 
				-ms-transform: rotate(360deg);  
				-o-transform: rotate(360deg);  
				  transform: rotate(360deg);  
				-moz-animation-name: reload;
				-moz-animation-duration: 1s;
				-webkit-animation-name: reload;
				-webkit-animation-duration: 1s;
		 
				-moz-animation-timing-function: linear;
				-moz-animation-iteration-count: infinite;
				-moz-animation-direction: normal;
				-moz-animation-delay: 0;
				-moz-animation-play-state: running;
				-moz-animation-fill-mode: forwards;
		 
				-webkit-animation-timing-function: linear;
				-webkit-animation-iteration-count: infinite;
				-webkit-animation-direction: normal;
				-webkit-animation-delay: 0;
				-webkit-animation-play-state: running;
				-webkit-animation-fill-mode: forwards;
		 
			}
			 
			@-webkit-keyframes reload {
				0% {
					-moz-transform: rotate(0deg);
					-webkit-transform: rotate(0deg);
				}
				100% {
					-moz-transform: rotate(360deg);
					-webkit-transform: rotate(360deg);
				}
			}
			@-moz-keyframes reload {
				0% {
					-moz-transform: rotate(0deg);
					-webkit-transform: rotate(0deg);
				}
				100% {
					-moz-transform: rotate(360deg);
					-webkit-transform: rotate(360deg);
				}
			}
		</style>
		<style class="headerClass" >
			
			/****** HEADER ******/
			.Header__header {
				text-align: center;
				background: #075E54;
				position: fixed;
				z-index: 9;
				width: 100%;
				left: 0;
				height: 56px;
				display: inline-flex;
				align-items: center;
				justify-content: left;
			}
			
			body[data-step="1"] .Header__header {
				justify-content: center;			
			}
			body[data-step="1"] .ml-appbar__action {
				display:none;
			}
			[data-step="2"] .ml-appbar__action {display:block;}
			[data-step="3"] .ml-appbar__action {display:block;}
			[data-step="4"] .ml-appbar__action {display:block;}
			.Header__textContainer {
				display: inline-block;
			}
			.Header__centered {
				color: #fff;
				font-size: 24px;
				letter-spacing: -.3px;
				height: 56px;
				line-height: 56px;
				font-size: 20px;
				font-weight: 700;
			}
			.Header__subtext {
				
				color: #9299A2;
				font-size: 18px;
				line-height: 20px;
				margin-top: 8px;
			}
			
			.ml-appbar__action {
				background-repeat: no-repeat;
				background-size: 24px 24px;
				width: 24px;
				height: 24px;
				box-sizing: content-box;
			}
			.ml-appbar__action {
				cursor: pointer;
				padding: 12px;
				background-position: center center;
				margin: 4px 8px;
			}
			
			.ml-icon.ml-icon-forward.ml-icon-white-variant, .ml-icon.ml-icon-back.ml-icon-white-variant, .ml-appbar__action.ml-appbar--back, .ml-immersive .ml-appbar__action.ml-appbar--back::before {
				background-image: url(//maps.gstatic.com/mapfiles/maps_lite/images/2x/ic_arrow_right_white_24dp.png);
			}
			.ml-appbar__action.ml-appbar--back {
				float: left;
			}
			.ml-icon.ml-icon-forward, .ml-icon.ml-icon-back, .ml-appbar__action.ml-appbar--back {
				-ms-transform: scaleX(-1);
				-webkit-transform: scaleX(-1);
				transform: scaleX(-1);
			}
			
			
		</style>
		<style class="formElementsClass">
			/******* FORM ******/
			
			.Row__row {
				display: flex;
				width: 100%;
			}
			
			.Heading__text {
				flex-grow: 1;
				/*padding-top: 20px;*/
				font-size: 28px;
				line-height: 27px;
				text-align: left !important;
			}
			
			
			.FormField__field {
				margin-bottom: 18px;
				display: flex;
				flex-direction: column;
				flex: 1;
				min-width: 0;
				margin: 0 4px 18px 0;
				text-align: left;
			}
			.FormField__field:first-child {
				margin-left: 0;
			}
			.FormField__field:last-child {
				margin-right: 0;
			}
			.selectCountsPano {
				display: flex;
				align-items: center;
				justify-content: space-between;
				margin-top: 8px;
			}
			
			._13mgZ {
				margin: 0;
				min-width: 0;
				width: 180px;
				will-change: width;
				display: flex;
				border: 2px solid #9299a2;
				border-radius: 50px;
			}
			button#minusCount, button#plusCount {
				border-radius: 50px;
				border: 0;
				width: 52px;
				height: 52px;
				padding: 0;
				font-size: 30px;
				line-height: 40px;
				color: #000000;
				box-sizing: border-box;
				border-width: 0;
				outline: 0;
				background: #ffffff;
			}
			button#minusCount svg, button#plusCount svg {
				fill: #25d366;
			}
			._3FeAD {
				padding-right: 0;
				position: relative;
				flex: 1;
				display: flex;
				overflow: hidden;
				background-color: #fff;
				border: 2px solid #9299a2;
				border-top: 0;
				border-bottom: 0;
				box-sizing: border-box;
				font-size: 15px;
				font-weight: 400;
				line-height: 18px;
				min-height: 20px;
				min-width: 0;
				outline: none;
				width: 100%;
				will-change: width;
			}
			
			._3FeAD .wjdTm {
				left: 2px;
				color: #999;
				font-size: 15px;
				line-height: 20px;
				pointer-events: none;
				position: absolute;
				top: 6px;
				transition: opacity .08s linear;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				z-index: 100;
				z-index: 2;
			}
			._3FeAD._1PRhq .wjdTm {
				top: 0;
			}
			._3FeAD ._3u328 {
				font-size: 17px;
				line-height: 20px;
				min-height: 20px;
				position: relative;
				width: 100%;
				-webkit-user-select: text;
				-moz-user-select: text;
				-ms-user-select: text;
				user-select: text;
				white-space: pre-wrap;
				word-wrap: break-word;
			}
			._3FeAD._1PRhq ._3u328 {
				padding: 0;
				font-size: 18px;
				font-weight: 400;
				max-height: 100px;
				min-height: 20px;
				outline: none;
				overflow-x: hidden;
				overflow-y: auto;
				position: relative;
				white-space: pre-wrap;
				word-wrap: break-word;
				z-index: 1;
				border: 0;
				text-align: center;
				color: #333333;
				font-style: normal;
				font-weight: bold;
				font-size: 28px;
				line-height: 11px;
			}
			a#applyPano {
				width: 56px;
				text-align: center;
				position: relative;
				height: 56px;
				background: rgb(212, 212, 212);
				text-decoration: none;
				border-radius: 50px;
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 20px;
				line-height: 24px;
				display: flex;
				align-items: center;
				justify-content: center;
				text-transform: uppercase;
				color: #FFFFFF;
				border: 0;
				margin-left: 0px;
				box-shadow: 0 4px 12px 2px rgba(0, 0, 0, 0.1);
			}
			
		</style>
		<style class="selectClass">
			.SelectWrap__root {
				position: relative;
				display: block;
				height: 80px;
				border-radius: 6px;
				outline: 0;
			}
			.NativeSelect__native {
				position: absolute;
				z-index: 1;
				display: block;
				padding: 0;
				height: 100%;
				width: 100%;
				border: 0;
				background: 0 0;
				color: #000;
				opacity: 0;
			}
			.SelectedOption__selectContainer {
				position: relative;
			}
			.SelectedOption__selectedItemWrapper {
				box-sizing: border-box;
				height: 80px;
				overflow: hidden;
				border-radius: 6px;
				background-color: #eef2f7;
				outline: 0;
				cursor: pointer;
				display: flex;
				padding: 0 17px;
				align-items: center;
			}
			.SelectedOption__value {
				box-sizing: border-box;
				width: 100%;
				height: 80px; 
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				opacity: 0;
				padding-top: 21px;
				font-size: 28px;
				line-height: 28px;
				will-change: opacity;
			}
			.SelectedOption__value.SelectedOption__changed {
				opacity: 1;
				padding-top: 35px;
			}
			.SelectedOption__label {
				position: absolute;
				max-width: 100%;
				width: calc(100% - 64px);
				font-size: 21px;
				font-weight: 400;
				line-height: 27px;
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;
				pointer-events: none;
				top: 28px;
				left: 17px;
				-webkit-transform: translate(0,0);
				transform: translate(0,0);
				transition: font-size .25s ease,-webkit-transform .25s ease;
				transition: transform .25s ease,font-size .25s ease;
				transition: transform .25s ease,font-size .25s ease,-webkit-transform .25s ease;
				will-change: transform,font-size;
			}
			.SelectedOption__label.SelectedOption__changed {
				font-size: 18px;
				line-height: 20px;
			    color: #128C7E;
				top: 25px;
				-webkit-transform: translate(0,-12px);
				transform: translate(0,-12px);
			}
			.SelectedOption__label.SelectedOption__isRequired::after {
				content: '*';
				display: inline;
			}
			.SelectedOption__iconContainer {
				display: flex;
				align-items: center;
				padding-left: 6px;
				min-width: 24px;
				position: relative;
			}
			.SelectedOption__iconContainer:after {
				content: '';
				display: block;
				position: absolute;
				top: 50%;
				margin-top: -6px;
				right: 1px;
				width: 7px;
				height: 7px;
				border: 3px solid #9299a2;
				border-top: none;
				border-left: none;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
			}
			
			
			.OptionsWrap__optionsWrapper_zAgfp {
				position: absolute;
				box-sizing: border-box;
				display: none;
				width: 100%;
				overflow: hidden;
				top: 67px;
				right: 1px;
				left: 0;
				margin-top: -2px;
				background-color: #fff;
				border-radius: 0 0 6px 6px;
				border: 1px solid #dddfe0;
				z-index: 2;
				height: auto;
			}
			
			.OptionsWrap__trackVertical_38eWo {
				opacity: .3;
				right: 4px;
				top: 0;
				bottom: 0;
			}
			.OptionsList__optionWrapper_3D8Q9 {
				position: relative;
				border-bottom: 1px solid #dddfe0;
			}
			.OptionsList__slim_2J6b2 {
				height: 37px;
			}
			.SelectItem__contentWrapper_2ziS6 {
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				position: relative;
				box-sizing: border-box;
				display: flex;
				padding: 0 17px;
				align-items: center;
				height: 100%;
				cursor: pointer;
			}
			.SelectItem__contentContainer_2B-oz {
				flex-grow: 1;
				overflow: auto;
			}
			.SelectItem__data_2pv91 {
				display: block;
			}
			.SelectItem__placeholder_1NX0z, .SelectItem__placeholder_small_15_NH, .SelectItem__title_Bfyid {
				padding-top: 3px;
				font-size: 17px;
				overflow: hidden;
			}
			.SelectItem__title_Bfyid {
				padding-bottom: 6px;
			}
			.SelectItem__data_2pv91.SelectItem__noWrap_2M71u {
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;
			}
			.OptionsWrap__trackVertical_38eWo {
				opacity: .3;
				right: 4px;
				top: 0;
				bottom: 0;
			}
			.OptionsWrap__thumbVertical_3GCOx {
				position: relative;
				display: block;
				width: 100%;
				background-color: #333;
				opacity: .3;
				border-radius: 6px;
				will-change: transform;
				-webkit-transform: translate3d(0,0,0);
				transform: translate3d(0,0,0);
			}
			
			.Divider__divider_ki-iW {
				margin: 10px 0 28px;
			}
			.Divider__divider_ki-iW:before {
				content: '';
				position: absolute;
				left: 0;
				right: 0;
				border-top: 1px solid #dddfe0;
			}
		</style>
		<style class="radioClass">
			.Input__Radio {
				display: inline-block;
				width: 100%;
				color: #333;
			}
			.Input__Radio label {
				clear: both;
				margin: 0;
				position: relative;
				background: #DFDFDF;
				height: 100%;
				width: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 0;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				border: 0;
				outline: 0;
				-webkit-tap-highlight-color: transparent;
			}
			.radio span.button__text {
				color: #333333;
				font-style: normal;
				font-size: 21px;
				font-weight: 600;
				line-height: 27px;
			}
			.Input__Radio input {
				opacity: 0;
				position: absolute;
				left: 0;
			}
			.Input__Radio label.radio.radio_type_button.radiochecked {				
				background: #DCF8C6;
			}
		</style>
		<style class="checkboxClass">			
			/******* checkbox ********/
			.CheckboxWrap__root {
				position: relative;
				display: block;
				border-radius: 6px;
				outline: 0;
			}
			.field-option {
				box-sizing: border-box;
				height: 80px;
				overflow: hidden;
				border-radius: 6px;
				background-color: #eef2f7;
				outline: 0;
				cursor: pointer;
				display: flex;
				padding: 0 17px;
				align-items: center;
			}
			.LinkCheckbox__linkCheckbox {
				position: relative;
				display: block;
				height: 80px;
				border-radius: 6px;
				outline: 0;
			}
			.LinkCheckbox__inner {
				position: relative;
			}
			.CheckboxBlock__checkboxWrapper {
				box-sizing: border-box;
				height: 80px;
				overflow: hidden;
				border-radius: 6px;
				background-color: #eef2f7;
				border: 0.5px solid #eef2f7;
				outline: 0;
				cursor: pointer;
				display: flex;
				padding: 0 17px;
				align-items: center;
			}
			.CheckboxBlock__wrapper {
				box-sizing: border-box;
				display: inline-flex;
				width: 100%;
				font-size: 0;
				line-height: 0;
				color: #333;
				transition: color .25s ease;
				outline: 0;
				cursor: pointer;
				align-items: flex-start;
			}
			.CheckboxBlock__wrapper_checked, .CheckboxBlock__wrapper_checked:hover {
				color: #333;
			}
			.Checkbox__container {
				width: 100%;
				display: inline-flex;
				border-radius: 4px;
				align-items: center;
				justify-content: flex-start;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				outline: 0;
				cursor: pointer;
				flex: 0 0 auto;
			}
			/*.Checkbox__large {
				width: 40px;
				height: 40px;
			}*/
			.Checkbox__checked:not(.Checkbox__checked_disabled_3fdX2) {
				background: #DCF8C6;
				border: 0.5px solid #25D366;
				box-sizing: border-box;
				border-radius: 6px;
			}
			
			.FormField__field a.changePanos {
				color: #128C7E;
				font-weight: normal;
				position: relative;
				padding-top: 8px;
				font-size: 18px;
				line-height: 20px;
				margin-bottom: 8px;
			}
			.Checkbox__nativeElement {
				position: absolute;
				opacity: 0;
				width: 0;
			}
			input[type=checkbox], input[type=radio] {
				box-sizing: border-box;
				padding: 0;
			}
			.Checkbox__icon {
				opacity: 0;
				/*width: 40px;
				height: 40px;*/
			}
			svg:not(:root) {
				overflow: hidden;
			}
			.Checkbox__checked .Checkbox__icon {
				/*opacity: 1;*/
			}
			
			.LinkCheckbox__fallfor {
				/*margin-left: 16px;*/
			}
			
			.Checkbox__fallfor_1line {
				color: #333333;
				font-style: normal;
				font-weight: normal;
				font-size: 21px;
				line-height: 22px;
			}
			.Checkbox__fallfor_2line {
				color: #128C7E;
				font-style: normal;
				font-weight: 400; 
				font-size: 18px;
				line-height: 20px;
				display: none;
			}
			.Checkbox__fallfor_2line a {
				color: #128C7E;
				font-weight: bold;
				padding-left: 5px;
			}
		</style>
		<style class="inputClass">
			/******** input ********/
			.Suggest__suggest {
				position: relative;
				width: 100%;
			}
			.Input__input {
				display: inline-block;
				width: 100%;
				color: #333;
			}
			.Input__layout {
				position: relative;
				box-sizing: border-box;
				display: flex;
				align-items: center;
				width: 100%;
				height: 80px;
				border: 1px solid transparent;
				border-collapse: separate;
				border-radius: 6px;
				cursor: text;
			}
			.Input__layout_background {
				background-color: #eef2f7;
			}
			.Input__layout_background_focused {
				background-color: #ffffff;
			}
			.Input__layout_background_success {
				background-color: #DCF8C6;
			}
			.Input__layout_border_success {
				border: 1px solid #25D366;
			}
			
			.Input__layout:not(.Input__layout_border_error):not(.Input__layout_readOnly):hover, .Input__layout_border_focused {border-color: #dddfe0;}
			
			.Input__wrapper {
				display: block;
				position: relative;
				box-sizing: border-box;
				width: 100%;
				height: 100%;
				cursor: text;
				overflow: hidden;
			}
			.Input__value {
				position: relative;
				display: block;
				box-sizing: border-box;
				width: 100%;
				height: 80px;
				font-family: pragmatica,EllipsisFallback,Helvetica,Arial,sans-serif;
				font-style: normal;
				font-weight: 400;
				letter-spacing: normal;
				white-space: nowrap;
				opacity: 0;
				cursor: text;
				will-change: opacity;
				padding-top: 21px;
				padding-bottom: 21px;
				padding-left: 17px;
				padding-right: 6px;
				-webkit-appearance: none;
			}
			.Input__value, .Input__value:hover, .Input__value:active, .Input__value:focus {
				margin: 0;
				outline: 0;
				border: 0;
				background: 0 0;
			}
			.Input__value_primary {
				color: #333;
				font-size: 21px;
				font-weight: 400;
				line-height: 27px;
			}
			.Input__value_focused, .Input__value_changed {
				opacity: 1;
				padding-top: 35px;
			}
			
			
			
			.Input__label {
				position: absolute;
				max-width: 100%;
				overflow: hidden;
				font-family: pragmatica,EllipsisFallback,Helvetica,Arial,sans-serif;
				font-size: 21px;
				font-weight: 400;
				line-height: 27px;
				text-overflow: ellipsis;
				white-space: nowrap;
				pointer-events: none;
				top: 28px;
				left: 17px;
			}
			.Input__label_secondary {
				-webkit-transform: translate(0,0);
				transform: translate(0,0);
				transition: font-size .25s ease,-webkit-transform .25s ease;
				transition: transform .25s ease,font-size .25s ease;
				transition: transform .25s ease,font-size .25s ease,-webkit-transform .25s ease;
				will-change: transform,font-size;
				color: #333333;
			}
			.Input__label.Input__label_secondary.Input__label_focused, .Input__label.Input__label_secondary.Input__label_changed {
				font-size: 18px;
				line-height: 20px;
				color: #128C7E;
				top: 25px;
				-webkit-transform: translate(0,-12px);
				transform: translate(0,-12px);
			}
			.Input__label_isRequired::after {
				content: '*';
				display: inline;
			}
			
			
			.Input__additional {
				display: flex;
				align-items: center;
				white-space: nowrap;
				min-width: 18px;
				flex-shrink: 0;
			}
			.Input__additional:last-child {
				padding-right: 12px;
			}
			.ValidationMark__hint {
				text-align: left;
				text-transform: none;
				white-space: nowrap;
				border: 0;
				background: 0 0;
			}
			
			/******** ERROR *******/
			.ValidationMark__cursorDefault {
				cursor: default;
			}
			.Close__container {
				display: inline-flex;
				align-items: center;
				width: 15px;
				height: 24px;
				padding-left: 5px;
			}
			.Close__closeIconSvg {
				line-height: 14px;
				width: 14px;
				height: 14px;
				stroke: #dd5656;
				stroke-miterlimit: 10;
				stroke-width: 1.5;
				stroke-linecap: round;
				stroke-linejoin: round;
				fill: none;
				cursor: pointer;
			}
			.Close__red {
				stroke: #dd5656;
			}
			.Input__layout_border_error {
				border-color: #dd5656;
			}
			
			
			.Check__container {
				display: inline-flex;
				align-items: center;
				height: 24px;
			}
			.Check__container:last-child {
				padding-left: 5px;
			}
			.Check__checkIconSvg {
				line-height: 15px;
				width: 17px;
				height: 15px;
				stroke: #22a053;
				stroke-miterlimit: 10;
				stroke-width: 8px;
				stroke-linecap: round;
				stroke-linejoin: round;
				fill: none;
			}
			.Error__errorMessage {
				padding-top: 3px;
				color: #dd5656;
				/*color: var(--FB-color-error-message);*/
				font-size: 13px;
				line-height: 16px;
				font-family: pragmatica,EllipsisFallback,Helvetica,Arial,sans-serif;
			}
			.Error__errorMessage.Error__errorMessage_Usluga p{
				margin-bottom: 32px;
			}
			
			
			
		</style>
		<style class="inputGroup">
			.checkbox {
				-ms-touch-action: manipulation;
				touch-action: manipulation;
			}
			.InputGroup__input {
				display: inline-block;
				width: 100%;
				color: #333;
			}
			.InputGroup__layout {
				position: relative;
				box-sizing: border-box;
				display: block;
				width: 100%;
				height: 172px;
				/* border: 1px solid #dddfe0; */
				border-collapse: separate;
				border-radius: 6px;
				cursor: default;
			}
			.InputGroup__layout_background {
				background-color: #eef2f7;
			}
			.InputGroup__wrapper {
				display: block;
				position: relative;
				box-sizing: border-box;
				width: 100%;
				height: 100%;
				cursor: text;
				overflow: hidden;
			}
			.InputGroup__label {
				position: absolute;
				max-width: 100%;
				overflow: hidden;
				font-family: pragmatica,EllipsisFallback,Helvetica,Arial,sans-serif;
				font-weight: 400;
				text-overflow: ellipsis;
				white-space: nowrap;
				pointer-events: none;
				left: 17px;
				font-size: 18px;
				line-height: 20px;
				color: #128C7E;
				top: 25px;
				-webkit-transform: translate(0,-12px);
				transform: translate(0,-12px);
			}
			.InputGroupCheckboxes__layout_label {
				padding: 0 0px;
				display: inline-flex;
				justify-content: space-between;
				width: 100%;
				margin-top: 48px;
			}
			.InputGroupText__layout_label {
				padding: 0 17px;
				position: absolute;
				bottom: 13px;
			}
			input.text__timecontrol {
				padding: 12px;
				font-size: 14px;
				line-height: 16px;
				border: 1px solid #DFDFDF;
				background: #ffffff;
				width: 90px;
			}
			
			.checkbox_type_button {
				position: relative;
				-webkit-tap-highlight-color: transparent;
			}
			.checkbox_type_button:last-child button {
				margin-right: 0;
				border: 0;
			}
			
			.button_togglable_check.button__control {
				display: inline-block;
				margin: 0;
				padding: 0;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				border: 0;
				border-right: 0.5px solid #ffffff;
				outline: 0;
				width: 44px;
				height: 44px;
				text-align: center;
				background: #DFDFDF;
				-webkit-tap-highlight-color: transparent;
			}
			button.button.button_togglable_check.button__control.button_checked {
				background: #DCF8C6;
			}
			.button_togglable_check.button__control .button__text {
				position: relative;
				display: inline-block;
				overflow: hidden;
				text-overflow: ellipsis;
				vertical-align: top;
				color: #ffffff;
				font-style: normal;
				font-weight: 400;
				font-size: 21px;
				line-height: 22px;
			}
			button.button.button_togglable_check.button__control.button_checked > span.button__text {
				color: #128C7E;
			}
			.checkbox_type_button .checkbox__control {
				position: absolute;
				z-index: -1;
				margin: 0;
				opacity: 0;
				visibility: hidden;
				left: 0;
				top: 0;
			}
		
		</style>
		<style class="step4form">
			#step4 div.step4__container {
				background-color: #128C7E;
				color: #ffffff;
				padding: 20px 16px;
				display: flex;
				flex-direction: column;
				justify-content: center;
			}
			.PinField {
				width: 288px;
				display: flex;
				align-items: center;
				justify-content: space-between;
				margin: 0 auto;
			}
			div#ok {
				box-sizing: border-box;
				border-width: 0;
				outline: 0;
				word-wrap: break-word;
				word-break: break-word;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				cursor: pointer;
				width: 288px;
				height: 56px;
				background: #25D366;
				border-radius: 50px;
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 16px;
				line-height: 18px;
				display: flex;
				align-items: center;
				justify-content: center;
				text-transform: uppercase;
				color: #FFFFFF;
				margin: 41px auto -46px;
			}
			div#ok.btn-disabled {
				background: #d9d9d9;
			}
			.step4__container p:first-child {
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 20px;
				line-height: 22px;
				width: 288px;
				display: flex;
				align-items: center;
				text-align: center;
				color: #FFFFFF;
				margin: 0 auto;
			}
			span#phoneNumberVerify {
				font-size: 24px;
				text-align: center;
				line-height: 48px;
				font-weight: bold;
			}
			.step4__container_text {
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 18px;
				line-height: 20px;
				width: 288px;
				display: flex;
				align-items: center;
				text-align: center;
				color: #FFFFFF;
				margin: 0 auto;
				margin-top: 25px;
			}
			.PinField input {
				background: #FFFFFF;
				border: 1px solid #25D366;
				box-sizing: border-box;
				border-radius: 8px;
				height: 80px;
				text-align: center;
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 40px;
				line-height: 47px;
				width: 70px;
				margin-top: 30px;
			}
			.policy_form {
				margin: 0 auto 16px;
				width: 288px;
			}
			.policy_form label {
				margin-left: 45px;
				display: block;
				position: relative;
				margin-top: -24px;
			}
			.policy_form input[type="checkbox"] {
				width: 20px;
				height: 20px;
				background: #FFFFFF;
				border: 1px solid #000000;
				box-sizing: border-box;
				border-radius: 4px;
			}
			.ValidationText {
				display: block;
				margin: 8px auto -32px;
				font-size: 0.875em;
				font-weight: 500;
				line-height: 1.2em;
				width: 288px;
				text-align: center;
			}
			.ValidationText.Danger {
				color: #f2706c;
			}
			.doc_ {
				display: flex;
				align-items: center;
				flex-direction: column;
				width: 288px;
				padding-top: 42px;
				margin: 0 auto;
				padding-bottom: 16px;
			}
			.doc_dogovor, .doc_policy {
				display: flex;
				align-items: center;
				width: 100%;
				height: 56px;
				text-decoration: none;
			}
			.doc_dogovor svg, .doc_policy svg {
				width: 44px;
				margin-right: 8px;
				fill: #00bfa5;
			}
			.doc_dogovor span, .doc_policy span {
				line-height: 1;
				font-size: 14px;
				/* width: 240px; */
				color: #00bfa5;
			}
		
		</style>
		<style class="final-step">
			.finalstep {
				position: fixed;
				z-index: 999;
				top: 0;
				width: 100%;
				left: 0;
				height: 100%;
				background: #128C7E;
				color: #ffffff;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.flex-wrap {
				align-items: center;
				display: flex;
				flex-direction: column;
			}
			div#statusVerify {
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 20px;
				line-height: 23px;
				text-align: center;
				color: #FFFFFF;
				margin-top: 8px;
			}
			button#formSubmit {
				margin: 46px auto 24px;
				width: 288px;
				height: 56px;
				font-family: Roboto;
				font-style: normal;
				font-weight: 500;
				font-size: 18px;
				line-height: 21px;
			}
			.relodPageTimer {
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 20px;
				line-height: 23px;
				display: flex;
				align-items: center;
				text-align: center;
				color: #FFFFFF;
				margin-top: 8px;
			}
		</style>
		
		<!-- ФОРМА -->
		<div class="Header__header Header__small">			
			<div aria-label="Назад" class="ml-appbar__action ml-appbar--back"></div>
			<div class="Header__textContainer">
				<div class="Header__centered">Сформируйте пакет услуг</div>
				<!--<div class="Header__subtext">Шаг <span class="step">1</span> из 4</div>-->
			</div>
		</div>
		<div class="Scene__wrapper">