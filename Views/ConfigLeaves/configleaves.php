<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/allusers.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Configure Leaves</h4>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="table" style="overflow-x:auto;">


                    <table>
                        <tr>
                            <th>Leave Type</th>
                            <th>No. of leaves</th>

                        </tr>
                        <tr>
                            <td>Annual</td>
                            <td><input style="border-radius: 10px" disabled class="td-value" value="XX"></td>
                        </tr>
                        <tr>
                            <td>Casual</td>
                            <td><input style="border-radius: 10px" disabled class="td-value" value="XX"></td>
                        </tr>
                        <tr>
                            <td>No-pay</td>
                            <td><input style="border-radius: 10px" disabled class="td-value" value="XX"></td>
                        </tr>
                        <tr>
                            <td>Maternity</td>
                            <td><input style="border-radius: 10px" disabled class="td-value" value="XX"></td>
                        </tr>
                        <tr>
                            <td>Mandatory no pay</td>
                            <td><input style="border-radius: 10px" disabled class="td-value" value="XX"></td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-lg-3">
                <br><br><br>
                <select class="form-select" aria-label="Default select example" style="width: 100%">
                    <option selected>Select pay grade</option>
                    <option value="annual">HR Manager</option>
                    <option value="casual">Second Manager</option>
                    <option value="maternity">General Employee</option>
                </select>
            </div>



        </div>
        <br>
        <button class="btn btn-outline-primary" onclick="myFunction()" type="button">Edit</button>
    </div>
</div>

<script>
    function myFunction() {
        document.querySelectorAll(".td-value").forEach(looping);
        if (document.querySelector(".btn-outline-primary").innerHTML === "Edit"){
            document.querySelector(".btn-outline-primary").innerHTML = "Done";
        }else {
            document.querySelector(".btn-outline-primary").innerHTML = "Edit";
        }
        function looping(tdValue){
            tdValue.toggleAttribute("disabled");
        }
    }
</script>