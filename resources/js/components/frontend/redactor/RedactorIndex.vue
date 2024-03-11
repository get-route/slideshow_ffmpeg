<template>
    <div>
    <div v-if="this.redactOpen==false" class="col-lg-12 text-center filter-block">
        <div  class="filter-block-redact">
            <button @click="this.redactOpen = true" class="btn btn-success mt-10">Открыть редактор</button>
        </div>
    </div>
        <div v-else class="filter-block-redact text-center">
                <button @click="this.redactOpen=false" class="btn btn-dark ">Закрыть редактор</button>
        </div>

    <div class="row" v-if="redactOpen==true">
        <div class="col-lg-5 col-md-5 col-5">
            <div class="row">

                <div class="col-lg-12">
                    <!-- Name-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY"
                        dispatchName="NAME_PROPERTY"
                        dispatchSizeFont = "FONT_SIZE"
                        dispatchColor = "FONT_COLOR"
                        dispatchTopPos ="TOP_NAME"
                        dispatchLeftPos ="LEFT_NAME"
                        :namesField = this.$store.state.fontRedact.name
                        :fontSizeField = this.$store.state.fontRedact.fontSizeName
                        :fontColorField=this.$store.state.fontRedact.colorName
                        :topPosition="this.$store.state.fontRedact.topName"
                        :leftPosition="this.$store.state.fontRedact.leftName"
                        :posField="this.$refs.nameField"
                        :PosImg = "this.$refs.fotodemo"
                        h2="Укажите имя..."
                        faqButton="'Укажите имя, которое будет использоваться при заголовки метрики. При желании можно нажмать на значок шестеренки и настроить текстовую область.'"
                        formPlaceholder="Задайте имя"
                    ></FontsController>
                    <!-- WatchBirthday - время рождения-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_WATCHBIRTHDAY"
                        dispatchName="NAME_PROPERTY_WATCHBIRTHDAY"
                        dispatchSizeFont = "FONT_SIZE_WATCHBIRTHDAY"
                        dispatchColor = "FONT_COLOR_WATCHBIRTHDAY"
                        dispatchTopPos ="TOP_WATCHBIRTHDAY"
                        dispatchLeftPos ="LEFT_WATCHBIRTHDAY"
                        :namesField = this.$store.state.WatchBirthday.nameWatchBirthday
                        :fontSizeField = this.$store.state.WatchBirthday.fontSizeNameWatchBirthday
                        :fontColorField=this.$store.state.WatchBirthday.colorNameWatchBirthday
                        :topPosition="this.$store.state.WatchBirthday.topWatchBirthdayPos"
                        :leftPosition="this.$store.state.WatchBirthday.leftWatchBirthdayPos"
                        :posField="this.$refs.WatchBirthdayField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Время рождения"
                        faqButton="При наличии данных можно указать время рождения онлайн"
                        formPlaceholder="Задайте время появления на свет"
                    ></FontsController>
                    <!--Birthday Дата рождения-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_BIRTHDAY"
                        dispatchName="NAME_PROPERTY_BIRTHDAY"
                        dispatchSizeFont = "FONT_SIZE_BIRTHDAY"
                        dispatchColor = "FONT_COLOR_BIRTHDAY"
                        dispatchTopPos ="TOP_BIRTHDAY"
                        dispatchLeftPos ="LEFT_BIRTHDAY"
                        :namesField = this.$store.state.Birthday.nameBirthday
                        :fontSizeField = this.$store.state.Birthday.fontSizeNameBirthday
                        :fontColorField=this.$store.state.Birthday.colorNameBirthday
                        :topPosition="this.$store.state.Birthday.topBirthdayPos"
                        :leftPosition="this.$store.state.Birthday.leftBirthdayPos"
                        :posField="this.$refs.BirthdayField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Дата рождения"
                        faqButton="Задайте дату рождения в любом удобном Вам формате"
                        formPlaceholder="Задайте дату рождения"
                    ></FontsController>

                    <!-- Week -Неделя-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_WEEK"
                        dispatchName="NAME_PROPERTY_WEEK"
                        dispatchSizeFont = "FONT_SIZE_WEEK"
                        dispatchColor = "FONT_COLOR_WEEK"
                        dispatchTopPos ="TOP_WEEK"
                        dispatchLeftPos ="LEFT_WEEK"
                        :namesField = this.$store.state.Week.nameWeek
                        :fontSizeField = this.$store.state.Week.fontSizeNameWeek
                        :fontColorField=this.$store.state.Week.colorNameWeek
                        :topPosition="this.$store.state.Week.topWeekPos"
                        :leftPosition="this.$store.state.Week.leftWeekPos"
                        :posField="this.$refs.WeekField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Неделя"
                        faqButton="Можно указать данные по номеру недели"
                        formPlaceholder="Задайте неделю"
                    ></FontsController>
                    <!-- Weight - Вес-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_WEIGHT"
                        dispatchName="NAME_PROPERTY_WEIGHT"
                        dispatchSizeFont = "FONT_SIZE_WEIGHT"
                        dispatchColor = "FONT_COLOR_WEIGHT"
                        dispatchTopPos ="TOP_WEIGHT"
                        dispatchLeftPos ="LEFT_WEIGHT"
                        :namesField = this.$store.state.Weight.nameWeight
                        :fontSizeField = this.$store.state.Weight.fontSizeNameWeight
                        :fontColorField=this.$store.state.Weight.colorNameWeight
                        :topPosition="this.$store.state.Weight.topWeightPos"
                        :leftPosition="this.$store.state.Weight.leftWeightPos"
                        :posField="this.$refs.WeightField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Вес"
                        faqButton="Параметры роста и веса используются во всех метриках"
                        formPlaceholder="Задайте вес"
                    ></FontsController>
                    <!-- Height - рост-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_HEIGHT"
                        dispatchName="NAME_PROPERTY_HEIGHT"
                        dispatchSizeFont = "FONT_SIZE_HEIGHT"
                        dispatchColor = "FONT_COLOR_HEIGHT"
                        dispatchTopPos ="TOP_HEIGHT"
                        dispatchLeftPos ="LEFT_HEIGHT"
                        :namesField = this.$store.state.Height.nameHeight
                        :fontSizeField = this.$store.state.Height.fontSizeNameHeight
                        :fontColorField=this.$store.state.Height.colorNameHeight
                        :topPosition="this.$store.state.Height.topHeightPos"
                        :leftPosition="this.$store.state.Height.leftHeightPos"
                        :posField="this.$refs.HeightField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Параметры роста"
                        faqButton="При наличии соотвествующих полей можно также задавать параметры роста ребенка"
                        formPlaceholder="Укажите рост"
                    ></FontsController>
                    <!-- Child пол ребенка-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_CHILD"
                        dispatchName="NAME_PROPERTY_CHILD"
                        dispatchSizeFont = "FONT_SIZE_CHILD"
                        dispatchColor = "FONT_COLOR_CHILD"
                        dispatchTopPos ="TOP_CHILD"
                        dispatchLeftPos ="LEFT_CHILD"
                        :namesField = this.$store.state.ChildFonts.nameChild
                        :fontSizeField = this.$store.state.ChildFonts.fontSizeNameChild
                        :fontColorField=this.$store.state.ChildFonts.colorNameChild
                        :topPosition="this.$store.state.ChildFonts.topChildPos"
                        :leftPosition="this.$store.state.ChildFonts.leftChildPos"
                        :posField="this.$refs.ChildField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Укажите пол..."
                        faqButton="В соответствующем поле задайте пол. В некоторых метриках он требуется."
                        formPlaceholder="Задайте пол"
                    ></FontsController>

                    <!-- Mother - мать-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_MOTHER"
                        dispatchName="NAME_PROPERTY_MOTHER"
                        dispatchSizeFont = "FONT_SIZE_MOTHER"
                        dispatchColor = "FONT_COLOR_MOTHER"
                        dispatchTopPos ="TOP_MOTHER"
                        dispatchLeftPos ="LEFT_MOTHER"
                        :namesField = this.$store.state.Mother.nameMother
                        :fontSizeField = this.$store.state.Mother.fontSizeNameMother
                        :fontColorField=this.$store.state.Mother.colorNameMother
                        :topPosition="this.$store.state.Mother.topMotherPos"
                        :leftPosition="this.$store.state.Mother.leftMotherPos"
                        :posField="this.$refs.MotherField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Имя матери"
                        faqButton="Можно указывать имя матери при желании"
                        formPlaceholder="Задайте имя матери"
                    ></FontsController>
                    <!-- Father - Отец-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_FATHER"
                        dispatchName="NAME_PROPERTY_FATHER"
                        dispatchSizeFont = "FONT_SIZE_FATHER"
                        dispatchColor = "FONT_COLOR_FATHER"
                        dispatchTopPos ="TOP_FATHER"
                        dispatchLeftPos ="LEFT_FATHER"
                        :namesField = this.$store.state.Father.nameFather
                        :fontSizeField = this.$store.state.Father.fontSizeNameFather
                        :fontColorField=this.$store.state.Father.colorNameFather
                        :topPosition="this.$store.state.Father.topFatherPos"
                        :leftPosition="this.$store.state.Father.leftFatherPos"
                        :posField="this.$refs.FatherField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Имя отца"
                        faqButton="В некоторых метриках можно дополнительно указывать имена родителей"
                        formPlaceholder="Задайте имя отца"
                    ></FontsController>
                    <!-- Brother братья-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_BROTHER"
                        dispatchName="NAME_PROPERTY_BROTHER"
                        dispatchSizeFont = "FONT_SIZE_BROTHER"
                        dispatchColor = "FONT_COLOR_BROTHER"
                        dispatchTopPos ="TOP_BROTHER"
                        dispatchLeftPos ="LEFT_BROTHER"
                        :namesField = this.$store.state.Brother.nameBrother
                        :fontSizeField = this.$store.state.Brother.fontSizeNameBrother
                        :fontColorField=this.$store.state.Brother.colorNameBrother
                        :topPosition="this.$store.state.Brother.topBrotherPos"
                        :leftPosition="this.$store.state.Brother.leftBrotherPos"
                        :posField="this.$refs.BrotherField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Имена братьев"
                        faqButton="При желании можно задать имена братьев ребенка"
                        formPlaceholder="Имена братьев по желанию"
                    ></FontsController>
                    <!-- Sister - сестра-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_SISTER"
                        dispatchName="NAME_PROPERTY_SISTER"
                        dispatchSizeFont = "FONT_SIZE_SISTER"
                        dispatchColor = "FONT_COLOR_SISTER"
                        dispatchTopPos ="TOP_SISTER"
                        dispatchLeftPos ="LEFT_SISTER"
                        :namesField = this.$store.state.Sister.nameSister
                        :fontSizeField = this.$store.state.Sister.fontSizeNameSister
                        :fontColorField=this.$store.state.Sister.colorNameSister
                        :topPosition="this.$store.state.Sister.topSisterPos"
                        :leftPosition="this.$store.state.Sister.leftSisterPos"
                        :posField="this.$refs.SisterField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Имя сестры"
                        faqButton="'Вы можете указать имя сестры"
                        formPlaceholder="Задайте имя сестры"
                    ></FontsController>

                    <!-- Town - город-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_TOWN"
                        dispatchName="NAME_PROPERTY_TOWN"
                        dispatchSizeFont = "FONT_SIZE_TOWN"
                        dispatchColor = "FONT_COLOR_TOWN"
                        dispatchTopPos ="TOP_TOWN"
                        dispatchLeftPos ="LEFT_TOWN"
                        :namesField = this.$store.state.Town.nameTown
                        :fontSizeField = this.$store.state.Town.fontSizeNameTown
                        :fontColorField=this.$store.state.Town.colorNameTown
                        :topPosition="this.$store.state.Town.topTownPos"
                        :leftPosition="this.$store.state.Town.leftTownPos"
                        :posField="this.$refs.TownField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Город рождения"
                        faqButton="При желании можно также указывать город рождения"
                        formPlaceholder="Задайте город"
                    ></FontsController>
                    <!-- Horo - знак зодиака-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_HORO"
                        dispatchName="NAME_PROPERTY_HORO"
                        dispatchSizeFont = "FONT_SIZE_HORO"
                        dispatchColor = "FONT_COLOR_HORO"
                        dispatchTopPos ="TOP_HORO"
                        dispatchLeftPos ="LEFT_HORO"
                        :namesField = this.$store.state.Horo.nameHoro
                        :fontSizeField = this.$store.state.Horo.fontSizeNameHoro
                        :fontColorField=this.$store.state.Horo.colorNameHoro
                        :topPosition="this.$store.state.Horo.topHoroPos"
                        :leftPosition="this.$store.state.Horo.leftHoroPos"
                        :posField="this.$refs.HoroField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Знак зодиака"
                        faqButton="В некоторых метриках также указываются знаки зодиака"
                        formPlaceholder="Задайте знаки зодиака"
                    ></FontsController>
                    <!-- YEARSNAME - назв года по вост.календарю-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_YEARSNAME"
                        dispatchName="NAME_PROPERTY_YEARSNAME"
                        dispatchSizeFont = "FONT_SIZE_YEARSNAME"
                        dispatchColor = "FONT_COLOR_YEARSNAME"
                        dispatchTopPos ="TOP_YEARSNAME"
                        dispatchLeftPos ="LEFT_YEARSNAME"
                        :namesField = this.$store.state.YearsName.nameYearsName
                        :fontSizeField = this.$store.state.YearsName.fontSizeNameYearsName
                        :fontColorField=this.$store.state.YearsName.colorNameYearsName
                        :topPosition="this.$store.state.YearsName.topYearsNamePos"
                        :leftPosition="this.$store.state.YearsName.leftYearsNamePos"
                        :posField="this.$refs.YearsNameField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Название года"
                        faqButton="Можно дополнительно указывать навзвание года по вост.календарю"
                        formPlaceholder="Задайте название года"
                    ></FontsController>

                    <!-- AddInfo Доп информация-->
                    <FontsController
                        dispatchFont="FONT_PROPERTY_ADDINFO"
                        dispatchName="NAME_PROPERTY_ADDINFO"
                        dispatchSizeFont = "FONT_SIZE_ADDINFO"
                        dispatchColor = "FONT_COLOR_ADDINFO"
                        dispatchTopPos ="TOP_ADDINFO"
                        dispatchLeftPos ="LEFT_ADDINFO"
                        :namesField = this.$store.state.AddInfo.nameAddInfo
                        :fontSizeField = this.$store.state.AddInfo.fontSizeNameAddInfo
                        :fontColorField=this.$store.state.AddInfo.colorNameAddInfo
                        :topPosition="this.$store.state.AddInfo.topAddInfoPos"
                        :leftPosition="this.$store.state.AddInfo.leftAddInfoPos"
                        :posField="this.$refs.AddInfoField"
                        :PosImg = "this.$refs.fotodemo"

                        h2="Дополнительная информация"
                        faqButton="'При желании можно указать любую доп.информацию'"
                        formPlaceholder="Укажите доп информацию"
                    ></FontsController>
                </div>

            </div>
        </div>

        <!-- #OutPut information input field section# -->
        <div class="col-lg-7 col-md-7 col-7 text-center " >
            <div class="col-lg-12">
                <SaveComponent
                    :imgNatParams="this.$refs.fotodemo"
                    :userid="userid"
                    :urlproperty="urlmetric"
                ></SaveComponent>
            </div>
            <div class="col-lg-12 sticky-top mt-6">

            <img :src="'/storage/metric/' + startimg" class="foto_demo" ref="fotodemo">
            <!--            Name - поле для имени-->
            <div class="col-lg-12 text-center">
                <div ref="nameField"
                     :style="'font-family:'+this.$store.state.fontRedact.font+';font-size:' + this.$store.state.fontRedact.fontSizeName + 'px'+';'+ 'color:' + this.$store.state.fontRedact.colorName+ ';position: absolute; left:'+ this.$store.state.fontRedact.leftName+'px; top:'+this.$store.state.fontRedact.topName+'px'">
                    {{this.$store.state.fontRedact.name}}

                </div>

            </div>
            <!--            Child - поле для пола ребенка-->
            <div class="col-lg-12 text-center">
                <div ref="ChildField"
                     :style="'font-family:'+this.$store.state.ChildFonts.fontChild+';font-size:' + this.$store.state.ChildFonts.fontSizeNameChild + 'px'+';'+ 'color:' + this.$store.state.ChildFonts.colorNameChild+ ';position: absolute; left:'+ this.$store.state.ChildFonts.leftChildPos+'px; top:'+this.$store.state.ChildFonts.topChildPos+'px'">
                    {{this.$store.state.ChildFonts.nameChild}}

                </div>

            </div>
            <!--            Brother - поле для указания братьев-->
            <div class="col-lg-12 text-center">
                <div ref="BrotherField"
                     :style="'font-family:'+this.$store.state.Brother.fontBrother+';font-size:' + this.$store.state.Brother.fontSizeNameBrother + 'px'+';'+ 'color:' + this.$store.state.Brother.colorNameBrother+ ';position: absolute; left:'+ this.$store.state.Brother.leftBrotherPos+'px; top:'+this.$store.state.Brother.topBrotherPos+'px'">
                    {{this.$store.state.Brother.nameBrother}}

                </div>

            </div>
            <!--            AddInfo - поле для указания информации-->
            <div class="col-lg-12 text-center">
                <div ref="AddInfoField"
                     :style="'font-family:'+this.$store.state.AddInfo.fontAddInfo+';font-size:' + this.$store.state.AddInfo.fontSizeNameAddInfo + 'px'+';'+ 'color:' + this.$store.state.AddInfo.colorNameAddInfo+ ';position: absolute; left:'+ this.$store.state.AddInfo.leftAddInfoPos+'px; top:'+this.$store.state.AddInfo.topAddInfoPos+'px'">
                    {{this.$store.state.AddInfo.nameAddInfo}}

                </div>
            </div>
            <!--            Birthday - поле для указания даты рождения-->
            <div class="col-lg-12 text-center">
                    <div ref="BirthdayField"
                         :style="'font-family:'+this.$store.state.Birthday.fontBirthday+';font-size:' + this.$store.state.Birthday.fontSizeNameBirthday + 'px'+';'+ 'color:' + this.$store.state.Birthday.colorNameBirthday+ ';position: absolute; left:'+ this.$store.state.Birthday.leftBirthdayPos+'px; top:'+this.$store.state.Birthday.topBirthdayPos+'px'">
                        {{this.$store.state.Birthday.nameBirthday}}
                    </div>

                </div>
                <!--            Father - поле для указания отца-->
            <div class="col-lg-12 text-center">
                    <div ref="FatherField"
                         :style="'font-family:'+this.$store.state.Father.fontFather+';font-size:' + this.$store.state.Father.fontSizeNameFather + 'px'+';'+ 'color:' + this.$store.state.Father.colorNameFather+ ';position: absolute; left:'+ this.$store.state.Father.leftFatherPos+'px; top:'+this.$store.state.Father.topFatherPos+'px'">
                        {{this.$store.state.Father.nameFather}}

                    </div>

                </div>
                <!--            Height - поле для указания роста-->
            <div class="col-lg-12 text-center">
                    <div ref="HeightField"
                         :style="'font-family:'+this.$store.state.Height.fontHeight+';font-size:' + this.$store.state.Height.fontSizeNameHeight + 'px'+';'+ 'color:' + this.$store.state.Height.colorNameHeight+ ';position: absolute; left:'+ this.$store.state.Height.leftHeightPos+'px; top:'+this.$store.state.Height.topHeightPos+'px'">
                        {{this.$store.state.Height.nameHeight}}

                    </div>

                </div>
                <!--            Horo - поле для указания знака задиака-->
            <div class="col-lg-12 text-center">
                    <div ref="HoroField"
                         :style="'font-family:'+this.$store.state.Horo.fontHoro+';font-size:' + this.$store.state.Horo.fontSizeNameHoro + 'px'+';'+ 'color:' + this.$store.state.Horo.colorNameHoro+ ';position: absolute; left:'+ this.$store.state.Horo.leftHoroPos+'px; top:'+this.$store.state.Horo.topHoroPos+'px'">
                        {{this.$store.state.Horo.nameHoro}}

                    </div>

                </div>
                <!--            Mother - поле для указания матери-->
            <div class="col-lg-12 text-center">
                    <div ref="MotherField"
                         :style="'font-family:'+this.$store.state.Mother.fontMother+';font-size:' + this.$store.state.Mother.fontSizeNameMother + 'px'+';'+ 'color:' + this.$store.state.Mother.colorNameMother+ ';position: absolute; left:'+ this.$store.state.Mother.leftMotherPos+'px; top:'+this.$store.state.Mother.topMotherPos+'px'">
                        {{this.$store.state.Mother.nameMother}}

                    </div>

                </div>
                <!--            Sister - поле для указания систер-->
            <div class="col-lg-12 text-center">
                    <div ref="SisterField"
                         :style="'font-family:'+this.$store.state.Sister.fontSister+';font-size:' + this.$store.state.Sister.fontSizeNameSister + 'px'+';'+ 'color:' + this.$store.state.Sister.colorNameSister+ ';position: absolute; left:'+ this.$store.state.Sister.leftSisterPos+'px; top:'+this.$store.state.Sister.topSisterPos+'px'">
                        {{this.$store.state.Sister.nameSister}}

                    </div>

                </div>
                <!--            Town - поле для указания города-->
            <div class="col-lg-12 text-center">
                    <div ref="TownField"
                         :style="'font-family:'+this.$store.state.Town.fontTown+';font-size:' + this.$store.state.Town.fontSizeNameTown + 'px'+';'+ 'color:' + this.$store.state.Town.colorNameTown+ ';position: absolute; left:'+ this.$store.state.Town.leftTownPos+'px; top:'+this.$store.state.Town.topTownPos+'px'">
                        {{this.$store.state.Town.nameTown}}

                    </div>

                </div>
                <!--            WatchBirthday - поле для указания времени рождения-->
            <div class="col-lg-12 text-center">
                    <div ref="WatchBirthdayField"
                         :style="'font-family:'+this.$store.state.WatchBirthday.fontWatchBirthday+';font-size:' + this.$store.state.WatchBirthday.fontSizeNameWatchBirthday + 'px'+';'+ 'color:' + this.$store.state.WatchBirthday.colorNameWatchBirthday+ ';position: absolute; left:'+ this.$store.state.WatchBirthday.leftWatchBirthdayPos+'px; top:'+this.$store.state.WatchBirthday.topWatchBirthdayPos+'px'">
                        {{this.$store.state.WatchBirthday.nameWatchBirthday}}

                    </div>

                </div>
                <!--            Week - поле для указания недели рождения-->
            <div class="col-lg-12 text-center">
                    <div ref="WeekField"
                         :style="'font-family:'+this.$store.state.Week.fontWeek+';font-size:' + this.$store.state.Week.fontSizeNameWeek + 'px'+';'+ 'color:' + this.$store.state.Week.colorNameWeek+ ';position: absolute; left:'+ this.$store.state.Week.leftWeekPos+'px; top:'+this.$store.state.Week.topWeekPos+'px'">
                        {{this.$store.state.Week.nameWeek}}

                    </div>

                </div>
                <!--            Weight - поле для указания веса-->
            <div class="col-lg-12 text-center">
                    <div ref="WeightField"
                         :style="'font-family:'+this.$store.state.Weight.fontWeight+';font-size:' + this.$store.state.Weight.fontSizeNameWeight + 'px'+';'+ 'color:' + this.$store.state.Weight.colorNameWeight+ ';position: absolute; left:'+ this.$store.state.Weight.leftWeightPos+'px; top:'+this.$store.state.Weight.topWeightPos+'px'">
                        {{this.$store.state.Weight.nameWeight}}

                    </div>

                </div>
                <!--            YearsName - поле для указания названия года-->
            <div class="col-lg-12 text-center">
                    <div ref="YearsNameField"
                         :style="'font-family:'+this.$store.state.YearsName.fontYearsName+';font-size:' + this.$store.state.YearsName.fontSizeNameYearsName + 'px'+';'+ 'color:' + this.$store.state.YearsName.colorNameYearsName+ ';position: absolute; left:'+ this.$store.state.YearsName.leftYearsNamePos+'px; top:'+this.$store.state.YearsName.topYearsNamePos+'px'">
                        {{this.$store.state.YearsName.nameYearsName}}

                    </div>

                </div>
