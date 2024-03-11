const state= {
    name:" ",
    font:null,
    fontSizeName:35,
    colorName:'#000000',
    topName:0,
    leftName: 0,


}
const actions= {
    FONT_PROPERTY(context , payload){
        context.commit("SET_FONT_REDACTOR",payload)
    } ,
    NAME_PROPERTY(context , payload){
        context.commit("SET_NAMES_REDACTOR",payload)
    },

    FONT_SIZE(context, payload){
        context.commit("SET_SIZE_FONT", payload)
    } ,
    FONT_COLOR(context, payload){
        context.commit("SET_SIZE_COLOR", payload)
    } ,
    TOP_NAME(context, payload){
        context.commit("SET_TOP_NAME", payload)
    } ,
    LEFT_NAME(context, payload){
        context.commit("SET_LEFT_NAME", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT(state) {
        return state.font;
    } ,
    GET_NAMES(state) {
        return state.name;
    },

    GET_FONT_SIZE(state){
        return state.fontSizeName;
    } ,
    GET_FONT_COLOR(state){
        return state.colorName;
    } ,
    GET_TOP_NAME(state){
        return state.topName;
    } ,
    GET_LEFT_NAME(state){
        return state.leftName;
    } ,



}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR:(state, payload)=>{
        state.font = payload
    },
    SET_NAMES_REDACTOR:(state, payload)=>{
        state.name = payload
    },
    SET_SIZE_FONT:(state, payload)=>{
        state.fontSizeName = payload
}  ,
    SET_SIZE_COLOR:(state, payload)=>{
        state.colorName = payload
}  ,
    SET_TOP_NAME:(state, payload)=>{
        state.topName = payload
}  ,
    SET_LEFT_NAME:(state, payload)=>{
        state.leftName = payload
}  ,

}
export default {state, actions, getters, mutations}
