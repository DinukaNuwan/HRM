<div class="container">
    <div class="wrapper">

        <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button" role="tab" aria-controls="nav-pending" aria-selected="true">Pending</button>
                <button class="nav-link" id="nav-accepted-tab" data-bs-toggle="tab" data-bs-target="#nav-accepted" type="button" role="tab" aria-controls="nav-accepted" aria-selected="false">Accepted</button>
                <button class="nav-link" id="nav-rejected-tab" data-bs-toggle="tab" data-bs-target="#nav-rejected" type="button" role="tab" aria-controls="nav-rejected" aria-selected="false">Rejected</button>
            </div>
        </nav>


        <div class="tab-content" id="nav-tabContent">
            <!-- Pending -->
            <div class="tab-pane fade show active" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">

                <div id="aspect-content">
                    <!-- for loop for pending reqs -->
                    <div class="aspect-tab ">
                        <input id="item-1" type="checkbox" class="aspect-input" name="aspect">
                        <label for="item-1" class="aspect-label"></label>
                        <div class="aspect-content">
                            <div class="aspect-info">
                                <span class="aspect-name">
                                    <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                        </div>
                                        <div class="name-block">
                                            <div class="d-flex flex-row">
                                                <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aspect-tab-content">
                            <div class="sentiment-wrapper">
                                <!-- content -->
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="aspect-tab ">
                        <input id="item-2" type="checkbox" class="aspect-input" name="aspect">
                        <label for="item-2" class="aspect-label"></label>
                        <div class="aspect-content">
                            <div class="aspect-info">
                                <span class="aspect-name">
                                    <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                        </div>
                                        <div class="name-block">
                                            <div class="d-flex flex-row">
                                                <span class="name">&nbsp;&nbsp;2 Name of the employee</span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aspect-tab-content">
                            <div class="sentiment-wrapper">
                                <!-- content -->
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="aspect-tab ">
                        <input id="item-3" type="checkbox" class="aspect-input" name="aspect">
                        <label for="item-3" class="aspect-label"></label>
                        <div class="aspect-content">
                            <div class="aspect-info">
                                <span class="aspect-name">
                                    <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                        </div>
                                        <div class="name-block">
                                            <div class="d-flex flex-row">
                                                <span class="name">&nbsp;&nbsp;3 Name of the employee</span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aspect-tab-content">
                            <div class="sentiment-wrapper">
                                <!-- content -->
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Accepted -->
            <div class="tab-pane fade" id="nav-accepted" role="tabpanel" aria-labelledby="nav-accepted-tab">

                <div id="aspect-content">
                    <!-- for loop for accepted reqs -->
                    <div class="aspect-tab ">
                        <input id="item-4" type="checkbox" class="aspect-input" name="aspect">
                        <label for="item-4" class="aspect-label"></label>
                        <div class="aspect-content">
                            <div class="aspect-info">
                                <span class="aspect-name">
                                    <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                        </div>
                                        <div class="name-block">
                                            <div class="d-flex flex-row">
                                                <span class="name">&nbsp;&nbsp;4 Name of the employee</span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aspect-tab-content">
                            <div class="sentiment-wrapper">
                                <!-- content -->
                                <div class="row">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="aspect-tab ">
                        <input id="item-5" type="checkbox" class="aspect-input" name="aspect">
                        <label for="item-5" class="aspect-label"></label>
                        <div class="aspect-content">
                            <div class="aspect-info">
                                <span class="aspect-name">
                                    <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                        </div>
                                        <div class="name-block">
                                            <div class="d-flex flex-row">
                                                <span class="name">&nbsp;&nbsp;5 Name of the employee</span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aspect-tab-content">
                            <div class="sentiment-wrapper">
                                <!-- content -->
                                <div class="row">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Rejected -->
            <div class="tab-pane fade" id="nav-rejected" role="tabpanel" aria-labelledby="nav-rejected-tab">

                <div id="aspect-content">
                    <!-- for loop for rejected reqs -->
                    <div class="aspect-tab ">
                        <input id="item-6" type="checkbox" class="aspect-input" name="aspect">
                        <label for="item-6" class="aspect-label"></label>
                        <div class="aspect-content">
                            <div class="aspect-info">
                                <span class="aspect-name">
                                    <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                        </div>
                                        <div class="name-block">
                                            <div class="d-flex flex-row">
                                                <span class="name">&nbsp;&nbsp;6 Name of the employee</span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aspect-tab-content">
                            <div class="sentiment-wrapper">
                                <!-- content -->
                                <div class="row">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="aspect-tab ">
                        <input id="item-7" type="checkbox" class="aspect-input" name="aspect">
                        <label for="item-7" class="aspect-label"></label>
                        <div class="aspect-content">
                            <div class="aspect-info">
                                <span class="aspect-name">
                                    <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                        </div>
                                        <div class="name-block">
                                            <div class="d-flex flex-row">
                                                <span class="name">&nbsp;&nbsp;7 Name of the employee</span>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aspect-tab-content">
                            <div class="sentiment-wrapper">
                                <!-- content -->
                                <div class="row">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- sample for the loop -->
<!-- <div class="aspect-tab ">
    <input id="item-1" type="checkbox" class="aspect-input" name="aspect">
    <label for="item-1" class="aspect-label"></label>
    <div class="aspect-content">
        <div class="aspect-info">
            <span class="aspect-name">
                <div class="second d-flex flex-row mt-2">
                    <div class="image mr-3">
                        <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                    </div>
                    <div class="name-block">
                        <div class="d-flex flex-row">
                            <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                        </div>
                        <div class="d-flex flex-row">
                            <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                        </div>
                    </div>
                </div>
            </span>
        </div>
    </div>
    <div class="aspect-tab-content">
        <div class="sentiment-wrapper">
            <div class="row">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <p class="data-title">Leave Type :
                                <span class="data">&nbsp;No-Pay</span>
                            </p>
                            <p class="data-title">No. of Days :
                                <span class="data">&nbsp;2</span>
                            </p>
                            <p class="data-title">Leave Date :
                                <span class="data">&nbsp;01/07/2022</span>
                            </p>
                            <p class="data-title">Return Date :
                                <span class="data">&nbsp;03/07/2022</span>
                            </p>
                            <p class="data-title">Reason for the leave:
                                <span class="data">&nbsp;reason</span>
                            </p>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="reason">Reason</label>
                                <textarea class="form-control" id="reason" name="reason" placeholder="Tytpe something here"></textarea>
                            </div>

                            <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn btn-success" type="button">Accept</button>
                                <button class="btn btn-danger" type="button">Reject</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->