/* CURSOR */
const cur=document.getElementById('cur'),curR=document.getElementById('curR');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY});
(function tick(){
  rx+=(mx-rx)*.18; ry+=(my-ry)*.18;
  cur.style.cssText=`left:${mx}px;top:${my}px`;
  curR.style.cssText=`left:${rx}px;top:${ry}px`;
  requestAnimationFrame(tick);
})();
document.querySelectorAll('a,button,.pc,.chip,.soft-item,.c-link,.tl-item').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.classList.add('h');curR.classList.add('h')});
  el.addEventListener('mouseleave',()=>{cur.classList.remove('h');curR.classList.remove('h')});
});

/* NAV SCROLL */
const nav=document.getElementById('nav'),btt=document.getElementById('btt');
window.addEventListener('scroll',()=>{
  nav.classList.toggle('stuck',scrollY>60);
  btt.classList.toggle('show',scrollY>400);
},{passive:true});

/* REVEAL ANIMATION */
const observer=new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('reveal');
    }
  });
},{threshold:0.1});
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));

/* FORM SUBMIT */
function sendMsg(e){
  e.preventDefault();
  const btn=document.getElementById('cfBtn'),txt=document.getElementById('cfTxt'),ok=document.getElementById('cfOk');
  btn.disabled=true; txt.textContent='Envoi en cours...';
  setTimeout(()=>{txt.textContent='✅ Message envoyé !'; ok.style.display='block';},1000);
}

/* MOBILE NAV */
document.getElementById('burger').addEventListener('click',()=>{
  document.getElementById('navMob').classList.add('open');
});
document.getElementById('navMobX').addEventListener('click',()=>{
  document.getElementById('navMob').classList.remove('open');
});
document.querySelectorAll('#navMob a').forEach(a=>{
  a.addEventListener('click',()=>{
    document.getElementById('navMob').classList.remove('open');
  });
});

/* BACK TO TOP */
document.getElementById('btt').addEventListener('click',()=>{
  window.scrollTo({top:0,behavior:'smooth'});
});