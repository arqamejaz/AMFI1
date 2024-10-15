import{aN as e,aO as a,aP as o}from"./app-DyNvxuMG.js";import{c as i}from"./index--RinV-ea.js";import"./eth_sendRawTransaction-DPdnXbFR.js";const c=`Ethereum Signed Message:
`;function y(r,n){const t=typeof r=="string"?e(r):r.raw instanceof Uint8Array?r.raw:a(r.raw),s=e(`${c}${t.length}`);return o(i([s,t]),n)}export{y as hashMessage};
