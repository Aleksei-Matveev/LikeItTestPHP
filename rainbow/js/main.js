const colorsBlocks = document.querySelectorAll('.item');
const result = document.querySelector('#result');
if(colorsBlocks){
    colorsBlocks.forEach((el)=>{
        el.addEventListener('click',(item)=>{
            if(result){
                result.innerText = `Выбранный квадрат окрашен в : ${item.target.dataset.name}`;
            }
        })
    });
}