<!--                Canvas download button. Кнопка и логика загрузки для канваса. Чтобы наносить надписи на изображение.-->


        <!-- #/END OutPut information input field section# -->
        </div>
    </div>

    </div>
    </div>
</template>

<script>
    import FontsController from "./fonts/FontsController.vue";
    import SaveComponent from "./save/SaveComponent.vue";
    export default {
        props:['startimg','userid','urlmetric'],
        name: "Redactor-Index",
        components: {SaveComponent, FontsController},

    data(){
          return{
              redactOpen:false,
          }
        },

    }
</script>

<style>
    .bounce-enter-active {
        animation: bounce-in .5s;
    }
    .bounce-leave-active {
        animation: bounce-in .5s reverse;
    }
    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    }
    .hr{
        border-bottom: #190b34 dashed 2px;
        color: #190b34;
        font-family: "Segoe Script";
        opacity: 70%;
    }
    .step_botton{
        margin: 2px;
    }
    .foto_demo{
        width: 60%;
        height: auto;
    }
    .foto_demo img{


    }
    .foto_demo img:hover{
        background-color: #0b2e13;
    }
    .filter-block{
        background-color: #3f4b50;
        box-shadow: #414b50 4px 4px 4px 4px;
        height: 300px;
        z-index: 0;
    }
    .filter-block:hover{
        background-color: #49575c;
        box-shadow: #414b50 4px 4px 4px 4px;

    }
    .filter-block-redact button{
        z-index:2;

    }
</style>
