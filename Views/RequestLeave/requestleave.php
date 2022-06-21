<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/request.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Request Leave</h4>
        </div>
        
        <form method="POST" action="<?= WEBROOT . 'requestleave' ?>">

            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label" for="leave_type">Leave Type</label>
                    <select class="form-select" id="leave_type" name="leave_type" aria-label="Default select example">
                        <option selected>Select leave type...</option>
                        <option value="1">Annual</option>
                        <option value="2">Casual</option>
                        <option value="3">Maternity</option>
                        <option value="4">No-pay</option>
                    </select>
                </div>

                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="no_of_days">No. of Days</label>
                    <input type="text" id="no_of_days" name="no_of_days" class="form-control" placeholder="No. of Days" />
                </div>
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="leave_date">Leave Date</label>
                    <input type="date" id="leave_date" name="leave_date" class="form-control" placeholder="" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="return_date">Return Date</label>
                    <input type="date" id="return_date" name="return_date" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="reason">Reason</label>
                <textarea class="form-control" id="reason" name="reason" placeholder="Enter a reason for the leave"></textarea>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" name="submit" type="submit">Request</button>
            </div>
        </form>
    </div>
</div>