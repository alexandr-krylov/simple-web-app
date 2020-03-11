(function(){
    document.querySelector('form').onsubmit = function(){
        let departmentChecks = document.querySelectorAll(
            'input[data-control="department-check"]:checked'
            );
        if (departmentChecks.length === 0) {
            alert("require to select department");
            return false;
        }
    };
})();