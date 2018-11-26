console.log('running carrosel.js');

let pic_list = document.querySelectorAll('.carrosel img');
console.log(pic_list);

let pic_item = 0;
let lista = pic_list.length-1;

function pic_change(){
  for(let i = 0; i<=lista; i++){
    pic_list[i].className = 'pic';
  }
  pic_list[pic_item].className = 'pic_up';
};

pic_change();

document.getElementById('up').addEventListener('click',function(){
  pic_item++;
  if(pic_item>lista){
    pic_item=0;
  }
  console.log('up');
  pic_change();
});

document.getElementById('down').addEventListener('click',function(){
  pic_item--;
  if(pic_item<0){
    pic_item=lista;
  }
  console.log('down');
  pic_change();
});

let timer = setInterval(function(){
  pic_item++;
  if(pic_item>lista){
    pic_item=0;
  }
  console.log('interval change');
  pic_change();
},15000);
