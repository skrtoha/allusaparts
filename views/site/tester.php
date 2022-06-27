<?php

//$this->layout = '@app/views/layouts/base-uikit-layout';

$onPage = Yii::$app->params['onPageOnhandA'];

$this->title = 'Грузы, готовые к отправке';
if (!isset($n)) {
    $n = '';
}
if (!Yii::$app->user->isGuest) {
    ?>

    <div id="onhandA" class="container" style="" v-cloak>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Грузы, готовые к отправке</h2>

                <label for="tracknumber">Введите 2 и больше символов</label>
                <div class="uk-text-primary uk-text-bold" uk-spinner="ratio: 1"
                     :hidden="!animRow"></div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">трек номер:</span>
                    </div>
                    <input type="text" class="form-control"
                           style="margin-top: 0px; padding: .375rem .75rem; height: auto;"
                           id="tracknumber" aria-describedby="basic-addon3" @keyup.enter="checkTracknumbers"
                           v-model="tracknumber" placeholder="введите 2 и больше символов"/>
                    <div class="input-group-append">
                        <button @click="checkTracknumbers" class="btn btn-warning " type="button">Найти</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button @click="getOnhends()"
                        class="uk-button uk-button-medium uk-text-bolder uk-text-nowrap"
                        style="background: #F4D848; color:black;">Показать
                    Все
                </button>
            </div>
        </div>

        <div class="row">
            <table class="uk-table uk-overflow-auto uk-table-divider uk-table-middle uk-table-striped">
                <thead class="uk-visible@s v-cloak--hidden" :hidden="!onhandARows.length>0">
                <tr>
                    <th></th>
                    <th>№ документа</th>
                    <th>Тип доставки</th>
                    <th>Дата погрузки</th>
                    <th>Дата получения</th>
                </tr>
                </thead>
                <tbody :hidden="!onhandARows.length>0">
                <tr class="" v-for="(ridx, idx) in onhandARows[0]">
                    <td class="uk-hidden@s ">
                        <span class="uk-label uk-label-warning">{{idx+1}}</span>
                        <span><button
                                @click="openWindowTracknumbers(ridx.opid,ridx.doc+ridx.y,ridx.d,ridx.dateZ,ridx.dateP,ridx.t)"
                                class="uk-button  uk-button-small uk-text-bolder uk-text-nowrap"
                                :class="[ridx.dateP.length>0 ? 'uk-button-success' : 'uk-button-primary']"
                                data-toggle="modal" data-target="#myModal">
                        {{ridx.doc}}{{ridx.y}}
                    </button></span><br>
                        <span>Тип доставки:{{ridx.t}}</span><br>
                        <span>Дата погрузки: {{ridx.dateZ}}</span><br>
                        <span>Дата получения: {{ridx.dateP}}</span>
                    </td>


                    <td class="uk-visible@s v-cloak--hidden">
                        <span>{{idx+1}}</span>
                    </td>
                    <td class="uk-visible@s v-cloak--hidden">
                        <button @click="openWindowTracknumbers(ridx.opid,ridx.doc+ridx.y,ridx.d,ridx.dateZ,ridx.dateP,ridx.t)"
                                class="uk-button uk-button-small uk-text-bolder uk-text-nowrap"
                                :class="[ridx.dateP.length>0 ? 'uk-button-success' : 'uk-button-primary']"
                                data-toggle="modal" data-target="#myModal">

                            {{ridx.doc}}{{ridx.y}}
                        </button>
                    </td>
                    <td class="uk-visible@s v-cloak--hidden">
                        <span>{{ridx.t}}</span>
                    </td>
                    <td class="uk-visible@s v-cloak--hidden">
                        <span>{{ridx.dateZ}}</span>
                    </td>
                    <td class="uk-visible@s v-cloak--hidden">
                        <span>{{ridx.dateP}}</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="uk-alert-danger uk-margin uk-text-medium uk-text-left uk-padding-small" :hidden="!notFound">
                Ничего не найдено!
            </div>
            <!-- Модальное окно -->
            <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document" style="max-width: 1200px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <div class="modal-body">
                            <div>

                                № Документа: <span class="uk-text-bold">{{goodsData.n}}</span><br>
                                Наименование: <span class="uk-text-bold">{{goodsData.d}}</span><br>
                                Транспортная компания: <span class="uk-text-bold">{{goodsData.t}}</span><br>
                                Дата погрузки: <span class="uk-text-bold">{{goodsData.z}}</span><br>
                                Дата получения: <span class="uk-text-bold">{{goodsData.p}}</span>
                            </div>
                            <table class="uk-table uk-overflow-auto uk-table-divider uk-table-middle uk-table-striped">
                                <thead class="uk-visible@s v-cloak--hidden" :hidden="!goodsRows.length>0">
                                <tr>
                                    <th></th>
                                    <th>Внутренний код</th>
                                    <th>Код изготовителя</th>
                                    <th>Количество</th>
                                    <th>Отсканировано</th>
                                    <th>Груз на складе / № док</th>
                                    <th>Onhand B</th>
                                </tr>
                                </thead>
                                <tbody :hidden="!goodsRows.length>0">
                                <tr class="" v-for="(ridx, idx) in goodsRows[0]">

                                    <td class="uk-hidden@s ">
                                        <span class="uk-label uk-label-warning">{{idx+1}}</span>
                                        <span>Внутр. код: {{ridx.ic}}</span><br>
                                        <span>Код изготовителя: {{ridx.c}}</span><br>
                                        <span>Количество: {{ridx.q}}</span><br>
                                        <span>Отсканировано: {{ridx.s}}</span><br>
                                        <span>Груз на складе / № док: {{ridx.ohA}}</span><br>
                                        <span>Onhand B: {{ridx.ohB}}</span>
                                    </td>


                                    <!-- Large -->
                                    <td class="uk-visible@s v-cloak--hidden">
                                        <span>{{idx+1}}</span>
                                    </td>
                                    <td class="uk-visible@s v-cloak--hidden">
                                        {{ridx.ic}}
                                    </td>
                                    <td class="uk-visible@s v-cloak--hidden uk-table-shrink">
                                        {{ridx.c}}
                                    </td>
                                    <td class="uk-visible@s v-cloak--hidden">
                                        {{ridx.q}}
                                    </td>
                                    <td class="uk-visible@s v-cloak--hidden">
                                        {{ridx.s}}
                                    </td>
                                    <td class="uk-visible@s v-cloak--hidden">
                                        {{ridx.ohA}}
                                    </td>
                                    <td class="uk-visible@s v-cloak--hidden">
                                        {{ridx.ohB}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="uk-alert-danger uk-margin uk-text-medium uk-text-left uk-padding-small"
                                 :hidden="!notFoundGoods">
                                Ничего не найдено!
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var operid = '<?=$n?>';
    </script>
    <?php
    $script = <<< JS
    new Vue({
        el: '#onhandA',
        data: {
            tracknumber: '',
            notFound:false,
            notFoundGoods:false,
            animRow:false,
            hasErrorForm:false,
            application:[],   
            onhandARows:[],
            goodsRows:[],
            goodsData:[],
            oid:operid,
        },
        methods:{
            clearRowTracknumber:function(){
                this.onhandARows.splice(0,100);
                this.application=[];
            },
            clearRowGoods:function(){
                this.goodsRows=[];
                this.goodsData=[];
            },
            openWindowTracknumbers:function(a,n,d,z,p,t){
                //console.log(a);
                //console.log(a+"-888");   
                    this.clearRowGoods();
                    this.goodsData.n=n;
                    this.goodsData.d=d;
                    this.goodsData.z=z;
                    this.goodsData.p=p;
                    this.goodsData.t=t;
                    this.animRow=true;
                    
                    var urlJ;
                    urlJ='/getgoodsbyoidohc?o='+a;
                    axios
                    //.get('https://api.coindesk.com/v1/bpi/currentprice.json')
                    .get(urlJ)
                    .then(response => (
                            //this.info = response,   
                            this.animRow=false,
                            this.isErrorGoods(response.data), 
                            //console.log(JSON.stringify(response.data.res)),                                
                            this.goodsRows.push(response.data.res) 
                        )                       
                    );
                
            },
            checkTracknumbers:function(){                
                if(this.tracknumber.length >1){                      
                    this.animRow=true;
                    this.clearRowTracknumber();
                    var urlJ;
                    urlJ='/getonhandcbytrack?t='+this.tracknumber;
                    axios
                    //.get('https://api.coindesk.com/v1/bpi/currentprice.json')
                    .get(urlJ)
                    .then(response => (
                            //this.info = response,   
                            this.animRow=false,
                            this.isError(response.data), 
                            //console.log(JSON.stringify(response.data.res)),                                
                            this.onhandARows.push(response.data.res)              
                            
                        )                       
                    );
                }else{
                    //console.log(888);
                }
            },
            checkOid:function(oid){                
                if(oid.length >1){                      
                    this.animRow=true;
                    this.clearRowTracknumber();
                    var urlJ;
                    urlJ='/getonhandcoid?o='+this.oid;
                    axios
                    //.get('https://api.coindesk.com/v1/bpi/currentprice.json')
                    .get(urlJ)
                    .then(response => (
                            //this.info = response,   
                            this.animRow=false,
                            this.isError(response.data), 
                            //console.log(JSON.stringify(response.data.res)),                                
                            this.onhandARows.push(response.data.res)              
                            
                        )                       
                    );
                }
            },
            isError:function(a){
                if(a.error){
                    this.notFound=true;
                }else{
                    this.notFound=false;                       
                }
            },
            isErrorGoods:function(a){
                if(a.error){
                    this.notFoundGoods=true;
                }else{
                    this.notFoundGoods=false;                       
                }
            },
            getOnhends:function(){                                 
                this.animRow=true;
                this.notFound=false,
                this.notFoundGoods=false,
                this.clearRowTracknumber();
                var urlJ;
                urlJ='/getallonhandc';
                axios.get(urlJ)
                .then(response => (
                        this.animRow=false,
                        this.isError(response.data), 
                        //console.log(JSON.stringify(response.data.res)),                                
                        this.onhandARows.push(response.data.res)  
                    )                       
                );
            },
            
        },
        mounted() {
             if(this.oid.length>0) {
                 this.checkOid(this.oid);                                     
             }else{
                 this.getOnhends();     
             }             
        }
    });
JS;

    $this->registerJs($script, yii\web\View::POS_END);
}
?>
