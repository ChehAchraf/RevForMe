document.getElementById('sub').addEventListener('click', function(e){
    e.preventDefault();
    document.getElementById('modal').style.display = "flex";
    document.getElementById('first_name').value = document.getElementById('name_for_resrev').value
})
document.getElementById('clsmodal').addEventListener('click', function(e){
    e.preventDefault();
    document.getElementById('modal').style.display = "none"

})  
document.getElementById('delete').addEventListener('click', function(){
    alert('working')
})