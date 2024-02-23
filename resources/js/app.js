import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
const deleteButtons = document.querySelectorAll(".btn-danger");

deleteButtons.forEach((button) => {
    button.addEventListener("click", function(){
        let project_id = button.getAttribute("data-carid");
        

        let url = `${window.location.origin}/admin/cars/${car}`;

        let form_delete = document.getElementById("form_delete");

        form_delete.setAttribute("action", url)
        


    })
})
