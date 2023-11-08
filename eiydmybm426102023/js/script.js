var radios = document.getElementsByName("type");
var isChecked = false;

for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
        isChecked = true;
        break;
    }
}

if (!isChecked) {
    
    document.getElementById('pageLabel').style.display = 'none'; 
    document.getElementById('page').style.display = 'none'; 
    document.getElementById('volumeLabel').style.display = 'none'; 
    document.getElementById('volume').style.display = 'none'; 
}

document.getElementById('cd').addEventListener('change', function() {
     
    document.getElementById('pageLabel').style.display = 'none'; 
    document.getElementById('page').style.display = 'none'; 
    document.getElementById('volumeLabel').style.display = 'block'; 
    document.getElementById('volume').style.display = 'block'; 
});

document.getElementById('book').addEventListener('change', function() {
    
    document.getElementById('pageLabel').style.display = 'block'; 
    document.getElementById('page').style.display = 'block'; 
    document.getElementById('volumeLabel').style.display = 'none'; 
    document.getElementById('volume').style.display = 'none'; 
});