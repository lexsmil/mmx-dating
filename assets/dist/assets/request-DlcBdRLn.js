import{i as g,a as C}from"./vesp-_75zYqsD.js";import{k as w,F as $,L as A,v as F,X as R}from"./vue-bootstrap-DcD6sp94.js";import{c as o}from"./api-BRZhL1mr.js";import{f as h,a as L}from"./mgr-ByBqnCpz.js";import{d as M,z as c,A as i,g as N,o as S,c as T,q as e,w as l,u as s,e as U,m as X}from"./vue-CpDYiDUc.js";import"./vue-router-C64HCaoO.js";import"./vue-datepicker-Cd25zXUy.js";const z="mgr/requests",K=M({__name:"request",setup(D){const u=c(),f=i(()=>[{route:{name:"request-create"},icon:"plus",title:o("models.request.title_one")}]),p=i(()=>[{key:"id",label:o("models.request.id"),sortable:!0},{key:"name",label:o("models.request.name"),sortable:!0},{key:"sex",label:o("models.request.sex"),sortable:!0,formatter:h},{key:"age",label:o("models.request.age"),sortable:!0},{key:"phone",label:o("models.request.phone"),sortable:!0},{key:"created_at",label:o("models.event.created_at"),sortable:!0,formatter:L}]),_=i(()=>{var t;return[{route:{name:"request-id-edit"},icon:"edit",title:o("actions.edit")},{function:(t=u.value)==null?void 0:t.delete,icon:"times",title:o("actions.delete"),variant:"danger"}]}),a=c({query:"",event_id:null,sex:null});function b(t){return t&&!t.active?"inactive":""}function v(){a.value.query="",a.value.event_id=null,a.value.sex=null}return(t,n)=>{const q=g,m=w,d=$,x=A,k=F,y=R,V=N("RouterView"),B=C;return S(),T("div",null,[e(y,{class:"mb-3"},{default:l(()=>[e(d,null,{default:l(()=>[e(m,{label:t.$t("models.event.title_one")},{default:l(()=>[e(q,{modelValue:s(a).event_id,"onUpdate:modelValue":n[0]||(n[0]=r=>s(a).event_id=r),url:"mgr/events",onChange:n[1]||(n[1]=r=>s(u).refresh())},null,8,["modelValue"])]),_:1},8,["label"])]),_:1}),e(d,null,{default:l(()=>[e(m,{label:t.$t("models.request.sex")},{default:l(()=>[e(x,{modelValue:s(a).sex,"onUpdate:modelValue":n[2]||(n[2]=r=>s(a).sex=r),default:null,options:[{value:null,text:t.$t("models.request.sex")},{value:0,text:t.$t("models.request.sex.man")},{value:1,text:t.$t("models.request.sex.woman")}],required:""},null,8,["modelValue","options"])]),_:1},8,["label"])]),_:1}),e(d,null,{default:l(()=>[e(m,{label:"_"},{default:l(()=>[e(k,{variant:"primary",onClick:v},{default:l(()=>[U(" Сбросить фильтры ")]),_:1})]),_:1})]),_:1})]),_:1}),e(B,X({ref_key:"table",ref:u},{url:z,fields:s(p),headerActions:s(f),tableActions:s(_),filters:s(a),rowClass:b}),{default:l(()=>[e(V)]),_:1},16)])}}});export{K as default};