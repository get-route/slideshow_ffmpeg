const state= {
    nameMother:" ",
    fontMother:null,
    fontSizeNameMother:35,
    colorNameMother:'#000000',
    topMotherPos:80,
    leftMotherPos:40,

}
const actions= {
    FONT_PROPERTY_MOTHER(context , payload){
        context.commit("SET_FONT_REDACTOR_MOTHER",payload)
    } ,
    NAME_PROPERTY_MOTHER(context , payload){
        context.commit("SET_NAMES_REDACTOR_MOTHER",payload)
    },

    FONT_SIZE_MOTHER(context, payload){
        context.commit("SET_SIZE_FONT_MOTHER", payload)
    } ,
    FONT_COLOR_MOTHER(context, payload){
        context.commit("SET_SIZE_COLOR_MOTHER", payload)
    } ,
    TOP_MOTHER(context, payload){
        context.commit("SET_TOP_MOTHER", payload)
    } ,
    LEFT_MOTHER(context, payload){
        context.commit("SET_LEFT_MOTHER", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_MOTHER(state) {
        return state.fontMother;
    } ,
    GET_NAMES_MOTHER(state) {
        return state.nameMother;
    },

    GET_FONT_SIZE_MOTHER(state){
        return state.fontSizeNameMother;
    } ,
    GET_FONT_COLOR_MOTHER(state){
        return state.colorNameMother;
    } ,
    GET_POS_LEFT_MOTHER(state){
        return state.leftMotherPos;
    } ,
    GET_POS_TOP_MOTHER(state){
        return state.topMotherPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_MOTHER:(state, payload)=>{
        state.fontMother = payload
    },
    SET_NAMES_REDACTOR_MOTHER:(state, payload)=>{
        state.nameMother = payload
    },
    SET_SIZE_FONT_MOTHER:(state, payload)=>{
        state.fontSizeNameMother = payload
    }  ,
    SET_SIZE_COLOR_MOTHER:(state, payload)=>{
        state.colorNameMother = payload
    }  ,
    SET_TOP_MOTHER:(state, payload)=>{
        state.topMotherPos = payload
    }  ,
    SET_LEFT_MOTHER:(state, payload)=>{
        state.leftMotherPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
