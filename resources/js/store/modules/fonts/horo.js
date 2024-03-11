const state= {
    nameHoro:" ",
    fontHoro:null,
    fontSizeNameHoro:35,
    colorNameHoro:'#000000',
    topHoroPos:80,
    leftHoroPos:80,

}
const actions= {
    FONT_PROPERTY_HORO(context , payload){
        context.commit("SET_FONT_REDACTOR_HORO",payload)
    } ,
    NAME_PROPERTY_HORO(context , payload){
        context.commit("SET_NAMES_REDACTOR_HORO",payload)
    },

    FONT_SIZE_HORO(context, payload){
        context.commit("SET_SIZE_FONT_HORO", payload)
    } ,
    FONT_COLOR_HORO(context, payload){
        context.commit("SET_SIZE_COLOR_HORO", payload)
    } ,
    TOP_HORO(context, payload){
        context.commit("SET_TOP_HORO", payload)
    } ,
    LEFT_HORO(context, payload){
        context.commit("SET_LEFT_HORO", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_HORO(state) {
        return state.fontHoro;
    } ,
    GET_NAMES_HORO(state) {
        return state.nameHoro;
    },

    GET_FONT_SIZE_HORO(state){
        return state.fontSizeNameHoro;
    } ,
    GET_FONT_COLOR_HORO(state){
        return state.colorNameHoro;
    } ,
    GET_POS_LEFT_HORO(state){
        return state.leftHoroPos;
    } ,
    GET_POS_TOP_HORO(state){
        return state.topHoroPos;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_HORO:(state, payload)=>{
        state.fontHoro = payload
    },
    SET_NAMES_REDACTOR_HORO:(state, payload)=>{
        state.nameHoro = payload
    },
    SET_SIZE_FONT_HORO:(state, payload)=>{
        state.fontSizeNameHoro = payload
    }  ,
    SET_SIZE_COLOR_HORO:(state, payload)=>{
        state.colorNameHoro = payload
    }  ,
    SET_TOP_HORO:(state, payload)=>{
        state.topHoroPos = payload
    }  ,
    SET_LEFT_HORO:(state, payload)=>{
        state.leftHoroPos = payload
    }  ,

}
export default {state, actions, getters, mutations}
