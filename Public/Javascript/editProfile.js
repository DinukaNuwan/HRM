const editBtn = document.getElementById('edit-btn');
const saveBtn = document.getElementById('save-btn');

function showHide() {
    editBtn.hidden = true;
    saveBtn.hidden = false;
    document.querySelectorAll(".td-value").forEach(looping);
}

function looping(tdValue) {
    tdValue.toggleAttribute("disabled");
}