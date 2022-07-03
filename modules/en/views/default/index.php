<?php

use app\components\FormcalcWidget;
use app\components\ObsvWidget;
use http\Url;

//$this->layout = '@app/views/layouts/base-uikit-layout';

$this->title = 'Home. To buy parts in the USA';
$this->registerMetaTag(
    ['name' => 'description', 'content' => 'To buy parts in the USA ➔ Worldwide delivery ➔ Selection of spare parts Low prices for kits  ➔']
);
$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://allusaparts.com/en']);
?>
<section class="content">
    <section class="container">
        <div class="row">
            <div class="grid_12">
                <div class="slider clearfix">
                    <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                        <div data-src="images/slide-1.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="slider-text">
                                    WE PROVIDE  FAST DELIVERY
                                    <span>ACROSS THE WORLD</span>
                                </div>
                            </div>
                        </div>
                        <div data-src="images/slide-2.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="slider-text">
                                    SPARE  PARTS  FOR
                                    <span>OIL  & GAS  EQUIPMENT</span>
                                </div>
                            </div>
                        </div>
                        <div data-src="images/slide-3.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="slider-text">
                                    SPARE PARTS FOR SPECIAL MACHINERY
                                    <span>AND SPECIAL MACHINERY, ENGINES & GENERATORS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="grid_4">
                <h2>WHO WE ARE</h2>
                <p class="text-2">ALL AMERICAN PARTS’’ IS AN AMERICAN COMPANY  WITH  RUSSIAN REPRESENTATIVE OFFICE IN MOSCOW. WE SPECIALIZE IN SALE OF DIFFERENT COMPONENTS AND SPARE PARTS  FOR  SPECIAL  EQUIPMENT, MINING EQUIPMENT, EQUIPMENT  FOR OIL  & GAS  DRILLING, GENERATORS, COMPRESSORS, TRUCKS, SPECIAL  VEHICLES.</p>
                <div> WE OFFER WORLDWIDE SHIPPING, BEST SERVICE, TRANSIT TIMES. OUR CUSTOMERS INDICATE  HIGH PROFESSIONALISM AND CLIENT-ORIENTED APPROACH OF OUR STAFF. DUE TO MANY YEARS OF WORKING EXPERIENCE AND STRONG RELATIONS WITH SUPPLIERS AND MANUFACTURERS WE ALWAYS OFFER REASONABLE PRICES FOR OUR CLIENTS.</div>
            </div>
            <div class="grid_4" style="margin-top: 107px;">

                <p class="text-3">YOU CAN CALCULATE COST OF SPARE PARTS TO CHECK THIS OUT.</p>
                <div>WE GUARANTEE   INDIVIDUAL  APPROACH, FLEXIBILITY IN YOUR TASKS’ ACHIEVEMENT AND HIGH QUALITY OF SERVICE IN EVERY STEP OF COOPERATION.
                    OUR QUALIFIED AND HIGHLY TRAINED  STAFF COMPOSED OF PERSONAL MANAGERS IS ALWAYS IN TOUCH WITH THEIR CLIENTS AND READY TO OFFER ADDITIONAL  ADVANTAGE  FOR OUR LONG STANDING CUSTOMERS. LET’S COOPERATE!
                </div>
            </div>
            <div class="grid_4">
                <h2>OUR BENEFITS</h2>
                <ul class="list-1">
                    <li><a href="#calc" class="calc-link go_to">BETTER PRICES </a></li>
                    <li><a href="#calc" class="calc-link go_to">DIRECT SUPPLIER SERVICE</a></li>
                    <li><a href="#calc" class="calc-link go_to">CERTAINTY OF SUPPLY</a></li>
                    <li><a href="#calc" class="calc-link go_to">WORLDWIDE SHIPPING</a></li>
                    <li><a href="#calc" class="calc-link go_to">PERSONAL MANAGERS</a></li>
                </ul>
            </div>
        </div>
    </section>
</section>


<section class="brands">
    <div class="container">
        <h2 class="row-title">WE COOPERATE WITH LEADING WORLD BRANDS AND GLOBAL MANUFACTURERS:</h2>
        <div class="row">
            <?= $img_brand?>
        </div>
    </div>
