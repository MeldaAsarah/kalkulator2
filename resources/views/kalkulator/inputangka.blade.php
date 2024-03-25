<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background: linear-gradient(280deg, transparent, #02c8cf);
            font-family: Tahoma;
        }
            .container{
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                width: 100vw;
            }
            #container {
                width: 200px;
                padding: 20px 20px 30px 20px;
                margin:20px auto;
                background-color: #ABABAB;
                border-radius: 4px;
                border-top: 2px solid #FFF;
                border-right:,20px solid #FFF;
                border-bottom: 2px solid #C1C1C1;
                border-left: 2px solid #C1C1C1;
                box-shadow: -3px 3px 7px rgba(0, 0, 0, .6), inset -100px 0px rgba(225, 225, 225, .5);
            }
            #display {
                display: block;
                margin: 15px auto;
                height: 42px;
                width: 174px;
                padding: 0 10px;
                border-radius: 4px;
                border-top: 2px solid #C1C1C1;
                border-right: 2px solid #C1C1C1;
                border-bottom: 2px solid #FFF;
                border-left: 2px solid #FFF;
                background-color: #FFF;
                box-shadow: inset 0px 0px 10px #030303, inset 0px -20px 1px rgba(200, 200, 200, .2);
                font-size: 28px;
                color: #666;
                text-align: right;
                font-weight: 400;
            }
            .button {
                display: inline-block;
                margin: 2px;
                width: 42px;
                height: 42px;
                font-size: 16;
                font-weight: bold;
                border-radius: 4px;
            }
            .mathButtons {
                margin: 2px 2px 6px 2px;
                color: #FFF;
                text-shadow: -1px -px 0px #44006F;
                background-color: #434343;
                border-top: 2px solid #C1C1C1;
                border-right: 2px solid #C1C1C1;
                border-bottom: 2px solid #181818;
                border-left: 2px solid #181818;
                box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #2E2E2E;

            }
            .digits {
                color: #181818;
                text-shadow: 1px 1px 0px #FFF;
                background-color: #EBEBEB;
                border-top: 2px solid #FFF;
                border-right: 2px solid #FFF;
                border-bottom: 2px solid #C1C1C1;
                border-left: 2px solid #C1C1C1;
                border-radius: 4px;
                box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #DCDCDC;
            }
            .digits:hover,
            .mathButtons:hover,
            #clearButton:hover{
                background-color: #FFBA75;
                box-shadow: 0px 0px 2px #FFBA75, inset 0px -20px 1px #FF8000;
                border-top: 2px solid #FFF;
                border-right: 2px solid #FFF;
                border-bottom: 2px solid #AE5700;
                border-left: 2px solid #AE5700;
            }
            #clearButton {
                color: #FFF;
                text-shadow: -1px -1px 0px #44006F;
                background-color: #D20000;
                border-top: 2px solid #FF8484;
                border-right: 2px solid #FF8484;
                border-bottom: 2px solid #800000;
                border-left: 2px solid #800000;
                box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #B00000;
            }
    </style>
    <link rel="stylesheet" href="style.css">
    <div class="container">
        <fieldsheet id="container">
            <h3>KALKULATOR</h3>
            <form name="calculator">
                <input id="display" type="text" name="display" readonly>
                <input class="button digits" type="button" value="7" onclick="calculator.display.value +='7'">
                <input class="button digits" type="button" value="8" onclick="calculator.display.value +='8'">
                <input class="button digits" type="button" value="9" onclick="calculator.display.value +='9'">
                <input class="button mathButtons" type="button" value="+" onclick="calculator.display.value +='+'">
                <br>
                <input class="button digits" type="button" value="4" onclick="calculator.display.value +='4'">
                <input class="button digits" type="button" value="5" onclick="claculator.display.value +='5'">
                <input class="button digits" type="button" value="6" onclick="calculator.display.value +='6'">
                <input class="button mathButtons" type="button" value="-" onclick="calculator.display.value +='-'">
                <br>
                <input class="button digits" type="button" value="1" onclick="calculator.display.value +='1'">
                <input class="button digits" type="button" value="2" onclick="calculator.display.value +='2'">
                <input class="button digits" type="button" value="3" onclick="calculator.display.value +='3'">
                <input class="button mathButtons" type="button" value="*" onclick="calculator.display.value +='*'">
                <br>
                <input id="clearButton" class="button" type="button" value="C" onclick="calculator.display.value = ''">
            <input class="button digits" type="button" value="0" onclick="calculator.display.value += '0'">
            <input class="button mathButtons" type="button" value="=" onclick="calculator.display.value = eval(calculator.display.value)">
            <input class="button mathButtons" type="button" value="/" onclick="calculator.display.value += ' / '">
        </form>
        </fieldset>
        </div>