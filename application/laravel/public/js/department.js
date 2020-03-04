(
function(){
    console.log('department');
    var deleteButtons
        = document.querySelectorAll('[data-purpose="delete-department"]');
    console.log(deleteButtons);
    deleteButtons.forEach(function(button){
        var departmentId = button.getAttribute('data-department-id');
        button.onclick = function(){
            var xhr = new XMLHttpRequest();
            xhr.open('delete', '/department/delete');
            xhr.setRequestHeader(
                'Content-Type', 'application/x-www-form-urlencoded'
                );
            xhr.onreadystatechange = function(){
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var result = JSON.parse(xhr.responseText);
                        console.log(result);
                        if (result.success) {
                            var row = document.getElementById("row-" + departmentId);
                            row.remove;
                        }
                    } else {
                            alert("Error happend");
                    }
                }
            };
            xhr.send(
                'id=' + departmentId +
                '&_token=' +
                document.querySelector('meta[name="_token"]')
                .getAttribute('content'));
        };
        console.log(button);
    });
}
)();