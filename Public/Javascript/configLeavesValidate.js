const editBtn = document.getElementById('edit_btn');
const saveBtn = document.getElementById('save_btn');

function showHide() {
    editBtn.hidden = true;
    saveBtn.hidden = false;
    document.querySelectorAll(".td-value").forEach(looping);
}

function looping(tdValue) {
    tdValue.toggleAttribute("disabled");
}