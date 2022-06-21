<?php
    $tomorrow = date('Y-m-d',strtotime("+1 days"));
    $dayAfterTomorrow = date('Y-m-d',strtotime("+2 days"));
?>

<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/request.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Request Leave</h4>
        </div>

        <form action="#" method="POST" id="form" class="form" onsubmit="return checkInputs()">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="leave_type">Leave Type</label>
                        <select class="form-select" id="leave_type" name="leave_type" aria-label="Default select example">
                            <option value="">Select leave type...</option>
                            <option value="annual">Annual</option>
                            <option value="casual">Casual</option>
                            <option value="maternity">Maternity</option>
                            <option value="no_pay">No-pay</option>
                        </select>
                        <small>Error message</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="leave_date">Leave Date</label>
                        <input type="date" id="leave_date" name="leave_date" class="form-control" min=<?= strval($tomorrow) ?> >
                        <small>Error message</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="return_date">Return Date</label>
                        <input type="date" id="return_date" name="return_date" class="form-control" min=<?= strval($dayAfterTomorrow) ?> >
                        <small>Error message</small>
                    </div>
                </div>
            </div>

            <div class="form-control form-outline form-input">
                <label class="form-label" for="reason">Reason</label>
                <textarea class="form-control" id="reason" name="reason" placeholder="Enter a reason for the leave"></textarea>
                <small>Error message</small>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" name="submit" type="submit">Request</button>
            </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/requestLeaveValidate.js" />

    </div>
</div>