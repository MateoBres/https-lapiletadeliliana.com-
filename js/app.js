
//Menu button responsive animation

let menu = document.querySelector(".material-icons")
let drawer = document.querySelector("#drawer")
let loader = document.querySelector("img")

menu.addEventListener("click",function(e){
if (drawer.style.left) {
    drawer.style.left = ''
}else{
    drawer.style.left = '0px'
    drawer.style.height= '100%'
    drawer.style.zIndex= '102'
    drawer.style.color =' red'
    drawer.style.backgroundColor = '#4e89ae'
    drawer.style.padding='10px'
    drawer.style.justifyContent = 'space-around'
    }
})