</section>
<section id="calc" class="calc">
    <div class="container">
        <h2 class="calc-title">HERE YOU  CAN  CALCULATE VALUE OF THE SPARE PARTS</h2>
        <div class="calc-form">
            <form id="calc-form" action="javascript:void(null);" onsubmit="send_withfile('calc-form')">
                <div class="form-left">
                    <div class="gray-block">
                        <div class="input-group">
                            <label for="calc_prtype">SELECT TYPE OF THE VALUE</label>
                            <select name="calc_prtype" id="calc_prtype">
                                <option value="All">ALL AVAILABLE OFFERS</option>
                                <option value="OEM only">ONLY ORIGINAL SPARE PARTS</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="calc_brand">SELECT BRAND</label>
                            <select name="calc_brand" id="calc_brand">
                                <option value="all">ANY BRAND</option>
                                <option value="Cummins">Cummins</option>
                                <option value="Caterpillar">Caterpillar</option>
                                <option value="Waukesha">Waukesha</option>
                                <option value="John Deer">John Deer</option>
                                <option value="Detroit Diesel">Detroit Diesel</option>
                                <option value="GARNER DENVER">GARNER DENVER</option>
                                <option value="Weir SPM">Weir SPM</option>
                                <option value="National Oilwell Varco">National Oilwell Varco</option>
                                <option value="Galco Industrial Electronics">Galco Industrial Electronics</option>
                                <option value="Tsubaki">Tsubaki</option>
                                <option value="Parker">Parker</option>
                                <option value="Vermeer">Vermeer</option>
                                <option value="Rexroth Bosch Group">Rexroth Bosch Group</option>
                                <option value="Ariel Compressors ">Ariel Compressors</option>
                                <option value="EATON">EATON</option>
                                <option value="Danfoss">Danfoss</option>
                                <option value="Fabco ">Fabco </option>
                                <option value="Baldor DODGE">Baldor DODGE</option>
                                <option value="Horton">Horton</option>
                                <option value="Meritor">Meritor </option>
                                <option value="Woodward">Woodward</option>
                                <option value="Ditch Witch">Ditch Witch</option>
                                <option value="LeeBoy">LeeBoy </option>
                                <option value="Allison Transmission">Allison Transmission</option>
                                <option value="TIGERCAT">TIGERCAT</option>
                                <option value="MTU">MTU</option>
                                <option value="Bendix">Bendix</option>
                                <option value="Automann">Automann</option>
                                <option value="CTP">CTP</option>
                                <option value="Bobcat">Bobcat</option>
                                <option value="Sandvik">Sandvik</option>
                                <option value="FP Diesel">FP Diesel</option>
                                <option value="McBee">McBee</option>
                                <option value="MARMON-HERRINGTON">MARMON-HERRINGTON</option>
                                <option value="Kenworth">Kenworth</option>
                                <option value="Paccar">Paccar</option>
                                <option value="Freightliner">Freightliner</option>
                                <option value="INTERNATIONAL">INTERNATIONAL</option>
                                <option value="Peterbilt">Peterbilt</option>
                                <option value="IPD">IPD</option>
                            </select>
                        </div>
                        <div class="data-block" data-type="number-block">
                            <div class="inline-group" data-row="0">
                                <div class="input-group">
                                    <label for="data_number">NUMBER OF SPARE PART</label>
                                    <input id="data_number" type="text" name="data_number_0" placeholder="000-0000">
                                </div>
                                <div class="input-group">
                                    <label for="data_count">QUANTITY</label>
                                    <input id="data_count" type="number" name="data_count_0" value="1">
                                </div>
                            </div>
                            <div class="inline-group" data-row="1">
                                <div class="input-group">
                                    <input type="text" name="data_number_1" placeholder="000-0000">
                                </div>
                                <div class="input-group">
                                    <input type="number" name="data_count_1" value="1">
                                </div>
                                <div class="input-group">
                                    <a href="javascript:void(0);" class="delete-link"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <a id="addlnk" href="javascript:void(null);" class="add-link"><span><i class="fa fa-plus-circle"></i></span> ADD FIELD </a>
                        </div>

                    </div>
                    <div class="file_group">
                        <span>OR ATTACH  FILE (LIST OF SPARE PARTS)</span>
                        <div class="inline-group">
                            <div class="input">
                                <label for="fileic_file_input">...</label>
                                <input id="fileic_file_input" class="inputfile" name="fileFF[]" multiple type="file" value="Прикрепить файл" />
                                <span>XLS, CSV, DOC or Photo</span>
                            </div>
                            <div class="btns">
                                <span id="filelnk" class="add-btn">SELECT FILE</span>
                                <span class="info">25 MB max</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <div class="input-group">
                        <label for="calc_name">YOUR NAME</label>
                        <input id="calc_name" type="text" name="name_f" placeholder="John Doe" class="form-control name-input required" required/>
                        <span>Required</span>
                    </div>
                    <div class="input-group">
                        <label for="calc_comp">COMPANY NAME</label>
                        <input id="calc_comp" type="text" name="company_f" placeholder="Parts Ltd" class="form-control"/>
                    </div>
                    <div class="input-group">
                        <label for="calc_contry">SELECT COUNTRY OF DELIVERY</label>
                        <select name = "calc_contry" id = "calc_contry" required>
                            <option value = "USA" data-code = "1"> USA </option>
                            <option value = "Australia" data-code = "61"> Australia </option>
                            <option value = "Austria" data-code = "43"> Austria </option>
                            <option value = "Azerbaijan" data-code = "994"> Azerbaijan </option>
                            <option value = "Albania" data-code = "355"> Albania </option>
                            <option value = "Algeria" data-code = "213"> Algeria </option>
                            <option value = "Angola" data-code = "244"> Angola </option>
                            <option value = "Andorra" data-code = "376"> Andorra </option>
                            <option value = "Antigua and Barbuda" data-code = "1268"> Antigua and Barbuda </option>
                            <option value = "Argentina" data-code = "54"> Argentina </option>
                            <option value = "Armenia" data-code = "374"> Armenia </option>
                            <option value = "Afghanistan" data-code = "93"> Afghanistan </option>
                            <option value = "Bahamas" data-code = "1242"> Bahamas </option>
                            <option value = "Bangladesh" data-code = "880"> Bangladesh </option>
                            <option value = "Barbados" data-code = "1246"> Barbados </option>
                            <option value = "Bahrain" data-code = "973"> Bahrain </option>
                            <option value = "Belarus" data-code = "375"> Belarus </option>
                            <option value = "Belize" data-code = "501"> Belize </option>
                            <option value = "Belgium" data-code = "32"> Belgium </option>
                            <option value = "Benin" data-code = "229"> Benin </option>
                            <option value = "Bulgaria" data-code = "359"> Bulgaria </option>
                            <option value = "Bolivia" data-code = "591"> Bolivia </option>
                            <option value = "Bosnia and Herzegovina" data-code = "387"> Bosnia and Herzegovina </option>
                            <option value = "Botswana" data-code = "267"> Botswana </option>
                            <option value = "Brazil" data-code = "55"> Brazil </option>
                            <option value = "Brunei" data-code = "673"> Brunei </option>
                            <option value = "Burkina Faso" data-code = "226"> Burkina Faso </option>
                            <option value = "Burundi" data-code = "257"> Burundi </option>
                            <option value = "Bhutan" data-code = "975"> Bhutan </option>
                            <option value = "Vanuatu" data-code = "678"> Vanuatu </option>
                            <option value = "Vatican" data-code = "39"> Vatican </option>
                            <option value = "UK" data-code = "44"> UK </option>
                            <option value = "Hungary" data-code = "36"> Hungary </option>
                            <option value = "Venezuela" data-code = "58"> Venezuela </option>
                            <option value = "East Timor" data-code = "670"> East Timor </option>
                            <option value = "Vietnam" data-code = "84"> Vietnam </option>
                            <option value = "Gabon" data-code = "241"> Gabon </option>
                            <option value = "Haiti" data-code = "509"> Haiti </option>
                            <option value = "Guyana" data-code = "592"> Guyana </option>
                            <option value = "Gambia" data-code = "220"> Gambia </option>
                            <option value = "Ghana" data-code = "233"> Ghana </option>
                            <option value = "Guatemala" data-code = "502"> Guatemala </option>
                            <option value = "Guinea" data-code = "224"> Guinea </option>
                            <option value = "Guinea-Bissau" data-code = "245"> Guinea-Bissau </option>
                            <option value = "Germany" data-code = "49"> Germany </option>
                            <option value = "Honduras" data-code = "504"> Honduras </option>
                            <option value = "Grenada" data-code = "1473"> Grenada </option>
                            <option value = "Greece" data-code = "30"> Greece </option>
                            <option value = "Georgia" data-code = "995"> Georgia </option>
                            <option value = "Denmark" data-code = "45"> Denmark </option>
                            <option value = "Djibouti" data-code = "253"> Djibouti </option>
                            <option value = "Dominica" data-code = "1767"> Dominica </option>
                            <option value = "Dominican Republic" data-code = "1809"> Dominican Republic </option>
                            <option value = "Egypt" data-code = "20"> Egypt </option>
                            <option value = "Zambia" data-code = "260"> Zambia </option>
                            <option value = "Zimbabwe" data-code = "263"> Zimbabwe </option>
                            <option value = "Israel" data-code = "972"> Israel </option>
                            <option value = "India" data-code = "91"> India </option>
                            <option value = "Indonesia" data-code = "62"> Indonesia </option>
                            <option value = "Jordan" data-code = "962"> Jordan </option>
                            <option value = "Iraq" data-code = "964"> Iraq </option>
                            <option value = "Iran" data-code = "98"> Iran </option>
                            <option value = "Ireland" data-code = "353"> Ireland </option>
                            <option value = "Iceland" data-code = "354"> Iceland </option>
                            <option value = "Spain" data-code = "34"> Spain </option>
                            <option value = "Italy" data-code = "39"> Italy </option>
                            <option value = "Yemen" data-code = "967"> Yemen </option>
                            <option value = "Cape Verde" data-code = "238"> Cape Verde </option>
                            <option value = "Kazakhstan" data-code = "77"> Kazakhstan </option>
                            <option value = "Cambodia" data-code = "855"> Cambodia </option>
                            <option value = "Cameroon" data-code = "237"> Cameroon </option>
                            <option value = "Canada" data-code = "1"> Canada </option>
                            <option value = "Qatar" data-code = "974"> Qatar </option>
                            <option value = "Kenya" data-code = "254"> Kenya </option>
                            <option value = "Cyprus" data-code = "357"> Cyprus </option>
                            <option value = "Kyrgyzstan" data-code = "996"> Kyrgyzstan </option>
                            <option value = "Kiribati" data-code = "686 "> Kiribati </option>
                            <option value = "China" data-code = "86"> China </option>
                            <option value = "Colombia" data-code = "57"> Colombia </option>
                            <option value = "Comoros" data-code = "269"> Comoros </option>
                            <option value = "Congo, Democratic Republic" data-code = "243"> Congo, Democratic Republic </option>
                            <option value = "Congo, republic" data-code = "242"> Congo, republic </option>
                            <option value = "Costa Rica" data-code = "506"> Costa Rica </option>
                            <option value = "Côte d'Ivoire" data-code = "225"> Côte d'Ivoire </option>
                            <option value = "Cuba" data-code = "53"> Cuba </option>
                            <option value = "Kuwait" data-code = "965"> Kuwait </option>
                            <option value = "Laos" data-code = "856"> Laos </option>
                            <option value = "Latvia" data-code = "371"> Latvia </option>
                            <option value = "Lesotho" data-code = "266"> Lesotho </option>
                            <option value = "Liberia" data-code = "231"> Liberia </option>
                            <option value = "Lebanon" data-code = "961"> Lebanon </option>
                            <option value = "Libya" data-code = "218"> Libya </option>
                            <option value = "Lithuania" data-code = "370"> Lithuania </option>
                            <option value = "Liechtenstein" data-code = "423"> Liechtenstein </option>
                            <option value = "Luxembourg" data-code = "352"> Luxembourg </option>
                            <option value = "Mauritius" data-code = "230"> Mauritius </option>
                            <option value = "Mauritania" data-code = "222"> Mauritania </option>
                            <option value = "Madagascar" data-code = "261"> Madagascar </option>
                            <option value = "Macedonia" data-code = "389"> Macedonia </option>
                            <option value = "Malawi" data-code = "265"> Malawi </option>
                            <option value = "Malaysia" data-code = "60"> Malaysia </option>
                            <option value = "Mali" data-code = "223"> Mali </option>
                            <option value = "Maldives" data-code = "960"> Maldives </option>
                            <option value = "Malta" data-code = "356"> Malta </option>
                            <option value = "Morocco" data-code = "212"> Morocco </option>
                            <option value = "Marshall Islands" data-code = "692"> Marshall Islands </option>
                            <option value = "Mexico" data-code = "52"> Mexico </option>
                            <option value = "Mozambique" data-code = "259"> Mozambique </option>
                            <option value = "Moldavia" data-code = "373"> Moldavia </option>
                            <option value = "Monaco" data-code = "377"> Monaco </option>
                            <option value = "Mongolia" data-code = "976"> Mongolia </option>
                            <option value = "Myanmar" data-code = "95"> Myanmar </option>
                            <option value = "Namibia" data-code = "264"> Namibia </option>
                            <option value = "Nauru" data-code = "674"> Nauru </option>
                            <option value = "Nepal" data-code = "977"> Nepal </option>
                            <option value = "Niger" data-code = "227"> Niger </option>
                            <option value = "Nigeria" data-code = "234"> Nigeria </option>
                            <option value = "Netherlands" data-code = "31"> Netherlands </option>
                            <option value = "Nicaragua" data-code = "505"> Nicaragua </option>
                            <option value = "New Zealand" data-code = "64"> New Zealand </option>
                            <option value = "Norway" data-code = "47"> Norway </option>
                            <option value = "United Arab Emirates" data-code = "971"> United Arab Emirates </option>
                            <option value = "Oman" data-code = "968"> Oman </option>
                            <option value = "Pakistan" data-code = "92"> Pakistan </option>
                            <option value = "Palau" data-code = "680"> Palau </option>
                            <option value = "Panama" data-code = "507"> Panama </option>
                            <option value = "Papua New Guinea" data-code = "675"> Papua New Guinea </option>
                            <option value = "Paraguay" data-code = "595"> Paraguay </option>
                            <option value = "Peru" data-code = "51"> Peru </option>
                            <option value = "Poland" data-code = "48"> Poland </option>
                            <option value = "Portugal" data-code = "351"> Portugal </option>
                            <option value = "Russia" data-code = "7"> Russia </option>
                            <option value = "Rwanda" data-code = "250"> Rwanda </option>
                            <option value = "Romania" data-code = "40"> Romania </option>
                            <option value = "El Salvador" data-code = "503"> El Salvador </option>
                            <option value = "Samoa" data-code = "685"> Samoa </option>
                            <option value = "San Marino" data-code = "378"> San Marino </option>
                            <option value = "Sao Tome and Principe" data-code = "239"> Sao Tome and Principe </option>
                            <option value = "Saudi Arabia" data-code = "966"> Saudi Arabia </option>
                            <option value = "Swaziland" data-code = "268"> Swaziland </option>
                            <option value = "North Korea" data-code = "850"> North Korea </option>
                            <option value = "Seychelles" data-code = "248"> Seychelles </option>
                            <option value = "Senegal" data-code = "221"> Senegal </option>
                            <option value = "Saint Vincent and the Grenadines" data-code = "1784"> Saint Vincent and the Grenadines </option>
                            <option value = "Saint Kitts and Nevis" data-code = "1869"> Saint Kitts and Nevis </option>
                            <option value = "Saint Lucia" data-code = "1758"> Saint Lucia </option>
                            <option value = "Serbia" data-code = "381"> Serbia </option>
                            <option value = "Singapore" data-code = "65"> Singapore </option>
                            <option value = "Syria" data-code = "963"> Syria </option>
                            <option value = "Slovakia" data-code = "421"> Slovakia </option>
                            <option value = "Slovenia" data-code = "986"> Slovenia </option>

                            <option value = "Solomon Islands" data-code = "677"> Solomon Islands </option>
                            <option value = "Somalia" data-code = "252"> Somalia </option>
                            <option value = "Sudan" data-code = "249"> Sudan </option>
                            <option value = "Suriname" data-code = "597"> Suriname </option>
                            <option value = "Sierra Leone" data-code = "232"> Sierra Leone </option>
                            <option value = "Tajikistan" data-code = "992"> Tajikistan </option>
                            <option value = "Thailand" data-code = "66"> Thailand </option>
                            <option value = "Tanzania" data-code = "255"> Tanzania </option>
                            <option value = "Togo" data-code = "228"> Togo </option>
                            <option value = "Tonga" data-code = "676"> Tonga </option>
                            <option value = "Trinidad and Tobago" data-code = "1868"> Trinidad and Tobago </option>
                            <option value = "Tuvalu" data-code = "688"> Tuvalu </option>
                            <option value = "Tunisia" data-code = "216"> Tunisia </option>
                            <option value = "Turkmenistan" data-code = "993"> Turkmenistan </option>
                            <option value = "Turkey" data-code = "90"> Turkey </option>

                            <option value = "Uganda" data-code = "256"> Uganda </option>
                            <option value = "Uzbekistan" data-code = "998"> Uzbekistan </option>
                            <option value = "Ukraine" data-code = "380"> Ukraine </option>
                            <option value = "Uruguay" data-code = "598"> Uruguay </option>
                            <option value = "Federated States of Micronesia" data-code = "691"> Federated States of Micronesia </option>
                            <option value = "Fiji" data-code = "679"> Fiji </option>
                            <option value = "Philippines" data-code = "63"> Philippines </option>
                            <option value = "Finland" data-code = "358"> Finland </option>
                            <option value = "France" data-code = "33"> France </option>
                            <option value = "Croatia" data-code = "385"> Croatia </option>
                            <option value = "Central African Republic" data-code = "236"> Central African Republic </option>
                            <option value = "Chad" data-code = "235"> Chad </option>
                            <option value = "Montenegro" data-code = "381"> Montenegro </option>
                            <option value = "Czech Republic" data-code = "420"> Czech Republic </option>
                            <option value = "Chile" data-code = "56"> Chile </option>
                            <option value = "Switzerland" data-code = "41"> Switzerland </option>
                            <option value = "Sweden" data-code = "46"> Sweden </option>
                            <option value = "Sri Lanka" data-code = "94"> Sri Lanka </option>
                            <option value = "Ecuador" data-code = "593"> Ecuador </option>
                            <option value = "Equatorial Guinea" data-code = "240"> Equatorial Guinea </option>
                            <option value = "Eritrea" data-code = "291"> Eritrea </option>
                            <option value = "Estonia" data-code = "372"> Estonia </option>
                            <option value = "Ethiopia" data-code = "251"> Ethiopia </option>
                            <option value = "South Korea" data-code = "82"> South Korea </option>
                            <option value = "South Africa" ​data-code = "27"> South Africa </option>
                            <option value = "Jamaica" data-code = "1876"> Jamaica </option>
                            <option value = "Japan" data-code = "81"> Japan </option>
                        </select>
                        <span>Required</span>
                    </div>
                    <div class="inline-group">
                        <div class="input-group">
                            <label for="calc_code">COUNTRY CODE</label>
                            <input id="calc_code" name="calc_code" type="text" value="(1)" placeholder="(1)" required>
                            <span>Required</span>
                        </div>
                        <div class="input-group">
                            <label for="calc_phone">PHONE<br> NUMBER</label>
                            <input id="calc_phone" type="text" name="phone_f" placeholder="965 8577" class="form-control required"/>
                            <span>Required</span>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="calc_mail">Email</label>
                        <input id="calc_mail" type="text" name="mail_f" placeholder="customer@gmail.com" class="form-control required" required/>
                        <span>Required</span>
                    </div>

                    <div class="input-group">
                        <label for="calc_message">YOUR COMMENTS</label>
                        <textarea name="calc_message" id="calc_message"></textarea>
                    </div>
                </div>
                <div class="form-bottom">
                    <button id="calc_btn" type="submit" class="form-btn">RECEIVE PROPOSAL</button>
                </div>
            </form>
        </div>
    </div>
</section>
