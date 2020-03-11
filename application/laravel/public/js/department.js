(
function(){
    let deleteButtons
        = document.querySelectorAll('[data-purpose="delete-department"]');
    deleteButtons.forEach(function(button){
        let departmentId = button.getAttribute('data-department-id');
        button.onclick = function(){
            let xhr = new XMLHttpRequest();
            xhr.open('delete', '/department/delete');
            xhr.setRequestHeader(
                'Content-Type', 'application/x-www-form-urlencoded'
                );
            xhr.onreadystatechange = function(){
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        let result = JSON.parse(xhr.responseText);
                        if (result.success === true) {
                            let row = document.getElementById("row-" + departmentId);
                            row.remove();
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
    });
}
)();