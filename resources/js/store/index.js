import test2 from "./modules/test2.js";
import fontsRedact from "./modules/fonts/fonts.js";
import ChildFonts from "./modules/fonts/children.js";
import {createStore} from "vuex";
import brother from "./modules/fonts/brother.js";
import addInfo from "./modules/fonts/addInfo.js";
import birthday from "./modules/fonts/birthday.js";
import father from "./modules/fonts/father.js";
import height from "./modules/fonts/height.js";
import horo from "./modules/fonts/horo.js";
import mother from "./modules/fonts/mother.js";
import sister from "./modules/fonts/sister.js";
import town from "./modules/fonts/town.js";
import watchBirthday from "./modules/fonts/watchBirthday.js";
import week from "./modules/fonts/week.js";
import weight from "./modules/fonts/weight.js";
import yearsName from "./modules/fonts/yearsName.js";

export default createStore( {
    state: {
        //Набор шрифтов. fontAr.name = .class
        fontAr : [
            // 'segoe-font',
            // 'verdana-font',
            // 'monotype-corsiva',
            'Segoe Script',
            'Verdana',
            'Monotype Corsiva',
        ],
        start:'Начинаю редактирование файла метрики',
        progress:'Наношу текст',
        progressTwo:'Формирую заголовки',
        progressThree:'Закрашиваю необходимые области',
        finish:'Метрика готова к скачиванию! Спасибо за ожидание...',
    },
    actions: {
        PRE_START(payload, context){
            context.commit('SET_PRESTART',payload)
        }
    },
//Получают данные от хранилища. Писать заглавными буквами
    getters : {
        GET_PRESTART(state){
            return state.prestart
        },
        GET_START(state){
            return state.start
        },
        GET_PROGRESS(state){
            return state.progress
        },
        GET_PROGRESSTWO(state){
            return state.progressTwo
        },
        GET_PROGRESSTHREE(state){
            return state.progressThree
        },
        GET_FINISH(state){
            return state.finish
        },






    },
//Для установки нужных данных в хранилище. Идет как commit
    mutations : {
        SET_PRESTART(state,payload){
            state.prestart = payload
        }
    },

    modules:{
        tests:test2,
        fontRedact:fontsRedact,
        ChildFonts:ChildFonts,
        Brother:brother,
        AddInfo:addInfo,
        Birthday:birthday,
        Father:father,
        Height:height,
        Horo:horo,
        Mother:mother,
        Sister:sister,
        Town:town,
        WatchBirthday:watchBirthday,
        Week:week,
        Weight:weight,
        YearsName:yearsName,
    },
})


