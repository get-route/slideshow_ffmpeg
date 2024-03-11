const state= {
    nameYearsName:" ",
    fontYearsName:null,
    fontSizeNameYearsName:35,
    colorNameYearsName:'#000000',
    topYearsNamePos:120,
    leftYearsNamePos:80,

}
const actions= {
    FONT_PROPERTY_YEARSNAME(context , payload){
        context.commit("SET_FONT_REDACTOR_YEARSNAME",payload)
    } ,
    NAME_PROPERTY_YEARSNAME(context , payload){
        context.commit("SET_NAMES_REDACTOR_YEARSNAME",payload)
    },

    FONT_SIZE_YEARSNAME(context, payload){
        context.commit("SET_SIZE_FONT_YEARSNAME", payload)
    } ,
    FONT_COLOR_YEARSNAME(context, payload){
        context.commit("SET_SIZE_COLOR_YEARSNAME", payload)
    } ,
    TOP_YEARSNAME(context, payload){
        context.commit("SET_TOP_YEARSNAME", payload)
    } ,
    LEFT_YEARSNAME(context, payload){
        context.commit("SET_LEFT_YEARSNAME", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_YEARSNAME(state) {
        return state.fontYearsName;
    } ,
    GET_NAMES_YEARSNAME(state) {
        return state.nameYearsName;
    },

    GET_FONT_SIZE_YEARSNAME(state){
        return state.fontSizeNameYearsName;
    } ,
    GET_FONT_COLOR_YEARSNAME(state){
        return state.colorNameYearsName;
    } ,
    GET_POS_LEFT_YEARSNAME(state){
        return state.leftYearsNamePos;
    } ,
    GET_POS_TOP_YEARSNAME(state){
        return state.topYearsNamePos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_YEARSNAME:(state, payload)=>{
        state.fontYearsName = payload
    },
    SET_NAMES_REDACTOR_YEARSNAME:(state, payload)=>{
        state.nameYearsName = payload
    },
    SET_SIZE_FONT_YEARSNAME:(state, payload)=>{
        state.fontSizeNameYearsName = payload
    }  ,
    SET_SIZE_COLOR_YEARSNAME:(state, payload)=>{
        state.colorNameYearsName = payload
    }  ,
    SET_TOP_YEARSNAME:(state, payload)=>{
        state.topYearsNamePos = payload
    }  ,
    SET_LEFT_YEARSNAME:(state, payload)=>{
        state.leftYearsNamePos = payload
    }  ,

}
export default {state, actions, getters, mutations}
