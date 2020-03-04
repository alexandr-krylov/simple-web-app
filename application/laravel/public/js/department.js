(
function(){
    console.log('department');
    var deleteButtons
        = document.querySelectorAll('[data-purpose="delete-department"]');
    console.log(deleteButtons);
    deleteButtons.forEach(function(button){
        button.onclick = function(){
            var xhr = new XMLHttpRequest();
            
        };
        console.log(button);
    });
}
)();