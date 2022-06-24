<?php

use app\components\FormcalcWidget;
use app\components\ObsvWidget;
use http\Url;

$this->context->addUrl = '';
$this->title = 'Запчасти для спецтехники купить в Москве с доставкой по России – Запчасти для тракторов, экскаваторов, грузовых авто в интернет-магазине Allusaparts';
$this->registerMetaTag(
    ['name' => 'description', 'content' => 'Нужно запчасти для спецтехники купить в Москве с доставкой по России? Смотрите каталог лучших запчастей для тракторов, экскаваторов, грузовых авто в интернет-магазине Allusaparts. Низкие цены от производителя. Характеристики, фото, описание.']
);
$this->registerLinkTag(['rel' => 'canonical', 'href' => 'https://allusaparts.com']);

$brands = $this->context->ru_brands;
foreach ($brands as $brand) {
    $sanitize_brand_name = strtolower(preg_replace('/[^a-zA-Z0-9]/u', '_', $brand));
    $img_brand .= '<div class="grid_3 box-1"><a href="/brands/'.strtolower($brand).'"><img src="images/brands/'.$sanitize_brand_name.'.jpg" alt="'.$brand.'" class="brand-image"></a></div>';
}

?>

<section class="content">
    <section class="container">
        <h1>Запчасти для спецтехники</h1>
        <div class="row">
            <div class="grid_12">
                <div class="slider clearfix">
                    <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                        <div data-src="/images/slide-1.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="slider-text">
                                    Мы доставляем запчасти
                                    <span>по всему миру</span>
                                </div>
                            </div>
                        </div>
                        <div data-src="/images/slide-2.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="slider-text">
                                    Нефтяное и газовое
                                    <span>оборудование</span>
                                </div>
                            </div>
                        </div>
                        <div data-src="/images/slide-3.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="slider-text">
                                    Спецтехника, спецтранспорт,
                                    <span>моторы и генераторы</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="grid_6">
                <p class="text-2">
                    К машинам, решающим серьезные задачи, предъявляют серьезные требования — мощность, надежность, долговечность. Только оборудование требует планового обслуживания и ремонта, поэтому качественные запчасти для спецтехники — залог долгой жизни машин.
                </p>
                <p class="text-3">Компания "All American Parts" предлагает вам оригинальные запчасти, рем-комплекты для</p>
                <ul>
                    <li>экскаваторов (с любым объемом ковша),</li>
                    <li>бортовых, фронтальных погрузчиков (с правым и левым рулем),</li>
                    <li>кранов (с разной грузоподъемностью стрелы),</li>
                    <li>бульдозеров, </li>
                    <li>тракторов,</li>
                    <li>асфальтоукладчиков,</li>
                    <li>топливных заправщиков, а также другой строительной и дорожной техники (колесной, гусеничной),</li>
                    <li>ГНБ установки.</li>
                </ul>

            </div>
            <div class="grid_6" style="margin-top: 30px;">
                <p class="text-3">Наш каталог запчастей содержит тысячи деталей для спецтехники. Мы продаем запчасти известных поставщиков:</p>
                <ul>
                    <li><a href="/brands/caterpillar">Caterpillar</a> ,</li>
                    <li><a href="/brands/komatsu">Komatsu</a>,</li>
                    <li>Case,</li>
                    <li>JCB,</li>
                    <li><a href="/brands/hitachi">Hitachi</a>,</li>
                    <li>Volvo,</li>
                    <li><a href="/brands/hyundai">Hyundai</a>,</li>
                    <li>Doosan,</li>
                    <li>New Holland,</li>
                    <li>Perkins,</li>
                    <li>Shantui,</li>
                    <li>BobCat,</li>
                    <li><a href="/brands/ditch witch">Ditch Witch</a></li>
                </ul>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="grid_6">
                <p class="text-2">
                    У нас можно купить запчасти для спецтехники как для самых ходовых моделей от крупнейших мировых брендов, так и очень редкие детали. Большой опыт, собственные склады позволяют нам подобрать даже непопулярные запчасти в кратчайший срок. Работа с нами эффективна.
                </p>
                <p class="text-3">Наша специализация — прямые поставки оригинальных запчастей для спецтехники. В каталоге (в наличии, под заказ) всегда доступны тысячи артикулов:</p>
                <ul>
                    <li>двигатели, редукторы, механизмы управления,</li>
                    <li>насосы, тнвд, датчики, прокладки, шланги, фильтры, рвд,</li>
                    <li>гидравлическое оборудование (в том числе гидромоторы хода), запчасти для гидравлики, гидроцилиндры, комплектующие для гидромоторов и гидронасосов,</li>
                    <li>болты (в том числе zx211), гусеницы, коронки, опорные валы, кольца,</li>
                    <li>колеса, катки, элементы ходовой части,</li>
                    <li>трансмиссии и коробки передач,</li>
                    <li>стартеры, муфты, стекла, генераторы, масла, мосты,</li>
                    <li>навесное оборудование,</li>
                    <li>зубья для ковша, звездочки, цепи, узлы, кнопки, дополнительные устройства.</li>
                </ul>
                <p class="text-3" style="margin-top: 10px;">Продажа запчастей для спецтехники самых надежных брендов в Москве и Московской области идет 24/7 365 дней в году. У нас есть доставка во все регионы России. Мы сможем подобрать даже те запчасти, которых нет у ваших постоянных дилеров. Достаточно связаться с нами: зайти на портал или заказать звонок, чтобы в этом убедиться.</p>

            </div>

            <div class="grid_6">
                <p class="text-2">Наша фирма готова обеспечить всем необходимыми запасными частями технику, которую вы эксплуатируете для производства дорожных и строительных работ. Нам интересна работа исключительно на результат, поэтому готовы обеспечивать промышленные объемы поставок для самого широкого модельного ряда машин.</p>
                <p class="text-3">
                    Искать запчасти на нашем сайте allusaparts.com комфортно и быстро. Можно пользоваться общим поиском по сайту, а также искать в рамках тематического раздела. Товары рекомендуем откладывать в корзину. Это поможет сохранить историю поиска. Потом их можно будет оттуда удалить, а нужные запчасти купить или просто сохранить список.
                </p>
                <p class="text-3">Если вы за живое общение или вам требуется консультация нашего менеджера, оставьте в специальной форме свой номер телефона, либо адрес электронной почты, чтобы сотрудники могли связаться с вами в удобное время. Для вас найдут запчасти и аксессуары, расскажут о новинках ассортимента, акциях (скидках). Наши менеджеры предложат подходящие виды доставки и способы оплаты.</p>
                <p class="text-3">Есть еще один вариант оформления заказа — отправить заявку на запчасти для спецтехники на нашу электронную почту. После обработки заявки наши сотрудники найдут запчасти и быстро созвонятся с вами, чтобы его оформить, обговорить подробности.</p>
            </div>


        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="grid_6">
                <p class="text-2">Клиенты важны для нашей компании, из-за этого мы соблюдаем политику открытости и взаимовыручки. Нам важно не просто продавать вам запчасти, а решать ваши проблемы. Потому услуга подбора запчастей бесплатна для всех клиентов, а информация о ценах и производителях открыта.
                </p>
                <p class="text-3">Работать с нами постоянно выгодно, так как для постоянных клиентов действуют отдельные условия на запчасти для машин (погрузчика, экскаватора и пр.):</p>
                <ul>
                    <li>система скидок;</li>
                    <li>качественный сервис;</li>
                    <li>транспортировка;</li>
                    <li>удобная оплата запчастей и комплектующих и др.</li>
                </ul>
                <p class="text-3" style="margin-top: 10px;">Вы можете подписаться на новости компании о поступлении новых товаров, специальных предложениях — мы не спамим, все только по делу.</p>
            </div>
            <div class="grid_6" style="">
                <p class="text-3">Информационная система на нашем портале позволяет узнать цену запасных частей, дату производства, день и время поступления на склад, а также другие сведения по запчастям. Компания ничего не скрывает.</p>
                <p class="text-3">Наша продукция очень высокого качества, соответствует техническим регламентам (проверка проходит регулярно). Запчасти имеют сертификат соответствия. На них распространяется гарантия завода (до нескольких лет при правильной эксплуатации).</p>
                <p class="text-3">Компания ценит конфиденциальность наших клиентов. После того, как вы принимаете условия обработки персональных данных, мы будем надежно хранить контакты, адреса, а также данные о покупках запчастей, используемого оборудования.</p>
            </div>
        </div>
        <div class="row">
            <div class="grid_4">
                <h2>О компании</h2>
                <p class="text-2">All American Parts – американская компания с российским представительством в Москве. Мы специализируемся на продаже комплектующих и запчастей для спецтехники, горнодобывающей техники, нефтяного и газового оборудования, генераторов, компрессоров, грузовиков и спецтранспорта.</p>
                <div>Наша компания осуществляет доставку по всему миру, предлагая короткие сроки и бесперебойность поставок.  Постоянные клиенты  All American Parts отмечают высокую клиентоориентированность  и профессионализм наших специалистов.</div>
            </div>
            <div class="grid_4" style="margin-top: 107px;">

                <p class="text-3">Благодаря многолетнему опыту работы и налаженным связям с ведущими поставщиками и производителями, мы всегда предлагаем нашим клиентам максимально выгодные цены. Чтобы это проверить – достаточно просто заказать у нас расчет стоимости запчастей.</p>
                <div>Мы гарантируем индивидуальный подход к каждому клиенту и максимальную гибкость в решении ваших задач. Наш штат квалифицированных сотрудников позволяет прикрепить к каждой компании персонального менеджера, а также предложить постоянным клиентам дополнительные преимущества. Давайте сотрудничать!</div>
            </div>
            <div class="grid_4">
                <h2>Преимущества</h2>
                <ul class="list-1">
                    <li><a href="#calc" class="calc-link go_to">Максимально выгодные цены </a></li>
                    <li><a href="#calc" class="calc-link go_to">Прямая работа с поставщиками</a></li>
                    <li><a href="#calc" class="calc-link go_to">Бесперебойность поставок</a></li>
                    <li><a href="#calc" class="calc-link go_to">Быстрая доставка по всему миру</a></li>
                    <li><a href="#calc" class="calc-link go_to">Персональный менеджер</a></li>
                </ul>
            </div>
        </div>
    </section>
