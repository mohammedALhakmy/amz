import{T as d,o as l,f as u,w as i,a,u as s,Z as c,c as f,d as p,e as _,b as t,g as w,n as g,h as y}from"./app-COb8vNo-.js";import{_ as x}from"./GuestLayout-B2RrhHUW.js";import{_ as b,a as k,b as h}from"./TextInput-cUJTAiKa.js";import{P as V}from"./PrimaryButton-BiWLH60O.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const v=t("div",{class:"mb-4 text-sm text-gray-600 dark:text-gray-400"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),B={key:0,class:"mb-4 font-medium text-sm text-green-600 dark:text-green-400"},N={class:"flex items-center justify-end mt-4"},T={__name:"ForgotPassword",props:{status:{type:String}},setup(o){const e=d({email:""}),m=()=>{e.post(route("password.email"))};return(P,r)=>(l(),u(x,null,{default:i(()=>[a(s(c),{title:"Forgot Password"}),v,o.status?(l(),f("div",B,p(o.status),1)):_("",!0),t("form",{onSubmit:y(m,["prevent"])},[t("div",null,[a(b,{for:"email",value:"Email"}),a(k,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":r[0]||(r[0]=n=>s(e).email=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),a(h,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),t("div",N,[a(V,{class:g({"opacity-25":s(e).processing}),disabled:s(e).processing},{default:i(()=>[w(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],32)]),_:1}))}};export{T as default};
