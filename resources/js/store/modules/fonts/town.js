const state= {
    nameTown:" ",
    fontTown:null,
    fontSizeNameTown:35,
    colorNameTown:'#000000',
    topTownPos:40,
    leftTownPos:80,

}
const actions= {
    FONT_PROPERTY_TOWN(context , payload){
        context.commit("SET_FONT_REDACTOR_TOWN",payload)
    } ,
    NAME_PROPERTY_TOWN(context , payload){
        context.commit("SET_NAMES_REDACTOR_TOWN",payload)
    },

    FONT_SIZE_TOWN(context, payload){
        context.commit("SET_SIZE_FONT_TOWN", payload)
    } ,
    FONT_COLOR_TOWN(context, payload){
        context.commit("SET_SIZE_COLOR_TOWN", payload)
    } ,
    TOP_TOWN(context, payload){
        context.commit("SET_TOP_TOWN", payload)
    } ,
    LEFT_TOWN(context, payload){
        context.commit("SET_LEFT_TOWN", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_TOWN(state) {
        return state.fontTown;
    } ,
    GET_NAMES_TOWN(state) {
        return state.nameTown;
    },

    GET_FONT_SIZE_TOWN(state){
        return state.fontSizeNameTown;
    } ,
    GET_FONT_COLOR_TOWN(state){
        return state.colorNameTown;
    } ,
    GET_POS_LEFT_TOWN(state){
        return state.leftTownPos;
    } ,
    GET_POS_TOP_TOWN(state){
        return state.topTownPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_TOWN:(state, payload)=>{
        state.fontTown = payload
    },
    SET_NAMES_REDACTOR_TOWN:(state, payload)=>{
        state.nameTown = payload
    },
    SET_SIZE_FONT_TOWN:(state, payload)=>{
        state.fontSizeNameTown = payload
    }  ,
    SET_SIZE_COLOR_TOWN:(state, payload)=>{
        state.colorNameTown = payload
    }  ,
    SET_TOP_TOWN:(state, payload)=>{
        state.topTownPos = payload
    }  ,
    SET_LEFT_TOWN:(state, payload)=>{
        state.leftTownPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