</section>


<section class="brands">
    <div class="container">
        <h2 class="row-title">Сотрудничаем с ведущими мировыми брендами</h2>
        <div class="row">
            <?= $img_brand?>
        </div>
    </div>
</section>
<section id="calc" class="calc">
    <div class="container">
        <h2 class="calc-title">Расценить запчасти</h2>
        <div class="calc-form">
            <form id="calc-form" action="javascript:void(null);" onsubmit="send_withfile('calc-form')">
                <div class="form-left">
                    <div class="gray-block">
                        <div class="input-group">
                            <label for="calc_prtype">Выберите тип проценки</label>
                            <select name="calc_prtype" id="calc_prtype">
                                <option value="All">Все доступные предложения</option>
                                <option value="OEM only">Только оригинальные запчасти</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="calc_brand">Выберите бренд</label>
                            <select name="calc_brand" id="calc_brand">
                                <option value="all">Любой бренд</option>
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
                                    <label for="data_number">Номер запчасти</label>
                                    <input id="data_number" type="text" name="data_number_0" placeholder="000-0000">
                                </div>
                                <div class="input-group">
                                    <label for="data_count">Кол-во</label>
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
                            <a id="addlnk" href="javascript:void(null);" class="add-link"><span><i class="fa fa-plus-circle"></i></span> Добавить поле</a>
                        </div>

                    </div>
                    <div class="file_group">
                        <span>Или прикрепите файл (список запчастей)</span>
                        <div class="inline-group">
                            <div class="input">
                                <label for="fileic_file_input">...</label>
                                <input id="fileic_file_input" class="inputfile" name="fileFF[]" multiple type="file" value="Прикрепить файл" />
                                <span>Можно выбрать XLS, CSV, DOC или фото</span>
                            </div>
                            <div class="btns">
                                <span id="filelnk" class="add-btn">Выбрать файл</span>
                                <span class="info">25 MB max</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <div class="input-group">
                        <label for="calc_name">Ваше имя</label>
                        <input id="calc_name" type="text" name="name_f" placeholder="Владимир Петров" class="form-control name-input required" required/>
                        <span>Обязательно</span>
                    </div>
                    <div class="input-group">
                        <label for="calc_comp">Компания</label>
                        <input id="calc_comp" type="text" name="company_f" placeholder="ООО Технология" class="form-control"/>
                    </div>
                    <div class="input-group">
                        <label for="calc_contry">Выберите страну доставки</label>
                        <select name="calc_contry" id="calc_contry" required>
                            <option value="Австралия" data-code="61">Австралия</option>
                            <option value="Австрия" data-code="43">Австрия</option>
                            <option value="Азербайджан" data-code="994">Азербайджан</option>
                            <option value="Албания" data-code="355">Албания</option>
                            <option value="Алжир" data-code="213">Алжир</option>
                            <option value="Ангола" data-code="244">Ангола</option>
                            <option value="Андорра" data-code="376">Андорра</option>
                            <option value="Антигуа и Барбуда" data-code="1268">Антигуа и Барбуда</option>
                            <option value="Аргентина" data-code="54">Аргентина</option>
                            <option value="Армения" data-code="374">Армения</option>
                            <option value="Афганистан" data-code="93">Афганистан</option>
                            <option value="Багамы" data-code="1242">Багамы</option>
                            <option value="Бангладеш" data-code="880">Бангладеш</option>
                            <option value="Барбадос" data-code="1246">Барбадос</option>
                            <option value="Бахрейн" data-code="973">Бахрейн</option>
                            <option value="Беларусь" data-code="375">Беларусь</option>
                            <option value="Белиз" data-code="501">Белиз</option>
                            <option value="Бельгия" data-code="32">Бельгия</option>
                            <option value="Бенин" data-code="229">Бенин</option>
                            <option value="Болгария" data-code="359">Болгария</option>
                            <option value="Боливия" data-code="591">Боливия</option>
                            <option value="Босния и Герцеговина" data-code="387">Босния и Герцеговина</option>
                            <option value="Ботсвана" data-code="267">Ботсвана</option>
                            <option value="Бразилия" data-code="55">Бразилия</option>
                            <option value="Бруней" data-code="673">Бруней</option>
                            <option value="Буркина Фасо" data-code="226">Буркина Фасо</option>
                            <option value="Бурунди" data-code="257">Бурунди</option>
                            <option value="Бутан" data-code="975">Бутан</option>
                            <option value="Вануату" data-code="678">Вануату</option>
                            <option value="Ватикан" data-code="39">Ватикан</option>
                            <option value="Великобритания" data-code="44">Великобритания</option>
                            <option value="Венгрия" data-code="36">Венгрия</option>
                            <option value="Венесуэла" data-code="58">Венесуэла</option>
                            <option value="Восточный Тимор" data-code="670">Восточный Тимор</option>
                            <option value="Вьетнам" data-code="84">Вьетнам</option>
                            <option value="Габон" data-code="241">Габон</option>
                            <option value="Гаити" data-code="509">Гаити</option>
                            <option value="Гайана" data-code="592">Гайана</option>
                            <option value="Гамбия" data-code="220">Гамбия</option>
                            <option value="Гана" data-code="233">Гана</option>
                            <option value="Гватемала" data-code="502">Гватемала</option>
                            <option value="Гвинея" data-code="224">Гвинея</option>
                            <option value="Гвинея-Бисау" data-code="245">Гвинея-Бисау</option>
                            <option value="Германия" data-code="49">Германия</option>
                            <option value="Гондурас" data-code="504">Гондурас</option>
                            <option value="Гренада" data-code="1473">Гренада</option>
                            <option value="Греция" data-code="30">Греция</option>
                            <option value="Грузия" data-code="995">Грузия</option>
                            <option value="Дания" data-code="45">Дания</option>
                            <option value="Джибути" data-code="253">Джибути</option>
                            <option value="Доминика" data-code="1767">Доминика</option>
                            <option value="Доминиканская Республика" data-code="1809">Доминиканская Республика</option>
                            <option value="Египет" data-code="20">Египет</option>
                            <option value="Замбия" data-code="260">Замбия</option>
                            <option value="Зимбабве" data-code="263">Зимбабве</option>
                            <option value="Израиль" data-code="972">Израиль</option>
                            <option value="Индия" data-code="91">Индия</option>
                            <option value="Индонезия" data-code="62">Индонезия</option>
                            <option value="Иордания" data-code="962">Иордания</option>
                            <option value="Ирак" data-code="964">Ирак</option>
                            <option value="Иран" data-code="98">Иран</option>
                            <option value="Ирландия" data-code="353">Ирландия</option>
                            <option value="Исландия" data-code="354">Исландия</option>
                            <option value="Испания" data-code="34">Испания</option>
                            <option value="Италия" data-code="39">Италия</option>
                            <option value="Йемен" data-code="967">Йемен</option>
                            <option value="Кабо-Верде" data-code="238">Кабо-Верде</option>
                            <option value="Казахстан" data-code="77">Казахстан</option>
                            <option value="Камбоджа" data-code="855">Камбоджа</option>
                            <option value="Камерун" data-code="237">Камерун</option>
                            <option value="Канада" data-code="1">Канада</option>
                            <option value="Катар" data-code="974">Катар</option>
                            <option value="Кения" data-code="254">Кения</option>
                            <option value="Кипр" data-code="357">Кипр</option>
                            <option value="Киргизия" data-code="996">Киргизия</option>
                            <option value="Кирибати" data-code="686">Кирибати</option>
                            <option value="Китай" data-code="86">Китай</option>
                            <option value="Колумбия" data-code="57">Колумбия</option>
                            <option value="Коморы" data-code="269">Коморы</option>
                            <option value="Конго, демократическая республика" data-code="243">Конго, демократическая республика</option>
                            <option value="Конго, республика" data-code="242">Конго, республика</option>
                            <option value="Коста-Рика" data-code="506">Коста-Рика</option>
                            <option value="Кот-д’Ивуар" data-code="225">Кот-д’Ивуар</option>
                            <option value="Куба" data-code="53">Куба</option>
                            <option value="Кувейт" data-code="965">Кувейт</option>
                            <option value="Лаос" data-code="856">Лаос</option>
                            <option value="Латвия" data-code="371">Латвия</option>
                            <option value="Лесото" data-code="266">Лесото</option>
                            <option value="Либерия" data-code="231">Либерия</option>
                            <option value="Ливан" data-code="961">Ливан</option>
                            <option value="Ливия" data-code="218">Ливия</option>
                            <option value="Литва" data-code="370">Литва</option>
                            <option value="Лихтенштейн" data-code="423">Лихтенштейн</option>
                            <option value="Люксембург" data-code="352">Люксембург</option>
                            <option value="Маврикий" data-code="230">Маврикий</option>
                            <option value="Мавритания" data-code="222">Мавритания</option>
                            <option value="Мадагаскар" data-code="261">Мадагаскар</option>
                            <option value="Македония" data-code="389">Македония</option>
                            <option value="Малави" data-code="265">Малави</option>
                            <option value="Малайзия" data-code="60">Малайзия</option>
                            <option value="Мали" data-code="223">Мали</option>
                            <option value="Мальдивы" data-code="960">Мальдивы</option>
                            <option value="Мальта" data-code="356">Мальта</option>
                            <option value="Марокко" data-code="212">Марокко</option>
                            <option value="Маршалловы Острова" data-code="692">Маршалловы Острова</option>
                            <option value="Мексика" data-code="52">Мексика</option>
                            <option value="Мозамбик" data-code="259">Мозамбик</option>
                            <option value="Молдавия" data-code="373">Молдавия</option>
                            <option value="Монако" data-code="377">Монако</option>
                            <option value="Монголия" data-code="976">Монголия</option>
                            <option value="Мьянма" data-code="95">Мьянма</option>
                            <option value="Намибия" data-code="264">Намибия</option>
                            <option value="Науру" data-code="674">Науру</option>
                            <option value="Непал" data-code="977">Непал</option>
                            <option value="Нигер" data-code="227">Нигер</option>
                            <option value="Нигерия" data-code="234">Нигерия</option>
                            <option value="Нидерланды" data-code="31">Нидерланды</option>
                            <option value="Никарагуа" data-code="505">Никарагуа</option>
                            <option value="Новая Зеландия" data-code="64">Новая Зеландия</option>
                            <option value="Норвегия" data-code="47">Норвегия</option>
                            <option value="Объединенные Арабские Эмираты" data-code="971">Объединенные Арабские Эмираты</option>
                            <option value="Оман" data-code="968">Оман</option>
                            <option value="Пакистан" data-code="92">Пакистан</option>
                            <option value="Палау" data-code="680">Палау</option>
                            <option value="Панама" data-code="507">Панама</option>
                            <option value="Папуа - Новая Гвинея" data-code="675">Папуа - Новая Гвинея</option>
                            <option value="Парагвай" data-code="595">Парагвай</option>
                            <option value="Перу" data-code="51">Перу</option>
                            <option value="Польша" data-code="48">Польша</option>
                            <option value="Португалия" data-code="351">Португалия</option>
                            <option value="Россия" data-code="7">Россия</option>
                            <option value="Руанда" data-code="250">Руанда</option>
                            <option value="Румыния" data-code="40">Румыния</option>
                            <option value="Сальвадор" data-code="503">Сальвадор</option>
                            <option value="Самоа" data-code="685">Самоа</option>
                            <option value="Сан-Марино" data-code="378">Сан-Марино</option>
                            <option value="Сан-Томе и Принсипи" data-code="239">Сан-Томе и Принсипи</option>
                            <option value="Саудовская Аравия" data-code="966">Саудовская Аравия</option>
                            <option value="Свазиленд" data-code="268">Свазиленд</option>
                            <option value="Северная Корея" data-code="850">Северная Корея</option>
                            <option value="Сейшелы" data-code="248">Сейшелы	</option>
                            <option value="Сенегал" data-code="221">Сенегал	</option>
                            <option value="Сент-Винсент и Гренадины" data-code="1784">Сент-Винсент и Гренадины</option>
                            <option value="Сент-Китс и Невис" data-code="1869">Сент-Китс и Невис</option>
                            <option value="Сент-Люсия" data-code="1758">Сент-Люсия</option>
                            <option value="Сербия" data-code="381">Сербия</option>
                            <option value="Сингапур" data-code="65">Сингапур</option>
                            <option value="Сирия" data-code="963">Сирия</option>
                            <option value="Словакия" data-code="421">Словакия</option>
                            <option value="Словения" data-code="986">Словения</option>
                            <option value="Соединенные Штаты Америки" data-code="1">Соединенные Штаты Америки</option>
                            <option value="Соломоновы Острова" data-code="677">Соломоновы Острова</option>
                            <option value="Сомали" data-code="252">Сомали</option>
                            <option value="Судан" data-code="249">Судан</option>
                            <option value="Суринам" data-code="597">Суринам</option>
                            <option value="Сьерра-Леоне" data-code="232">Сьерра-Леоне</option>
                            <option value="Таджикистан" data-code="992">Таджикистан</option>
                            <option value="Таиланд" data-code="66">Таиланд</option>
                            <option value="Танзания" data-code="255">Танзания</option>
                            <option value="Того" data-code="228">Того</option>
                            <option value="Тонга" data-code="676">Тонга</option>
                            <option value="Тринидад и Тобаго" data-code="1868">Тринидад и Тобаго</option>
                            <option value="Тувалу" data-code="688">Тувалу</option>
                            <option value="Тунис" data-code="216">Тунис</option>
                            <option value="Туркмения" data-code="993">Туркмения</option>
                            <option value="Турция" data-code="90">Турция</option>
                            <option value="Уганда" data-code="256">Уганда</option>
                            <option value="Узбекистан" data-code="998">Узбекистан</option>
                            <option value="Украина" data-code="380">Украина</option>
                            <option value="Уругвай" data-code="598">Уругвай</option>
                            <option value="Федеративные штаты Микронезии" data-code="691">Федеративные штаты Микронезии</option>
                            <option value="Фиджи" data-code="679">Фиджи</option>
                            <option value="Филиппины" data-code="63">Филиппины</option>
                            <option value="Финляндия" data-code="358">Финляндия</option>
                            <option value="Франция" data-code="33">Франция</option>
                            <option value="Хорватия" data-code="385">Хорватия</option>
                            <option value="Центрально-Африканская Республика" data-code="236">Центрально-Африканская Республика</option>
                            <option value="Чад" data-code="235">Чад</option>
                            <option value="Черногория" data-code="381">Черногория</option>
                            <option value="Чехия" data-code="420">Чехия</option>
                            <option value="Чили" data-code="56">Чили</option>
                            <option value="Швейцария" data-code="41">Швейцария</option>
                            <option value="Швеция" data-code="46">Швеция</option>
                            <option value="Шри-Ланка" data-code="94">Шри-Ланка</option>
                            <option value="Эквадор" data-code="593">Эквадор	</option>
                            <option value="Экваториальная Гвинея" data-code="240">Экваториальная Гвинея</option>
                            <option value="Эритрея" data-code="291">Эритрея</option>
                            <option value="Эстония" data-code="372">Эстония</option>
                            <option value="Эфиопия" data-code="251">Эфиопия</option>
                            <option value="Южная Корея" data-code="82">Южная Корея</option>
                            <option value="Южно-Африканская Республика" data-code="27">Южно-Африканская Республика</option>
                            <option value="Ямайка" data-code="1876">Ямайка</option>
                            <option value="Япония" data-code="81">Япония</option>
                        </select>
                        <span>Обязательно</span>
                    </div>
                    <div class="inline-group">
                        <div class="input-group">
                            <label for="calc_code">Код страны</label>
                            <input id="calc_code" name="calc_code" type="text" value="(61)" placeholder="(61)" required>
                            <span>Обязательно</span>
                        </div>
                        <div class="input-group">
                            <label for="calc_phone">Телефон</label>
                            <input id="calc_phone" type="text" name="phone_f" placeholder="965 8577" class="form-control required"/>
                            <span>Обязательно</span>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="calc_mail">Email</label>
                        <input id="calc_mail" type="text" name="mail_f" placeholder="customer@gmail.com" class="form-control required" required/>
                        <span>Обязательно</span>
                    </div>

                    <div class="input-group">
                        <label for="calc_message">Комментарий</label>
                        <textarea name="calc_message" id="calc_message"></textarea>
                    </div>
                </div>
                <div class="form-bottom">
                    <button id="calc_btn" type="submit" class="form-btn">Получить предложение</button>
                </div>
            </form>
        </div>
    </div>
</section>
